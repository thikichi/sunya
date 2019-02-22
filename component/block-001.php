<h3>BLOCK-001</h3>
<?php
$value = get_post_meta( $post->ID, '_cmb_block-001_test_text', true );
echo '<div>' . $value . '</div>';
?>