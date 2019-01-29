<?php
/*
* 管理画面のナビゲーション
*/
function admin_menu_theme_settings() {
  // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
  add_menu_page( 'フレーム設定', 'フレーム設定', 'administrator', 'theme_settings', 'theme_editor_form','', 6 );
}
add_action('admin_menu', 'admin_menu_theme_settings');