<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 04:58:55
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\store_list.dwt.php" */ ?>
<?php /*%%SmartyHeaderCode:11130597d678f03e122-41427347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55949ffa06fc54a571a2af24cf78396a83e1cb39' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\store_list.dwt.php',
      1 => 1498202374,
      2 => 'file',
    ),
    '0ca7a90c9cf9c6e3b82ac5b2647a09b563279891' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\ecjia-touch.dwt.php',
      1 => 1498202372,
      2 => 'file',
    ),
    '479f6c5ab5c51dba1b370891802d9e70a91bc15a' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\index_header.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
    '960f3d1d17cb24464854582136934e1d25244916' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\goods_attr_static_modal.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
    '91418ce8bd89e8ce3b93c7ff8654b310f910afc8' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\address_modal.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11130597d678f03e122-41427347',
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
  'unifunc' => 'content_597d679405e703_08380618',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d679405e703_08380618')) {function content_597d679405e703_08380618($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_url\')) include \'E:\\\\net\\\\ecshop\\\\content\\\\system\\\\smarty\\\\function.url.php\';
?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if (!is_pjax()) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if (is_ajax()) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>


	<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php  $_smarty_tpl->tpl_vars[\'val\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'val\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'goods_list\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'val\']->key => $_smarty_tpl->tpl_vars[\'val\']->value) {
$_smarty_tpl->tpl_vars[\'val\']->_loop = true;
?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

	<li class="search-goods-list">
		<a class="linksGoods w" href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo RC_Uri::url(\'goods/index/show\');?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&goods_id=<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
			<img class="pic" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'img\'][\'small\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
			<dl>
				<dt><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'name\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</dt>
				<dd></dd>
				<dd><label><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'promote_price\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'promote_price\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'shop_price\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</label></dd>
			</dl>
		</a>
		<div class="box" id="goods_<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
			<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'specification\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

			<div class="goods_attr goods_spec_<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
				<span class="choose_attr spec_goods" rec_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'rec_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" goods_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-num="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'num\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-spec="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'default_spec\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-url="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo RC_Uri::url(\'cart/index/check_spec\');?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&store_id=<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'store_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">选规格</span>
				<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'num\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<i class="attr-number"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'num\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</i><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

			</div>
			<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

			<span class="reduce <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'num\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
show<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
hide<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-toggle="remove-to-cart" rec_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'rec_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">减11</span>
			<label class="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'num\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
show<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
hide<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'num\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</label>
			<span class="add" data-toggle="add-to-cart" rec_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'rec_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" goods_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">加11</span>
			<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		</div>
	</li>
	<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>


<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta name="Generator" content="ECJIA 1.20" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=0, minimal-ui">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="format-detection" content="telephone=no" />
	<title><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'page_title\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</title>
	<link href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if (ecjia::config(\'wap_logo\')) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo RC_Upload::upload_url(ecjia::config(\'wap_logo\'));?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
favicon.ico<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" rel="shortcut icon bookmark">
	<link href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if (ecjia::config(\'wap_logo\')) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo RC_Upload::upload_url(ecjia::config(\'wap_logo\'));?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
favicon.ico<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" rel="apple-touch-icon-precomposed">

	
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
lib/bootstrap3/css/bootstrap.css">

	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
dist/css/iconfont.min.css">
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
css/ecjia.touch.css">
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
css/ecjia.touch.develop.css">
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
css/ecjia.touch.b2b2c.css">
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
css/ecjia_city.css">
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
css/ecjia_help.css">
    
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
css/ecjia.touch.models.css">
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
dist/other/swiper.min.css">
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
lib/datePicker/css/datePicker.min.css">
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
lib/winderCheck/css/winderCheck.min.css">
    
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
lib/photoswipe/css/photoswipe.css">
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
lib/photoswipe/css/default-skin/default-skin.css">
    
	
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'curr_style\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
lib/iOSOverlay/css/iosOverlay.css">
</head>
<body>
	<div class="ecjia" id="get_location" data-url="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo smarty_function_url(array(\'path\'=>\'location/index/get_location_msg\'),$_smarty_tpl);?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
		<input type="hidden" name="key" value="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'key\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
"/>
		<input type="hidden" name="referer" value="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'referer\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
"/>
		
<?php /*  Call merged included template "library/index_header.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/index_header.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '11130597d678f03e122-41427347');
content_597d678f87f796_13945779($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/index_header.lbi.php" */?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'data\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

