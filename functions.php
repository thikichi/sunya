<?php

// クラスファイル
require_once locate_template('class/ClassOption.php');
require_once locate_template('class/ClassFormValue.php');
require_once locate_template('class/ClassHtml.php');

$option = new ClassOption();
$form_value = new ClassFormValue();
$html = new ClassHtml();

// $option->delete_options(); // option削除

// $init_value = array(
//   'cpt' => array(
//     'news' => array(
//       'label' => '新着情報',
//       'slug'  => 'news',
//       'supports' => array('title','editor','thumbnail','revisions'),
//     ),
//   )
// );

$sample_page = get_page_by_path("sample-page");
$form_element = array(
  'cpt' => array(
    'news' => array(
      'disp'  => array(
        'type'=>'radio','default'=>'1','items'=>array(
          array('label'=>'表示する','value'=>'1'),
          array('label'=>'表示しない','value'=>'0'),
        )
      ),
      'label' => array('type'=>'text','label'=>'タイトル','default'=>'新着情報'),
      'slug'  => array('type'=>'text','label'=>'スラッグ','default'=>'news'),
      'supports' => array(
        'type'=>'checkbox','default'=>array('title'),'items'=>array(
          array('label'=>'タイトル','value'=>'title'),
          array('label'=>'エディタ','value'=>'editor'),
        ),
      ),
    ),
  ),
  'tpl' => array(
    'undefined' => array(
      'block-001'=>'ブロック01',
      'block-002'=>'ブロック02',
      'block-003'=>'ブロック03',
    ),
    $sample_page->ID => array(
      'block-004'=>'ブロック04',
      'block-005'=>'ブロック05',
      'block-006'=>'ブロック06',
    ),
  ),
);

// オプション初期値をセット
$form_value->set_news_item( 'label', 'text', 'ラベル名', 'タイトル' );
$form_value->set_news_item( 'slug', 'text', 'スラッグ', 'news' );
$form_value->set_news_item( 'disp', 'radio', '新着表示ON/OFF', '1', 
  array( array('label'=>'表示する','value'=>'1'), array('label'=>'表示しない','value'=>'0') ) );
$form_value->set_news_item( 'supports', 'checkbox', 'サポート', array('title'), 
  array( array('label'=>'タイトル','value'=>'title'), array('label'=>'エディタ','value'=>'editor') ) );

// コンポーネントの初期値をセット
$form_value->set_component( 'undefined', 
  array('block-001'=>'ブロック01','block-002'=>'ブロック02','block-003'=>'ブロック03'));
$form_value->set_component( 'sample-page', 
  array('block-004'=>'ブロック04','block-005'=>'ブロック05','block-006'=>'ブロック06'));

// $form_element = $form_value->get_all_data();


// $label = $form_value->get_news_item( 'disp' );
// var_dump($label);

$init_value = array();
foreach ($form_element['cpt']['news'] as $key => $value) {
  if( $value['type'] = 'text' ) {
    $init_value['cpt']['news'][$key] = $value['default'];
  } else if( $value['type'] = 'checkbox' ) {
    $init_value['cpt']['news'][$key][] = $value['default'];
  }
}




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



