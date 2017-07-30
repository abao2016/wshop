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
  'variables' => 
  array (
    'data' => 1,
    'val' => 1,
    'theme_url' => 1,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_597d687feac878_98233160',
  'cache_lifetime' => '3600',
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d687feac878_98233160')) {function content_597d687feac878_98233160($_smarty_tpl) {?>
	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
	<div class="article-item"> 
		<a href="<?php echo RC_Uri::url('article/index/detail');?>
&article_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['article_id'];?>
">
			<div class="article-left"> 
				<p class="article-title line-clamp2"><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</p> 
				<p class="article-summary line-clamp2"><?php echo $_smarty_tpl->tpl_vars['val']->value['description'];?>
</p> 
				<div class="article-author clearfix" data-lazy="false"> 
					<img class="lazy-img article-author-pic" src="<?php if ($_smarty_tpl->tpl_vars['val']->value['store_info']['store_id']==0) {?><?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/store_logo.png<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['val']->value['store_info']['store_logo'];?>
<?php }?>"> 
					<span class="lazy-img article-author-name"><?php echo $_smarty_tpl->tpl_vars['val']->value['store_info']['store_name'];?>
</span> 
				</div> 
			</div> 
			<div class="article-right" data-lazy="false"> 
				<div class="img-box"> 
					<img class="lazy-img" src="<?php echo $_smarty_tpl->tpl_vars['val']->value['cover_image'];?>
"> 
				</div> 
				<div class="article-info clearfix"> 
					<div class="article-time"> 
						<div class="clock little-icon"></div> 
						<span><?php echo $_smarty_tpl->tpl_vars['val']->value['add_time'];?>
</span> 
					</div> 
					<div class="article-viewed"> 
						<span><?php echo $_smarty_tpl->tpl_vars['val']->value['click_count'];?>
</span> 
						<div class="eye little-icon"></div> 
					</div> 
				</div> 
			</div>
		</a> 
	</div>
	<?php }
if (!$_smarty_tpl->tpl_vars['val']->_loop) {
?>
	<div class="ecjia-nolist"><img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/no_comment.png"><p class="tags_list_font">暂无文章</p></div>
	<?php } ?>


<?php }} ?>
