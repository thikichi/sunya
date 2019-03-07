<p>２つめのタブの内容を記載します。<br />
タブの部分は ul タグで実装します。
</p>
<?php
$get_posts = get_posts( array( 'post_type'=>'page', 'numberposts'=>-1 ) );
?>
<ui class="sortable-1">
  <?php foreach ($get_posts as $get_post): ?>
    <li class="sortable-1-item" data-pageslug="<?php echo $get_post->ID; ?>">
      <h3 class="sunya-ttl-1"><?php echo $get_post->post_title; ?></h3>
      <ul class="sortable-2">
        <?php  if( isset($sunya_options['tpl'][$get_post->ID]) ): ?>
          <?php $i=0; foreach ($sunya_options['tpl'][$get_post->ID] as $block_key => $block_val): ?>
            <li class="ui-state-default border-color-red">
              <label>
                <?php $checked = $block_val['checked'] ? ' checked="checked"' : ''; ?>
                <input type="checkbox" name="sunya_options[tpl][<?php echo $get_post->ID; ?>][<?php echo $block_key; ?>][checked]" value="1" data-blockname="<?php echo $block_key; ?>"<?php echo $checked; ?>><?php echo $block_key; ?>
                <input type="hidden" name="sunya_options[tpl][<?php echo $get_post->ID; ?>][<?php echo $block_key; ?>][enable]" value="1">
              </label>
            </li>
          <?php $i++; endforeach; ?>
        <?php  else: ?>
          <li class="ui-state-default border-color-red"></li>
        <?php  endif; ?>
      </ul>
    </li>
  <?php endforeach; ?>
  <li class="sortable-1-item" data-pageslug="undefined">
    <h3 class="sunya-ttl-1">未使用ブロック</h3>
    <ul class="sortable-2">
      <?php foreach ($sunya_options['tpl']['undefined'] as $undefined_key => $undefined_val): ?>
        <?php $checked = $undefined_val['checked'] ? ' checked="checked"' : ''; ?>
        <li class="ui-state-default border-color-red">
          <label>
            <input type="checkbox" name="sunya_options[tpl][undefined][<?php echo $undefined_key; ?>][checked]" value="1" data-blockname="<?php echo $undefined_key; ?>" <?php echo $checked; ?>><?php echo $undefined_key; ?>
            <input type="hidden" name="sunya_options[tpl][undefined][<?php echo $undefined_key; ?>][enable]" value="1">
          </label>
        </li>
      <?php endforeach; ?>
    </ul>
  </li>
</ui>
<div style="clear: both;"></div>
<script>
// http://alphasis.info/2011/06/sortable-2-connectwith/
jQuery(function($) {
$( function() {
  $( '.sortable-1' ) . sortable();
  $( '.sortable-1' ) . disableSelection();
  $( '.sortable-2' ) . sortable( {
      connectWith: '.sortable-2',
      update: function(event, ui) {
        $('.sortable-2').each(function(index, element) {
          var thisPageSlug = $(this).parent('li').data('pageslug');
          $(this).children('li').each(function(index, element) {
            var targetCB = $(this).find("input");
            if( targetCB.length ) {
              var blockName = targetCB.data('blockname');
              var tName  = targetCB.attr('name');
              var tName2 = tName.replace(/^sunya_options\[tpl\]\[[^\]]+\]/, 'sunya_options[tpl][' + thisPageSlug + ']');
              targetCB.attr('name', tName2);
            }
          });
        })
      }
  } );
  $( '.sortable-2' ) . disableSelection();
} );
});
</script>
<style>
ul.sortable-1 {
  background-color: beige;
  border: solid 1px #606060;
}
.sortable-1-item {
  width: 25%;
  float: left;
  cursor: move;
}
li.border-color-red {
  border-color: red;
}
li.border-color-blue {
  border-color: blue;
}
li.border-color-green {
  border-color: green;
}
</style>