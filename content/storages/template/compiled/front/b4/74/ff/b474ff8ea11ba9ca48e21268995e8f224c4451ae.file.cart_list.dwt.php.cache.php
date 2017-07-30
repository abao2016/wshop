<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:07:17
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\cart_list.dwt.php" */ ?>
<?php /*%%SmartyHeaderCode:6560597d6985584969-61892218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b474ff8ea11ba9ca48e21268995e8f224c4451ae' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\cart_list.dwt.php',
      1 => 1498202372,
      2 => 'file',
    ),
    '0ca7a90c9cf9c6e3b82ac5b2647a09b563279891' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\ecjia-touch.dwt.php',
      1 => 1498202372,
      2 => 'file',
    ),
    '91418ce8bd89e8ce3b93c7ff8654b310f910afc8' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\address_modal.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
    'a9c4fec1220e6e4a89c59d881c63c6c13985e842' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\model_bar.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6560597d6985584969-61892218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 1,
    'theme_url' => 1,
    'curr_style' => 1,
    'key' => 1,
    'referer' => 1,
    'hidenav' => 1,
    'hidetab' => 1,
    'hideinfo' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_597d69884aa7f6_20602476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d69884aa7f6_20602476')) {function content_597d69884aa7f6_20602476($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_url\')) include \'E:\\\\net\\\\ecshop\\\\content\\\\system\\\\smarty\\\\function.url.php\';
if (!is_callable(\'smarty_block_t\')) include \'E:\\\\net\\\\ecshop\\\\content\\\\system\\\\smarty\\\\block.t.php\';
?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if (!is_pjax()) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if (is_ajax()) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>


<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } else { ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta name="Generator" content="ECJIA 1.20" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=0, minimal-ui">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="format-detection" content="telephone=no" />
	<title><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'page_title\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
</title>
	<link href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if (ecjia::config(\'wap_logo\')) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo RC_Upload::upload_url(ecjia::config(\'wap_logo\'));?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } else { ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
favicon.ico<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
" rel="shortcut icon bookmark">
	<link href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if (ecjia::config(\'wap_logo\')) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo RC_Upload::upload_url(ecjia::config(\'wap_logo\'));?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } else { ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
favicon.ico<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
" rel="apple-touch-icon-precomposed">

	
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
lib/bootstrap3/css/bootstrap.css">

	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
dist/css/iconfont.min.css">
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
css/ecjia.touch.css">
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
css/ecjia.touch.develop.css">
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
css/ecjia.touch.b2b2c.css">
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
css/ecjia_city.css">
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
css/ecjia_help.css">
    
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
css/ecjia.touch.models.css">
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
dist/other/swiper.min.css">
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
lib/datePicker/css/datePicker.min.css">
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
lib/winderCheck/css/winderCheck.min.css">
    
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
lib/photoswipe/css/photoswipe.css">
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
lib/photoswipe/css/default-skin/default-skin.css">
    
	
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'curr_style\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
">
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
lib/iOSOverlay/css/iosOverlay.css">
</head>
<body>
	<div class="ecjia" id="get_location" data-url="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo smarty_function_url(array(\'path\'=>\'location/index/get_location_msg\'),$_smarty_tpl);?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
">
		<input type="hidden" name="key" value="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'key\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
"/>
		<input type="hidden" name="referer" value="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'referer\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
"/>
		

<div class="ecjia-flow-cart-list">
	<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'not_login\']->value) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

	<div class="flow-no-pro">
		<div class="ecjia-nolist">
			您还没有登录
			<a class="btn btn-small" type="button" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo smarty_function_url(array(\'path\'=>\'user/user_privilege/login\'),$_smarty_tpl);?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'referer_url\']->value) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
&referer_url=<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'referer_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
"><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php $_smarty_tpl->smarty->_tag_stack[] = array(\'t\', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
点击登录<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
</a>
		</div>
	</div>
	<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } else { ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

		<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'cart_list\']->value) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

			<div class="ecjia-flow-cart">
				<div class="a4t">
					<div class="a4u a4u-green">
						<div class="a4v">
							<div class="a4v-address">
								<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'address_id\']->value>0) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

									<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'address_info\']->value[\'address\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

								<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } else { ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

									<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_COOKIE[\'location_name\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

								<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

							</div>
							<i>(当前位置)</i>
						</div>
					</div>
					<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php  $_smarty_tpl->tpl_vars[\'val\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'val\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'cart_list\']->value[\'local\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'val\']->key => $_smarty_tpl->tpl_vars[\'val\']->value) {
$_smarty_tpl->tpl_vars[\'val\']->_loop = true;
?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

					<div class="a4w current_place">
						<div class="a4p">
							<a class="a4x" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo RC_Uri::url(\'merchant/index/init\');?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
&store_id=<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'seller_id\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
&from=cart">
								<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'seller_name\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

								<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'manage_mode\']==\'self\') {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<span class="self-store">自营</span><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

							</a>
							<div class="a4y <?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'total\'][\'goods_number\']>3) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
a50<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
">
								<ul>
									<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php  $_smarty_tpl->tpl_vars[\'v\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'v\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'key\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'val\']->value[\'goods_list\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'v\']->key => $_smarty_tpl->tpl_vars[\'v\']->value) {
$_smarty_tpl->tpl_vars[\'v\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'key\']->value = $_smarty_tpl->tpl_vars[\'v\']->key;
?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

									<li data-rec="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'rec_id\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
">
										<img src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'img\'][\'thumb\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
">
										<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'v\']->value[\'is_disabled\']==1) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

										<div class="product_empty"><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'disabled_label\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
</div>
										<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

										<em><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'v\']->value[\'goods_price\']==0) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
免费<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } else { ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'formated_goods_price\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
</em>
										<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'v\']->value[\'goods_number\']>1&&$_smarty_tpl->tpl_vars[\'v\']->value[\'is_disabled\']!=1) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

										<i><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'v\']->value[\'goods_number\']>99) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
99+<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } else { ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'goods_number\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
</i>
										<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

									</li>
									<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

								</ul>
								<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'total\'][\'goods_number\']>3) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

								<div class="a4z">共<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'total\'][\'goods_number\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
件</div>
								<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

							</div>
						</div>
						<div class="w4 remove_all" data-store="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart_list\']->value[\'local\'][0][\'seller_id\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
"><span>删除</span></div>
					</div>
					<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }
if (!$_smarty_tpl->tpl_vars[\'val\']->_loop) {
?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

					<div class="a57"><span>当前位置购物车空空如也哦～</span></div>
					<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

					
					<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'cart_list\']->value[\'other\']) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

					<div class="a4u a4u-gray"><div class="a4v"><i>其他位置</i></div></div>
					<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php  $_smarty_tpl->tpl_vars[\'val\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'val\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'cart_list\']->value[\'other\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'val\']->key => $_smarty_tpl->tpl_vars[\'val\']->value) {
$_smarty_tpl->tpl_vars[\'val\']->_loop = true;
?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

					<div class="a4w other_place">
						<div class="a4p">
							<a class="a4x" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo RC_Uri::url(\'merchant/index/init\');?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
&store_id=<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'seller_id\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
&from=cart&out=1">
								<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'seller_name\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

								<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'manage_mode\']==\'self\') {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<span class="self-store">自营</span><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

							</a>
							<div class="a4y <?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'total\'][\'goods_number\']>3) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
a50<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
">
								<ul>
									<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php  $_smarty_tpl->tpl_vars[\'v\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'v\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'key\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'val\']->value[\'goods_list\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'v\']->key => $_smarty_tpl->tpl_vars[\'v\']->value) {
$_smarty_tpl->tpl_vars[\'v\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'key\']->value = $_smarty_tpl->tpl_vars[\'v\']->key;
?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

									<li data-rec="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'rec_id\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
">
										<img src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'img\'][\'thumb\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
">
										<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'v\']->value[\'is_disabled\']==1) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

										<div class="product_empty"><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'disabled_label\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
</div>
										<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

										<em><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'v\']->value[\'goods_price\']==0) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
免费<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } else { ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'formated_goods_price\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
</em>
										<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'v\']->value[\'goods_number\']>1&&$_smarty_tpl->tpl_vars[\'v\']->value[\'is_disabled\']!=1) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

										<i><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'v\']->value[\'goods_number\']>99) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
99+<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } else { ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'goods_number\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
</i>
										<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

									</li>
									<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

								</ul>
								<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'total\'][\'goods_number\']>3) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

								<div class="a4z">共<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'total\'][\'goods_number\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
件</div>
								<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

							</div>
						</div>
						<div class="w4 remove_all" data-store="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart_list\']->value[\'other\'][0][\'seller_id\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
"><span>删除</span></div>
					</div>
					<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

					<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

				</div>
				<input type="hidden" name="update_cart_url" value="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo RC_Uri::url(\'cart/index/update_cart\');?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
" />
			</div>
		<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } else { ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

		<div class="flow-no-pro">
			<div class="ecjia-nolist">
				您还没有添加商品
				<a class="btn btn-small" type="button" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo smarty_function_url(array(\'path\'=>\'touch/index/init\'),$_smarty_tpl);?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
"><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php $_smarty_tpl->smarty->_tag_stack[] = array(\'t\', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
去逛逛<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
</a>
			</div>
		</div>
		<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

	<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

	<input type="hidden" name="index_url" value="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo RC_Uri::url(\'touch/index/init\');?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
" />
</div>
<?php /*  Call merged included template "library/address_modal.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/address_modal.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '6560597d6985584969-61892218');
content_597d6986a76821_71246131($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/address_modal.lbi.php" */?>
<?php /*  Call merged included template "library/model_bar.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/model_bar.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '6560597d6985584969-61892218');
content_597d6986d936e4_20419188($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/model_bar.lbi.php" */?>

		<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->getSubTemplate ("library/page_menu.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

	</div>
	
	<script charset="utf-8" src="https://map.qq.com/api/js?v=2.exp&libraries=convertor"></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
lib/jquery/jquery.min.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
lib/multi-select/js/jquery.quicksearch.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
lib/jquery/jquery.pjax.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
lib/jquery/jquery.cookie.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
lib/iscroll/js/iscroll.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
lib/bootstrap3/js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
lib/ecjiaUI/ecjia.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
lib/jquery-form/jquery.form.min.js" ></script>	
	<script type="text/javascript" src="https://3gimg.qq.com/lightmap/components/geolocation/geolocation.min.js"></script>
	
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
lib/jquery-localstorage/jquery.localstorage.js" ></script>	
	
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
lib/photoswipe/js/photoswipe.min.js"></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
lib/photoswipe/js/photoswipe-ui-default.min.js"></script>

	
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
js/ecjia.touch.koala.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
js/ecjia.touch.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
js/ecjia.touch.others.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
js/ecjia.touch.goods.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
js/ecjia.touch.user.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
js/ecjia.touch.flow.js" ></script>

    <script type="text/javascript">var theme_url = "<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
";</script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
js/ecjia.touch.goods_detail.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
js/ecjia.touch.spread.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
js/ecjia.touch.user_account.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
js/ecjia.touch.franchisee.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
js/ecjia.touch.comment.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
js/ecjia.touch.raty.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
js/ecjia.touch.fly.js" ></script>
    
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
js/ecjia.touch.intro.min.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
lib/Validform/Validform_v5.3.2_min.js"></script>

	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
lib/swiper/js/swiper.min.js"></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
lib/datePicker/js/datePicker.min.js"></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
lib/winderCheck/js/winderCheck.min.js"></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
js/greenCheck.js"></script>
    
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
lib/iOSOverlay/js/iosOverlay.js"></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
lib/iOSOverlay/js/prettify.js"></script>
	
<script type="text/javascript">ecjia.touch.category.init();</script>

	<script type="text/javascript">
    	window.onunload = unload;
    	function unload (e){
    	  window.scrollTo(0,0);
    	}
	</script>
	<script type="text/javascript">
		var hidenav = <?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'hidenav\']->value==1) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
1<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } else { ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
0<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
, hidetab = <?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'hidetab\']->value==1) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
1<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } else { ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
0<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
, hideinfo = <?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'hideinfo\']->value) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
1<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } else { ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
0<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
;
		if (hideinfo) {
			$('header').hide();
			$('footer').hide();
			$('.ecjia-menu').hide();
		} else {
			hidenav && $('header').hide();
			hidetab && $('footer').hide();
		}
	</script>
</body>
</html>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } else { ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

<title><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'page_title\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
</title>



<div class="ecjia-flow-cart-list">
	<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'not_login\']->value) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

	<div class="flow-no-pro">
		<div class="ecjia-nolist">
			您还没有登录
			<a class="btn btn-small" type="button" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo smarty_function_url(array(\'path\'=>\'user/user_privilege/login\'),$_smarty_tpl);?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'referer_url\']->value) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
&referer_url=<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'referer_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
"><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php $_smarty_tpl->smarty->_tag_stack[] = array(\'t\', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
点击登录<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
</a>
		</div>
	</div>
	<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } else { ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

		<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'cart_list\']->value) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

			<div class="ecjia-flow-cart">
				<div class="a4t">
					<div class="a4u a4u-green">
						<div class="a4v">
							<div class="a4v-address">
								<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'address_id\']->value>0) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

									<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'address_info\']->value[\'address\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

								<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } else { ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

									<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_COOKIE[\'location_name\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

								<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

							</div>
							<i>(当前位置)</i>
						</div>
					</div>
					<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php  $_smarty_tpl->tpl_vars[\'val\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'val\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'cart_list\']->value[\'local\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'val\']->key => $_smarty_tpl->tpl_vars[\'val\']->value) {
$_smarty_tpl->tpl_vars[\'val\']->_loop = true;
?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

					<div class="a4w current_place">
						<div class="a4p">
							<a class="a4x" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo RC_Uri::url(\'merchant/index/init\');?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
&store_id=<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'seller_id\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
&from=cart">
								<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'seller_name\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

								<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'manage_mode\']==\'self\') {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<span class="self-store">自营</span><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

							</a>
							<div class="a4y <?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'total\'][\'goods_number\']>3) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
a50<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
">
								<ul>
									<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php  $_smarty_tpl->tpl_vars[\'v\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'v\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'key\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'val\']->value[\'goods_list\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'v\']->key => $_smarty_tpl->tpl_vars[\'v\']->value) {
$_smarty_tpl->tpl_vars[\'v\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'key\']->value = $_smarty_tpl->tpl_vars[\'v\']->key;
?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

									<li data-rec="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'rec_id\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
">
										<img src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'img\'][\'thumb\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
">
										<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'v\']->value[\'is_disabled\']==1) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

										<div class="product_empty"><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'disabled_label\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
</div>
										<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

										<em><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'v\']->value[\'goods_price\']==0) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
免费<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } else { ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'formated_goods_price\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
</em>
										<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'v\']->value[\'goods_number\']>1&&$_smarty_tpl->tpl_vars[\'v\']->value[\'is_disabled\']!=1) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

										<i><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'v\']->value[\'goods_number\']>99) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
99+<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } else { ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'goods_number\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
</i>
										<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

									</li>
									<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

								</ul>
								<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'total\'][\'goods_number\']>3) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

								<div class="a4z">共<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'total\'][\'goods_number\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
件</div>
								<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

							</div>
						</div>
						<div class="w4 remove_all" data-store="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart_list\']->value[\'local\'][0][\'seller_id\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
"><span>删除</span></div>
					</div>
					<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }
if (!$_smarty_tpl->tpl_vars[\'val\']->_loop) {
?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

					<div class="a57"><span>当前位置购物车空空如也哦～</span></div>
					<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

					
					<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'cart_list\']->value[\'other\']) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

					<div class="a4u a4u-gray"><div class="a4v"><i>其他位置</i></div></div>
					<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php  $_smarty_tpl->tpl_vars[\'val\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'val\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'cart_list\']->value[\'other\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'val\']->key => $_smarty_tpl->tpl_vars[\'val\']->value) {
$_smarty_tpl->tpl_vars[\'val\']->_loop = true;
?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

					<div class="a4w other_place">
						<div class="a4p">
							<a class="a4x" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo RC_Uri::url(\'merchant/index/init\');?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
&store_id=<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'seller_id\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
&from=cart&out=1">
								<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'seller_name\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

								<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'manage_mode\']==\'self\') {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<span class="self-store">自营</span><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

							</a>
							<div class="a4y <?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'total\'][\'goods_number\']>3) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
a50<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
">
								<ul>
									<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php  $_smarty_tpl->tpl_vars[\'v\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'v\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'key\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'val\']->value[\'goods_list\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'v\']->key => $_smarty_tpl->tpl_vars[\'v\']->value) {
$_smarty_tpl->tpl_vars[\'v\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'key\']->value = $_smarty_tpl->tpl_vars[\'v\']->key;
?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

									<li data-rec="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'rec_id\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
">
										<img src="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'img\'][\'thumb\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
">
										<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'v\']->value[\'is_disabled\']==1) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

										<div class="product_empty"><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'disabled_label\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
</div>
										<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

										<em><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'v\']->value[\'goods_price\']==0) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
免费<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } else { ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'formated_goods_price\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
</em>
										<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'v\']->value[\'goods_number\']>1&&$_smarty_tpl->tpl_vars[\'v\']->value[\'is_disabled\']!=1) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

										<i><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'v\']->value[\'goods_number\']>99) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
99+<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } else { ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'v\']->value[\'goods_number\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
</i>
										<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

									</li>
									<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

								</ul>
								<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'total\'][\'goods_number\']>3) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

								<div class="a4z">共<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'total\'][\'goods_number\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
件</div>
								<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

							</div>
						</div>
						<div class="w4 remove_all" data-store="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart_list\']->value[\'other\'][0][\'seller_id\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
"><span>删除</span></div>
					</div>
					<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

					<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

				</div>
				<input type="hidden" name="update_cart_url" value="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo RC_Uri::url(\'cart/index/update_cart\');?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
" />
			</div>
		<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php } else { ?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

		<div class="flow-no-pro">
			<div class="ecjia-nolist">
				您还没有添加商品
				<a class="btn btn-small" type="button" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo smarty_function_url(array(\'path\'=>\'touch/index/init\'),$_smarty_tpl);?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
"><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php $_smarty_tpl->smarty->_tag_stack[] = array(\'t\', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
去逛逛<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
</a>
			</div>
		</div>
		<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

	<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>

	<input type="hidden" name="index_url" value="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo RC_Uri::url(\'touch/index/init\');?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
" />
</div>
<?php /*  Call merged included template "library/address_modal.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/address_modal.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '6560597d6985584969-61892218');
content_597d6986a76821_71246131($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/address_modal.lbi.php" */?>
<?php /*  Call merged included template "library/model_bar.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/model_bar.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '6560597d6985584969-61892218');
content_597d6986d936e4_20419188($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/model_bar.lbi.php" */?>

<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->getSubTemplate ("library/page_menu.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>


<script type="text/javascript">ecjia.touch.category.init();</script>

<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:07:18
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\library\address_modal.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d6986a76821_71246131')) {function content_597d6986a76821_71246131($_smarty_tpl) {?>
<div class="ecjia-modal">
	<div class="modal-inner">
		<div class="modal-title"><i class="position"></i>您当前使用的地址是：</div>
		<div class="modal-text"><?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_COOKIE[\'location_name\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
</div>
	</div>
	<div class="modal-buttons modal-buttons-2 modal-buttons-vertical">
		<a href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo RC_Uri::url(\'user/address/add_address\');?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
&clear=1<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_COOKIE[\'location_address\']) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
&addr=<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_COOKIE[\'location_name\'];?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'referer_url\']->value) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
&referer_url=<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'referer_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
"><span class="modal-button" style="border-radius: 0;"><span class="create_address">新建收货地址</span></span></a>
		<a href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo RC_Uri::url(\'location/index/select_location\');?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php if ($_smarty_tpl->tpl_vars[\'referer_url\']->value) {?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
&referer_url=<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'referer_url\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php }?>/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
"><span class="modal-button"><span class="edit_address">更换地址</span></span></a>
	</div>
</div>
<div class="ecjia-modal-overlay ecjia-modal-overlay-visible"></div><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:07:18
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\library\model_bar.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d6986d936e4_20419188')) {function content_597d6986d936e4_20419188($_smarty_tpl) {?><div class="ecjia-mod ecjia-floor ecjia-bottom-bar-pannel o <?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo $_smarty_tpl->tpl_vars[\'active\']->value;?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
">
	<a class="index" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo RC_Uri::url(\'touch/index/init\');?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
">首页</a>
	<a class="category" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo RC_Uri::url(\'goods/category/init\');?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
">分类</a>
	<a class="discover" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo RC_Uri::url(\'article/index/init\');?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
">发现</a>
	<a class="cartList" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo RC_Uri::url(\'cart/index/init\');?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
">购物车</a>
	<a class="mine" href="<?php echo '/*%%SmartyNocache:6560597d6985584969-61892218%%*/<?php echo RC_Uri::url(\'touch/my/init\');?>
/*/%%SmartyNocache:6560597d6985584969-61892218%%*/';?>
">我的</a>
</div><?php }} ?>
