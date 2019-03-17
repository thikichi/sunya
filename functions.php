<?php
// カスタムフィールドを自由に作成できるクラスライブラリを利用
function cmb_initialize_cmb_meta_boxes() {
  if(!class_exists('cmb_Meta_Box')) require_once dirname(__FILE__) . '/' . 'lib/metabox/init.php';
}
add_action('init', 'cmb_initialize_cmb_meta_boxes', 9999);
// 管理画面への各種スクリプトの読み込み
require_once locate_template('functions/admin-enqueue-scripts.php');
// 管理画面のナビゲーション
require_once locate_template('functions/admin-navigation.php');
// テーマ設定・操作画面
require_once locate_template('functions/admin-editor-form.php');
// オプション取得・設定
require_once locate_template('functions/function-admin-option.php');
// カスタム投稿
require_once locate_template('functions/function-custom-post-type.php');
// カスタムフィールド
require_once locate_template('functions/custom-field-metabox.php');
// アクションフック
require_once locate_template('functions/action-hook.php');

//アイキャッチ画像
add_theme_support( 'post-thumbnails' );



