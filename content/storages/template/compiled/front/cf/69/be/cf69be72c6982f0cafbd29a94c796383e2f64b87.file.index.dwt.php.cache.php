<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 04:58:31
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\index.dwt.php" */ ?>
<?php /*%%SmartyHeaderCode:8386597d6777c6de39-03110431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf69be72c6982f0cafbd29a94c796383e2f64b87' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\index.dwt.php',
      1 => 1498202373,
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
    '02ac16efc2d15d98789d0259cf6d429767fcf523' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\model_banner.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
    '5b8ff6015b0a52f07e340d10b453a4e39c3d056d' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\model_nav.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
    '954dbceaf431c5da6d3ca24206259c5e98cd22d3' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\model_adsense.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
    'b866d93e22f099633f7c526200686bf32c043426' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\model_promotions.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
    '4f0f2a6b50c6f35ba7dd44f0ec6f142a0560ca61' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\model_newgoods.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
    'e199be76699c2bf009917bf75cf541858f9b8b19' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\model_store.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
    'a9c4fec1220e6e4a89c59d881c63c6c13985e842' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\model_bar.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
    '17c42ed95ba9339a850b6c820e4f80f663d0a23f' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\model_download.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8386597d6777c6de39-03110431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'theme_url' => 0,
    'curr_style' => 0,
    'key' => 0,
    'referer' => 0,
    'hidenav' => 0,
    'hidetab' => 0,
    'hideinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_597d677b732dc6_95245811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d677b732dc6_95245811')) {function content_597d677b732dc6_95245811($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'E:\\net\\ecshop\\content\\system\\smarty\\function.url.php';
?><?php if (!is_pjax()) {?>
<?php if (is_ajax()) {?>

	
	<?php  $_smarty_tpl->tpl_vars['goods'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goods']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goods']->key => $_smarty_tpl->tpl_vars['goods']->value) {
$_smarty_tpl->tpl_vars['goods']->_loop = true;
?>
	<li class="single_item">
		<a class="list-page-goods-img" href="<?php echo RC_Uri::url('goods/index/show');?>
&goods_id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['id'];?>
">
			<span class="goods-img">
				<img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['img']['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value['name'];?>
">
			</span>
			<span class="list-page-box">
				<p class="merchants-name"><i class="iconfont icon-shop"></i><?php echo $_smarty_tpl->tpl_vars['goods']->value['seller_name'];?>
</p>
				<span class="goods-name"><?php echo $_smarty_tpl->tpl_vars['goods']->value['name'];?>
</span>
				<span class="list-page-goods-price">
					<span><?php echo $_smarty_tpl->tpl_vars['goods']->value['shop_price'];?>
</span>
				</span>
			</span>
		</a>
	</li>
	<?php } ?>
	

<?php } else { ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta name="Generator" content="ECJIA 1.20" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=0, minimal-ui">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="format-detection" content="telephone=no" />
	<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
	<link href="<?php if (ecjia::config('wap_logo')) {?><?php echo RC_Upload::upload_url(ecjia::config('wap_logo'));?>
<?php } else { ?>favicon.ico<?php }?>" rel="shortcut icon bookmark">
	<link href="<?php if (ecjia::config('wap_logo')) {?><?php echo RC_Upload::upload_url(ecjia::config('wap_logo'));?>
<?php } else { ?>favicon.ico<?php }?>" rel="apple-touch-icon-precomposed">

	
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/bootstrap3/css/bootstrap.css">

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
dist/css/iconfont.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
css/ecjia.touch.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
css/ecjia.touch.develop.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
css/ecjia.touch.b2b2c.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
css/ecjia_city.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
css/ecjia_help.css">
    
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
css/ecjia.touch.models.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
dist/other/swiper.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/datePicker/css/datePicker.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/winderCheck/css/winderCheck.min.css">
    
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/photoswipe/css/photoswipe.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/photoswipe/css/default-skin/default-skin.css">
    
	
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['curr_style']->value;?>
">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/iOSOverlay/css/iosOverlay.css">
</head>
<body>
	<div class="ecjia" id="get_location" data-url="<?php echo smarty_function_url(array('path'=>'location/index/get_location_msg'),$_smarty_tpl);?>
">
		<input type="hidden" name="key" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"/>
		<input type="hidden" name="referer" value="<?php echo $_smarty_tpl->tpl_vars['referer']->value;?>
"/>
		

<?php /*  Call merged included template "library/index_header.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/index_header.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8386597d6777c6de39-03110431');
content_597d6778bd1da7_70970173($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/index_header.lbi.php" */?>
<?php /*  Call merged included template "library/model_banner.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/model_banner.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8386597d6777c6de39-03110431');
content_597d67792aa301_01463645($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/model_banner.lbi.php" */?>
<?php /*  Call merged included template "library/model_nav.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/model_nav.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8386597d6777c6de39-03110431');
content_597d677947ef72_69700245($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/model_nav.lbi.php" */?>
<?php /*  Call merged included template "library/model_adsense.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/model_adsense.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8386597d6777c6de39-03110431');
content_597d677968a6f0_53940450($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/model_adsense.lbi.php" */?>
<?php /*  Call merged included template "library/model_promotions.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/model_promotions.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8386597d6777c6de39-03110431');
content_597d6779a6e962_78224427($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/model_promotions.lbi.php" */?>
<?php /*  Call merged included template "library/model_newgoods.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/model_newgoods.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8386597d6777c6de39-03110431');
content_597d677a0f8cb9_50688394($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/model_newgoods.lbi.php" */?>
<?php /*  Call merged included template "library/model_store.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/model_store.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8386597d6777c6de39-03110431');
content_597d677a52b136_85905855($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/model_store.lbi.php" */?>
<?php /*  Call merged included template "library/model_bar.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/model_bar.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8386597d6777c6de39-03110431');
content_597d677abb6f46_30371346($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/model_bar.lbi.php" */?>



