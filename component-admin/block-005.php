<?php
$prefix = '_cmb_' . $component_name . '_';
$meta_boxes[$component_name] = array(
    'id'         => 'test_metabox',
    'title'      => '追加したカスタムフィールド',
    'pages'      => array('page'),
    'show_on'    => array( 'key' => 'id', 'value' => array( $page_id ) ),
    'context'    => 'normal',
    'priority'   => 'high',
    'show_names' => true,
    'fields'     => array(
        array(
            'id'          => $prefix . 'repeat_group',
            'type'        => 'group',
            'options'     => array(
                'add_button'    => 'グループの追加',
                'remove_button' => 'グループの削除',
                'sortable'      => true, // beta
            ),
            'fields'     => array(
                array(
                    'name' => 'テストテキスト',
                    'desc' => 'ここに説明文が入ります。',
                    'id'   => $prefix . 'test_text',
                    'type' => 'text',
                ),
                array(
                    'name' => 'ファイル',
                    'desc' => 'ファイルをリンクする場合はここで選択してください。',
                    'id' => $prefix . 'add_file',
                    'type' => 'file',
                    'save_id' => false,
                    'allow' => array( 'url', 'attachment' )
                ),
            )
        )
    )
);