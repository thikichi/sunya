<h3>BLOCK-005</h3>
<?php
$values = get_post_meta( $post->ID, '_cmb_block-005_repeat_group', true );
foreach ($values as $key => $value) {
  echo '<div>' . $value['_cmb_block-005_test_text'] . '</div>';
  echo '<div>' . $value['_cmb_block-005_add_file'] . '</div>';
}
?>