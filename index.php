<?php get_header(); ?>

<?php
$options = get_option( 'sunya_options' );
?>

<?php
$tpl_arr = $options['tpls'];
foreach ($tpl_arr as $tpl) {
  get_template_part('component/block', $tpl);
}
?>

<?php get_footer();