<?php /*  Call merged included template "library/model_download.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/model_download.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8386597d6777c6de39-03110431');
content_597d677acb0f76_99524195($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/model_download.lbi.php" */?>


		<?php echo $_smarty_tpl->getSubTemplate ("library/page_menu.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	</div>
	
	<script charset="utf-8" src="https://map.qq.com/api/js?v=2.exp&libraries=convertor"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/jquery/jquery.min.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/multi-select/js/jquery.quicksearch.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/jquery/jquery.pjax.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/jquery/jquery.cookie.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/iscroll/js/iscroll.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/bootstrap3/js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/ecjiaUI/ecjia.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/jquery-form/jquery.form.min.js" ></script>	
	<script type="text/javascript" src="https://3gimg.qq.com/lightmap/components/geolocation/geolocation.min.js"></script>
	
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/jquery-localstorage/jquery.localstorage.js" ></script>	
	
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/photoswipe/js/photoswipe.min.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/photoswipe/js/photoswipe-ui-default.min.js"></script>

	
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.koala.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.others.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.goods.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.user.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.flow.js" ></script>

    <script type="text/javascript">var theme_url = "<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
";</script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.goods_detail.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.spread.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.user_account.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.franchisee.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.comment.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.raty.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.fly.js" ></script>
    
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.intro.min.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/Validform/Validform_v5.3.2_min.js"></script>

	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/swiper/js/swiper.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/datePicker/js/datePicker.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/winderCheck/js/winderCheck.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/greenCheck.js"></script>
    
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/iOSOverlay/js/iosOverlay.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/iOSOverlay/js/prettify.js"></script>
	
<script type="text/javascript">
    ecjia.touch.index.init();
</script>

	<script type="text/javascript">
    	window.onunload = unload;
    	function unload (e){
    	  window.scrollTo(0,0);
    	}
	</script>
	<script type="text/javascript">
		var hidenav = <?php if ($_smarty_tpl->tpl_vars['hidenav']->value==1) {?>1<?php } else { ?>0<?php }?>, hidetab = <?php if ($_smarty_tpl->tpl_vars['hidetab']->value==1) {?>1<?php } else { ?>0<?php }?>, hideinfo = <?php if ($_smarty_tpl->tpl_vars['hideinfo']->value) {?>1<?php } else { ?>0<?php }?>;
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
<?php }?>
<?php } else { ?>
<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>



<?php /*  Call merged included template "library/index_header.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/index_header.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8386597d6777c6de39-03110431');
content_597d6778bd1da7_70970173($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/index_header.lbi.php" */?>
<?php /*  Call merged included template "library/model_banner.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/model_banner.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8386597d6777c6de39-03110431');
content_597d67792aa301_01463645($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/model_banner.lbi.php" */?>
<?php /*  Call merged included template "library/model_nav.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/model_nav.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8386597d6777c6de39-03110431');
content_597d677947ef72_69700245($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/model_nav.lbi.php" */?>
<?php /*  Call merged included template "library/model_adsense.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/model_adsense.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8386597d6777c6de39-03110431');
content_597d677968a6f0_53940450($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/model_adsense.lbi.php" */?>
<?php /*  Call merged included template "library/model_promotions.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/model_promotions.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8386597d6777c6de39-03110431');
content_597d6779a6e962_78224427($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/model_promotions.lbi.php" */?>
<?php /*  Call merged included template "library/model_newgoods.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/model_newgoods.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8386597d6777c6de39-03110431');
content_597d677a0f8cb9_50688394($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/model_newgoods.lbi.php" */?>
<?php /*  Call merged included template "library/model_store.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/model_store.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8386597d6777c6de39-03110431');
content_597d677a52b136_85905855($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/model_store.lbi.php" */?>
<?php /*  Call merged included template "library/model_bar.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/model_bar.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8386597d6777c6de39-03110431');
content_597d677abb6f46_30371346($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/model_bar.lbi.php" */?>



<?php /*  Call merged included template "library/model_download.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/model_download.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8386597d6777c6de39-03110431');
content_597d677acb0f76_99524195($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/model_download.lbi.php" */?>


<?php echo $_smarty_tpl->getSubTemplate ("library/page_menu.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<script type="text/javascript">
    ecjia.touch.index.init();
</script>

<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 04:58:32
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\library\index_header.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d6778bd1da7_70970173')) {function content_597d6778bd1da7_70970173($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'E:\\net\\ecshop\\content\\system\\smarty\\function.url.php';
?>
<?php if ($_smarty_tpl->tpl_vars['address']->value) {?>
<div class="ecjia-mod ecjia-header ecjia-header-index" style="height:5.5em" id="location">
	<div class="ecjia-web">
		<div class="ecjia-address">
			<a href="<?php echo smarty_function_url(array('path'=>'location/index/select_location'),$_smarty_tpl);?>
">
				<p class="address-text"><?php echo $_COOKIE['location_name'];?>
</p>
				<i class="bottom-jiantou"></i>
			</a>
		</div>
	</div>
	
	<div class="ecjia-search-header">
		<span class="bg search-goods" style="margin-top:2em;" data-url="<?php echo RC_Uri::url('touch/index/search');?>
<?php if ($_smarty_tpl->tpl_vars['store_id']->value) {?>&store_id=<?php echo $_smarty_tpl->tpl_vars['store_id']->value;?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['keywords']->value!='') {?>style="text-align: left;" data-val="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"<?php }?>>
			<i class="iconfont icon-search"></i><?php if ($_smarty_tpl->tpl_vars['keywords']->value!='') {?><span class="keywords"><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
</span><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['store_id']->value) {?>搜索店内商品<?php } else { ?>搜索附近门店<?php }?><?php }?>
		</span>
	</div>
</div>
<?php } else { ?>
<div class="ecjia-mod ecjia-header ecjia-header-index">
	<div class="ecjia-search-header">
		<span class="bg search-goods" data-url="<?php echo RC_Uri::url('touch/index/search');?>
<?php if ($_smarty_tpl->tpl_vars['store_id']->value) {?>&store_id=<?php echo $_smarty_tpl->tpl_vars['store_id']->value;?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['keywords']->value!='') {?>style="text-align: left;" data-val="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"<?php }?>>
			<i class="iconfont icon-search"></i><?php if ($_smarty_tpl->tpl_vars['keywords']->value!='') {?><span class="keywords"><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
</span><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['store_id']->value) {?>搜索店内商品<?php } else { ?>搜索附近门店<?php }?><?php }?>
		</span>
	</div>
</div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 04:58:33
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\library\model_banner.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d67792aa301_01463645')) {function content_597d67792aa301_01463645($_smarty_tpl) {?><div class="ecjia-mod focus" id="focus">
	<div class="hd">
		<ul></ul>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['cycleimage']->value) {?>
	<div class="bd ecjia-mod-cycleimage">
		<div class="swiper-container" id="swiper-touchIndex">
			<div class="swiper-wrapper">
				<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cycleimage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
				<div class="swiper-slide"><a href="<?php echo $_smarty_tpl->tpl_vars['img']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['photo']['url'];?>
" /></a></div>
				<?php } ?>
			</div>
			<div class="swiper-pagination"></div>
		</div>
	</div>
	<?php }?>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 04:58:33
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\library\model_nav.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d677947ef72_69700245')) {function content_597d677947ef72_69700245($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['navigator']->value) {?>
<nav class="ecjia-mod container-fluid user-nav">
	<ul class="row ecjia-row-nav index">
		<?php  $_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nav']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navigator']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->key => $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
