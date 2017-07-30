<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:01:57
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\search.dwt.php" */ ?>
<?php /*%%SmartyHeaderCode:5541597d68459119d6-66263659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f46ff474c9ddbd84e9bb1dc529b59488d4edf6f' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\search.dwt.php',
      1 => 1498202374,
      2 => 'file',
    ),
    '0ca7a90c9cf9c6e3b82ac5b2647a09b563279891' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\ecjia-touch.dwt.php',
      1 => 1498202372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5541597d68459119d6-66263659',
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
  'unifunc' => 'content_597d684756c693_60729864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d684756c693_60729864')) {function content_597d684756c693_60729864($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'E:\\net\\ecshop\\content\\system\\smarty\\function.url.php';
if (!is_callable('smarty_block_t')) include 'E:\\net\\ecshop\\content\\system\\smarty\\block.t.php';
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
		
<header class="ecjia-header">
	<div class="ecjia-search-header ecjia-search">
		<form class="ecjia-form" action="<?php echo smarty_function_url(array('path'=>'goods/category/store_list'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['store_id']->value!=0) {?>&store_id=<?php echo $_smarty_tpl->tpl_vars['store_id']->value;?>
<?php }?>">
			<input id="keywordBox" name="keywords" type="search" placeholder="<?php if ($_smarty_tpl->tpl_vars['store_id']->value!=0) {?>搜索店内商品<?php } else { ?>搜索附近门店<?php }?>" <?php if ($_smarty_tpl->tpl_vars['keywords']->value) {?>value=<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php }?>>
			<i class="iconfont icon-search btn-search"></i>
		</form>
		<div class="cancel"><a href="javascript:history.go(-1)">取消</a></div>
	</div>
</header>

<?php if ($_smarty_tpl->tpl_vars['searchs']->value) {?>
<div class="ecjia-search-history">
	<p class="title">
		搜索 （<?php echo $_smarty_tpl->tpl_vars['searchs_count']->value;?>
条记录） <?php if ($_smarty_tpl->tpl_vars['searchs']->value) {?><a class="ecjiaf-csp" data-toggle="del_history" data-href="<?php echo smarty_function_url(array('path'=>'touch/index/del_search'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['store_id']->value) {?>&store_id=<?php echo $_smarty_tpl->tpl_vars['store_id']->value;?>
<?php }?>"><span class="delete-icon"></span><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
清除<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php }?>
	</p>
	<div>
		<ul>
			<?php  $_smarty_tpl->tpl_vars['search'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['search']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searchs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['search']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['search']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['search']->key => $_smarty_tpl->tpl_vars['search']->value) {
$_smarty_tpl->tpl_vars['search']->_loop = true;
 $_smarty_tpl->tpl_vars['search']->iteration++;
 $_smarty_tpl->tpl_vars['search']->last = $_smarty_tpl->tpl_vars['search']->iteration === $_smarty_tpl->tpl_vars['search']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['keywords']['last'] = $_smarty_tpl->tpl_vars['search']->last;
?>
			<a href='<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['store_id']->value!=0) {?><?php echo "store_id=";?><?php echo (string)$_smarty_tpl->tpl_vars['store_id']->value;?><?php echo "&";?><?php }?><?php $_tmp1=ob_get_clean();?><?php echo smarty_function_url(array('path'=>"goods/category/store_list",'args'=>$_tmp1."keywords=".((string)$_smarty_tpl->tpl_vars['search']->value)),$_smarty_tpl);?>
'>
				<li>
					<p class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['keywords']['last']) {?>border-none<?php }?>"><?php echo $_smarty_tpl->tpl_vars['search']->value;?>
</p>
				</li>
			</a>
			<?php } ?>
		</ul>
	</div>
</div>
<?php } else { ?>
<div class="ecjia-no-record">您还没有搜索记录</div>
<?php }?>

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
	
<script type="text/javascript">ecjia.touch.enter_search();</script>

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


<header class="ecjia-header">
	<div class="ecjia-search-header ecjia-search">
		<form class="ecjia-form" action="<?php echo smarty_function_url(array('path'=>'goods/category/store_list'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['store_id']->value!=0) {?>&store_id=<?php echo $_smarty_tpl->tpl_vars['store_id']->value;?>
<?php }?>">
			<input id="keywordBox" name="keywords" type="search" placeholder="<?php if ($_smarty_tpl->tpl_vars['store_id']->value!=0) {?>搜索店内商品<?php } else { ?>搜索附近门店<?php }?>" <?php if ($_smarty_tpl->tpl_vars['keywords']->value) {?>value=<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php }?>>
			<i class="iconfont icon-search btn-search"></i>
		</form>
		<div class="cancel"><a href="javascript:history.go(-1)">取消</a></div>
	</div>
</header>

<?php if ($_smarty_tpl->tpl_vars['searchs']->value) {?>
<div class="ecjia-search-history">
	<p class="title">
		搜索 （<?php echo $_smarty_tpl->tpl_vars['searchs_count']->value;?>
条记录） <?php if ($_smarty_tpl->tpl_vars['searchs']->value) {?><a class="ecjiaf-csp" data-toggle="del_history" data-href="<?php echo smarty_function_url(array('path'=>'touch/index/del_search'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['store_id']->value) {?>&store_id=<?php echo $_smarty_tpl->tpl_vars['store_id']->value;?>
<?php }?>"><span class="delete-icon"></span><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
清除<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><?php }?>
	</p>
	<div>
		<ul>
			<?php  $_smarty_tpl->tpl_vars['search'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['search']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['searchs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['search']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['search']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['search']->key => $_smarty_tpl->tpl_vars['search']->value) {
$_smarty_tpl->tpl_vars['search']->_loop = true;
 $_smarty_tpl->tpl_vars['search']->iteration++;
 $_smarty_tpl->tpl_vars['search']->last = $_smarty_tpl->tpl_vars['search']->iteration === $_smarty_tpl->tpl_vars['search']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['keywords']['last'] = $_smarty_tpl->tpl_vars['search']->last;
?>
			<a href='<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['store_id']->value!=0) {?><?php echo "store_id=";?><?php echo (string)$_smarty_tpl->tpl_vars['store_id']->value;?><?php echo "&";?><?php }?><?php $_tmp2=ob_get_clean();?><?php echo smarty_function_url(array('path'=>"goods/category/store_list",'args'=>$_tmp2."keywords=".((string)$_smarty_tpl->tpl_vars['search']->value)),$_smarty_tpl);?>
'>
				<li>
					<p class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['keywords']['last']) {?>border-none<?php }?>"><?php echo $_smarty_tpl->tpl_vars['search']->value;?>
</p>
				</li>
			</a>
			<?php } ?>
		</ul>
	</div>
</div>
<?php } else { ?>
<div class="ecjia-no-record">您还没有搜索记录</div>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("library/page_menu.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<script type="text/javascript">ecjia.touch.enter_search();</script>

<?php }?><?php }} ?>
