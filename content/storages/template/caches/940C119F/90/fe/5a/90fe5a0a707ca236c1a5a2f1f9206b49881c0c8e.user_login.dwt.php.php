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
    '31e579fad3a052239c42caf11f87b12de31f4b60' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\page_menu.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19446597d6c6aa4ccf9-66659045',
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
  'unifunc' => 'content_597d6c6d1fc734_07422586',
  'cache_lifetime' => '3600',
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d6c6d1fc734_07422586')) {function content_597d6c6d1fc734_07422586($_smarty_tpl) {?><title>登录-ECJia到家 - 同城上门O2O解决方案</title>


<header class="ecjia-header">
	<div class="ecjia-header-left">
	</div>
	<div class="ecjia-header-title">登录</div>
		<div class="ecjia-header-right">
		<a href="http://localhost/sites/m/index.php?m=user&c=privilege&a=register">
						<span>注册</span>
					</a>
											</div>
	</header>
<div class="ecjia-form  ecjia-login">
	<div class="user-img"><img src="http://localhost/sites/m/content/themes/h5/images/user_center/icon-login-in2x.png"></div>
	<div class="form-group margin-right-left">
		<label class="input">
			<i class="iconfont icon-dengluyonghuming"></i>
			<input placeholder="请输入用户名或手机号" name="username">
		</label>
	</div>
	<div class="form-group ecjia-margin-t margin-right-left">
		<label class="input">
			<i class="iconfont icon-lock "></i>
			<i class="iconfont icon-attention ecjia-login-margin-l" id="password1"></i>
			<input placeholder="请输入密码" id="password-1" name="password" type="password">
		</label>
	</div>
	<div class="ecjia-login-login-foot ecjia-margin-b">
		<a class="ecjiaf-fr ecjia-margin-t" href="http://localhost/sites/m/index.php?m=user&c=get_password&a=mobile_register">忘记密码？</a>
	</div>
    <div class="around">
        <input type="hidden" name="referer_url" value="http://localhost/sites/m/index.php?m=cart&c=index&a=init" />
        <input type="button" class="btn btn-info login-btn" name="ecjia-login" value="登录" data-url="http://localhost/sites/m/index.php?m=user&c=privilege&a=signin"/>
    </div>
    <p class="ecjiaf-tac">其他帐号登录</p>
	<ul class="thirdparty-wrap">
    	<a href="http://localhost/sites/m/index.php?m=connect&c=index&a=init&connect_code=sns_qq"><li class="thirdparty-qq"></li></a>
    	<a href="http://localhost/sites/m/index.php?m=connect&c=index&a=init&connect_code=sns_wechat&login_type=platform_userinfo"><li class="thirdparty-weixin"></li></a>
	</ul>
</div>

<div class="ecjia-menu" id="ecjia-menu">
	<ul>
		<li><a href="http://localhost/sites/m/index.php?m=touch&c=index&a=init"><i class="iconfont icon-home"></i></a></li>
		<li><a href="http://localhost/sites/m/index.php?m=touch&c=index&a=search"><i class="iconfont icon-search"></i></a></li>
		<li><a href="http://localhost/sites/m/index.php?m=cart&c=index&a=init"><i class="iconfont icon-gouwuche"></i></a></li>
		<li><a href="http://localhost/sites/m/index.php?m=touch&c=my&a=init"><i class="iconfont icon-gerenzhongxin"></i></a></li>
		<li><a href="javascript:;"><i class="iconfont icon-top"></i></a></li>
	</ul>
	<div class="main"><a class="nopjax" href="javascript:;"><i class="iconfont icon-add"></i></a></div>
</div>


<script type="text/javascript">ecjia.touch.user.init();</script>

<?php }} ?>