<div class="ecjia-mod ecjia-store-goods-list" <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'store_id\']->value&&$_smarty_tpl->tpl_vars[\'count_search\']->value>6) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
style="padding-bottom:7em;"<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
>
	<ul class="ecjia-store-list" <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'is_last\']->value!=1) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
data-toggle="asynclist" data-loadimg="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
dist/images/loader.gif" data-url="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo smarty_function_url(array(\'path\'=>\'goods/category/store_list\'),$_smarty_tpl);?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&type=ajax_get<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'store_id\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&store_id=<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'store_id\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&keywords=<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'keywords\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'cid\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&cid=<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cid\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-page="2"<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
>
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php  $_smarty_tpl->tpl_vars[\'val\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'val\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'data\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'val\']->key => $_smarty_tpl->tpl_vars[\'val\']->value) {
$_smarty_tpl->tpl_vars[\'val\']->_loop = true;
?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if (!$_smarty_tpl->tpl_vars[\'store_id\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		<li class="single_item">
			<ul class="single_store">
				<li class="store-info">
					<a href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo RC_Uri::url(\'merchant/index/init\');?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&store_id=<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
					<div class="basic-info">
						<div class="store-left">
							<img src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'seller_logo\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'seller_logo\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
images/store_default.png<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
						</div>
						<div class="store-right">
							<div class="store-title">
								<span class="store-name"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'seller_name\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</span>
								<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'manage_mode\']==\'self\') {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<span class="manage_mode">自营</span><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

								<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'distance\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<span class="store-distance"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'distance\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</span><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

							</div>
							<div class="store-range">
								<i class="icon-shop-time"></i><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'label_trade_time\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

							</div>
							<div class="store-notice">
								<i class="icon-shop-notice"></i><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'seller_notice\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

							</div>
						</div>
						<div class="clear"></div>
					</div>
					<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'favourable_list\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

					<ul class="store-promotion">
						<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php  $_smarty_tpl->tpl_vars[\'list\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'list\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'val\']->value[\'favourable_list\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'list\']->key => $_smarty_tpl->tpl_vars[\'list\']->value) {
$_smarty_tpl->tpl_vars[\'list\']->_loop = true;
?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

						<li class="promotion">
							<span class="promotion-label"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'list\']->value[\'type_label\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</span>
							<span class="promotion-name"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'list\']->value[\'name\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</span>
						</li>
						<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

					</ul>
					<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

					</a>
					<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'seller_goods\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

					<ul class="store-goods">
						<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php  $_smarty_tpl->tpl_vars[\'goods\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'goods\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'key\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'val\']->value[\'seller_goods\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'goods\']->key => $_smarty_tpl->tpl_vars[\'goods\']->value) {
$_smarty_tpl->tpl_vars[\'goods\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'key\']->value = $_smarty_tpl->tpl_vars[\'goods\']->key;
?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

							<a href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo RC_Uri::url(\'goods/index/show\');?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&goods_id=<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'goods\']->value[\'goods_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
							<li class="goods-info <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'key\']->value>2) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
goods-hide-list<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
								<span class="goods-image"><img src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'goods\']->value[\'img\'][\'small\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
"></span>
								<p>
									<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'goods\']->value[\'name\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

									<label class="price"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'goods\']->value[\'promote_price\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'goods\']->value[\'promote_price\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'goods\']->value[\'shop_price\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</label>
								</p>
							</li>
							</a>
						<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

					</ul>
					<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

				</li>
			</ul>
			<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'goods_count\']>3) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

			<ul>
				<li class="goods-info view-more">
					查看更多（<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'goods_count\']-3;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
）<i class="iconfont icon-jiantou-bottom"></i>
				</li>
				<li class="goods-info view-more retract hide">
					收起<i class="iconfont icon-jiantou-top"></i>
				</li>
			</ul>
			<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		</li>
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		<li class="search-goods-list">
			<a class="linksGoods w"  href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo RC_Uri::url(\'goods/index/show\');?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&goods_id=<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
				<img class="pic" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'img\'][\'small\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
				<dl>
					<dt><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'name\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</dt>
					<dd><label><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'promote_price\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'promote_price\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'shop_price\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</label></dd>
				</dl>
			</a>
			<div class="box" id="goods_<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
				<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'specification\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

				<div class="goods_attr goods_spec_<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
					<span class="choose_attr spec_goods" rec_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'rec_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" goods_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-num="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'num\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-spec="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'default_spec\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-url="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo RC_Uri::url(\'cart/index/check_spec\');?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&store_id=<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'store_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">选规格</span>
					<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'num\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<i class="attr-number"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'num\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</i><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

				</div>
				<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

				<span class="reduce <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'num\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
show<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
hide<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-toggle="remove-to-cart" rec_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'rec_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">减</span>
				<label class="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'num\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
show<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
hide<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'num\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</label>
				<span class="add" data-toggle="add-to-cart" rec_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'rec_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" goods_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">加</span>
				<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

			</div>
		</li>
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

	</ul>
	<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'store_id\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

	<div class="ecjia-h48"></div>
	<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

</div>
<?php /*  Call merged included template "library/goods_attr_static_modal.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/goods_attr_static_modal.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '11130597d678f03e122-41427347');
content_597d67901dc613_02298989($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/goods_attr_static_modal.lbi.php" */?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

<div class="ecjia-mod search-no-pro ecjia-margin-t ecjia-margin-b">
	<div class="ecjia-nolist">
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if (!$_smarty_tpl->tpl_vars[\'store_id\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		<p><img src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
images/no_store.png"></p>
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		<p><img src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
images/no_goods.png"></p>
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'keywords\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		暂无搜索结果
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		暂时没有商家
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

	</div>
</div>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>


<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'store_id\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

<div class="ecjia-mod store-add-cart a4w">
	<div class="a52"></div>
	<a href="javascript:void 0;" class="a4x <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'real_count\']->value[\'goods_number\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
light<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
disabled<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
 outcartcontent show show_cart" show="false">
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'real_count\']->value[\'goods_number\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		<i class="a4y">
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'real_count\']->value[\'goods_number\']>99) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
99+<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'real_count\']->value[\'goods_number\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		</i>
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

	</a>
	<div class="a4z" style="transform: translateX(0px);">
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if (!$_smarty_tpl->tpl_vars[\'real_count\']->value[\'goods_number\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

			<div class="a50">购物车是空的</div>
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		<div>
			<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'count\']->value[\'goods_price\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'count\']->value[\'discount\']!=0) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<label>(已减<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'count\']->value[\'discount\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
)</label><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		</div>
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

	</div>
	<a class="a51 <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if (!$_smarty_tpl->tpl_vars[\'count\']->value[\'check_one\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
disabled<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
 check_cart" data-href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo RC_Uri::url(\'cart/flow/checkout\');?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-store="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'store_id\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-address="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'address_id\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-rec="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'rec_id\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" href="javascript:;">去结算</a>
	<div class="minicart-content" style="transform: translateY(0px); display: block;">
		<a href="javascript:void 0;" class="a4x <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'count\']->value[\'goods_number\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
light<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
disabled<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
 incartcontent show_cart" show="false">
			<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'real_count\']->value[\'goods_number\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

			<i class="a4y">
			<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'real_count\']->value[\'goods_number\']>99) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
99+<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'real_count\']->value[\'goods_number\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

			</i>
			<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		</a>
		<i class="a57"></i>
		<div class="a58 ">
			<span class="a69 a6a <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'count\']->value[\'check_all\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
checked<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-toggle="toggle_checkbox" data-children=".checkbox" id="checkall">全选</span>
			<p class="a6c">(已选<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'count\']->value[\'goods_number\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
件)</p>
			<a href="javascript:void 0;" class="a59" data-toggle="deleteall" data-url="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo RC_Uri::url(\'cart/index/update_cart\');?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">清空购物车</a>
		</div>
		<div class="a5b" style="max-height: 21em;">
			<div class="a5l single">
				<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'store_info\']->value[\'favourable_list\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

				<ul class="store-promotion" id="store-promotion">
					<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php  $_smarty_tpl->tpl_vars[\'list\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'list\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'store_info\']->value[\'favourable_list\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'list\']->key => $_smarty_tpl->tpl_vars[\'list\']->value) {
$_smarty_tpl->tpl_vars[\'list\']->_loop = true;
?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

					<li class="promotion">
						<span class="promotion-label"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'list\']->value[\'type_label\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</span>
						<span class="promotion-name"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'list\']->value[\'name\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</span>
					</li>
					<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

				</ul>
				<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

				<ul class="minicart-goods-list single"> 
					<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php  $_smarty_tpl->tpl_vars[\'cart\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'cart\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'cart_list\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'cart\']->key => $_smarty_tpl->tpl_vars[\'cart\']->value) {
$_smarty_tpl->tpl_vars[\'cart\']->_loop = true;
?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

					<li class="a5n single <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'cart\']->value[\'is_disabled\']==1) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
disabled<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
						<span class="a69 a5o <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'cart\']->value[\'is_checked\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
checked<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
 checkbox <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'cart\']->value[\'is_disabled\']==1) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
disabled<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-toggle="toggle_checkbox" rec_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'rec_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
"></span>
						<table class="a5s">
							<tbody>
								<tr>
									<td style="width:75px; height:75px">
										<img class="a7g" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'img\'][\'small\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
										<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'cart\']->value[\'is_disabled\']==1) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

										<div class="product_empty"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'disabled_label\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</div>
										<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

									</td>
									<td>
										<div class="a7j"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'goods_name\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</div> 
										<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'cart\']->value[\'attr\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<div class="a7s"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'attr\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</div><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

										<span class="a7c">
										<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'cart\']->value[\'goods_price\']==0) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
免费<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'formated_goods_price\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

										</span>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="box" id="goods_cart_<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'goods_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
							<span class="a5u reduce <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'cart\']->value[\'is_disabled\']==1) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
disabled<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-toggle="remove-to-cart" rec_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'rec_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" goods_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'goods_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
"></span>
							<lable class="a5x"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'goods_number\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</lable>
							<span class="a5v <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'cart\']->value[\'is_disabled\']==1) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
disabled<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-toggle="add-to-cart" rec_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'rec_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" goods_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'goods_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
"></span>
						</div>
					</li>
					<input type="hidden" name="rec_id" value="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'rec_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" />
					<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

				</ul>
				<div class="a5m single"></div>
			</div>
		</div>
	</div>
</div>

<div class="a53" style="display: none;"></div>
<input type="hidden" value="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo RC_Uri::url(\'cart/index/update_cart\');?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" name="update_cart_url" />
<input type="hidden" value="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'store_id\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" name="store_id" />
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

<?php /*  Call merged included template "library/address_modal.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/address_modal.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '11130597d678f03e122-41427347');
content_597d67914612c0_21729068($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/address_modal.lbi.php" */?>	

		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->getSubTemplate ("library/page_menu.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

	</div>
	
	<script charset="utf-8" src="https://map.qq.com/api/js?v=2.exp&libraries=convertor"></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
lib/jquery/jquery.min.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
lib/multi-select/js/jquery.quicksearch.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
lib/jquery/jquery.pjax.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
lib/jquery/jquery.cookie.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
lib/iscroll/js/iscroll.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
lib/bootstrap3/js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
lib/ecjiaUI/ecjia.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
lib/jquery-form/jquery.form.min.js" ></script>	
	<script type="text/javascript" src="https://3gimg.qq.com/lightmap/components/geolocation/geolocation.min.js"></script>
	
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
lib/jquery-localstorage/jquery.localstorage.js" ></script>	
	
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
lib/photoswipe/js/photoswipe.min.js"></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
lib/photoswipe/js/photoswipe-ui-default.min.js"></script>

	
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
js/ecjia.touch.koala.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
js/ecjia.touch.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
js/ecjia.touch.others.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
js/ecjia.touch.goods.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
js/ecjia.touch.user.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
js/ecjia.touch.flow.js" ></script>

    <script type="text/javascript">var theme_url = "<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
";</script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
js/ecjia.touch.goods_detail.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
js/ecjia.touch.spread.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
js/ecjia.touch.user_account.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
js/ecjia.touch.franchisee.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
js/ecjia.touch.comment.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
js/ecjia.touch.raty.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
js/ecjia.touch.fly.js" ></script>
    
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
js/ecjia.touch.intro.min.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
lib/Validform/Validform_v5.3.2_min.js"></script>

	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
lib/swiper/js/swiper.min.js"></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
lib/datePicker/js/datePicker.min.js"></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
lib/winderCheck/js/winderCheck.min.js"></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
js/greenCheck.js"></script>
    
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
lib/iOSOverlay/js/iosOverlay.js"></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
lib/iOSOverlay/js/prettify.js"></script>
	
<script type="text/javascript">
ecjia.touch.category.init();
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'releated_goods\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

var releated_goods = <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'releated_goods\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
;
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

</script>

	<script type="text/javascript">
    	window.onunload = unload;
    	function unload (e){
    	  window.scrollTo(0,0);
    	}
	</script>
	<script type="text/javascript">
		var hidenav = <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'hidenav\']->value==1) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
1<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
0<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
, hidetab = <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'hidetab\']->value==1) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
1<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
0<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
, hideinfo = <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'hideinfo\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
1<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
0<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
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
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

<title><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'page_title\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</title>


<?php /*  Call merged included template "library/index_header.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/index_header.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '11130597d678f03e122-41427347');
content_597d678f87f796_13945779($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/index_header.lbi.php" */?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'data\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

<div class="ecjia-mod ecjia-store-goods-list" <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'store_id\']->value&&$_smarty_tpl->tpl_vars[\'count_search\']->value>6) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
style="padding-bottom:7em;"<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
>
	<ul class="ecjia-store-list" <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'is_last\']->value!=1) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
data-toggle="asynclist" data-loadimg="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
dist/images/loader.gif" data-url="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo smarty_function_url(array(\'path\'=>\'goods/category/store_list\'),$_smarty_tpl);?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&type=ajax_get<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'store_id\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&store_id=<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'store_id\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&keywords=<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'keywords\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'cid\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&cid=<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cid\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-page="2"<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
>
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php  $_smarty_tpl->tpl_vars[\'val\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'val\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'data\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'val\']->key => $_smarty_tpl->tpl_vars[\'val\']->value) {
$_smarty_tpl->tpl_vars[\'val\']->_loop = true;
?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if (!$_smarty_tpl->tpl_vars[\'store_id\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		<li class="single_item">
			<ul class="single_store">
				<li class="store-info">
					<a href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo RC_Uri::url(\'merchant/index/init\');?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&store_id=<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
					<div class="basic-info">
						<div class="store-left">
							<img src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'seller_logo\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'seller_logo\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
images/store_default.png<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
						</div>
						<div class="store-right">
							<div class="store-title">
								<span class="store-name"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'seller_name\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</span>
								<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'manage_mode\']==\'self\') {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<span class="manage_mode">自营</span><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

								<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'distance\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<span class="store-distance"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'distance\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</span><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

							</div>
							<div class="store-range">
								<i class="icon-shop-time"></i><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'label_trade_time\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

							</div>
							<div class="store-notice">
								<i class="icon-shop-notice"></i><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'seller_notice\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

							</div>
						</div>
						<div class="clear"></div>
					</div>
					<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'favourable_list\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

					<ul class="store-promotion">
						<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php  $_smarty_tpl->tpl_vars[\'list\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'list\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'val\']->value[\'favourable_list\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'list\']->key => $_smarty_tpl->tpl_vars[\'list\']->value) {
$_smarty_tpl->tpl_vars[\'list\']->_loop = true;
?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

						<li class="promotion">
							<span class="promotion-label"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'list\']->value[\'type_label\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</span>
							<span class="promotion-name"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'list\']->value[\'name\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</span>
						</li>
						<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

					</ul>
					<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

					</a>
					<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'seller_goods\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

					<ul class="store-goods">
						<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php  $_smarty_tpl->tpl_vars[\'goods\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'goods\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'key\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'val\']->value[\'seller_goods\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'goods\']->key => $_smarty_tpl->tpl_vars[\'goods\']->value) {
$_smarty_tpl->tpl_vars[\'goods\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'key\']->value = $_smarty_tpl->tpl_vars[\'goods\']->key;
?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

							<a href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo RC_Uri::url(\'goods/index/show\');?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&goods_id=<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'goods\']->value[\'goods_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
							<li class="goods-info <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'key\']->value>2) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
goods-hide-list<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
								<span class="goods-image"><img src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'goods\']->value[\'img\'][\'small\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
"></span>
								<p>
									<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'goods\']->value[\'name\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

									<label class="price"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'goods\']->value[\'promote_price\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'goods\']->value[\'promote_price\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'goods\']->value[\'shop_price\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</label>
								</p>
							</li>
							</a>
						<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

					</ul>
					<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

				</li>
			</ul>
			<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'goods_count\']>3) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

			<ul>
				<li class="goods-info view-more">
					查看更多（<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'goods_count\']-3;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
）<i class="iconfont icon-jiantou-bottom"></i>
				</li>
				<li class="goods-info view-more retract hide">
					收起<i class="iconfont icon-jiantou-top"></i>
				</li>
			</ul>
			<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		</li>
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		<li class="search-goods-list">
			<a class="linksGoods w"  href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo RC_Uri::url(\'goods/index/show\');?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&goods_id=<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
				<img class="pic" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'img\'][\'small\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
				<dl>
					<dt><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'name\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</dt>
					<dd><label><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'promote_price\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'promote_price\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'shop_price\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</label></dd>
				</dl>
			</a>
			<div class="box" id="goods_<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
				<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'specification\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

				<div class="goods_attr goods_spec_<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
					<span class="choose_attr spec_goods" rec_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'rec_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" goods_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-num="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'num\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-spec="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'default_spec\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-url="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo RC_Uri::url(\'cart/index/check_spec\');?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&store_id=<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'store_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">选规格</span>
					<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'num\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<i class="attr-number"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'num\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</i><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

				</div>
				<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

				<span class="reduce <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'num\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
show<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
hide<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-toggle="remove-to-cart" rec_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'rec_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">减</span>
				<label class="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'num\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
show<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
hide<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'num\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</label>
				<span class="add" data-toggle="add-to-cart" rec_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'rec_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" goods_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">加</span>
				<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

			</div>
		</li>
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

	</ul>
	<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'store_id\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

	<div class="ecjia-h48"></div>
	<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

</div>
<?php /*  Call merged included template "library/goods_attr_static_modal.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/goods_attr_static_modal.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '11130597d678f03e122-41427347');
content_597d67901dc613_02298989($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/goods_attr_static_modal.lbi.php" */?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

<div class="ecjia-mod search-no-pro ecjia-margin-t ecjia-margin-b">
	<div class="ecjia-nolist">
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if (!$_smarty_tpl->tpl_vars[\'store_id\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		<p><img src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
images/no_store.png"></p>
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		<p><img src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
images/no_goods.png"></p>
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'keywords\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		暂无搜索结果
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		暂时没有商家
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

	</div>
</div>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>


<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'store_id\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

<div class="ecjia-mod store-add-cart a4w">
	<div class="a52"></div>
	<a href="javascript:void 0;" class="a4x <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'real_count\']->value[\'goods_number\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
light<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
disabled<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
 outcartcontent show show_cart" show="false">
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'real_count\']->value[\'goods_number\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		<i class="a4y">
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'real_count\']->value[\'goods_number\']>99) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
99+<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'real_count\']->value[\'goods_number\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		</i>
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

	</a>
	<div class="a4z" style="transform: translateX(0px);">
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if (!$_smarty_tpl->tpl_vars[\'real_count\']->value[\'goods_number\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

			<div class="a50">购物车是空的</div>
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		<div>
			<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'count\']->value[\'goods_price\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'count\']->value[\'discount\']!=0) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<label>(已减<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'count\']->value[\'discount\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
)</label><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		</div>
		<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

	</div>
	<a class="a51 <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if (!$_smarty_tpl->tpl_vars[\'count\']->value[\'check_one\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
disabled<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
 check_cart" data-href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo RC_Uri::url(\'cart/flow/checkout\');?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-store="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'store_id\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-address="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'address_id\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-rec="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'rec_id\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" href="javascript:;">去结算</a>
	<div class="minicart-content" style="transform: translateY(0px); display: block;">
		<a href="javascript:void 0;" class="a4x <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'count\']->value[\'goods_number\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
light<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
disabled<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
 incartcontent show_cart" show="false">
			<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'real_count\']->value[\'goods_number\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

			<i class="a4y">
			<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'real_count\']->value[\'goods_number\']>99) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
99+<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'real_count\']->value[\'goods_number\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

			</i>
			<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		</a>
		<i class="a57"></i>
		<div class="a58 ">
			<span class="a69 a6a <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'count\']->value[\'check_all\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
checked<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-toggle="toggle_checkbox" data-children=".checkbox" id="checkall">全选</span>
			<p class="a6c">(已选<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'count\']->value[\'goods_number\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
件)</p>
			<a href="javascript:void 0;" class="a59" data-toggle="deleteall" data-url="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo RC_Uri::url(\'cart/index/update_cart\');?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">清空购物车</a>
		</div>
		<div class="a5b" style="max-height: 21em;">
			<div class="a5l single">
				<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'store_info\']->value[\'favourable_list\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

				<ul class="store-promotion" id="store-promotion">
					<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php  $_smarty_tpl->tpl_vars[\'list\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'list\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'store_info\']->value[\'favourable_list\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'list\']->key => $_smarty_tpl->tpl_vars[\'list\']->value) {
$_smarty_tpl->tpl_vars[\'list\']->_loop = true;
?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

					<li class="promotion">
						<span class="promotion-label"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'list\']->value[\'type_label\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</span>
						<span class="promotion-name"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'list\']->value[\'name\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</span>
					</li>
					<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

				</ul>
				<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

				<ul class="minicart-goods-list single"> 
					<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php  $_smarty_tpl->tpl_vars[\'cart\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'cart\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'cart_list\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'cart\']->key => $_smarty_tpl->tpl_vars[\'cart\']->value) {
$_smarty_tpl->tpl_vars[\'cart\']->_loop = true;
?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

					<li class="a5n single <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'cart\']->value[\'is_disabled\']==1) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
disabled<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
						<span class="a69 a5o <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'cart\']->value[\'is_checked\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
checked<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
 checkbox <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'cart\']->value[\'is_disabled\']==1) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
disabled<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-toggle="toggle_checkbox" rec_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'rec_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
"></span>
						<table class="a5s">
							<tbody>
								<tr>
									<td style="width:75px; height:75px">
										<img class="a7g" src="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'img\'][\'small\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
										<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'cart\']->value[\'is_disabled\']==1) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

										<div class="product_empty"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'disabled_label\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</div>
										<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

									</td>
									<td>
										<div class="a7j"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'goods_name\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</div> 
										<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'cart\']->value[\'attr\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<div class="a7s"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'attr\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</div><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

										<span class="a7c">
										<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'cart\']->value[\'goods_price\']==0) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
免费<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'formated_goods_price\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

										</span>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="box" id="goods_cart_<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'goods_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
							<span class="a5u reduce <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'cart\']->value[\'is_disabled\']==1) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
disabled<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-toggle="remove-to-cart" rec_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'rec_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" goods_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'goods_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
"></span>
							<lable class="a5x"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'goods_number\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</lable>
							<span class="a5v <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'cart\']->value[\'is_disabled\']==1) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
disabled<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" data-toggle="add-to-cart" rec_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'rec_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" goods_id="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'goods_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
"></span>
						</div>
					</li>
					<input type="hidden" name="rec_id" value="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'cart\']->value[\'rec_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" />
					<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

				</ul>
				<div class="a5m single"></div>
			</div>
		</div>
	</div>
</div>

<div class="a53" style="display: none;"></div>
<input type="hidden" value="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo RC_Uri::url(\'cart/index/update_cart\');?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" name="update_cart_url" />
<input type="hidden" value="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'store_id\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" name="store_id" />
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

<?php /*  Call merged included template "library/address_modal.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/address_modal.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '11130597d678f03e122-41427347');
content_597d67914612c0_21729068($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/address_modal.lbi.php" */?>	

<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->getSubTemplate ("library/page_menu.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>


<script type="text/javascript">
ecjia.touch.category.init();
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'releated_goods\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

var releated_goods = <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'releated_goods\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
;
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

</script>

<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 04:58:55
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\library\index_header.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d678f87f796_13945779')) {function content_597d678f87f796_13945779($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_url\')) include \'E:\\\\net\\\\ecshop\\\\content\\\\system\\\\smarty\\\\function.url.php\';
?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'address\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

<div class="ecjia-mod ecjia-header ecjia-header-index" style="height:5.5em" id="location">
	<div class="ecjia-web">
		<div class="ecjia-address">
			<a href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo smarty_function_url(array(\'path\'=>\'location/index/select_location\'),$_smarty_tpl);?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
">
				<p class="address-text"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_COOKIE[\'location_name\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</p>
				<i class="bottom-jiantou"></i>
			</a>
		</div>
	</div>
	
	<div class="ecjia-search-header">
		<span class="bg search-goods" style="margin-top:2em;" data-url="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo RC_Uri::url(\'touch/index/search\');?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'store_id\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&store_id=<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'store_id\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'keywords\']->value!=\'\') {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
style="text-align: left;" data-val="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'keywords\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
"<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
>
			<i class="iconfont icon-search"></i><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'keywords\']->value!=\'\') {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<span class="keywords"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'keywords\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</span><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'store_id\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
搜索店内商品<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
搜索附近门店<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		</span>
	</div>
</div>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

<div class="ecjia-mod ecjia-header ecjia-header-index">
	<div class="ecjia-search-header">
		<span class="bg search-goods" data-url="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo RC_Uri::url(\'touch/index/search\');?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'store_id\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&store_id=<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'store_id\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" <?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'keywords\']->value!=\'\') {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
style="text-align: left;" data-val="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'keywords\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
"<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
>
			<i class="iconfont icon-search"></i><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'keywords\']->value!=\'\') {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<span class="keywords"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'keywords\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</span><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'store_id\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
搜索店内商品<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
搜索附近门店<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

		</span>
	</div>
</div>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 04:58:56
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\library\goods_attr_static_modal.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d67901dc613_02298989')) {function content_597d67901dc613_02298989($_smarty_tpl) {?>
<div class="ecjia-attr-static ecjia-attr-modal">
	<div class="modal-inners">
		<span class="ecjia-close-modal-icon"><i class="iconfont icon-close"></i></span>
		<div class="modal-title"></div>
		<div class="goods-attr-list"></div>
	</div>
	<div class="modal-buttons modal-buttons-2 modal-buttons-vertical">
		<div class="modal-left">
			<span class="goods-attr-price"></span>
			<span class="goods-attr-name"></span>
		</div>
		<div class="ecjia-choose-attr-box box">
			<span class="add add_spec" data-toggle="add-to-cart"></span>
		    <label></label>
		    <span class="reduce remove_spec" data-toggle="remove-to-cart"></span>
		</div>           
		<a class="add-tocart add_spec" data-toggle="add-to-cart">加入购物车</a>
		<input type="hidden" name="goods_price"  />
		<input type="hidden" name="check_spec" value="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo RC_Uri::url(\'cart/index/check_spec\');?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&store_id=<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'goods_info\']->value[\'seller_id\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'goods_info\']->value[\'seller_id\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php } else { ?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'store_id\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
" />
	</div>
</div>
<div class="ecjia-attr-static-overlay ecjia-attr-static-overlay-visible"></div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 04:58:57
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\library\address_modal.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d67914612c0_21729068')) {function content_597d67914612c0_21729068($_smarty_tpl) {?>
<div class="ecjia-modal">
	<div class="modal-inner">
		<div class="modal-title"><i class="position"></i>您当前使用的地址是：</div>
		<div class="modal-text"><?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_COOKIE[\'location_name\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
</div>
	</div>
	<div class="modal-buttons modal-buttons-2 modal-buttons-vertical">
		<a href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo RC_Uri::url(\'user/address/add_address\');?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&clear=1<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_COOKIE[\'location_address\']) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&addr=<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_COOKIE[\'location_name\'];?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'referer_url\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&referer_url=<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'referer_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
"><span class="modal-button" style="border-radius: 0;"><span class="create_address">新建收货地址</span></span></a>
		<a href="<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo RC_Uri::url(\'location/index/select_location\');?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php if ($_smarty_tpl->tpl_vars[\'referer_url\']->value) {?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
&referer_url=<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php echo $_smarty_tpl->tpl_vars[\'referer_url\']->value;?>
/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
<?php echo '/*%%SmartyNocache:11130597d678f03e122-41427347%%*/<?php }?>/*/%%SmartyNocache:11130597d678f03e122-41427347%%*/';?>
"><span class="modal-button"><span class="edit_address">更换地址</span></span></a>
	</div>
</div>
<div class="ecjia-modal-overlay ecjia-modal-overlay-visible"></div><?php }} ?>
