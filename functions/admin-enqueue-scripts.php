<?php
/*
 * 管理画面に各種スクリプトを読み込む
*/
function sunya_admin_enqueue_scripts() {

  wp_enqueue_script( 'jquery' );
  // wp_enqueue_script( 'my_admin_jscolor', $this->dir . 'js/jscolor.min.js' );
  // // jQuery のコードだった場合
  // wp_enqueue_script( 'admin-jquery', $this->dir .'js/admin-jquery.js', array('jquery'));
  // date picker
  wp_enqueue_script('jquery-ui-datepicker');
  // accordion
  wp_enqueue_script('jquery-ui-accordion');
  // jquery-ui-tabs
  wp_enqueue_script('jquery-ui-tabs', array('jquery'), '3.0.3');
  // jquery-ui-tooltip
  wp_enqueue_script('jquery-ui-tooltip');
  // jquery-ui-tooltip
  wp_enqueue_script('jquery-ui-sortable');
  // color picker
  wp_enqueue_script('wp-color-picker');

  // 標準実装のカラーピッカーを読み込む
  wp_enqueue_style( 'wp-color-picker' );
  // jQuery UIのスタイルを使えるようにする
  wp_enqueue_style( 'jquery-ui-google', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/redmond/jquery-ui.css' );
  // メディアアップローダの javascript API
  wp_enqueue_media();
  // 管理画面の共通CSS
  wp_enqueue_style( 'my_admin_style', get_template_directory_uri() . '/css/my-admin-style.css', array(), '1.0' );
}
add_action( 'admin_enqueue_scripts', 'sunya_admin_enqueue_scripts' );