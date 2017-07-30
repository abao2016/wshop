<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 04:46:29
         compiled from "E:\net\ecshop\content\apps\installer\templates\front\finish.dwt.php" */ ?>
<?php /*%%SmartyHeaderCode:32319597d64a5f3f6d1-64051470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8992f90c945db6b1a52e8d213eeaeb0349252d9' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\apps\\installer\\templates\\front\\finish.dwt.php',
      1 => 1498202368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32319597d64a5f3f6d1-64051470',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'front_url' => 1,
    'system_statics_url' => 1,
    'logo_pic' => 1,
    'finish_message' => 1,
    'locked_message' => 1,
    'admin_name' => 1,
    'admin_password' => 1,
    'index_url' => 1,
    'h5_url' => 1,
    'admin_url' => 1,
    'merchant_url' => 1,
    'version' => 1,
    'build' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_597d64a64911e8_45574100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d64a64911e8_45574100')) {function content_597d64a64911e8_45574100($_smarty_tpl) {?>
<!DOCTYPE html>
<html>
	<head lang="zh-CN">
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>ECJIA到家安装程序</title>
		<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/<?php echo $_smarty_tpl->tpl_vars[\'front_url\']->value;?>
/*/%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/';?>
/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/<?php echo $_smarty_tpl->tpl_vars[\'front_url\']->value;?>
/*/%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/';?>
/css/grid.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/<?php echo $_smarty_tpl->tpl_vars[\'front_url\']->value;?>
/*/%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/';?>
/css/style.css" />
		
		<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/<?php echo $_smarty_tpl->tpl_vars[\'front_url\']->value;?>
/*/%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/';?>
/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/<?php echo $_smarty_tpl->tpl_vars[\'system_statics_url\']->value;?>
/*/%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/';?>
/lib/bootstrap/css/bootstrap-responsive.min.css" />
	</head>
	<body>
		<div class="ecjia-install-patch">
		    <h2><img src="<?php echo '/*%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/<?php echo $_smarty_tpl->tpl_vars[\'logo_pic\']->value;?>
/*/%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/';?>
"/>ECJIA到家</h2>
		  	<ol class="path">
		        <li><span>1</span>欢迎使用</li>
		        <li><span>2</span>检查环境</li>
		        <li><span>3</span>初始化配置</li>
		        <li><span>4</span>开始安装</li>
		        <li class="current"><span>5</span>安装成功</li>
		    </ol>
		</div>
		<div class="container">
		    <div class="row">
		        <div class="col-mb-12 col-tb-8 col-tb-offset-2">
		            <div class="column-14 start-06 ecjia-install-complete">
                        <h3 class="typecho-install-title"><?php echo '/*%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/<?php echo $_smarty_tpl->tpl_vars[\'finish_message\']->value;?>
/*/%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/';?>
</h3>
		                <div class="typecho-install-body">
		                	<?php echo '/*%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/<?php if ($_smarty_tpl->tpl_vars[\'locked_message\']->value) {?>/*/%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/';?>

		                	<h5><?php echo '/*%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/<?php echo $_smarty_tpl->tpl_vars[\'locked_message\']->value;?>
/*/%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/';?>
</h5>
		                	<?php echo '/*%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/<?php }?>/*/%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/';?>

		                	
		                 	<?php echo '/*%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/<?php if (!$_smarty_tpl->tpl_vars[\'locked_message\']->value) {?>/*/%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/';?>

		             		<div class="message success">
								您的用户名是：<strong class="mono"><?php echo '/*%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/<?php echo $_smarty_tpl->tpl_vars[\'admin_name\']->value;?>
/*/%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/';?>
</strong><br>
								您的密码是：<strong class="mono"><?php echo '/*%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/<?php echo $_smarty_tpl->tpl_vars[\'admin_password\']->value;?>
/*/%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/';?>
</strong>
			                </div>
			                <?php echo '/*%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/<?php }?>/*/%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/';?>

		
		                    <div class="p message notice">
		                   		<a target="_blank" href="https://ecjia.com/wiki/%E5%B8%AE%E5%8A%A9:ECJia%E5%88%B0%E5%AE%B6">前往ECJIA WIKI，查看帮助文档，使您快速上手。</a>
		                    </div>
		
		                    <div class="session">
		                    <p>您可以将下面链接保存到您的收藏夹哦</p>
		                    <ul>  
		                    	<li><a target="_blank" href="<?php echo '/*%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/<?php echo $_smarty_tpl->tpl_vars[\'index_url\']->value;?>
/*/%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/';?>
">点击这里进入ECJIA到家首页</a></li>
		                    	<li><a target="_blank" href="<?php echo '/*%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/<?php echo $_smarty_tpl->tpl_vars[\'h5_url\']->value;?>
/*/%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/';?>
">点击这里进入ECJIA到家H5端</a></li>
		                    	<li><a target="_blank" href="<?php echo '/*%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/<?php echo $_smarty_tpl->tpl_vars[\'admin_url\']->value;?>
/*/%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/';?>
">点击这里进入ECJIA到家平台后台</a></li>
		                        <li><a target="_blank" href="<?php echo '/*%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/<?php echo $_smarty_tpl->tpl_vars[\'merchant_url\']->value;?>
/*/%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/';?>
">点击这里进入ECJIA到家商家后台</a></li>
		                    </ul>
		                    </div>
		                    <p>各种体验，希望您能尽情享用ECJIA到家带来的乐趣！</p>
		                </div>
					</div>
				</div>
			</div>
		</div>	
		
		<div class="ecjia-install-foot">
			<div class="container">
				<div class="row">
					<div class="col-mb-12 col-tb-8 col-tb-offset-2 ecjiaf-pr">
						<p>版权所有 © 2013-2017 上海商创网络科技有限公司，并保留所有权利。<span>v<?php echo '/*%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/<?php echo $_smarty_tpl->tpl_vars[\'version\']->value;?>
/*/%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/';?>
<br><?php echo '/*%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/<?php echo $_smarty_tpl->tpl_vars[\'build\']->value;?>
/*/%%SmartyNocache:32319597d64a5f3f6d1-64051470%%*/';?>
</span></p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php }} ?>
