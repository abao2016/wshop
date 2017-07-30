<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 12:33:48
         compiled from "E:\net\ecshop\content\apps\installer\templates\front\deploy.dwt.php" */ ?>
<?php /*%%SmartyHeaderCode:7732597d61acad4663-44429367%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c785eee004d50f117a46ecbaaae5c81cb842453' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\apps\\installer\\templates\\front\\deploy.dwt.php',
      1 => 1498202368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7732597d61acad4663-44429367',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'front_url' => 1,
    'system_statics_url' => 1,
    'logo_pic' => 1,
    'show_timezone' => 1,
    'timezones' => 1,
    'key' => 1,
    'local_timezone' => 1,
    'item' => 1,
    'correct_img' => 1,
    'error_img' => 1,
    'version' => 1,
    'build' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_597d61ad13b731_37604484',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d61ad13b731_37604484')) {function content_597d61ad13b731_37604484($_smarty_tpl) {?>
<!DOCTYPE html>
<html>
	<head lang="zh-CN">
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>ECJIA到家安装程序</title>
		<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'front_url\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'front_url\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
/css/grid.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'front_url\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
/css/style.css" />
		
		<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'system_statics_url\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
/styles/ecjia.ui.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'front_url\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'system_statics_url\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
/lib/bootstrap/css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'system_statics_url\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
/lib/chosen/chosen.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'system_statics_url\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
/lib/uniform/Aristo/uniform.aristo.css" />
	</head>
	
	<body id="maincontainer" style="height:auto;">
		<div class="ecjia-install-patch">
		    <h2><img src="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'logo_pic\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
"/>ECJIA到家</h2>
		   	<ol class="path">
		        <li><span>1</span>欢迎使用</li>
		        <li><span>2</span>检查环境</li>
		        <li class="current"><span>3</span>初始化配置</li>
		        <li><span>4</span>开始安装</li>
		        <li><span>5</span>安装成功</li>
		    </ol>
		</div>
		
		<div class="container">
		    <div class="row">
		        <div class="col-mb-12 col-tb-8 col-tb-offset-2">
		            <div class="column-14 start-06 ecjia-install">
						<form id="js-ecjia_deploy">
		                    <h3 class="ecjia-install-title">确认您的配置</h3>
		                    <div class="ecjia-install-body">
		                        <h4>数据库配置</h4>
		                        <ul class="ecjia-option">
								    <li class="control-group">
								        <label class="ecjia-label" for="dbhost">数据库主机</label>
								        <input type="text" class="text" name="dbhost" id="dbhost" value="localhost"/>
								        <p class="description">您可能会使用"localhost"</p>
								    </li>
								    
								    <li class="control-group">
								        <label class="ecjia-label" for="dbport">数据库端口</label>
								        <input type="text" class="text" name="dbport" id="dbport" value="3306"/>
								        <p class="description">如果您不知道此选项的意义， 请保留默认设置</p>
								    </li>
								    
								    <li class="control-group">
								        <label class="ecjia-label" for="dbuser">数据库用户名</label>
								        <input type="text" class="text" name="dbuser" id="dbuser" value="root" />
								        <p class="description">您可能会使用 "root"</p>
								    </li>
								    
								    <li class="control-group">
								    	<div class="check_db_correct" data-url="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo RC_Uri::url(\'installer/index/check_db_correct\');?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
">
									        <label class="ecjia-label" for="dbpassword">数据库密码</label>
									        <input type="password" class="text" name="dbpassword" id="dbpassword" value="" />
								        </div>
								    </li>
								    
								    <li class="control-group">
                                        <div class="check_db_exists" data-url="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo RC_Uri::url(\'installer/index/check_db_exists\');?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
">
	                                        <label class="ecjia-label" for="dbpassword">数据库名称</label>
	                                        <input type="text" class="text" name="dbdatabase" id="dbdatabase" value="" />
                                        </div>
                                        <p class="description">请您指定数据库名称</p>
                                    </li>
								    
		                            <li class="control-group">
			                            <label class="ecjia-label" for="dbprefix">数据库前缀</label>
			                            <input type="text" class="text" name="dbprefix" id="dbprefix" value="ecjia_" />
			                            <p class="description">默认前缀是 "ecjia_"</p>
		                            </li>
		                        </ul>
		                        
		                        <h4>创建您的管理员帐号</h4>
		                        <ul class="ecjia-option">
		                            <li class="control-group">
			                            <label class="ecjia-label" for="username">管理员名称</label>
			                            <input type="text" name="username" id="username" class="text" value="" />
			                            <p class="description">请填写您的用户名</p>
		                            </li>
		                            
		                            <li class="control-group">
			                            <label class="ecjia-label" for="userpassword">登录密码</label>
			                            <input type="password" name="userpassword" id="userpassword" class="text" value="" />
			                            <p class="password-error"></p>
		                            </li>
		                            
		                            <li class="control-group">
			                            <label class="ecjia-label" for="confirmpassword">确认密码</label>
			                            <input type="password" name="confirmpassword" id="confirmpassword" class="text" value="" />
			                            <p class="confirmpassword-error"></p>
		                            </li>
		                            
		                            <li class="control-group">
			                            <label class="ecjia-label" for="usermail">电子邮箱</label>
			                            <input type="text" name="usermail" id="usermail" class="text" value="" />
			                            <p class="description">请填写一个您的常用邮箱</p>
		                            </li>
		                        </ul>
		                        
		              			<h4>杂项</h4>
		                  		<ul class="ecjia-option">
			              			<!--<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php if ($_smarty_tpl->tpl_vars[\'show_timezone\']->value==\'yes\') {?>/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
 -->
			                      	<li>
			                   			<label class="ecjia-label" for="zones">设置时区</label>
			                   			<div class="choose_list">
											<select name="js-timezones" id="js-timezones">
												<!-- <?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php  $_smarty_tpl->tpl_vars[\'item\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'item\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'key\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'timezones\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'item\']->key => $_smarty_tpl->tpl_vars[\'item\']->value) {
$_smarty_tpl->tpl_vars[\'item\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'key\']->value = $_smarty_tpl->tpl_vars[\'item\']->key;
?>/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
 -->
													<option value="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'key\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
" <?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php if ($_smarty_tpl->tpl_vars[\'key\']->value==$_smarty_tpl->tpl_vars[\'local_timezone\']->value) {?>/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
 selected="true"<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php }?>/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
><?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'item\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
</option>
												<!-- <?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php } ?>/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
 -->
											</select>
										</div>
			                         </li>
			                         <!-- <?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php }?>/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
 -->      
			                         <div class="clear_both"></div>                 
			                         <li>
	                                    <label class="ecjia-label" for="good_select">安装测试数据</label>
	                                     <p class="description"><input type="checkbox" class="p" name="js-install-demo" id="js-install-demo">选择此项，将默认安装有关商品以及店铺等默认数据（可选填）</p>
	                                 </li>
		                        </ul>
		                    </div>
		                    
		                    <input type="hidden" name="index" value="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo RC_Uri::url(\'installer/index/init\');?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
" />
		                    <input type="hidden" name="done" value="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo RC_Uri::url(\'installer/index/finish\');?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
" />
		                    <input type="hidden" name="create_config_file" value="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo RC_Uri::url(\'installer/index/create_config_file\');?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
" />
		                    <input type="hidden" name="create_database" value="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo RC_Uri::url(\'installer/index/create_database\');?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
" />
		                   	<input type="hidden" name="install_structure" value="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo RC_Uri::url(\'installer/index/install_structure\');?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
" />
		                    <input type="hidden" name="install_base_data" value="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo RC_Uri::url(\'installer/index/install_base_data\');?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
" />
		                    <input type="hidden" name="install_demo_data" value="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo RC_Uri::url(\'installer/index/install_demo_data\');?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
" />
		                    <input type="hidden" name="create_admin_passport" value="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo RC_Uri::url(\'installer/index/create_admin_passport\');?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
" />
		                    <input type="hidden" name="do_others" value="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo RC_Uri::url(\'installer/index/do_others\');?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
" />
		                    <input type="hidden" name="correct_img" value="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'correct_img\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
" />
		                    <input type="hidden" name="error_img" value="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'error_img\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
" />
		                    <input type="hidden" name="is_create" value="1"/>
		                    <input type="hidden" name="database_config" />
		                    
							<input id="ecjia_install" type="button" class="btn primary" value="确认，立即安装 &raquo;" onclick="return ecjia.front.install.start();"/>
						</form>
						
						<div class="ecjia-install-body">
							<div id="js-monitor">
							    <div id="js-monitor-panel">
							    	<h3 class="ecjia-install-title" id="js-monitor-wait-please">正在安装</h3>
					        		<div class="span8" style="margin-left:0;">
										<div class="progress">
										  	<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 20%">20%</div>
										</div>
									</div>
							        <span id="js-monitor-view-detail"></span>
							    </div>
							    <div id="js-monitor-notice" name="js-monitor-notice">
							        <div id="js-notice"></div>
							    </div>
							    <input id="js-install-return-once" type="button" class="btn primary" value="返回配置系统" onclick="ecjia.front.install.return_setting();" style="display: none;"/>
							</div>
				    	</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ecjia-install-foot">
			<div class="container">
				<div class="row">
					<div class="col-mb-12 col-tb-8 col-tb-offset-2 ecjiaf-pr">
						<p>版权所有 © 2013-2017 上海商创网络科技有限公司，并保留所有权利。<span>v<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'version\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
<br><?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'build\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
</span></p>
					</div>
				</div>
			</div>
		</div>
	
		<script src="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'system_statics_url\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
/js/jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'system_statics_url\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
/lib/ecjia-js/ecjia.js" type="text/javascript"></script>
		
		<script src="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'front_url\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
/js/ecjia-front.js" type="text/javascript"></script>
		<script src="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'front_url\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
/js/install.js" type="text/javascript"></script>
		
		<script src="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'system_statics_url\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
/lib/chosen/chosen.jquery.min.js" type="text/javascript"></script>
		<script src="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'system_statics_url\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
/js/jquery-migrate.min.js" type="text/javascript"></script>
		<script src="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'system_statics_url\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
/lib/uniform/jquery.uniform.min.js" type="text/javascript"></script>
		<script src="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'system_statics_url\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
/lib/smoke/smoke.min.js" type="text/javascript"></script>
		<script src="<?php echo '/*%%SmartyNocache:7732597d61acad4663-44429367%%*/<?php echo $_smarty_tpl->tpl_vars[\'system_statics_url\']->value;?>
/*/%%SmartyNocache:7732597d61acad4663-44429367%%*/';?>
/js/jquery-cookie.min.js" type="text/javascript"></script>

		<script type="text/javascript">
			ecjia.front.install.init();
		</script>
	</body>
</html>
<?php }} ?>
