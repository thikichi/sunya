<?php
/*
 * 管理画面のHTMLを出力
*/
function theme_editor_form(){
  // オプションの値を取得
  // $option = $ofm->get_content();
  // タブ「各種設定」のYES/NOタイプのオプション名を指定
  ?>

  <?php
  global $sunya_options;
  global $option_defaults;
  ?>

  <div class="wrap">
    <h2>テーマ設定</h2>
    <form id="my-option-form" method="post" action="">
      <?php wp_nonce_field('my-nonce-key', 'my-option'); ?>
      <!-- Tabs -->
      <?php
      /*
       * 各ページ共通の設定を読み込む
      */
      ?>
      <h2 class="demoHeaders">各ページ共通設定</h2>
      <div id="tabs">
        <ul>
          <li><a href="#tabs-1">基本設定</a></li>
          <li><a href="#tabs-2">コンポーネント配置</a></li>
          <li><a href="#tabs-3">新着・投稿のスタイル</a></li>
          <li><a href="#tabs-4">マスター情報</a></li>
        </ul>
        <div id="tabs-1">
          <?php // require_once dirname(dirname(__FILE__)) . '/admin-tabs/tab-1.php'; ?>
        </div>
        <div id="tabs-2">
          <?php // require_once dirname(dirname(__FILE__)) . '/admin-tabs/tab-2.php'; ?>
        </div>
        <div id="tabs-3">
          <?php require_once dirname(dirname(__FILE__)) . '/admin-tabs/tab-3.php'; ?>
        </div>
        <div id="tabs-4">
          <?php // require_once dirname(dirname(__FILE__)) . '/admin-tabs/tab-4.php'; ?>
        </div>
      </div>
      <p>
        <input type="submit" value="<?php echo esc_attr('save'); ?>" class="button button-primary button-large">
      </p>
    </form>
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