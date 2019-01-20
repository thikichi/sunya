<?php




function admin_menu_theme_settings() {
  /*
   * 管理画面のHTMLを出力
  */
  function theme_settings_func(){
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
  <?php
  }
  // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
  add_menu_page( 'フレーム設定', 'フレーム設定', 'administrator', 'theme_settings', 'theme_settings_func','', 6 );
}
add_action('admin_menu', 'admin_menu_theme_settings');