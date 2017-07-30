<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:00:20
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\select_location.dwt.php" */ ?>
<?php /*%%SmartyHeaderCode:31347597d67e4a9dee0-34803479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae733a84e5261451794b9366ee953c50cc903b6b' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\select_location.dwt.php',
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
  'nocache_hash' => '31347597d67e4a9dee0-34803479',
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
  'unifunc' => 'content_597d67e61e3e00_68055810',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d67e61e3e00_68055810')) {function content_597d67e61e3e00_68055810($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'E:\\net\\ecshop\\content\\system\\smarty\\function.url.php';
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
		
<div class="ecjia-zs" id="ecjia-zs" data-type="index" data-url="<?php echo smarty_function_url(array('path'=>'touch/index/init'),$_smarty_tpl);?>
">
	<div class="ecjia-zt a1">
		<a href="<?php ob_start();?><?php if ($_GET['city_id']) {?><?php echo "&city_id=";?><?php echo (string)$_GET['city_id'];?><?php } else { ?><?php echo "&city_id=";?><?php echo (string)$_COOKIE['city_id'];?><?php }?><?php $_tmp1=ob_get_clean();?><?php echo smarty_function_url(array('path'=>'location/index/select_city','args'=>"type=search".$_tmp1),$_smarty_tpl);?>
">
			<h2 class="ecjia-zu"><span class="city-name"><?php if ($_COOKIE['city_name']) {?><?php echo $_COOKIE['city_name'];?>
<?php } else { ?>请选择<?php }?></span></h2>
 		</a>
		<input class="ecjia-zv" type="text" id="search_location_list" data-toggle="search-address" data-url="<?php echo smarty_function_url(array('path'=>'location/index/search_list'),$_smarty_tpl);?>
"  name="address" placeholder="选择城市、小区、写字楼、学校" maxlength="50" >
	</div>
	<div class="ecjia-zw">
		<a class="external" href="<?php echo $_smarty_tpl->tpl_vars['my_location']->value;?>
">
			<div class="ecjia-zx"><i></i><p>点击定位当前地点</p></div>
		</a>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['login']->value) {?>
	<div class="ecjia-list ecjia-address-list ecjia-select-address">
		<div class="address-backgroundw"><span>我的收货地址</span></div>
		<ul class="list-one">
			<?php if ($_smarty_tpl->tpl_vars['address_list']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['address_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
			<li>
				<a data-toggle="choose_address" href="<?php echo RC_Uri::url('user/address/choose_address');?>
&address_id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
<?php if ($_smarty_tpl->tpl_vars['referer_url']->value) {?>&referer_url=<?php echo $_smarty_tpl->tpl_vars['referer_url']->value;?>
<?php }?>">
					<div class="circle"></div>
					<div class="list">
						<div>
							<p class="ecjiaf-fl ecjia-mw6"><?php echo $_smarty_tpl->tpl_vars['value']->value['consignee'];?>
</p>
							<p class="ecjiaf-fl ecjia-margin-l ecjia-address-mobile"><?php echo $_smarty_tpl->tpl_vars['value']->value['mobile'];?>
</p>
						</div><br />
						<div class="ecjia-margin-top address ecjiaf-wwb"><?php echo $_smarty_tpl->tpl_vars['value']->value['address'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['address_info'];?>
</div>	
					</div>
				</a>
			</li>
			<?php } ?>
			<?php } else { ?>
			<li class="no-address">您当前还没有收货地址</li>
			<?php }?>
		</ul>
		<div class="address-list-center">
			<a type="botton" href="<?php if ($_smarty_tpl->tpl_vars['address_list']->value) {?><?php echo RC_Uri::url('user/address/address_list');?>
<?php } else { ?><?php echo RC_Uri::url('user/address/add_address');?>
&referer_url=<?php echo $_smarty_tpl->tpl_vars['location_url']->value;?>
<?php }?>">
				<i class="iconfont icon-roundadd"></i> <?php if ($_smarty_tpl->tpl_vars['address_list']->value) {?>管理收货地址<?php } else { ?>添加收货地址<?php }?>
			</a>
		</div>
	</div>
	<?php }?>
	
	<div class="ecjia-near-address">您附近的地址</div>
	<div class="ecjia-address_list">
		<ul class="nav-list-ready ecjia-location-list-wrap near-location-list">
		<?php if ($_smarty_tpl->tpl_vars['content']->value) {?>
		<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
			<li data-lng="<?php echo $_smarty_tpl->tpl_vars['val']->value['location']['lng'];?>
" data-lat="<?php echo $_smarty_tpl->tpl_vars['val']->value['location']['lat'];?>
">
				<p class="list_wrapper a1">
					<span class="ecjia-list_title ecjia-location-list-title"><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</span>
					<span class="ecjia-list_title ecjia-location-list-address"><?php echo $_smarty_tpl->tpl_vars['val']->value['address'];?>
</span>
				</p>
			</li>
		<?php } ?>
		<?php }?>
		</ul>   
		<ul class="nav-list-ready ecjia-location-list-wrap location-search-result">
		</ul> 
	</div>
</div>

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
	ecjia.touch.region_change();
	ecjia.touch.address_list();
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


<div class="ecjia-zs" id="ecjia-zs" data-type="index" data-url="<?php echo smarty_function_url(array('path'=>'touch/index/init'),$_smarty_tpl);?>
">
	<div class="ecjia-zt a1">
		<a href="<?php ob_start();?><?php if ($_GET['city_id']) {?><?php echo "&city_id=";?><?php echo (string)$_GET['city_id'];?><?php } else { ?><?php echo "&city_id=";?><?php echo (string)$_COOKIE['city_id'];?><?php }?><?php $_tmp2=ob_get_clean();?><?php echo smarty_function_url(array('path'=>'location/index/select_city','args'=>"type=search".$_tmp2),$_smarty_tpl);?>
">
			<h2 class="ecjia-zu"><span class="city-name"><?php if ($_COOKIE['city_name']) {?><?php echo $_COOKIE['city_name'];?>
<?php } else { ?>请选择<?php }?></span></h2>
 		</a>
		<input class="ecjia-zv" type="text" id="search_location_list" data-toggle="search-address" data-url="<?php echo smarty_function_url(array('path'=>'location/index/search_list'),$_smarty_tpl);?>
"  name="address" placeholder="选择城市、小区、写字楼、学校" maxlength="50" >
	</div>
	<div class="ecjia-zw">
		<a class="external" href="<?php echo $_smarty_tpl->tpl_vars['my_location']->value;?>
">
			<div class="ecjia-zx"><i></i><p>点击定位当前地点</p></div>
		</a>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['login']->value) {?>
	<div class="ecjia-list ecjia-address-list ecjia-select-address">
		<div class="address-backgroundw"><span>我的收货地址</span></div>
		<ul class="list-one">
			<?php if ($_smarty_tpl->tpl_vars['address_list']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['address_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
			<li>
				<a data-toggle="choose_address" href="<?php echo RC_Uri::url('user/address/choose_address');?>
&address_id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
<?php if ($_smarty_tpl->tpl_vars['referer_url']->value) {?>&referer_url=<?php echo $_smarty_tpl->tpl_vars['referer_url']->value;?>
<?php }?>">
					<div class="circle"></div>
					<div class="list">
						<div>
							<p class="ecjiaf-fl ecjia-mw6"><?php echo $_smarty_tpl->tpl_vars['value']->value['consignee'];?>
</p>
							<p class="ecjiaf-fl ecjia-margin-l ecjia-address-mobile"><?php echo $_smarty_tpl->tpl_vars['value']->value['mobile'];?>
</p>
						</div><br />
						<div class="ecjia-margin-top address ecjiaf-wwb"><?php echo $_smarty_tpl->tpl_vars['value']->value['address'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['address_info'];?>
</div>	
					</div>
				</a>
			</li>
			<?php } ?>
			<?php } else { ?>
			<li class="no-address">您当前还没有收货地址</li>
			<?php }?>
		</ul>
		<div class="address-list-center">
			<a type="botton" href="<?php if ($_smarty_tpl->tpl_vars['address_list']->value) {?><?php echo RC_Uri::url('user/address/address_list');?>
<?php } else { ?><?php echo RC_Uri::url('user/address/add_address');?>
&referer_url=<?php echo $_smarty_tpl->tpl_vars['location_url']->value;?>
<?php }?>">
				<i class="iconfont icon-roundadd"></i> <?php if ($_smarty_tpl->tpl_vars['address_list']->value) {?>管理收货地址<?php } else { ?>添加收货地址<?php }?>
			</a>
		</div>
	</div>
	<?php }?>
	
	<div class="ecjia-near-address">您附近的地址</div>
	<div class="ecjia-address_list">
		<ul class="nav-list-ready ecjia-location-list-wrap near-location-list">
		<?php if ($_smarty_tpl->tpl_vars['content']->value) {?>
		<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['content']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
			<li data-lng="<?php echo $_smarty_tpl->tpl_vars['val']->value['location']['lng'];?>
" data-lat="<?php echo $_smarty_tpl->tpl_vars['val']->value['location']['lat'];?>
">
				<p class="list_wrapper a1">
					<span class="ecjia-list_title ecjia-location-list-title"><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</span>
					<span class="ecjia-list_title ecjia-location-list-address"><?php echo $_smarty_tpl->tpl_vars['val']->value['address'];?>
</span>
				</p>
			</li>
		<?php } ?>
		<?php }?>
		</ul>   
		<ul class="nav-list-ready ecjia-location-list-wrap location-search-result">
		</ul> 
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("library/page_menu.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<script type="text/javascript">
	ecjia.touch.region_change();
	ecjia.touch.address_list();
</script>

<?php }?><?php }} ?>
