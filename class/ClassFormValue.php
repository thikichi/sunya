<?php
/*
* 管理画面タブコンテンツ
*/
class ClassFormValue {

	private $form_element;

	function __construct() {
	}

	/**
	 * オプション項目を設定する
	 *
	 * @param string $key 識別するキー
	 * @param string $label ラベル名
	 * @param string $default 初期値
	 * @param array $items ラジオボタンなどで展開するタグ
	 */
	public function set_news_item( $key, $type='text', $label='', $default='', $items=array() ) {
		if( $type==='text' ) {
			$this->form_element['cpt']['news'][$key] = array('type'=>'text','label'=>$label,'default'=>$default);
		} else if( $type==='radio' ) {
			$this->form_element['cpt']['news'][$key] = array('type'=>'radio','default'=>$default,'items'=>$items);
		} else if( $type==='checkbox' ) {
			$this->form_element['cpt']['news'][$key] = array('type'=>'checkbox','default'=>$default,'items'=>$items);
		}
	}

	/**
	 * オプション項目を取得する
	 *
	 * @param string $key 識別するキー
	 */
	public function get_news_item( $key ) {
		return $this->form_element['cpt']['news'][$key];
	}

	/**
	 * コンポーネントを設定する
	 *
	 * @param string $page_slug ページスラッグ
	 * @param array $items 実装するコンポーネント
	 */
	public function set_component( $page_slug, $items=array() ) {
		if( $page_slug==='undefined' ) {
			$rdata = $this->form_element['tpl']['undefined'] = $items;
		} else {
			$page = get_page_by_path($page_slug);
			$rdata = $this->form_element['tpl'][$page->ID] = $items;
		}
		return $rdata;
	}


	// $form_element = array(
	//   'cpt' => array(
	//     'news' => array(
	//       'disp'  => array(
	//         'type'=>'radio','default'=>'1','items'=>array(
	//           array('label'=>'表示する','value'=>'1'),
	//           array('label'=>'表示しない','value'=>'0'),
	//         )
	//       ),
	//       'label' => array('type'=>'text','label'=>'タイトル','default'=>'新着情報'),
	//       'slug'  => array('type'=>'text','label'=>'スラッグ','default'=>'news'),
	//       'supports' => array(
	//         'type'=>'checkbox','default'=>array('title'),'items'=>array(
	//           array('label'=>'タイトル','value'=>'title'),
	//           array('label'=>'エディタ','value'=>'editor'),
	//         ),
	//       ),
	//     ),
	//   ),
	//   'tpl' => array(
	//     'undefined' => array(
	//       'block-001'=>'ブロック01',
	//       'block-002'=>'ブロック02',
	//       'block-003'=>'ブロック03',
	//     ),
	//     $sample_page->ID => array(
	//       'block-004'=>'ブロック04',
	//       'block-005'=>'ブロック05',
	//       'block-006'=>'ブロック06',
	//     ),
	//   ),
	// );


}
