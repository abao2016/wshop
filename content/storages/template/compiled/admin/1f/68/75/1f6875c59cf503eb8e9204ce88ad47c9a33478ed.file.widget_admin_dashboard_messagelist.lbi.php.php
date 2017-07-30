<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:17:44
         compiled from "E:\net\ecshop\content\system\templates\library\widget_admin_dashboard_messagelist.lbi.php" */ ?>
<?php /*%%SmartyHeaderCode:12133597d6bf8aeaf12-33030653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f6875c59cf503eb8e9204ce88ad47c9a33478ed' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\system\\templates\\library\\widget_admin_dashboard_messagelist.lbi.php',
      1 => 1498202359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12133597d6bf8aeaf12-33030653',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'msg_lists' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_597d6bf8ccf587_33238433',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d6bf8ccf587_33238433')) {function content_597d6bf8ccf587_33238433($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'E:\\net\\ecshop\\content\\system\\smarty\\function.url.php';
if (!is_callable('smarty_block_t')) include 'E:\\net\\ecshop\\content\\system\\smarty\\block.t.php';
?>
<div class="move-mod-group" id="widget_admin_dashboard_messagelist">
	<div class="heading clearfix move-mod-head">
		<h3 class="pull-left"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
		<span class="pull-right label label-info"><a class="ecjiafc-white" href="<?php echo smarty_function_url(array('path'=>'@admin_message/init'),$_smarty_tpl);?>
"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
我要留言<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a></span>
	</div>
	<table class="table table-striped table-bordered mediaTable">
		<thead>
			<tr>
				<th class="essential persist"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
留言内容<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th class="optional"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
留言者<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th class="optional w130"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
发送日期<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
				<th class="essential w30"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
操作<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</th>
			</tr>
		</thead>
		<tbody>
			<?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['msg_lists']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['msg']->key;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['msg']->value['message'];?>
</td>
				<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value['user_name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['msg']->value['sent_time'];?>
</td>
				<td>
					<a class="sepV_a" href="<?php echo smarty_function_url(array('path'=>'@admin_message/init'),$_smarty_tpl);?>
" title="Edit"><i class="fontello-icon-chat"></i></a>
				</td>
			</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['msg']->_loop) {
?>
			<tr>
				<td colspan="5"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
暂无留言信息<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div><?php }} ?>
