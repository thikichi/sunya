<?php
/*
* 管理画面タブコンテンツ
*/
class ClassHtml {

	// protected $option;

	function __construct() {
		// $this->option = get_option( $this->option_name );
	}

	/*
	 * 初期値の設定
	*/
	public function get_radio_tag( $elems, $default_vals, $option_vals=null ) {
		$checked_arr = isset($option_vals) ? $option_vals : $default_vals;
		$tag = '<div class="radio-wrapper">';
		foreach ($elems as $elem) {
	    $tag = '<label>';
	    $tag = '<input type="radio" name="' . $elem['name'] . '" value="' . $elem['value'] . '" checked="">';
	    $tag = $elem['label'];
	    $tag = '</label>';
		}
		$tag = '</div>';
		return $tag;
	}

}
?>