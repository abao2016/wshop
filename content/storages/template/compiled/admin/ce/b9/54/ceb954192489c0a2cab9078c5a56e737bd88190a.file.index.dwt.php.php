<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:17:42
         compiled from "E:\net\ecshop\content\system\templates\index.dwt.php" */ ?>
<?php /*%%SmartyHeaderCode:32371597d6bf698ae95-18474353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ceb954192489c0a2cab9078c5a56e737bd88190a' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\system\\templates\\index.dwt.php',
      1 => 1498202359,
      2 => 'file',
    ),
    '975c730e137e9980643c452e4a0de751a764e704' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\system\\templates\\ecjia.dwt.php',
      1 => 1498202359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32371597d6bf698ae95-18474353',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ur_here' => 0,
    'ecjia_admin_cptitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_597d6bf7be4bb1_91526411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d6bf7be4bb1_91526411')) {function content_597d6bf7be4bb1_91526411($_smarty_tpl) {?><?php if (!is_callable('smarty_function_hook')) include 'E:\\net\\ecshop\\content\\system\\smarty\\function.hook.php';
?><?php if (!is_pjax()) {?>
<!DOCTYPE html>
<html lang="zh" class="pjaxLoadding-busy">
<head>
<meta name="Generator" content="ECJIA 1.20" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php if ($_smarty_tpl->tpl_vars['ur_here']->value) {?><?php echo $_smarty_tpl->tpl_vars['ur_here']->value;?>
 - <?php }?><?php echo $_smarty_tpl->tpl_vars['ecjia_admin_cptitle']->value;?>
</title>
	<link rel="shortcut icon" href="favicon.ico" />
	<?php echo smarty_function_hook(array('id'=>'admin_print_styles'),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->getSubTemplate ("library/common_meta.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php echo smarty_function_hook(array('id'=>'admin_print_scripts'),$_smarty_tpl);?>

	
	
	<?php echo smarty_function_hook(array('id'=>'admin_head'),$_smarty_tpl);?>

</head>
<body>
	<div class="clearfix" id="maincontainer">
		<?php echo $_smarty_tpl->getSubTemplate ("library/common_header.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<div id="contentwrapper">
			<div class="main_content">
				<?php echo smarty_function_hook(array('id'=>'admin_print_main_header'),$_smarty_tpl);?>

				
<div class="row-fluid move-mods">
	<div class="span12 move-mod nomove">
		<?php echo smarty_function_hook(array('id'=>'admin_dashboard_top'),$_smarty_tpl);?>

	</div>
</div>

<div class="row-fluid move-mods" id="sortable_panels">
	<div class="span6 move-mod nomove">
		<?php echo smarty_function_hook(array('id'=>'admin_dashboard_left'),$_smarty_tpl);?>

	</div>
	<div class="span6 move-mod nomove">
		<?php echo smarty_function_hook(array('id'=>'admin_dashboard_right'),$_smarty_tpl);?>

	</div>
</div>

<div class="row-fluid move-mods">
	<div class="span3 move-mod nomove">
	   <?php echo smarty_function_hook(array('id'=>'admin_dashboard_left3'),$_smarty_tpl);?>

	</div>
	<div class="span3 move-mod nomove">
	   <?php echo smarty_function_hook(array('id'=>'admin_dashboard_center3'),$_smarty_tpl);?>

	</div>
	<div class="span6 move-mod nomove">
	   <?php echo smarty_function_hook(array('id'=>'admin_dashboard_right6'),$_smarty_tpl);?>

	</div>
</div>

<div class="row-fluid move-mods">
	<div class="span8 move-mod nomove">
	   <?php echo smarty_function_hook(array('id'=>'admin_dashboard_left8'),$_smarty_tpl);?>

	</div>
	<div class="span4 move-mod nomove">
	   <?php echo smarty_function_hook(array('id'=>'admin_dashboard_right4'),$_smarty_tpl);?>

	</div>
</div>

<div class="row-fluid move-mods">
	<div class="span4 move-mod nomove">
	   <?php echo smarty_function_hook(array('id'=>'admin_dashboard_left4'),$_smarty_tpl);?>

	</div>
	<div class="span4 move-mod nomove">
	   <?php echo smarty_function_hook(array('id'=>'admin_dashboard_center4'),$_smarty_tpl);?>

	</div>
	<div class="span4 move-mod nomove">
	   <?php echo smarty_function_hook(array('id'=>'admin_dashboard_right4'),$_smarty_tpl);?>

	</div>
</div>

<div class="row-fluid move-mods">
	<div class="span12 move-mod nomove">
	<?php echo smarty_function_hook(array('id'=>'admin_dashboard_bottom'),$_smarty_tpl);?>

	</div>
</div>
	

				<?php echo smarty_function_hook(array('id'=>'admin_print_main_bottom'),$_smarty_tpl);?>

			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("library/common_sidebar.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<?php echo smarty_function_hook(array('id'=>'admin_print_footer_scripts'),$_smarty_tpl);?>

	<?php echo $_smarty_tpl->getSubTemplate ("library/common_footer.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	
<script type="text/javascript">
	ecjia.admin.dashboard.init();
</script>

	<?php echo smarty_function_hook(array('id'=>'admin_footer'),$_smarty_tpl);?>

    <div class="pjaxLoadding"><i class="peg"></i></div>
</body>
</html>
<?php } else { ?>
	<title><?php echo $_smarty_tpl->tpl_vars['ecjia_admin_cptitle']->value;?>
<?php if ($_smarty_tpl->tpl_vars['ur_here']->value) {?> - <?php echo $_smarty_tpl->tpl_vars['ur_here']->value;?>
<?php }?></title>
	
	<?php echo smarty_function_hook(array('id'=>'admin_pjax_head'),$_smarty_tpl);?>

	<?php echo smarty_function_hook(array('id'=>'admin_print_main_header'),$_smarty_tpl);?>

	
<div class="row-fluid move-mods">
	<div class="span12 move-mod nomove">
		<?php echo smarty_function_hook(array('id'=>'admin_dashboard_top'),$_smarty_tpl);?>

	</div>
</div>

<div class="row-fluid move-mods" id="sortable_panels">
	<div class="span6 move-mod nomove">
		<?php echo smarty_function_hook(array('id'=>'admin_dashboard_left'),$_smarty_tpl);?>

	</div>
	<div class="span6 move-mod nomove">
		<?php echo smarty_function_hook(array('id'=>'admin_dashboard_right'),$_smarty_tpl);?>

	</div>
</div>

<div class="row-fluid move-mods">
	<div class="span3 move-mod nomove">
	   <?php echo smarty_function_hook(array('id'=>'admin_dashboard_left3'),$_smarty_tpl);?>

	</div>
	<div class="span3 move-mod nomove">
	   <?php echo smarty_function_hook(array('id'=>'admin_dashboard_center3'),$_smarty_tpl);?>

	</div>
	<div class="span6 move-mod nomove">
	   <?php echo smarty_function_hook(array('id'=>'admin_dashboard_right6'),$_smarty_tpl);?>

	</div>
</div>

<div class="row-fluid move-mods">
	<div class="span8 move-mod nomove">
	   <?php echo smarty_function_hook(array('id'=>'admin_dashboard_left8'),$_smarty_tpl);?>

	</div>
	<div class="span4 move-mod nomove">
	   <?php echo smarty_function_hook(array('id'=>'admin_dashboard_right4'),$_smarty_tpl);?>

	</div>
</div>

<div class="row-fluid move-mods">
	<div class="span4 move-mod nomove">
	   <?php echo smarty_function_hook(array('id'=>'admin_dashboard_left4'),$_smarty_tpl);?>

	</div>
	<div class="span4 move-mod nomove">
	   <?php echo smarty_function_hook(array('id'=>'admin_dashboard_center4'),$_smarty_tpl);?>

	</div>
	<div class="span4 move-mod nomove">
	   <?php echo smarty_function_hook(array('id'=>'admin_dashboard_right4'),$_smarty_tpl);?>

	</div>
</div>

<div class="row-fluid move-mods">
	<div class="span12 move-mod nomove">
	<?php echo smarty_function_hook(array('id'=>'admin_dashboard_bottom'),$_smarty_tpl);?>

	</div>
</div>
	

	<?php echo smarty_function_hook(array('id'=>'admin_print_main_bottom'),$_smarty_tpl);?>

	
<script type="text/javascript">
	ecjia.admin.dashboard.init();
</script>

	<?php echo smarty_function_hook(array('id'=>'admin_pjax_footer'),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
