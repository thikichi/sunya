<h2 class="admintab-ttl">新着・投稿の設定</h2>

<p>投稿と新着情報の設定を行います。</p>

<?php 
$temp_arr = array('label','disp','slug','supports');
$news = array();
foreach ($temp_arr as $suffix) {
  $news[$suffix] = isset($sunya_options['cpt']['news'][$suffix]) ? $sunya_options['cpt']['news'][$suffix] : '';
}
var_dump($sunya_options);
// サポートする属性
// if( isset($sunya_options['cpt']['news']['supports'])) {
//   foreach ($sunya_options['cpt']['news']['supports'] as $suffix => $val) {
//     $news['supports'][] = $suffix;
//   }
// }
?>

<div id="Tab3Child">
  <ul>
    <li><a href="#Tab3Child-1">新着情報</a></li>
    <li><a href="#Tab3Child-2">ブログ投稿</a></li>
  </ul>
  <div id="Tab3Child-1">
    <h3 class="admintab-subttl">新着情報を表示する</h3>
    <p class="admintab-descrip">「表示する」を選択した場合、管理画面に「新着情報」が表示されると同時に、サイト側に表示可能な「新着情報コンポーネント」が「フレーム設定」の「コンポーネント配置」より利用できるようになります。</p>
    <div class="admintab-formparts-wrapper">
      <?php if( isset($news['disp']) && $news['disp']==='1' ): ?>
        <label><input type="radio" name="sunya_options[cpt][news][disp]" value="1" checked>表示する</label>
        <label><input type="radio" name="sunya_options[cpt][news][disp]" value="0">表示しない</label>
      <?php else: ?>
        <label><input type="radio" name="sunya_options[cpt][news][disp]" value="1">表示する</label>
        <label><input type="radio" name="sunya_options[cpt][news][disp]" value="0" checked>表示しない</label>
      <?php endif; ?>
    </div>

    <h3 class="admintab-subttl">新着情報のラベル</h3>
    <p class="admintab-descrip">新着情報のラベルをデフォルトの「新着情報」から別のものに変更できます。</p>
    <div class="admintab-formparts-wrapper">
      <input type="text" name="sunya_options[cpt][news][label]" value="<?php echo esc_attr($news['label']); ?>">
    </div>

    <h3 class="admintab-subttl">新着情報のスラッグ</h3>
    <p class="admintab-descrip">新着情報のスラッグをデフォルトの「news」から別のものに変更できます。これによりURL部分のパスの名前が変わります。スラッグを変更した場合、既存の投稿は引き継がれないため注意してください。</p>
    <div class="admintab-formparts-wrapper">
      <input type="text" name="sunya_options[cpt][news][slug]" value="<?php echo esc_attr($news['slug']); ?>">
    </div>

    <h3 class="admintab-subttl">サポートする属性</h3>
    <p class="admintab-descrip">新着情報でサポートする属性（タイトルやアイキャッチ画像などの部品）を選択・表示することができます。</p>
    <div class="admintab-formparts-wrapper">
      <?php
      // デフォルト値
      $supports = $option_defaults['cpt']['news']['supports'];
      ?>
      <?php
      foreach ($supports as $item) {
        if( $news['supports'] ) {
          $checked = in_array($item['name'], $news['supports']) ? ' checked' : '';
        } else {
          $checked = $item['checked'] ? ' checked' : '';
        }
        echo '<label>';
        echo '<input type="checkbox" name="sunya_options[cpt][news][supports][]" value="' . $item['name'] . '"' . $checked . '>';
        echo esc_html($item['label']);
        echo '</label>';
      }
      ?>
    </div>

    <h3 class="admintab-subttl">アーカイブにおける全体レイアウト</h3>
    <p class="admintab-descrip">一覧ページにおけるカラム数やサイドバーの有無などを設定します。</p>

    <h3 class="admintab-subttl">アーカイブにおける投稿部分のレイアウト</h3>
    <p class="admintab-descrip">一覧ページにおける投稿記事のデザインパターンを選択します。</p>

  </div>

  <div id="Tab3Child-2">
    ブログ投稿
  </div>
<script>
jQuery(function($) {
  $(function() {
    $( "#Tab3Child" ).tabs();
  });
});
</script>