<?php

// クラスファイル
require_once locate_template('class/ClassOption.php');

$option = new ClassOption();
// $option->delete_options(); // option削除
$init_value = array(
  'cpt' => array(
    'news' => array(
      'label' => '新着情報',
      'slug'  => 'news',
      'supports' => array('title','editor','thumbnail','revisions'),
    ),
  )
);

$init_value_temp = array();
$form_element = array(
  'cpt' => array(
    'news' => array(
      'label' => array('type'=>'text','items'=>array('label'=>'タイトル','name'=>'label','value'=>'新着情報')),
      'slug'  => array('type'=>'text','items'=>array('label'=>'スラッグ','name'=>'slug','value'=>'news')),
      'supports' => array(
        'type'   => 'checkbox',
        'items'  => array( 
          array('label'=>'タイトル','name'=>'title','value'=>1),
          array('label'=>'タイトル','name'=>'editor','value'=>1),
          array('label'=>'タイトル','name'=>'thumbnail','value'=>1),
          array('label'=>'タイトル','name'=>'revisions','value'=>0),
        ),
      ),
    ),
  ),
);

foreach ($form_element['cpt']['news'] as $key => $value) {
  if( is_array($value) ) {
    foreach ($value as $key2 => $value2) {
      $init_value_temp['cpt']['news'][$key][] = $value2['value'];
    }
  } else {
    $init_value_temp['cpt']['news'][$key] = $value['items'][0]['value'];
  }
}
var_dump($init_value_temp);

$option->set_option( $init_value );
$option->init_option();

$sunya_options = $option->get_option();




// ob_start();
// var_dump($sunya_options);
// $out = ob_get_contents();
// ob_end_clean();
// file_put_contents(dirname(__FILE__) . '/test.txt', $out);

// $option_defaults = array(
//   'cpt' => array(
//     'news' => array(
//       'label' => '新着情報',
//       'slug'  => 'news',
//       'disp'  => '0',
//       'supports' => array(
//         array( 'name'=>'title', 'label'=>'タイトル', 'checked'=>true ),
//         array( 'name'=>'editor', 'label'=>'エディター', 'checked'=>true ),
//         array( 'name'=>'thumbnail', 'label'=>'アイキャッチ画像', 'checked'=>true ),
//         array( 'name'=>'revisions', 'label'=>'リビジョン', 'checked'=>false ),
//       ),
//     )
//   ),
// );

// $init_option_values = array(
//   'cpt' => array(
//     'news' => array(
//       'label' => '新着情報',
//       'slug'  => 'news',
//       'disp'  => '0',
//       'supports' => array(
//         'title','topics'
//       ),
//     )
//   ),
// );
// $option->delete_options();
// sunya_options[cpt][news][label]


// カスタムフィールドを自由に作成できるクラスライブラリを利用
// function cmb_initialize_cmb_meta_boxes() {
//   if(!class_exists('cmb_Meta_Box')) require_once dirname(__FILE__) . '/' . 'lib/metabox/init.php';
// }
// add_action('init', 'cmb_initialize_cmb_meta_boxes', 9999);
// 管理画面への各種スクリプトの読み込み


// 各種スクリプト等　読み込み
require_once locate_template('functions/admin-enqueue-scripts.php');
// テーマ設定・操作画面
require_once locate_template('functions/function-theme-editor-form.php');
// オプション取得・設定
require_once locate_template('functions/update_options.php');
// カスタム投稿
// require_once locate_template('functions/function-custom-post-type.php');
// カスタムフィールド
// require_once locate_template('functions/custom-field-metabox.php');
// アクションフック
require_once locate_template('functions/action-hook.php');

//アイキャッチ画像
add_theme_support( 'post-thumbnails' );



