<!-- タブ：マスター情報 -->

<h2 class="admintab-ttl">マスター情報</h2>

<p>
  サイトオーナーである会社の所在地や電話番号などを入力します。<br>
  ここに入力した内容は「会社概要」ページなどに反映されます。
</p>

<?php 
$company_name = isset($sunya_options['info']['master']['company_name']) ? $sunya_options['info']['master']['company_name'] : '';

 ?>

<h3 class="admintab-subttl">会社名</h3>
<input type="text" name="sunya_options[info][master][company_name]" value="<?php echo esc_attr($company_name); ?>">

<h3 class="admintab-subttl">郵便番号</h3>
<input type="text" name="sunya_options[info][master][postcode]" value="">

<h3 class="admintab-subttl">所在地</h3>
<input type="text" name="sunya_options[info][master][address]" value="">

<h3 class="admintab-subttl">電話番号</h3>
<input type="text" name="sunya_options[info][master][tel]" value="">

<h3 class="admintab-subttl">FAX番号</h3>
<input type="text" name="sunya_options[info][master][fax]" value="">