?>
		<li class="col-sm-3 col-xs-2">
			<a href="<?php echo $_smarty_tpl->tpl_vars['nav']->value['url'];?>
">
				<?php if ($_smarty_tpl->tpl_vars['nav']->value['image']) {?>
				<img src="<?php echo $_smarty_tpl->tpl_vars['nav']->value['image'];?>
" />
				<?php } else { ?>
				<img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
dist/images/default_icon.png" alt="">
				<?php }?>
				<p class="text-center"><?php echo $_smarty_tpl->tpl_vars['nav']->value['text'];?>
</p>
			</a>
		</li>
		<?php } ?>
	</ul>
</nav>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 04:58:33
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\library\model_adsense.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d677968a6f0_53940450')) {function content_597d677968a6f0_53940450($_smarty_tpl) {?><div class="ecjia-mod <?php if (!$_smarty_tpl->tpl_vars['data']->value&&!$_smarty_tpl->tpl_vars['new_goods']->value&&!$_smarty_tpl->tpl_vars['promotion_goods']->value) {?>ecjia-mod-pb35<?php }?>">
	<ul class="ecjia-adsense-model">
	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['adsense_group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
		<li class="adsense-item">
			<div class="adsense-title">
				<?php if ($_smarty_tpl->tpl_vars['val']->value['title']) {?>
				<h2><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</h2>
				<?php }?>
			</div>
			<ul class="adsense-group">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['val']->value['adsense']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<li class="adsense-single <?php if ($_smarty_tpl->tpl_vars['val']->value['count']==3) {?>img-th-item<?php } elseif ((($_smarty_tpl->tpl_vars['val']->value['count']==1||$_smarty_tpl->tpl_vars['val']->value['count']==4)&&$_smarty_tpl->tpl_vars['key']->value>0)) {?>img-item<?php }?>">
					<a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"></a>
				</li>
				<?php } ?>
			</ul>
		</li>
	<?php } ?>
	</ul>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 04:58:33
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\library\model_promotions.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d6779a6e962_78224427')) {function content_597d6779a6e962_78224427($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['promotion_goods']->value) {?>
<div class="ecjia-mod ecjia-promotion-model ecjia-margin-t <?php if (!$_smarty_tpl->tpl_vars['data']->value&&!$_smarty_tpl->tpl_vars['new_goods']->value) {?>ecjia-mod-pb35<?php }?>">
	<div class="head-title">
		<h2><i class="icon-promotion"></i>促销商品<a href="<?php echo $_smarty_tpl->tpl_vars['more_sales']->value;?>
