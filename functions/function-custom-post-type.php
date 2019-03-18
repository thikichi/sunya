<?php
function create_post_type() {

  global $option_defaults;
  global $sunya_options;

  $temp_arr = $option_defaults['cpt']['news'];
  foreach ($temp_arr as $key => $default) {
    $news[$key] = isset($sunya_options['cpt']['news'][$key]) && $sunya_options['cpt']['news'][$key]!='' ? $sunya_options['cpt']['news'][$key] : $default;
  }

  // add custom post type
  if( $news['disp']==='1' ) {
    $cp_supports = array(
      'title',  // 記事タイトル
      'editor',  // 記事本文
      'thumbnail',  // アイキャッチ画像
      'revisions'  // リビジョン
    );
    register_post_type( $news['slug'],  // カスタム投稿名
      array(
        'label'  => $news['label'],
        'public' => true,
        'has_archive' => true,
        'menu_position' => 5,  // 管理画面上でどこに配置するか
        'supports' => $cp_supports  // 投稿画面でどのmoduleを使うか的な設定
      )
    );
  }

  // add taxonomy
  register_taxonomy(
    'news_category',
    'news',
    array(
      'label' => '新着カテゴリー',
      'labels' => array(
        'all_items' => 'カテゴリー一覧',
        'add_new_item' => '新規・カテゴリーを追加'
      ),
      'hierarchical' => true
    )
  );
}