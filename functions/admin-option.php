<?php
/*
* 管理画面のナビゲーション
*/
function init_update_options() {
  // オプションを設定
  $option_val = array('temp1key' => 'temp1vaule', 'temp2key' => 'temp2vaule', 'temp3key' => 'temp3vaule');
  update_option( 'sunya_options', $option_val );

  // オプションを取得
  if( $sunya_options = get_option( 'sunya_options' ) ) {

    // ob_start();
    // var_dump($sunya_options);
    // $out = ob_get_contents();
    // ob_end_clean();
    // file_put_contents(dirname(__FILE__) . '/test.txt', $out);
  }
}
add_action( 'init', 'init_update_options');