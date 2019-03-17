<?php
/*
* 管理画面のナビゲーション
*/
function init_update_options() {
  // オプションを設定
  // delete_option( 'sunya_options' );
  global $sunya_options;

  // $default_options = array(
  //   'tpl' => array(
  //     'undefined' => array(
  //       'block-001' => array('checked'=>true),
  //       'block-002' => array('checked'=>false),
  //       'block-003' => array('checked'=>false),
  //       'block-004' => array('checked'=>false),
  //       'block-005' => array('checked'=>true),
  //       'block-006' => array('checked'=>true),
  //       'block-007' => array('checked'=>false),
  //       'block-008' => array('checked'=>true),
  //       'block-010' => array('checked'=>true),
  //       'block-011' => array('checked'=>true),
  //       'block-012' => array('checked'=>false),
  //       'block-013' => array('checked'=>true),
  //       'block-014' => array('checked'=>false),
  //     ),
  //   ),
  // );
  // $sunya_options = get_option( 'sunya_options', $default_options );
  
  if(isset($_POST['my-option']) && $_POST['my-option']) {
    if(check_admin_referer('my-nonce-key', 'my-option')) {
      // 実際の保存処理
      if(isset($_POST['sunya_options']) && $_POST['sunya_options']) {
        update_option('sunya_options', $_POST['sunya_options']);
      } else {
        update_option('sunya_options', '');
      }
      wp_safe_redirect(menu_page_url('theme_settings', false));
    }
  }

  // オプションを取得
  // if( $sunya_options = get_option( 'sunya_options' ) ) {
  // }
}
// add_action( 'admin_init', 'init_update_options');

// function sunya_admin_init_update_option() {

// }
// add_action('admin_init', 'sunya_admin_init_update_option');