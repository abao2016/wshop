<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:15:19
         compiled from "E:\net\ecshop\content\apps\shopguide\templates\admin\shop_guide.dwt.php" */ ?>
<?php /*%%SmartyHeaderCode:10274597d6b67c06f76-43523787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5002d3265c80e67f018d81cce50395866acdcd0f' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\apps\\shopguide\\templates\\admin\\shop_guide.dwt.php',
      1 => 1498202366,
      2 => 'file',
    ),
    '975c730e137e9980643c452e4a0de751a764e704' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\system\\templates\\ecjia.dwt.php',
      1 => 1498202359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10274597d6b67c06f76-43523787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ur_here' => 0,
    'ecjia_admin_cptitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_597d6b6a466662_69792342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d6b6a466662_69792342')) {function content_597d6b6a466662_69792342($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include 'E:\\net\\ecshop\\content\\system\\smarty\\function.hook.php';
if (!is_callable('smarty_function_lang')) include 'E:\\net\\ecshop\\content\\system\\smarty\\function.lang.php';
if (!is_callable('smarty_function_url')) include 'E:\\net\\ecshop\\content\\system\\smarty\\function.url.php';
?><?php if (!is_pjax()) {?>
<!DOCTYPE html>
<html lang="zh" class="pjaxLoadding-busy">
<head>
<meta name="Generator" content="ECJIA 1.20" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php if ($_smarty_tpl->tpl_vars['ur_here']->value) {?><?php echo $_smarty_tpl->tpl_vars['ur_here']->value;?>
 - <?php }?><?php echo $_smarty_tpl->tpl_vars['ecjia_admin_cptitle']->value;?>
</title>
	<link rel="shortcut icon" href="favicon.ico" />
	<?php echo smarty_function_hook(array('id'=>'admin_print_styles'),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->getSubTemplate ("library/common_meta.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo smarty_function_hook(array('id'=>'admin_print_scripts'),$_smarty_tpl);?>

	
	
	<?php echo smarty_function_hook(array('id'=>'admin_head'),$_smarty_tpl);?>

</head>
<body>
	<div class="clearfix" id="maincontainer">
		<?php echo $_smarty_tpl->getSubTemplate ("library/common_header.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div id="contentwrapper">
			<div class="main_content">
				<?php echo smarty_function_hook(array('id'=>'admin_print_main_header'),$_smarty_tpl);?>

				
<div>
    <h3 class="heading">
        <?php if ($_smarty_tpl->tpl_vars['ur_here']->value) {?><?php echo $_smarty_tpl->tpl_vars['ur_here']->value;?>
<?php }?>
    </h3>
</div>

<div class="row-fluid">
    <div class="span12">
    	<ul id="validate_wizard-titles" class="stepy-titles clearfix">
    		<?php if (!$_GET['step']||$_GET['step']=='1') {?>
    		<li id="step1" class="current-step cursor_pointor"><div><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.base_info'),$_smarty_tpl);?>
</div><span><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.base_info_notice'),$_smarty_tpl);?>
</span><span class="stepNb">1</span></li>
    		<?php } elseif ($_GET['step']=='2') {?>
    		<li id="step2" class="current-step cursor_pointor"><div><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.goods_info'),$_smarty_tpl);?>
</div><span><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.goods_info_notice'),$_smarty_tpl);?>
</span><span class="stepNb">2</span></li>
    		<?php } elseif ($_GET['step']=='3') {?>
    		<li id="step3" class="current-step cursor_pointor"><div><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.result_info'),$_smarty_tpl);?>
</div><span><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.result_info_notice'),$_smarty_tpl);?>
</span><span class="stepNb">3</span></li>
    		<?php }?>
    	</ul>
        <form class="stepy-wizzard form-horizontal application-installer" id="validate_wizard" action="<?php echo smarty_function_url(array('path'=>'shopguide/admin/step_post'),$_smarty_tpl);?>
<?php if ($_GET['step']) {?>&step=<?php echo $_GET['step'];?>
<?php }?>" method="post" name="theForm">
            <?php if (!$_GET['step']||$_GET['step']=='1') {?>
            <fieldset class="step_one step" title="<?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.base_info'),$_smarty_tpl);?>
">
                <div class="control-group formSep m_t10">
					<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shop_name'),$_smarty_tpl);?>
</label>
					<div class="controls">
						<input class="w350" type="text" name="shop_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['shop_name'];?>
" />
						<span class="input-must"><?php echo smarty_function_lang(array('key'=>'system::system.require_field'),$_smarty_tpl);?>
</span>
					</div>
				</div>
				
				<div class="control-group formSep">
					<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shop_title'),$_smarty_tpl);?>
</label>
					<div class="controls">
						<input class="w350" type="text" name="shop_title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['shop_title'];?>
" />
					</div>
				</div>
				
				<div class="control-group formSep">
					<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shop_country'),$_smarty_tpl);?>
</label>
					<div class="controls">
						<select class="w350" name="shop_country" id="selCountries" data-toggle="regionSummary" data-url="<?php echo RC_Uri::url('shopguide/region/init');?>
" data-type="1" data-target="region-summary-provinces">
							<option value='0'><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.pls_select'),$_smarty_tpl);?>
</option>
							<?php  $_smarty_tpl->tpl_vars['region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['region']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['region']->key => $_smarty_tpl->tpl_vars['region']->value) {
$_smarty_tpl->tpl_vars['region']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['region']->value['region_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['region']->value['region_name'];?>
</option>
							<?php } ?>
						</select>
					</div>
				</div>
				
				<div class="control-group formSep">
					<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shop_province'),$_smarty_tpl);?>
</label>
					<div class="controls">
						<select class="w350 region-summary-provinces" name="shop_province" id="selProvinces" data-toggle="regionSummary" data-type="2" data-target="region-summary-cities">
							<option value='0'><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.pls_select'),$_smarty_tpl);?>
</option>
							<?php  $_smarty_tpl->tpl_vars['region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['region']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['provinces']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['region']->key => $_smarty_tpl->tpl_vars['region']->value) {
$_smarty_tpl->tpl_vars['region']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['region']->value['region_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['region']->value['region_name'];?>
</option>
							<?php } ?>
						</select>
					</div>
				</div>
				
				<div class="control-group formSep">
					<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shop_city'),$_smarty_tpl);?>
</label>
					<div class="controls">
						<select class="w350 region-summary-cities" name="shop_city" id="selCities">
							<option value='0'><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.pls_select'),$_smarty_tpl);?>
</option>
							<?php  $_smarty_tpl->tpl_vars['region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['region']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['region']->key => $_smarty_tpl->tpl_vars['region']->value) {
$_smarty_tpl->tpl_vars['region']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['region']->value['region_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['region']->value['region_name'];?>
</option>
							<?php } ?>
						</select>
					</div>
				</div>	
				
				<div class="control-group formSep">
					<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shop_address'),$_smarty_tpl);?>
</label>
					<div class="controls">
						<input class="w350" type="text" name="shop_address" value="" />
					</div>
				</div>	
				
				<div class="control-group formSep">
					<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shipping'),$_smarty_tpl);?>
</label>
					<div class="controls">
						<select class="w350" name="shipping" id="shipping_type">
				    		<option value=''><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.pls_select'),$_smarty_tpl);?>
</option>
				            <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
				            <option value="<?php echo $_smarty_tpl->tpl_vars['module']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
</option>
				            <?php } ?>
				        </select>
					</div>
				</div>
				
				<div class="shipping_area hide">
					<div class="control-group">
						<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shipping_area'),$_smarty_tpl);?>
</label>
						<div class="controls">
							<input class="w350" type="text" name="shipping_area_name" />
							<span class="input-must"><?php echo smarty_function_lang(array('key'=>'system::system.require_field'),$_smarty_tpl);?>
</span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shipping_country'),$_smarty_tpl);?>
</label>
						<div class="controls">
							<select class="w350 selCountry sel_region" name="shipping_country" data-next="selProvinces" data-url="<?php echo smarty_function_url(array('path'=>'shopguide/region/init','args'=>'target=selProvinces&type=1'),$_smarty_tpl);?>
">
								<option value='0'><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.pls_select'),$_smarty_tpl);?>
</option>
								<?php  $_smarty_tpl->tpl_vars['region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['region']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['region']->key => $_smarty_tpl->tpl_vars['region']->value) {
$_smarty_tpl->tpl_vars['region']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['region']->value['region_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['region']->value['region_name'];?>
</option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shipping_province'),$_smarty_tpl);?>
</label>
						<div class="controls">
							<select class="w350 selProvinces sel_region" name="shipping_province" data-next="selCities" data-url="<?php echo smarty_function_url(array('path'=>'shopguide/region/init','args'=>'target=selCities&type=2'),$_smarty_tpl);?>
">
								<option value='0'><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.pls_select'),$_smarty_tpl);?>
</option>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shipping_city'),$_smarty_tpl);?>
</label>
						<div class="controls">
							<select class="w350 selCities sel_region" name="shipping_city" data-url="<?php echo smarty_function_url(array('path'=>'shopguide/region/init','args'=>'target=selDistricts&type=3'),$_smarty_tpl);?>
" data-next="selDistricts">
								<option value='0'><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.pls_select'),$_smarty_tpl);?>
</option>
							</select>
						</div>
					</div>	
					<div class="control-group formSep">
						<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shipping_district'),$_smarty_tpl);?>
</label>
						<div class="controls">
							<select class="w350 selDistricts sel_region" name="shipping_district">
								<option value='0'><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.pls_select'),$_smarty_tpl);?>
</option>
							</select>
						</div>
					</div>
				</div>
				
				<div class="control-group formSep">
					<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_pay_type'),$_smarty_tpl);?>
</label>
					<div class="controls">
						<select class="w350" name="payment" id="pay_type" data-url="<?php echo smarty_function_url(array('path'=>'shopguide/admin/get_pay'),$_smarty_tpl);?>
">
				    		<option value=''><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.pls_select'),$_smarty_tpl);?>
</option>
				    		<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pay_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
				            <option value="<?php echo $_smarty_tpl->tpl_vars['module']->value['code'];?>
"><?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
</option>
				            <?php } ?>
				        </select>
					</div>
				</div>
				
				<div class="payment_area hide">
				</div>
				
                <input class="btn btn-inverse f_r m_l10" type="submit" value="<?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.next_step'),$_smarty_tpl);?>
"/>
            </fieldset>
            
            <?php } elseif ($_GET['step']=='2') {?>
            <fieldset class="step_two step" title="<?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.goods_info'),$_smarty_tpl);?>
">
				<div class="control-group formSep m_t10">
					<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_goods_cat'),$_smarty_tpl);?>
</label>
					<div class="controls">
						<input class="w350" type="text" name="cat_name" />
						<span class="input-must"><?php echo smarty_function_lang(array('key'=>'system::system.require_field'),$_smarty_tpl);?>
</span>
					</div>
				</div>
				
				<div class="control-group formSep m_t10">
					<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_store_cat'),$_smarty_tpl);?>
</label>
					<div class="controls">
						<input class="w350" type="text" name="store_cat" />
						<span class="input-must"><?php echo smarty_function_lang(array('key'=>'system::system.require_field'),$_smarty_tpl);?>
</span>
					</div>
				</div>		
				
			    <input class="btn btn-inverse f_r m_l10" type="submit" value="<?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.next_step'),$_smarty_tpl);?>
"/>	
			</fieldset>
			
			<?php } elseif ($_GET['step']=='3') {?>
			<fieldset class="step_three step" title="<?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.result_info'),$_smarty_tpl);?>
">
			<div class="row-fluid padding5 m_l15">
				<div class="span2"><a class="btn w100" href="<?php echo RC_Uri::url('@index/init');?>
"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.view_shop'),$_smarty_tpl);?>
</a></div>
				<div class="span2"><a class="btn w100" href="<?php echo RC_Uri::url('setting/shop_config/init');?>
&code=shop_info"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.shop_config'),$_smarty_tpl);?>
</a></div>
				<div class="span2"><a class="btn w100" href="<?php echo RC_Uri::url('@privilege/add');?>
"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.add_admin'),$_smarty_tpl);?>
</a></div>
			</div>
			
			<div class="row-fluid padding5 m_l15">
				<div class="span2"><a class="btn w100" href="<?php echo RC_Uri::url('goods/admin_category/add');?>
"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.add_goods_cat'),$_smarty_tpl);?>
</a></div>
				<div class="span2"><a class="btn w100" href="<?php echo RC_Uri::url('goods/admin/init');?>
"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.goods_list'),$_smarty_tpl);?>
</a></div>
				<div class="span2"><a class="btn w100" href="<?php echo RC_Uri::url('goods/admin_goods_type/init');?>
"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.goods_type'),$_smarty_tpl);?>
</a></div>
			</div>
			
			<div class="row-fluid padding5 m_l15">
				<div class="span2"><a class="btn w100" href="<?php echo RC_Uri::url('@admin_template/init');?>
"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.choose_template'),$_smarty_tpl);?>
</a></div>
				<div class="span2"><a class="btn w100" href="<?php echo RC_Uri::url('favourable/admin/add');?>
"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.add_favourable'),$_smarty_tpl);?>
</a></div>
				<div class="span2"><a class="btn w100" href="<?php echo RC_Uri::url('user/admin/add');?>
"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.add_user'),$_smarty_tpl);?>
</a></div>
			</div>
			<?php }?>
			</fieldset>
        </form>
    </div>
</div>

				<?php echo smarty_function_hook(array('id'=>'admin_print_main_bottom'),$_smarty_tpl);?>

			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("library/common_sidebar.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<?php echo smarty_function_hook(array('id'=>'admin_print_footer_scripts'),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->getSubTemplate ("library/common_footer.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	
<script type="text/javascript">
    ecjia.admin.shopguide.init();
</script>

	<?php echo smarty_function_hook(array('id'=>'admin_footer'),$_smarty_tpl);?>

    <div class="pjaxLoadding"><i class="peg"></i></div>
</body>
</html>
<?php } else { ?>
	<title><?php echo $_smarty_tpl->tpl_vars['ecjia_admin_cptitle']->value;?>
<?php if ($_smarty_tpl->tpl_vars['ur_here']->value) {?> - <?php echo $_smarty_tpl->tpl_vars['ur_here']->value;?>
<?php }?></title>
	
	<?php echo smarty_function_hook(array('id'=>'admin_pjax_head'),$_smarty_tpl);?>

	<?php echo smarty_function_hook(array('id'=>'admin_print_main_header'),$_smarty_tpl);?>

	
<div>
    <h3 class="heading">
        <?php if ($_smarty_tpl->tpl_vars['ur_here']->value) {?><?php echo $_smarty_tpl->tpl_vars['ur_here']->value;?>
<?php }?>
    </h3>
</div>

<div class="row-fluid">
    <div class="span12">
    	<ul id="validate_wizard-titles" class="stepy-titles clearfix">
    		<?php if (!$_GET['step']||$_GET['step']=='1') {?>
    		<li id="step1" class="current-step cursor_pointor"><div><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.base_info'),$_smarty_tpl);?>
</div><span><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.base_info_notice'),$_smarty_tpl);?>
</span><span class="stepNb">1</span></li>
    		<?php } elseif ($_GET['step']=='2') {?>
    		<li id="step2" class="current-step cursor_pointor"><div><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.goods_info'),$_smarty_tpl);?>
</div><span><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.goods_info_notice'),$_smarty_tpl);?>
</span><span class="stepNb">2</span></li>
    		<?php } elseif ($_GET['step']=='3') {?>
    		<li id="step3" class="current-step cursor_pointor"><div><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.result_info'),$_smarty_tpl);?>
</div><span><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.result_info_notice'),$_smarty_tpl);?>
</span><span class="stepNb">3</span></li>
    		<?php }?>
    	</ul>
        <form class="stepy-wizzard form-horizontal application-installer" id="validate_wizard" action="<?php echo smarty_function_url(array('path'=>'shopguide/admin/step_post'),$_smarty_tpl);?>
<?php if ($_GET['step']) {?>&step=<?php echo $_GET['step'];?>
<?php }?>" method="post" name="theForm">
            <?php if (!$_GET['step']||$_GET['step']=='1') {?>
            <fieldset class="step_one step" title="<?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.base_info'),$_smarty_tpl);?>
">
                <div class="control-group formSep m_t10">
					<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shop_name'),$_smarty_tpl);?>
</label>
					<div class="controls">
						<input class="w350" type="text" name="shop_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['shop_name'];?>
" />
						<span class="input-must"><?php echo smarty_function_lang(array('key'=>'system::system.require_field'),$_smarty_tpl);?>
</span>
					</div>
				</div>
				
				<div class="control-group formSep">
					<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shop_title'),$_smarty_tpl);?>
</label>
					<div class="controls">
						<input class="w350" type="text" name="shop_title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['shop_title'];?>
" />
					</div>
				</div>
				
				<div class="control-group formSep">
					<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shop_country'),$_smarty_tpl);?>
</label>
					<div class="controls">
						<select class="w350" name="shop_country" id="selCountries" data-toggle="regionSummary" data-url="<?php echo RC_Uri::url('shopguide/region/init');?>
" data-type="1" data-target="region-summary-provinces">
							<option value='0'><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.pls_select'),$_smarty_tpl);?>
</option>
							<?php  $_smarty_tpl->tpl_vars['region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['region']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['region']->key => $_smarty_tpl->tpl_vars['region']->value) {
$_smarty_tpl->tpl_vars['region']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['region']->value['region_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['region']->value['region_name'];?>
</option>
							<?php } ?>
						</select>
					</div>
				</div>
				
				<div class="control-group formSep">
					<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shop_province'),$_smarty_tpl);?>
</label>
					<div class="controls">
						<select class="w350 region-summary-provinces" name="shop_province" id="selProvinces" data-toggle="regionSummary" data-type="2" data-target="region-summary-cities">
							<option value='0'><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.pls_select'),$_smarty_tpl);?>
</option>
							<?php  $_smarty_tpl->tpl_vars['region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['region']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['provinces']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['region']->key => $_smarty_tpl->tpl_vars['region']->value) {
$_smarty_tpl->tpl_vars['region']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['region']->value['region_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['region']->value['region_name'];?>
</option>
							<?php } ?>
						</select>
					</div>
				</div>
				
				<div class="control-group formSep">
					<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shop_city'),$_smarty_tpl);?>
</label>
					<div class="controls">
						<select class="w350 region-summary-cities" name="shop_city" id="selCities">
							<option value='0'><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.pls_select'),$_smarty_tpl);?>
</option>
							<?php  $_smarty_tpl->tpl_vars['region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['region']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cities']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['region']->key => $_smarty_tpl->tpl_vars['region']->value) {
$_smarty_tpl->tpl_vars['region']->_loop = true;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['region']->value['region_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['region']->value['region_name'];?>
</option>
							<?php } ?>
						</select>
					</div>
				</div>	
				
				<div class="control-group formSep">
					<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shop_address'),$_smarty_tpl);?>
</label>
					<div class="controls">
						<input class="w350" type="text" name="shop_address" value="" />
					</div>
				</div>	
				
				<div class="control-group formSep">
					<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shipping'),$_smarty_tpl);?>
</label>
					<div class="controls">
						<select class="w350" name="shipping" id="shipping_type">
				    		<option value=''><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.pls_select'),$_smarty_tpl);?>
</option>
				            <?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shipping_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
				            <option value="<?php echo $_smarty_tpl->tpl_vars['module']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
</option>
				            <?php } ?>
				        </select>
					</div>
				</div>
				
				<div class="shipping_area hide">
					<div class="control-group">
						<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shipping_area'),$_smarty_tpl);?>
</label>
						<div class="controls">
							<input class="w350" type="text" name="shipping_area_name" />
							<span class="input-must"><?php echo smarty_function_lang(array('key'=>'system::system.require_field'),$_smarty_tpl);?>
</span>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shipping_country'),$_smarty_tpl);?>
</label>
						<div class="controls">
							<select class="w350 selCountry sel_region" name="shipping_country" data-next="selProvinces" data-url="<?php echo smarty_function_url(array('path'=>'shopguide/region/init','args'=>'target=selProvinces&type=1'),$_smarty_tpl);?>
">
								<option value='0'><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.pls_select'),$_smarty_tpl);?>
</option>
								<?php  $_smarty_tpl->tpl_vars['region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['region']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['region']->key => $_smarty_tpl->tpl_vars['region']->value) {
$_smarty_tpl->tpl_vars['region']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['region']->value['region_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['region']->value['region_name'];?>
</option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shipping_province'),$_smarty_tpl);?>
</label>
						<div class="controls">
							<select class="w350 selProvinces sel_region" name="shipping_province" data-next="selCities" data-url="<?php echo smarty_function_url(array('path'=>'shopguide/region/init','args'=>'target=selCities&type=2'),$_smarty_tpl);?>
">
								<option value='0'><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.pls_select'),$_smarty_tpl);?>
</option>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shipping_city'),$_smarty_tpl);?>
</label>
						<div class="controls">
							<select class="w350 selCities sel_region" name="shipping_city" data-url="<?php echo smarty_function_url(array('path'=>'shopguide/region/init','args'=>'target=selDistricts&type=3'),$_smarty_tpl);?>
" data-next="selDistricts">
								<option value='0'><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.pls_select'),$_smarty_tpl);?>
</option>
							</select>
						</div>
					</div>	
					<div class="control-group formSep">
						<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_shipping_district'),$_smarty_tpl);?>
</label>
						<div class="controls">
							<select class="w350 selDistricts sel_region" name="shipping_district">
								<option value='0'><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.pls_select'),$_smarty_tpl);?>
</option>
							</select>
						</div>
					</div>
				</div>
				
				<div class="control-group formSep">
					<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_pay_type'),$_smarty_tpl);?>
</label>
					<div class="controls">
						<select class="w350" name="payment" id="pay_type" data-url="<?php echo smarty_function_url(array('path'=>'shopguide/admin/get_pay'),$_smarty_tpl);?>
">
				    		<option value=''><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.pls_select'),$_smarty_tpl);?>
</option>
				    		<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pay_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
				            <option value="<?php echo $_smarty_tpl->tpl_vars['module']->value['code'];?>
"><?php echo $_smarty_tpl->tpl_vars['module']->value['name'];?>
</option>
				            <?php } ?>
				        </select>
					</div>
				</div>
				
				<div class="payment_area hide">
				</div>
				
                <input class="btn btn-inverse f_r m_l10" type="submit" value="<?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.next_step'),$_smarty_tpl);?>
"/>
            </fieldset>
            
            <?php } elseif ($_GET['step']=='2') {?>
            <fieldset class="step_two step" title="<?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.goods_info'),$_smarty_tpl);?>
">
				<div class="control-group formSep m_t10">
					<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_goods_cat'),$_smarty_tpl);?>
</label>
					<div class="controls">
						<input class="w350" type="text" name="cat_name" />
						<span class="input-must"><?php echo smarty_function_lang(array('key'=>'system::system.require_field'),$_smarty_tpl);?>
</span>
					</div>
				</div>
				
				<div class="control-group formSep m_t10">
					<label class="control-label"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.label_store_cat'),$_smarty_tpl);?>
</label>
					<div class="controls">
						<input class="w350" type="text" name="store_cat" />
						<span class="input-must"><?php echo smarty_function_lang(array('key'=>'system::system.require_field'),$_smarty_tpl);?>
</span>
					</div>
				</div>		
				
			    <input class="btn btn-inverse f_r m_l10" type="submit" value="<?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.next_step'),$_smarty_tpl);?>
"/>	
			</fieldset>
			
			<?php } elseif ($_GET['step']=='3') {?>
			<fieldset class="step_three step" title="<?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.result_info'),$_smarty_tpl);?>
">
			<div class="row-fluid padding5 m_l15">
				<div class="span2"><a class="btn w100" href="<?php echo RC_Uri::url('@index/init');?>
"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.view_shop'),$_smarty_tpl);?>
</a></div>
				<div class="span2"><a class="btn w100" href="<?php echo RC_Uri::url('setting/shop_config/init');?>
&code=shop_info"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.shop_config'),$_smarty_tpl);?>
</a></div>
				<div class="span2"><a class="btn w100" href="<?php echo RC_Uri::url('@privilege/add');?>
"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.add_admin'),$_smarty_tpl);?>
</a></div>
			</div>
			
			<div class="row-fluid padding5 m_l15">
				<div class="span2"><a class="btn w100" href="<?php echo RC_Uri::url('goods/admin_category/add');?>
"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.add_goods_cat'),$_smarty_tpl);?>
</a></div>
				<div class="span2"><a class="btn w100" href="<?php echo RC_Uri::url('goods/admin/init');?>
"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.goods_list'),$_smarty_tpl);?>
</a></div>
				<div class="span2"><a class="btn w100" href="<?php echo RC_Uri::url('goods/admin_goods_type/init');?>
"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.goods_type'),$_smarty_tpl);?>
</a></div>
			</div>
			
			<div class="row-fluid padding5 m_l15">
				<div class="span2"><a class="btn w100" href="<?php echo RC_Uri::url('@admin_template/init');?>
"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.choose_template'),$_smarty_tpl);?>
</a></div>
				<div class="span2"><a class="btn w100" href="<?php echo RC_Uri::url('favourable/admin/add');?>
"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.add_favourable'),$_smarty_tpl);?>
</a></div>
				<div class="span2"><a class="btn w100" href="<?php echo RC_Uri::url('user/admin/add');?>
"><?php echo smarty_function_lang(array('key'=>'shopguide::shopguide.add_user'),$_smarty_tpl);?>
</a></div>
			</div>
			<?php }?>
			</fieldset>
        </form>
    </div>
</div>

	<?php echo smarty_function_hook(array('id'=>'admin_print_main_bottom'),$_smarty_tpl);?>

	
<script type="text/javascript">
    ecjia.admin.shopguide.init();
</script>

	<?php echo smarty_function_hook(array('id'=>'admin_pjax_footer'),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
