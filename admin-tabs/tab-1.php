<!-- タブ：基本設定 -->

<h2 class="admintab-ttl">基本設定</h2>

<p>
  WordPress全体の基本設定を行います。<br>
 「かんたんテーマ設定」タブではボタンひとつで基本設定が完了します。<br>
  こまかくカスタマイズしたい場合は「高度な設定」タブより設定をすすめてください。
</p>

<div id="TabsTab1">
  <ul>
    <li><a href="#TabsTab1-1">かんたんテーマ設定</a></li>
    <li><a href="#TabsTab1-2">高度な設定</a></li>
  </ul>
  <div id="TabsTab1-1">
    <input type="button" name="" value="かんたんテーマ設定を行う">
  </div>
  <div id="TabsTab1-2">
    <h3 class="admintab-subttl">一般設定</h3>
    <p class="admintab-descrip">サイトのタイトルやサイトのキャッチフレーズを設定します。</p>
    <a href="<?php echo admin_url('options-general.php'); ?>" target="_blank">一般設定はこちら</a>

    <h3 class="admintab-subttl">表示設定</h3>
    <p class="admintab-descrip">トップページや投稿一覧を表示する「固定ページ」を選択したりできます。</p>
    <a href="<?php echo admin_url('options-general.php'); ?>" target="_blank">表示設定はこちら</a>

    <h3 class="admintab-subttl">パーマリンク設定</h3>
    <p class="admintab-descrip">URL部分の規則を決めます。</p>
    <a href="<?php echo admin_url('options-permalink.php'); ?>" target="_blank">パーマリンク設定はこちら</a>
  </div>
</div>
<script>
jQuery(function($) {
  $(function() {
    $( "#TabsTab1" ).tabs();
  });
});
</script>



