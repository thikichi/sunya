<?php
/*
* 管理画面のナビゲーション
*/
function init_update_options() {
  // オプションを設定


  // delete_option( 'sunya_options' );

  $default_options = array(
    'tpl' => array(
      'undefined' => array(
        'block-001' => array('checked'=>true),
        'block-002' => array('checked'=>false),
        'block-003' => array('checked'=>false),
        'block-004' => array('checked'=>false),
        'block-005' => array('checked'=>true),
        'block-006' => array('checked'=>true),
        'block-007' => array('checked'=>false),
        'block-008' => array('checked'=>true),
        'block-010' => array('checked'=>true),
        'block-011' => array('checked'=>true),
        'block-012' => array('checked'=>false),
        'block-013' => array('checked'=>true),
        'block-014' => array('checked'=>false),
      ),
    ),
  );
  $sunya_options = get_option( 'sunya_options', $default_options );
  if( isset($_POST['sunya_options']) ) {
    update_option( 'sunya_options', $_POST['sunya_options'] );
  } else {
    update_option( 'sunya_options', $sunya_options );
  }

  // wp_safe_redirect( admin_url() );
  // exit;

  ob_start();
  var_dump( $sunya_options );
  $out = ob_get_contents();
  ob_end_clean();
  file_put_contents(dirname(__FILE__) . '/test.txt', $out);

  // オプションを取得
  // if( $sunya_options = get_option( 'sunya_options' ) ) {
  // }
}
add_action( 'init', 'init_update_options');

// function sunya_admin_init_update_option() {

// }
// add_action('admin_init', 'sunya_admin_init_update_option');