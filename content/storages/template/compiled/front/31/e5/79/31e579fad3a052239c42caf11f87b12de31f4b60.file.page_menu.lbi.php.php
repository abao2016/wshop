<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 04:59:00
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\library\page_menu.lbi.php" */ ?>
<?php /*%%SmartyHeaderCode:2211597d67943062a1-03509123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31e579fad3a052239c42caf11f87b12de31f4b60' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\page_menu.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2211597d67943062a1-03509123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hidenav' => 0,
    'hidetab' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_597d6794436df5_73032175',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d6794436df5_73032175')) {function content_597d6794436df5_73032175($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'E:\\net\\ecshop\\content\\system\\smarty\\function.url.php';
?><?php if ($_smarty_tpl->tpl_vars['hidenav']->value!=1&&$_smarty_tpl->tpl_vars['hidetab']->value!=1) {?>
<div class="ecjia-menu" id="ecjia-menu">
	<ul>
		<li><a href="<?php echo smarty_function_url(array('path'=>'touch/index/init'),$_smarty_tpl);?>
"><i class="iconfont icon-home"></i></a></li>
		<li><a href="<?php echo smarty_function_url(array('path'=>'touch/index/search'),$_smarty_tpl);?>
"><i class="iconfont icon-search"></i></a></li>
		<li><a href="<?php echo smarty_function_url(array('path'=>'cart/index/init'),$_smarty_tpl);?>
"><i class="iconfont icon-gouwuche"></i></a></li>
		<li><a href="<?php echo smarty_function_url(array('path'=>'touch/my/init'),$_smarty_tpl);?>
"><i class="iconfont icon-gerenzhongxin"></i></a></li>
		<li><a href="javascript:;"><i class="iconfont icon-top"></i></a></li>
	</ul>
	<div class="main"><a class="nopjax" href="javascript:;"><i class="iconfont icon-add"></i></a></div>
</div>
<?php }?>
<?php }} ?>
