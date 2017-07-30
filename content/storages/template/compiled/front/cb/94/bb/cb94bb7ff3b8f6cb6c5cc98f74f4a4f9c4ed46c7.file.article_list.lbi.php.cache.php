<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:02:55
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\library\article_list.lbi.php" */ ?>
<?php /*%%SmartyHeaderCode:23575597d687f99f7c4-64479312%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb94bb7ff3b8f6cb6c5cc98f74f4a4f9c4ed46c7' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\article_list.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23575597d687f99f7c4-64479312',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 1,
    'val' => 1,
    'theme_url' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_597d687fe5a7e2_12215693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d687fe5a7e2_12215693')) {function content_597d687fe5a7e2_12215693($_smarty_tpl) {?>

	<?php echo '/*%%SmartyNocache:23575597d687f99f7c4-64479312%%*/<?php  $_smarty_tpl->tpl_vars[\'val\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'val\']->_loop = false;
 $_smarty_tpl->tpl_vars[\'key\'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars[\'data\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'val\']->key => $_smarty_tpl->tpl_vars[\'val\']->value) {
$_smarty_tpl->tpl_vars[\'val\']->_loop = true;
 $_smarty_tpl->tpl_vars[\'key\']->value = $_smarty_tpl->tpl_vars[\'val\']->key;
?>/*/%%SmartyNocache:23575597d687f99f7c4-64479312%%*/';?>

	<div class="article-item"> 
		<a href="<?php echo '/*%%SmartyNocache:23575597d687f99f7c4-64479312%%*/<?php echo RC_Uri::url(\'article/index/detail\');?>
/*/%%SmartyNocache:23575597d687f99f7c4-64479312%%*/';?>
&article_id=<?php echo '/*%%SmartyNocache:23575597d687f99f7c4-64479312%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'article_id\'];?>
/*/%%SmartyNocache:23575597d687f99f7c4-64479312%%*/';?>
">
			<div class="article-left"> 
				<p class="article-title line-clamp2"><?php echo '/*%%SmartyNocache:23575597d687f99f7c4-64479312%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'title\'];?>
/*/%%SmartyNocache:23575597d687f99f7c4-64479312%%*/';?>
</p> 
				<p class="article-summary line-clamp2"><?php echo '/*%%SmartyNocache:23575597d687f99f7c4-64479312%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'description\'];?>
/*/%%SmartyNocache:23575597d687f99f7c4-64479312%%*/';?>
</p> 
				<div class="article-author clearfix" data-lazy="false"> 
					<img class="lazy-img article-author-pic" src="<?php echo '/*%%SmartyNocache:23575597d687f99f7c4-64479312%%*/<?php if ($_smarty_tpl->tpl_vars[\'val\']->value[\'store_info\'][\'store_id\']==0) {?>/*/%%SmartyNocache:23575597d687f99f7c4-64479312%%*/';?>
<?php echo '/*%%SmartyNocache:23575597d687f99f7c4-64479312%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:23575597d687f99f7c4-64479312%%*/';?>
images/store_logo.png<?php echo '/*%%SmartyNocache:23575597d687f99f7c4-64479312%%*/<?php } else { ?>/*/%%SmartyNocache:23575597d687f99f7c4-64479312%%*/';?>
<?php echo '/*%%SmartyNocache:23575597d687f99f7c4-64479312%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'store_info\'][\'store_logo\'];?>
/*/%%SmartyNocache:23575597d687f99f7c4-64479312%%*/';?>
<?php echo '/*%%SmartyNocache:23575597d687f99f7c4-64479312%%*/<?php }?>/*/%%SmartyNocache:23575597d687f99f7c4-64479312%%*/';?>
"> 
					<span class="lazy-img article-author-name"><?php echo '/*%%SmartyNocache:23575597d687f99f7c4-64479312%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'store_info\'][\'store_name\'];?>
/*/%%SmartyNocache:23575597d687f99f7c4-64479312%%*/';?>
</span> 
				</div> 
			</div> 
			<div class="article-right" data-lazy="false"> 
				<div class="img-box"> 
					<img class="lazy-img" src="<?php echo '/*%%SmartyNocache:23575597d687f99f7c4-64479312%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'cover_image\'];?>
/*/%%SmartyNocache:23575597d687f99f7c4-64479312%%*/';?>
"> 
				</div> 
				<div class="article-info clearfix"> 
					<div class="article-time"> 
						<div class="clock little-icon"></div> 
						<span><?php echo '/*%%SmartyNocache:23575597d687f99f7c4-64479312%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'add_time\'];?>
/*/%%SmartyNocache:23575597d687f99f7c4-64479312%%*/';?>
</span> 
					</div> 
					<div class="article-viewed"> 
						<span><?php echo '/*%%SmartyNocache:23575597d687f99f7c4-64479312%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'click_count\'];?>
/*/%%SmartyNocache:23575597d687f99f7c4-64479312%%*/';?>
</span> 
						<div class="eye little-icon"></div> 
					</div> 
				</div> 
			</div>
		</a> 
	</div>
	<?php echo '/*%%SmartyNocache:23575597d687f99f7c4-64479312%%*/<?php }
if (!$_smarty_tpl->tpl_vars[\'val\']->_loop) {
?>/*/%%SmartyNocache:23575597d687f99f7c4-64479312%%*/';?>

	<div class="ecjia-nolist"><img src="<?php echo '/*%%SmartyNocache:23575597d687f99f7c4-64479312%%*/<?php echo $_smarty_tpl->tpl_vars[\'theme_url\']->value;?>
/*/%%SmartyNocache:23575597d687f99f7c4-64479312%%*/';?>
images/no_comment.png"><p class="tags_list_font">暂无文章</p></div>
	<?php echo '/*%%SmartyNocache:23575597d687f99f7c4-64479312%%*/<?php } ?>/*/%%SmartyNocache:23575597d687f99f7c4-64479312%%*/';?>



<?php }} ?>
