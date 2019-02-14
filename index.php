<?php get_header(); ?>

<?php
$options = get_option( 'sunya_options' );
// var_dump($options);
?>

<?php
foreach ($options['tpl'] as $page_slug => $page_slug_vals) {
  if( is_page( $page_slug ) ) {
    foreach ($page_slug_vals as $block_name => $block_vals) {
      get_template_part('component/' . $block_name);
    }
  }
}
?>

<?php get_footer();
