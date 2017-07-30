<?php /*%%SmartyHeaderCode:4405597d6879c7c905-72626115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7de7f25886fb6c40d7111d878992950861d98fdf' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\discover_init.dwt.php',
      1 => 1498202372,
      2 => 'file',
    ),
    '0ca7a90c9cf9c6e3b82ac5b2647a09b563279891' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\ecjia-touch.dwt.php',
      1 => 1498202372,
      2 => 'file',
    ),
    'a9c4fec1220e6e4a89c59d881c63c6c13985e842' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\model_bar.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
    '31e579fad3a052239c42caf11f87b12de31f4b60' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\page_menu.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4405597d6879c7c905-72626115',
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
  'unifunc' => 'content_597d687ba0fe11_52643041',
  'cache_lifetime' => '3600',
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d687ba0fe11_52643041')) {function content_597d687ba0fe11_52643041($_smarty_tpl) {?><?php $_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_function_url')) include 'E:\\net\\ecshop\\content\\system\\smarty\\function.url.php';
?><?php if (!is_pjax()) {?>
<?php if (is_ajax()) {?>

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
		

<div class="ecjia-discover clearfix pb_50">
	<div class="ecjia-discover-icon">
		<div class="swiper-container" id="swiper-discover-icon">
			<div class="swiper-wrapper">
				<div class="swiper-slide"><a href="<?php echo RC_Uri::url('mobile/discover/init');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/discover/75_2.png" /><span>百宝箱</span></a></div>
				<div class="swiper-slide"><a href="<?php echo $_smarty_tpl->tpl_vars['signup_reward_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/discover/75_3.png" /><span>新人有礼</span></a></div>
				<div class="swiper-slide"><a href="<?php echo RC_Uri::url('user/index/spread');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/discover/75_4.png" /><span>推广</span></a></div>
				<div class="swiper-slide"><a href="<?php echo RC_Uri::url('goods/index/new');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/discover/75_5.png" /><span>新品推荐</span></a></div>
				<div class="swiper-slide"><a href="<?php echo RC_Uri::url('goods/index/promotion');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/discover/75_6.png" /><span>促销商品</span></a></div>
			</div>
		</div>
	</div>
	
	<?php if ($_smarty_tpl->tpl_vars['cycleimage']->value) {?>
	<div class="ecjia-discover-cycleimage">
		<div class="swiper-container" id="swiper-discover-cycleimage">
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
	
	<div class="ecjia-discover-article">
		<div class="swiper-container" id="swiper-article-cat">
			<div class="swiper-wrapper">
				<div class="swiper-slide active" data-url="<?php echo smarty_function_url(array('path'=>'article/index/ajax_article_list'),$_smarty_tpl);?>
&action_type=stickie" data-type="stickie">精选</div>
				<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['article_cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['cat']->key;
?>
				<div class="swiper-slide" data-url="<?php echo smarty_function_url(array('path'=>'article/index/ajax_article_list'),$_smarty_tpl);?>
&action_type=<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_id'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
</div>
				<?php } ?>
			</div>
		</div>
		<div class="article-add"><i class="iconfont icon-jiantou-bottom"></i></div>
		
		<div class="ecjia-down-navi clearfix"> 
			<ul class="navi-list">
				<li class="navi active" data-id="stickie"><p class="navi-name">精选</p></li>
				<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['article_cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['cat']->key;
?>
				<li class="navi" data-id="<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_id'];?>
"><p class="navi-name"><?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
</p></li>
				<?php } ?>
			</ul>
		</div>
	</div>
	
	<div class="article-container" id="article-container">
		<ul class="ecjia-article article-list" id="discover-article-list" data-toggle="asynclist" data-loadimg="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
dist/images/loader.gif" data-url="<?php echo smarty_function_url(array('path'=>'article/index/ajax_article_list'),$_smarty_tpl);?>
" data-type="stickie" data-color="#f7f7f7">
		</ul>
	</div>
	<div class="ecjia-mod ecjia-floor ecjia-bottom-bar-pannel o <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
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
</div></div>


		<?php echo $_smarty_tpl->getSubTemplate ("library/page_menu.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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



<div class="ecjia-discover clearfix pb_50">
	<div class="ecjia-discover-icon">
		<div class="swiper-container" id="swiper-discover-icon">
			<div class="swiper-wrapper">
				<div class="swiper-slide"><a href="<?php echo RC_Uri::url('mobile/discover/init');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/discover/75_2.png" /><span>百宝箱</span></a></div>
				<div class="swiper-slide"><a href="<?php echo $_smarty_tpl->tpl_vars['signup_reward_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/discover/75_3.png" /><span>新人有礼</span></a></div>
				<div class="swiper-slide"><a href="<?php echo RC_Uri::url('user/index/spread');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/discover/75_4.png" /><span>推广</span></a></div>
				<div class="swiper-slide"><a href="<?php echo RC_Uri::url('goods/index/new');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/discover/75_5.png" /><span>新品推荐</span></a></div>
				<div class="swiper-slide"><a href="<?php echo RC_Uri::url('goods/index/promotion');?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/discover/75_6.png" /><span>促销商品</span></a></div>
			</div>
		</div>
	</div>
	
	<?php if ($_smarty_tpl->tpl_vars['cycleimage']->value) {?>
	<div class="ecjia-discover-cycleimage">
		<div class="swiper-container" id="swiper-discover-cycleimage">
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
	
	<div class="ecjia-discover-article">
		<div class="swiper-container" id="swiper-article-cat">
			<div class="swiper-wrapper">
				<div class="swiper-slide active" data-url="<?php echo smarty_function_url(array('path'=>'article/index/ajax_article_list'),$_smarty_tpl);?>
&action_type=stickie" data-type="stickie">精选</div>
				<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['article_cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['cat']->key;
?>
				<div class="swiper-slide" data-url="<?php echo smarty_function_url(array('path'=>'article/index/ajax_article_list'),$_smarty_tpl);?>
&action_type=<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_id'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
</div>
				<?php } ?>
			</div>
		</div>
		<div class="article-add"><i class="iconfont icon-jiantou-bottom"></i></div>
		
		<div class="ecjia-down-navi clearfix"> 
			<ul class="navi-list">
				<li class="navi active" data-id="stickie"><p class="navi-name">精选</p></li>
				<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['article_cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['cat']->key;
?>
				<li class="navi" data-id="<?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_id'];?>
"><p class="navi-name"><?php echo $_smarty_tpl->tpl_vars['cat']->value['cat_name'];?>
</p></li>
				<?php } ?>
			</ul>
		</div>
	</div>
	
	<div class="article-container" id="article-container">
		<ul class="ecjia-article article-list" id="discover-article-list" data-toggle="asynclist" data-loadimg="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
dist/images/loader.gif" data-url="<?php echo smarty_function_url(array('path'=>'article/index/ajax_article_list'),$_smarty_tpl);?>
" data-type="stickie" data-color="#f7f7f7">
		</ul>
	</div>
	<div class="ecjia-mod ecjia-floor ecjia-bottom-bar-pannel o <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
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
</div></div>


<?php echo $_smarty_tpl->getSubTemplate ("library/page_menu.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script type="text/javascript">
	ecjia.touch.index.init();
</script>

<?php }?><?php }} ?>
