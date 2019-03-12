<?php
$sunya_options = get_option( 'sunya_options' );

function init_sunya_function() {

  global $sunya_options;
  // 新着情報を実装
  create_post_type();




}
add_action( 'init', 'init_sunya_function' ); // アクションに上記関数をフックします