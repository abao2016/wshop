<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:17:46
         compiled from "E:\net\ecshop\content\system\templates\library\widget_admin_dashboard_product_news.lbi.php" */ ?>
<?php /*%%SmartyHeaderCode:18950597d6bfa323169-50856959%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f0d4af9af0261e98e8d28b0384bff8a03683e0c' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\system\\templates\\library\\widget_admin_dashboard_product_news.lbi.php',
      1 => 1498202359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18950597d6bfa323169-50856959',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'product_news' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_597d6bfa741d55_55528090',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d6bfa741d55_55528090')) {function content_597d6bfa741d55_55528090($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\net\\ecshop\\vendor\\smarty\\smarty\\plugins\\modifier.date_format.php';
?>
<div class="move-mod-group" id="widget_admin_dashboard_loglist">
	<div class="heading clearfix move-mod-head">
		<h3 class="pull-left"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
	</div>
	<table class="table table-striped table-bordered mediaTable ecjiaf-wwb">
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['product_news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['news']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['news']->key;
 $_smarty_tpl->tpl_vars['news']->index++;
 $_smarty_tpl->tpl_vars['news']->first = $_smarty_tpl->tpl_vars['news']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['news']['first'] = $_smarty_tpl->tpl_vars['news']->first;
?>
				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['news']['first']) {?>
				<tr>
					<td>
						<p class="m_b5"><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['url'];?>
" target="_black" title="<?php echo $_smarty_tpl->tpl_vars['news']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a><span class="ecjiaf-fr"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value['time'],"%Y-%m-%d");?>
</span></p>
						<p class="m_b0"><?php echo $_smarty_tpl->tpl_vars['news']->value['description'];?>
</p>
					</td>
				</tr>
				<?php } else { ?>
				<tr>
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['url'];?>
" target="_black" title="<?php echo $_smarty_tpl->tpl_vars['news']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</a><span class="ecjiaf-fr"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value['time'],"%Y-%m-%d");?>
</span></td>
				</tr>
				<?php }?>
			<?php } ?>
		</tbody>
	</table>
</div><?php }} ?>
