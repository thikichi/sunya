<?php
/*
* 管理画面タブコンテンツ
*/
class OsFmBase {

	protected $option;
	protected $option_name = 'sunya_options';
	protected $contents;
	protected $contents_name;
	protected $theme_dir;
	protected $theme_uri;
	protected $dir;
	protected $op_replace_txt;
	protected $nonce_action     = 'my-nonce-key';
	protected $nonce_field_name = 'my-option';

	function __construct() {

		// プラグインのパス テーマ
		$this->set_option_value();
		$this->dir = get_template_directory_uri() . '/functions/os-framework-manager/';
		// テーマのディレクトリ
		$this->theme_dir = get_stylesheet_directory() . '/';
		$this->theme_uri = get_stylesheet_directory_uri() . '/';
	}

	public function set_option_value() {
		// オプション値を取得
		$this->option = get_option($this->option_name);
		// オプション値のなかのコンテンツ部分を取得
		$this->contents = $this->option['contents'];
	}

	/*
	 * コンテンツを取得
	*/
	public function get_content($name='') {
		if(isset($name) && $name){
			return $this->contents[$name];
		} else {
			return $this->contents;
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