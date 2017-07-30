<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:17:45
         compiled from "E:\net\ecshop\content\apps\goods\templates\admin\library\widget_admin_dashboard_goodsstat.lbi.php" */ ?>
<?php /*%%SmartyHeaderCode:22088597d6bf982c001-06780736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5973613b53e92b16b12715fd932f85b738512cb2' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\apps\\goods\\templates\\admin\\library\\widget_admin_dashboard_goodsstat.lbi.php',
      1 => 1498202363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22088597d6bf982c001-06780736',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'goods' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_597d6bf9b123b1_44008464',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d6bf9b123b1_44008464')) {function content_597d6bf9b123b1_44008464($_smarty_tpl) {?><?php if (!is_callable('smarty_function_lang')) include 'E:\\net\\ecshop\\content\\system\\smarty\\function.lang.php';
if (!is_callable('smarty_function_url')) include 'E:\\net\\ecshop\\content\\system\\smarty\\function.url.php';
?><div class="move-mod-group" id="widget_admin_dashboard_goodsstat">
	<div class="heading clearfix move-mod-head">
		<h3 class="pull-left"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
		<span class="pull-right label label-info"><?php echo $_smarty_tpl->tpl_vars['goods']->value['total'];?>
</span>
	</div>
	<table class="table table-bordered mediaTable dash-table-oddtd">
	<thead>
	<tr>
		<th colspan="4" class="optional">
			<?php echo smarty_function_lang(array('key'=>'goods::goods.goods_count_info'),$_smarty_tpl);?>

		</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>
			<a href='<?php echo smarty_function_url(array('path'=>"goods/admin/init"),$_smarty_tpl);?>
' title="<?php echo smarty_function_lang(array('key'=>'goods::goods.goods_total'),$_smarty_tpl);?>
"><?php echo smarty_function_lang(array('key'=>'goods::goods.goods_total'),$_smarty_tpl);?>
</a>
		</td>
		<td>
			<strong><?php echo $_smarty_tpl->tpl_vars['goods']->value['total'];?>
</strong>
		</td>
		<td>
			<a href="<?php echo $_smarty_tpl->tpl_vars['goods']->value['warn_goods_url'];?>
" title="<?php echo smarty_function_lang(array('key'=>'goods::goods.warn_goods_number'),$_smarty_tpl);?>
"><?php echo smarty_function_lang(array('key'=>'goods::goods.warn_goods_number'),$_smarty_tpl);?>
</a>
		</td>
		<td class="dash-table-color">
			<strong><?php echo $_smarty_tpl->tpl_vars['goods']->value['warn_goods'];?>
</strong>
		</td>
	</tr>
	<tr>
		<td>
			<a href="<?php echo $_smarty_tpl->tpl_vars['goods']->value['new_goods_url'];?>
" title="<?php echo smarty_function_lang(array('key'=>'goods::goods.new_goods_number'),$_smarty_tpl);?>
"><?php echo smarty_function_lang(array('key'=>'goods::goods.new_goods_number'),$_smarty_tpl);?>
</a>
		</td>
		<td>
			<strong><?php echo $_smarty_tpl->tpl_vars['goods']->value['new_goods'];?>
</strong>
		</td>
		<td>
			<a href="<?php echo $_smarty_tpl->tpl_vars['goods']->value['best_goods_url'];?>
" title="<?php echo smarty_function_lang(array('key'=>'goods::goods.best_goods_number'),$_smarty_tpl);?>
"><?php echo smarty_function_lang(array('key'=>'goods::goods.best_goods_number'),$_smarty_tpl);?>
</a>
		</td>
		<td>
			<strong><?php echo $_smarty_tpl->tpl_vars['goods']->value['best_goods'];?>
</strong>
		</td>
	</tr>
	<tr>
		<td>
			<a href="<?php echo $_smarty_tpl->tpl_vars['goods']->value['hot_goods_url'];?>
" title="<?php echo smarty_function_lang(array('key'=>'goods::goods.hot_goods_number'),$_smarty_tpl);?>
"><?php echo smarty_function_lang(array('key'=>'goods::goods.hot_goods_number'),$_smarty_tpl);?>
</a>
		</td>
		<td>
			<strong><?php echo $_smarty_tpl->tpl_vars['goods']->value['hot_goods'];?>
</strong>
		</td>
		<td>
			<a href="<?php echo $_smarty_tpl->tpl_vars['goods']->value['promote_goods_url'];?>
" title="<?php echo smarty_function_lang(array('key'=>'goods::goods.promote_goods_numeber'),$_smarty_tpl);?>
"><?php echo smarty_function_lang(array('key'=>'goods::goods.promote_goods_numeber'),$_smarty_tpl);?>
</a>
		</td>
		<td>
			<strong><?php echo $_smarty_tpl->tpl_vars['goods']->value['promote_goods'];?>
</strong>
		</td>
	</tr>
	</tbody>
	</table>
</div><?php }} ?>
