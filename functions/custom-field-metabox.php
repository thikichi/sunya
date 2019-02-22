<?php
/*
* Custom Metaboxes and Fields for WordPress
*/

function file_metaboxes(array $meta_boxes) {

    $sunya_options = get_option( 'sunya_options' );
    foreach ($sunya_options['tpl'] as $page_id => $page_val) {
      if( 'undefined' != $page_val ) {
        foreach ($page_val as $component_name => $component_values) {
          require_once dirname(dirname(__FILE__)) . '/component-admin/' . $component_name . '.php';
        }
      }
    }
    // $prefix = '_cmb_';
    // $meta_boxes['test_metabox'] = array(
    //     'id'         => 'test_metabox',
    //     'title'      => '追加したカスタムフィールド',
    //     'pages'      => array('page'),
    //     'show_on'    => array( 'key' => 'id', 'value' => array( 9 ) ),
    //     'context'    => 'normal',
    //     'priority'   => 'high',
    //     'show_names' => true,
    //     'fields'     => array(
    //         array(
    //             'name' => 'テストテキスト',
    //             'desc' => 'ここに説明文が入ります。',
    //             'id'   => $prefix . 'test_text',
    //             'type' => 'text'
    //         ),
    //     )
    // );
    return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'file_metaboxes' );