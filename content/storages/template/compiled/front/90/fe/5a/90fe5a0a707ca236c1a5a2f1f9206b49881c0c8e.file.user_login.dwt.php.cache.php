<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:19:38
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\user_login.dwt.php" */ ?>
<?php /*%%SmartyHeaderCode:19446597d6c6aa4ccf9-66659045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90fe5a0a707ca236c1a5a2f1f9206b49881c0c8e' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\user_login.dwt.php',
      1 => 1498202374,
      2 => 'file',
    ),
    '0ca7a90c9cf9c6e3b82ac5b2647a09b563279891' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\ecjia-touch.dwt.php',
      1 => 1498202372,
      2 => 'file',
    ),
    '964e825e16f21a16dd5ab97eb0c70d97de9056c9' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\page_header.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19446597d6c6aa4ccf9-66659045',
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
  'unifunc' => 'content_597d6c6ce44f06_10447728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d6c6ce44f06_10447728')) {function content_597d6c6ce44f06_10447728($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'E:\\net\\ecshop\\content\\system\\smarty\\function.url.php';
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
		
<?php /*  Call merged included template "library/page_header.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/page_header.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '19446597d6c6aa4ccf9-66659045');
content_597d6c6b693da8_34792345($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/page_header.lbi.php" */?>
<div class="ecjia-form  ecjia-login">
	<div class="user-img"><img src="<?php echo $_smarty_tpl->tpl_vars['user_img']->value;?>
"></div>
	<div class="form-group margin-right-left">
		<label class="input">
			<i class="iconfont icon-dengluyonghuming"></i>
			<input placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['name_or_mobile'];?>
" name="username">
		</label>
	</div>
	<div class="form-group ecjia-margin-t margin-right-left">
		<label class="input">
			<i class="iconfont icon-lock "></i>
			<i class="iconfont icon-attention ecjia-login-margin-l" id="password1"></i>
			<input placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['input_passwd'];?>
" id="password-1" name="password" type="password">
		</label>
	</div>
	<div class="ecjia-login-login-foot ecjia-margin-b">
		<a class="ecjiaf-fr ecjia-margin-t" href="<?php echo smarty_function_url(array('path'=>'user/get_password/mobile_register'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['forgot_password'];?>
？</a>
	</div>
    <div class="around">
        <input type="hidden" name="referer_url" value="<?php echo $_GET['referer_url'];?>
" />
        <input type="button" class="btn btn-info login-btn" name="ecjia-login" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['login'];?>
" data-url="<?php echo smarty_function_url(array('path'=>'user/privilege/signin'),$_smarty_tpl);?>
"/>
    </div>
    <p class="ecjiaf-tac">其他帐号登录</p>
	<ul class="thirdparty-wrap">
    	<a href="<?php echo smarty_function_url(array('path'=>'connect/index/init','args'=>'connect_code=sns_qq'),$_smarty_tpl);?>
"><li class="thirdparty-qq"></li></a>
    	<a href="<?php echo smarty_function_url(array('path'=>'connect/index/init','args'=>'connect_code=sns_wechat&login_type=platform_userinfo'),$_smarty_tpl);?>
"><li class="thirdparty-weixin"></li></a>
	</ul>
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
	
<script type="text/javascript">ecjia.touch.user.init();</script>

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


<?php /*  Call merged included template "library/page_header.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/page_header.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '19446597d6c6aa4ccf9-66659045');
content_597d6c6b693da8_34792345($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/page_header.lbi.php" */?>
<div class="ecjia-form  ecjia-login">
	<div class="user-img"><img src="<?php echo $_smarty_tpl->tpl_vars['user_img']->value;?>
"></div>
	<div class="form-group margin-right-left">
		<label class="input">
			<i class="iconfont icon-dengluyonghuming"></i>
			<input placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['name_or_mobile'];?>
" name="username">
		</label>
	</div>
	<div class="form-group ecjia-margin-t margin-right-left">
		<label class="input">
			<i class="iconfont icon-lock "></i>
			<i class="iconfont icon-attention ecjia-login-margin-l" id="password1"></i>
			<input placeholder="<?php echo $_smarty_tpl->tpl_vars['lang']->value['input_passwd'];?>
" id="password-1" name="password" type="password">
		</label>
	</div>
	<div class="ecjia-login-login-foot ecjia-margin-b">
		<a class="ecjiaf-fr ecjia-margin-t" href="<?php echo smarty_function_url(array('path'=>'user/get_password/mobile_register'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['forgot_password'];?>
？</a>
	</div>
    <div class="around">
        <input type="hidden" name="referer_url" value="<?php echo $_GET['referer_url'];?>
" />
        <input type="button" class="btn btn-info login-btn" name="ecjia-login" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['login'];?>
" data-url="<?php echo smarty_function_url(array('path'=>'user/privilege/signin'),$_smarty_tpl);?>
"/>
    </div>
    <p class="ecjiaf-tac">其他帐号登录</p>
	<ul class="thirdparty-wrap">
    	<a href="<?php echo smarty_function_url(array('path'=>'connect/index/init','args'=>'connect_code=sns_qq'),$_smarty_tpl);?>
"><li class="thirdparty-qq"></li></a>
    	<a href="<?php echo smarty_function_url(array('path'=>'connect/index/init','args'=>'connect_code=sns_wechat&login_type=platform_userinfo'),$_smarty_tpl);?>
"><li class="thirdparty-weixin"></li></a>
	</ul>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("library/page_menu.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<script type="text/javascript">ecjia.touch.user.init();</script>

<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:19:39
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\library\page_header.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d6c6b693da8_34792345')) {function content_597d6c6b693da8_34792345($_smarty_tpl) {?><header class="ecjia-header">
	<div class="ecjia-header-left">
	</div>
	<div class="ecjia-header-title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
	<?php if ($_smarty_tpl->tpl_vars['header_right']->value) {?>
	<div class="ecjia-header-right">
		<a href="<?php echo $_smarty_tpl->tpl_vars['header_right']->value['href'];?>
">
			<?php if ($_smarty_tpl->tpl_vars['header_right']->value['icon']!='') {?>
			<i class="<?php echo $_smarty_tpl->tpl_vars['header_left']->value['icon'];?>
"></i>
			<?php } elseif ($_smarty_tpl->tpl_vars['header_right']->value['info']!='') {?>
			<span><?php echo $_smarty_tpl->tpl_vars['header_right']->value['info'];?>
</span>
			<?php }?>
		</a>
		<?php if ($_smarty_tpl->tpl_vars['header_right']->value['icon']!='') {?>
		<i class="<?php echo $_smarty_tpl->tpl_vars['header_left']->value['icon'];?>
"></i>
		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['header_right']->value['search']!='') {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['header_right']->value['search_url'];?>
" class="m_r5"><span><?php echo $_smarty_tpl->tpl_vars['header_right']->value['search'];?>
</span></a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['header_right']->value['location']!='') {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['header_right']->value['location_url'];?>
" class="nopjax external"><span><?php echo $_smarty_tpl->tpl_vars['header_right']->value['location'];?>
</span></a>
			<?php }?>
		<?php }?>
	</div>
	<?php }?>
</header>
<?php }} ?>