" class="more_info">更多</a></h2>
	</div>
	<div class="swiper-container swiper-promotion">
		<div class="swiper-wrapper">
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['promotion_goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
			<div class="swiper-slide">
				<a class="list-page-goods-img" href="<?php echo RC_Uri::url('goods/index/show');?>
&goods_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
					<span class="goods-img">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['img']['small'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
">
                        <span class="promote-time" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['promote_end_date'];?>
"></span>
                    </span>
					<span class="list-page-box">
						<span class="goods-name"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</span>
						<span class="list-page-goods-price">
							<?php if ($_smarty_tpl->tpl_vars['val']->value['promote_price']) {?>
							<span><?php echo $_smarty_tpl->tpl_vars['val']->value['promote_price'];?>
</span>
							<?php } else { ?>
							<span><?php echo $_smarty_tpl->tpl_vars['val']->value['shop_price'];?>
</span>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['val']->value['shop_price']) {?>
                    		<span><del><?php echo $_smarty_tpl->tpl_vars['val']->value['shop_price'];?>
</del></span>
                    		<?php }?>
						</span>
					</span>
				</a>
				<img class="sales-icon" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/icon-promote@2x.png">
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 04:58:34
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\library\model_newgoods.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d677a0f8cb9_50688394')) {function content_597d677a0f8cb9_50688394($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['new_goods']->value) {?>
<div class="ecjia-mod ecjia-new-model ecjia-margin-t <?php if (!$_smarty_tpl->tpl_vars['data']->value) {?>ecjia-mod-pb35<?php }?>">
	<div class="head-title ecjia-new-goods">
		<h2><i class="icon-new"></i>新品推荐<a href="<?php echo $_smarty_tpl->tpl_vars['more_news']->value;?>
" class="more_info">更多</a></h2>
	</div>
	<div class="swiper-container swiper-promotion">
		<div class="swiper-wrapper">
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
			<div class="swiper-slide">
				<a class="list-page-goods-img" href="<?php echo RC_Uri::url('goods/index/show');?>
&goods_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
					<span class="goods-img"><img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['img']['small'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
"></span>
					<span class="list-page-box">
						<span class="goods-name"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</span>
						<span class="list-page-goods-price">
							<?php if ($_smarty_tpl->tpl_vars['val']->value['promote_price']) {?>
							<span><?php echo $_smarty_tpl->tpl_vars['val']->value['promote_price'];?>
</span>
							<?php } else { ?>
							<span><?php echo $_smarty_tpl->tpl_vars['val']->value['shop_price'];?>
</span>
							<?php }?>
						</span>
					</span>
				</a>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 04:58:34
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\library\model_store.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d677a52b136_85905855')) {function content_597d677a52b136_85905855($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'E:\\net\\ecshop\\content\\system\\smarty\\function.url.php';
?><?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
<div class="ecjia-mod ecjia-store-model ecjia-margin-t">
	<div class="head-title">
		<h2><i class="icon-store"></i>推荐店铺</h2>
	</div>
	<ul class="ecjia-suggest-store" id="suggest_store_list" <?php if ($_smarty_tpl->tpl_vars['is_last']->value!=1) {?>data-toggle="asynclist" data-loadimg="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
dist/images/loader.gif" data-url="<?php echo smarty_function_url(array('path'=>'index/ajax_suggest_store'),$_smarty_tpl);?>
" data-page="2" <?php }?>>
		<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
		<li class="store-info">
			<div class="basic-info">
				<div class="store-left">
					<a href="<?php echo RC_Uri::url('merchant/index/init');?>
&store_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
						<img src="<?php echo $_smarty_tpl->tpl_vars['val']->value['seller_logo'];?>
">
					</a>
				</div>
				<div class="store-right">
					<a href="<?php echo RC_Uri::url('merchant/index/init');?>
&store_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
						<div class="store-title">
							<span class="store-name"><?php echo $_smarty_tpl->tpl_vars['val']->value['seller_name'];?>
</span>
							<?php if ($_smarty_tpl->tpl_vars['val']->value['manage_mode']=='self') {?><span class="manage_mode">自营</span><?php }?>
							<span class="store-distance"><?php echo $_smarty_tpl->tpl_vars['val']->value['distance'];?>
</span>
						</div>
						<div class="store-range">
							<i class="icon-shop-time"></i><?php echo $_smarty_tpl->tpl_vars['val']->value['label_trade_time'];?>

						</div>
						<div class="store-notice">
							<i class="icon-shop-notice"></i><?php echo $_smarty_tpl->tpl_vars['val']->value['seller_notice'];?>

						</div>
						<?php if ($_smarty_tpl->tpl_vars['val']->value['favourable_list']) {?>
						<ul class="store-promotion">
							<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['val']->value['favourable_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
							<li class="promotion">
								<span class="promotion-label"><?php echo $_smarty_tpl->tpl_vars['list']->value['type_label'];?>
</span>
								<span class="promotion-name"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</span>
							</li>
							<?php } ?>
						</ul>
						<?php }?>
					</a>
					<?php if ($_smarty_tpl->tpl_vars['val']->value['seller_goods']) {?>
					<div class="suggest-goods-list">
						<?php  $_smarty_tpl->tpl_vars['goods'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goods']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['val']->value['seller_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goods']->key => $_smarty_tpl->tpl_vars['goods']->value) {
$_smarty_tpl->tpl_vars['goods']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['goods']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['key']->value<4) {?>
						<a href="<?php echo RC_Uri::url('merchant/index/init');?>
&store_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['img']['small'];?>
">
							<span class="goods_price"><?php if ($_smarty_tpl->tpl_vars['goods']->value['promote_price']) {?><?php echo $_smarty_tpl->tpl_vars['goods']->value['promote_price'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['goods']->value['shop_price'];?>
<?php }?></span>
						</a>
						<?php }?>
						<?php } ?>
					</div>
					<?php }?>
				</div>
				<div class="clear_both"></div>
			</div>
		</li>
		<?php } ?>
	</ul>
</div>
<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 04:58:34
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\library\model_bar.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d677abb6f46_30371346')) {function content_597d677abb6f46_30371346($_smarty_tpl) {?><div class="ecjia-mod ecjia-floor ecjia-bottom-bar-pannel o <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
">
	<a class="index" href="<?php echo RC_Uri::url('touch/index/init');?>
">首页</a>
	<a class="category" href="<?php echo RC_Uri::url('goods/category/init');?>
">分类</a>
	<a class="discover" href="<?php echo RC_Uri::url('article/index/init');?>
">发现</a>
	<a class="cartList" href="<?php echo RC_Uri::url('cart/index/init');?>
">购物车</a>
	<a class="mine" href="<?php echo RC_Uri::url('touch/my/init');?>
">我的</a>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 04:58:34
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\library\model_download.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d677acb0f76_99524195')) {function content_597d677acb0f76_99524195($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['close_download']->value&&$_smarty_tpl->tpl_vars['download_app_switch']->value) {?>
<div class="ecjia-download">
	<a class="btn_install" href="<?php echo $_smarty_tpl->tpl_vars['down_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['app_download_img']->value;?>
"></a>
	<a class="close_tip"></a>
	<iframe name="openapp" style="display:none"></iframe>
</div>
<?php }?><?php }} ?>
