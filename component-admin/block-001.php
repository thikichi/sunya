<?php
$prefix = '_cmb_' . $component_name . '_';
$meta_boxes[$component_name] = array(
    'id'         => 'test_metabox2',
    'title'      => '追加したカスタムフィールド2',
    'pages'      => array('page'),
    'show_on'    => array( 'key' => 'id', 'value' => array( $page_id ) ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'fields'     => array(
        array(
            'name' => 'テストテキスト',
            'desc' => 'ここに説明文が入ります。',
            'id'   => $prefix . 'test_text',
            'type' => 'text'
        ),
    )
);