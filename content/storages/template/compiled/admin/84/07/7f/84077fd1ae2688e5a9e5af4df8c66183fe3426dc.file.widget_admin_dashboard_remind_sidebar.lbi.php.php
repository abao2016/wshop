<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:15:26
         compiled from "E:\net\ecshop\content\system\templates\library\widget_admin_dashboard_remind_sidebar.lbi.php" */ ?>
<?php /*%%SmartyHeaderCode:13611597d6b6e254036-91280890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84077fd1ae2688e5a9e5af4df8c66183fe3426dc' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\system\\templates\\library\\widget_admin_dashboard_remind_sidebar.lbi.php',
      1 => 1498202359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13611597d6b6e254036-91280890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'remind' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_597d6b6e3cb099_89133989',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d6b6e3cb099_89133989')) {function content_597d6b6e3cb099_89133989($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['remind']->value) {?>
<ul class="unstyled">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['remind']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	<li>
		<span class="act act-<?php echo $_smarty_tpl->tpl_vars['item']->value['style'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
</span>
		<strong><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</strong>
	</li>
	<?php } ?>
</ul>
<?php }?><?php }} ?>
