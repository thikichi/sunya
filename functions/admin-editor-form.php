<?php
/*
 * 管理画面のHTMLを出力
*/
function theme_editor_form(){
  // オプションの値を取得
  // $option = $ofm->get_content();
  // タブ「各種設定」のYES/NOタイプのオプション名を指定
  ?>
  <div class="wrap">
    <h2>テーマ設定</h2>
    <form id="my-option-form" method="post" action="">
      <?php // wp_nonce_field('my-nonce-key', 'my-option'); ?>
      <!-- Tabs -->
      <?php
      /*
       * 各ページ共通の設定を読み込む
      */
      ?>
      <h2 class="demoHeaders">各ページ共通設定</h2>
      <p>
        <input type="submit" value="<?php echo esc_attr('save'); ?>" class="button button-primary button-large">
      </p>
    </form>
  </div>


<div id="tabs">
<ul>
  <li><a href="#tabs-1">基本設定</a></li>
  <li><a href="#tabs-2">コンポーネント配置</a></li>
  <li><a href="#tabs-3">新着投稿のスタイル</a></li>
  <li><a href="#tabs-4">マスター情報</a></li>
</ul>
<div id="tabs-1">
  <p>１つめのタブの内容を記載します。<br />
  一番外側のdivタグできちんと囲うことがポイントです。
  </p>
</div>
<div id="tabs-2">
  <p>２つめのタブの内容を記載します。<br />
  タブの部分は ul タグで実装します。
  </p>
 
<?php
// get pages
$get_posts = get_posts( array( 'post_type'=>'page', 'numberposts'=>-1 ) );
?>

<ui class="sortable-1">
  <?php foreach ($get_posts as $get_post): ?>
    <li class="sortable-1-item">
      <h3 class="sunya-ttl-1"><?php echo $get_post->post_title; ?></h3>
      <ul class="sortable-2">
        <li class="ui-state-default border-color-red">項目 1-1</li>
        <li class="ui-state-default border-color-red">項目 1-2</li>
        <li class="ui-state-default border-color-red">項目 1-3</li>
        <li class="ui-state-default border-color-red">項目 1-4</li>
        <li class="ui-state-default border-color-red">項目 1-5</li>
        <li class="ui-state-default border-color-red">項目 1-6</li>
        <li class="ui-state-default border-color-red">項目 1-7</li>
      </ul>
    </li>
  <?php endforeach; ?>
</ui>
<div style="clear: both;"></div>

<script>
// http://alphasis.info/2011/06/sortable-2-connectwith/
jQuery(function($) {
$( function() {
  $( '.sortable-1' ) . sortable();
  $( '.sortable-1' ) . disableSelection();
  $( '.sortable-2' ) . sortable( {
      connectWith: '.sortable-2'
  } );
  $( '.sortable-2' ) . disableSelection();
} );
});
</script>
<style>
ul.sortable-1 {
  background-color: beige;
  border: solid 1px #606060;
}
.sortable-1-item {
  width: 25%;
  float: left;
  cursor: move;
}
li.border-color-red {
  border-color: red;
}
li.border-color-blue {
  border-color: blue;
}
li.border-color-green {
  border-color: green;
}
</style>


</div>
<div id="tabs-3">
  <p>新着投稿の設定</p>
  <p>
    ■ 新着投稿を表示する/しない<br>
    <input type="checkbox" name="news-disp" value="1" checked="checked">表示する
  </p>
  <p>
  ■ 新着情報のスタイルを決めます。<br>
  新着の一覧表示のスタイルと記事の詳細ページの２つのスタイルを指定します。
  </p>
  <p>→ 一覧ページのスタイル</p>
  <label>
    タイプ１
    <input type="radio" name="news-style-1" value="1">
  </label>
  <label>
    タイプ２
    <input type="radio" name="news-style-1" value="2">
  </label>
  <label>
    タイプ３
    <input type="radio" name="news-style-1" value="3">
  </label>
  <p>→ 詳細ページのスタイル</p>
  <label>
    タイプ１
    <input type="radio" name="news-style-1" value="1">
  </label>
  <label>
    タイプ２
    <input type="radio" name="news-style-1" value="2">
  </label>
  <label>
    タイプ３
    <input type="radio" name="news-style-1" value="3">
  </label>
  <p> ■ サポートする属性</p>
  <p>
  <input type="checkbox" name="news-attributes" value="1">アイキャッチ画像
  <input type="checkbox" name="news-attributes" value="2">ソーシャルアイコン
  <input type="checkbox" name="news-attributes" value="3">日付
  </p>
  <p> ■ 新着の固定ページへの割り当て</p>
  <p>
    新着情報を任意の固定ページに割り当てることができます。<br>
    割り当てる対象の固定ページを以下のリストから選択し、該当の固定ページの編集画面より以下のショートコードを貼り付けてください。
  </p>
  <p> ■ 新着のラベルとパスの設定</p>
  <p>
    新着情報のラベルを任意のものに変更できます。
    デフォルトは「新着情報」となります。
  </p>
  <p>
    <label>ラベル名：<input type="text" name="namae" size="40" maxlength="20" value="新着情報"></label><br>
    <label>スラッグ：<input type="text" name="namae" size="40" maxlength="20" value="news"></label>
  </p>
</div>
<div id="tabs-4">
  <p>マスター情報</p>
  <p>会社名や住所、電話番号などのウェブサイトへ記載する基本情報などを記入してください。<br>
  ここに記入したものは会社概要など基本情報を表示するエリアに自動で表示されます。</p>
</div>
</div>

<script>
jQuery(function($) {
  $(function() {
    $( "#tabs" ).tabs();
  });
});
</script>


<?php
}
