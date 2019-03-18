<?php
$sunya_options = get_option( 'sunya_options' );

/*
 * init
*/
function init_sunya_function() {

  global $sunya_options;
  // 新着情報を実装
  create_post_type();


}
add_action( 'init', 'init_sunya_function' );

/*
* admin_menu
*/
function admin_menu_sunya_function() {

  global $sunya_options;
  // 管理画面のナビゲーション
  add_menu_page( 'フレーム設定', 'フレーム設定', 'administrator', 'theme_settings', 'theme_editor_form','', 6 );

}
add_action('admin_menu', 'admin_menu_sunya_function');

/*
 * admin_init
*/
function admin_init_sunya_function() {

  global $sunya_options;
  // オプションを保存
  init_update_options();

}
add_action( 'admin_init', 'admin_init_sunya_function' );



