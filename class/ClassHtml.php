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
	public function get_radio_tag( $elems, $name, $default_val, $option_val=null ) {
		$checked_val = isset($option_val) ? $option_val : $default_val;
		$tag = '<div class="radio-wrapper">';
		foreach ($elems as $elem) {
			$checked = $elem['value']===$checked_val ? ' checked' : '';
	    $tag .= '<label>';
	    $tag .= '<input type="radio" name="' . $name . '" value="' . $elem['value'] . '" ' . $checked . '>';
	    $tag .= $elem['label'];
	    $tag .= '</label>';
		}
		$tag .= '</div>';
		return $tag;
	}

}
?>