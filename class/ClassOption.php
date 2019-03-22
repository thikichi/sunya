<?php
/*
* 管理画面タブコンテンツ
*/
class ClassOption {

	protected $option;
	protected $option_name = 'sunya_options';
	protected $nonce_action     = 'my-nonce-key';
	protected $nonce_field_name = 'my-option';

	function __construct() {
		$this->option = get_option( $this->option_name );
	}

	/*
	 * オプションを取得
	*/
	public function get_option( $name='' ) {
		if( $name!='' ){
			return get_option( $name );
		} else {
			return get_option( $this->option );
		}
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
}
?>