<?php
/*
* 管理画面タブコンテンツ
*/
class ClassOption {

	protected $option;
	protected $option_name = 'sunya_options';
	protected $nonce_action     = 'my-nonce-key';
	protected $nonce_field_name = 'my-option';
	protected $init_value;

	function __construct() {
		$this->option = get_option( $this->option_name );
	}

	/*
	 * 初期値の設定
	*/
	public function set_option( $init_value ) {
		return $this->init_value = $init_value;
	}

	/*
	 * オプションを取得
	*/
	public function get_option() {
		return $this->option;
	}

	public function init_option() {
		if( !$this->option && isset($this->init_value) ) {
			update_option( $this->option_name, $this->init_value );
		}
	}


	public function get_option_news( $key ) {
		return $this->option['cpt']['news'][$key];
	}

	/*
	 * オプションの保存
	*/
	public function save_options() {
		// nonceをチェック
		if(isset($_POST[$this->nonce_field_name]) && $_POST[$this->nonce_field_name]) {
			if(check_admin_referer($this->nonce_action, $this->nonce_field_name)) {
				// 実際の保存処理
				if(isset($_POST[$this->option_name]) && $_POST[$this->option_name]) {
					update_option($this->option_name, $_POST[$this->option_name]);
				} else {
					update_option($this->option_name, '');
				}
				wp_safe_redirect(menu_page_url('theme_settings', false));
			}
		}
	}

	/*
	 * オプションの破棄
	*/
	public function delete_options() {
		delete_option( $this->option_name );
	}
}
?>