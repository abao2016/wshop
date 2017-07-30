<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:03:13
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\goods_promotion.dwt.php" */ ?>
<?php /*%%SmartyHeaderCode:10054597d68918c4d64-45421318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b654a8e3449280b7a0a05e007f745d9d9b910df' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\goods_promotion.dwt.php',
      1 => 1498202372,
      2 => 'file',
    ),
    '0ca7a90c9cf9c6e3b82ac5b2647a09b563279891' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\ecjia-touch.dwt.php',
      1 => 1498202372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10054597d68918c4d64-45421318',
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
  'unifunc' => 'content_597d6892de5a32_69738315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d6892de5a32_69738315')) {function content_597d6892de5a32_69738315($_smarty_tpl) {?><?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_url\')) include \'E:\\\\net\\\\ecshop\\\\content\\\\system\\\\smarty\\\\function.url.php\';
?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php if (!is_pjax()) {?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>

<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php if (is_ajax()) {?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>


	
	<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php if ($_smarty_tpl->tpl_vars[\'goods_list\']->value) {?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>

	<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php  $_smarty_tpl->tpl_vars[\'val\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'val\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'goods_list\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'val\']->key => $_smarty_tpl->tpl_vars[\'val\']->value) {
$_smarty_tpl->tpl_vars[\'val\']->_loop = true;
?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>

		<li class="ecjia-margin-t">
			<a class="list-page-goods-img" href="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo RC_Uri::url(\'goods/index/show\');?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
&goods_id=<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'id\'];?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
">
				<span class="goods-img">
                    <img src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'img\'][\'thumb\'];?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
" alt="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'name\'];?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
">
                    <span class="promote-time" data-type="1" value="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'promote_end_date\'];?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
"></span>    
                </span>
				<span class="list-page-box">
					<span class="goods-name">
						<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'manage_mode\']==\'self\') {?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>

						<span class="self-label">自营</span>
						<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php }?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>

						<span class="name-label"><?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'name\'];?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
</span>
					</span>
					<span class="list-page-goods-price">
						<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'promote_price\']) {?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>

						<span><?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'promote_price\'];?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
</span>
						<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php } else { ?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>

						<span><?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'shop_price\'];?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
</span>
						<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php }?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>

						<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'shop_price\']) {?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>

	          			<del>原价：<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'shop_price\'];?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
</del>
	          			<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php }?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>

					</span>
				</span>
			</a>
			<img class="sales-icon" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
images/icon-promote@2x.png">
		</li>
	<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php } ?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>

	<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php } else { ?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>

	<div class="ecjia-mod search-no-pro ecjia-margin-t ecjia-margin-b">
		<div class="ecjia-nolist">
			<p><img src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
images/no_goods.png"></p>
			暂无商品
		</div>
	</div>
	<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php }?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>

	

<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php } else { ?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta name="Generator" content="ECJIA 1.20" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=0, minimal-ui">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="format-detection" content="telephone=no" />
	<title><?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'page_title\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
</title>
	<link href="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php if (ecjia::config(\'wap_logo\')) {?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo RC_Upload::upload_url(ecjia::config(\'wap_logo\'));?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php } else { ?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
favicon.ico<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php }?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
" rel="shortcut icon bookmark">
	<link href="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php if (ecjia::config(\'wap_logo\')) {?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo RC_Upload::upload_url(ecjia::config(\'wap_logo\'));?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php } else { ?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
favicon.ico<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php }?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
" rel="apple-touch-icon-precomposed">

	
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
lib/bootstrap3/css/bootstrap.css">

	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
dist/css/iconfont.min.css">
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
css/ecjia.touch.css">
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
css/ecjia.touch.develop.css">
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
css/ecjia.touch.b2b2c.css">
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
css/ecjia_city.css">
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
css/ecjia_help.css">
    
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
css/ecjia.touch.models.css">
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
dist/other/swiper.min.css">
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
lib/datePicker/css/datePicker.min.css">
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
lib/winderCheck/css/winderCheck.min.css">
    
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
lib/photoswipe/css/photoswipe.css">
    <link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
lib/photoswipe/css/default-skin/default-skin.css">
    
	
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'curr_style\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
">
	<link rel="stylesheet" href="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
lib/iOSOverlay/css/iosOverlay.css">
</head>
<body>
	<div class="ecjia" id="get_location" data-url="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo smarty_function_url(array(\'path\'=>\'location/index/get_location_msg\'),$_smarty_tpl);?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
">
		<input type="hidden" name="key" value="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'key\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
"/>
		<input type="hidden" name="referer" value="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'referer\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
"/>
		
<div class="ecjia-promotion-model">
	<ul class="ecjia-promotion-list" data-toggle="asynclist" data-loadimg="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
dist/images/loader.gif" data-url="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo smarty_function_url(array(\'path\'=>\'index/ajax_goods\',\'args\'=>\'type=promotion\'),$_smarty_tpl);?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
">
	</ul>
</div>

		<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->getSubTemplate ("library/page_menu.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>

	</div>
	
	<script charset="utf-8" src="https://map.qq.com/api/js?v=2.exp&libraries=convertor"></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
lib/jquery/jquery.min.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
lib/multi-select/js/jquery.quicksearch.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
lib/jquery/jquery.pjax.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
lib/jquery/jquery.cookie.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
lib/iscroll/js/iscroll.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
lib/bootstrap3/js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
lib/ecjiaUI/ecjia.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
lib/jquery-form/jquery.form.min.js" ></script>	
	<script type="text/javascript" src="https://3gimg.qq.com/lightmap/components/geolocation/geolocation.min.js"></script>
	
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
lib/jquery-localstorage/jquery.localstorage.js" ></script>	
	
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
lib/photoswipe/js/photoswipe.min.js"></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
lib/photoswipe/js/photoswipe-ui-default.min.js"></script>

	
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
js/ecjia.touch.koala.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
js/ecjia.touch.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
js/ecjia.touch.others.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
js/ecjia.touch.goods.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
js/ecjia.touch.user.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
js/ecjia.touch.flow.js" ></script>

    <script type="text/javascript">var theme_url = "<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
";</script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
js/ecjia.touch.goods_detail.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
js/ecjia.touch.spread.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
js/ecjia.touch.user_account.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
js/ecjia.touch.franchisee.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
js/ecjia.touch.comment.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
js/ecjia.touch.raty.js" ></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
js/ecjia.touch.fly.js" ></script>
    
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
js/ecjia.touch.intro.min.js" ></script>
	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
lib/Validform/Validform_v5.3.2_min.js"></script>

	<script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
lib/swiper/js/swiper.min.js"></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
lib/datePicker/js/datePicker.min.js"></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
lib/winderCheck/js/winderCheck.min.js"></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
js/greenCheck.js"></script>
    
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
lib/iOSOverlay/js/iosOverlay.js"></script>
    <script type="text/javascript" src="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
lib/iOSOverlay/js/prettify.js"></script>
	
<script type="text/javascript">ecjia.touch.index.init();</script>

	<script type="text/javascript">
    	window.onunload = unload;
    	function unload (e){
    	  window.scrollTo(0,0);
    	}
	</script>
	<script type="text/javascript">
		var hidenav = <?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php if ($_smarty_tpl->tpl_vars[\'hidenav\']->value==1) {?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
1<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php } else { ?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
0<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php }?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
, hidetab = <?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php if ($_smarty_tpl->tpl_vars[\'hidetab\']->value==1) {?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
1<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php } else { ?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
0<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php }?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
, hideinfo = <?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php if ($_smarty_tpl->tpl_vars[\'hideinfo\']->value) {?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
1<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php } else { ?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
0<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php }?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
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
<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php }?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>

<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php } else { ?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>

<title><?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'page_title\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
</title>


<div class="ecjia-promotion-model">
	<ul class="ecjia-promotion-list" data-toggle="asynclist" data-loadimg="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
dist/images/loader.gif" data-url="<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo smarty_function_url(array(\'path\'=>\'index/ajax_goods\',\'args\'=>\'type=promotion\'),$_smarty_tpl);?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
">
	</ul>
</div>

<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php echo $_smarty_tpl->getSubTemplate ("library/page_menu.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>


<script type="text/javascript">ecjia.touch.index.init();</script>

<?php echo '/*%%SmartyNocache:10054597d68918c4d64-45421318%%*/<?php }?>/*/%%SmartyNocache:10054597d68918c4d64-45421318%%*/';?>
<?php }} ?>
