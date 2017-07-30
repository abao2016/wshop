<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 04:55:18
         compiled from "E:\net\ecshop\content\themes\ecjia-pc\index.dwt.php" */ ?>
<?php /*%%SmartyHeaderCode:8972597d66b62fba03-70407591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc1a704960f741027bcb0e10e8e33832ec9391d3' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\themes\\ecjia-pc\\index.dwt.php',
      1 => 1498202360,
      2 => 'file',
    ),
    '60050616a473761d3193528c2a544510722b51b1' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\themes\\ecjia-pc\\ecjia-pc.dwt.php',
      1 => 1498202359,
      2 => 'file',
    ),
    'e501368787c5d517cd065c4cdb83861be295de34' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\themes\\ecjia-pc\\library\\page_header.lbi.php',
      1 => 1498202360,
      2 => 'file',
    ),
    '3b2e106e014627f37c7a39a2242c508b298607ac' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\themes\\ecjia-pc\\library\\no_content.lbi.php',
      1 => 1498202360,
      2 => 'file',
    ),
    'cd86b7ab5c3aff7b7c063aafcd650a7923885b4d' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\themes\\ecjia-pc\\library\\page_footer.lbi.php',
      1 => 1498202360,
      2 => 'file',
    ),
    '859d3ecdb924db8f42cd3264b16d94b9baae7ded' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\themes\\ecjia-pc\\library\\choose_city.lbi.php',
      1 => 1498202360,
      2 => 'file',
    ),
    '153707d504f70f401515f12dfb6dc9eca6bd4691' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\themes\\ecjia-pc\\library\\nav.lbi.php',
      1 => 1498202360,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8972597d66b62fba03-70407591',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'pc_keywords' => 0,
    'pc_description' => 0,
    'theme_url' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_597d66b929aa29_75789604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d66b929aa29_75789604')) {function content_597d66b929aa29_75789604($_smarty_tpl) {?><?php if (!is_pjax()) {?>
<?php if (is_ajax()) {?>

<?php } else { ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta name="Generator" content="ECJIA 1.20" />
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['pc_keywords']->value;?>
" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['pc_description']->value;?>
" />
	<link href="<?php if (ecjia_config::has('wap_logo')) {?><?php echo RC_Upload::upload_url(ecjia::config('wap_logo'));?>
<?php } else { ?>favicon.ico<?php }?>" rel="shortcut icon bookmark">
	
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
fonts/iconfont.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
css/style.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/swiper/css/swiper.min.css">
</head>
<body>
	<div class="main_content">
	
<?php /*  Call merged included template "library/page_header.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/page_header.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8972597d66b62fba03-70407591');
content_597d66b68db9e5_06654046($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/page_header.lbi.php" */?>

<div class="ecjia-category-nav">
	<div class="category-info ecjia-category">
		<div class="ecjia-category-info">
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
			<div class="ecjia-category-info-l1">
				<a class="ecjia-category-l2" href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
					<span class="category-icon"><img src="<?php if ($_smarty_tpl->tpl_vars['val']->value['img']) {?><?php echo $_smarty_tpl->tpl_vars['val']->value['img'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/category/category_all_on.png<?php }?>"></span><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>

					<i class="iconfont icon-jiantou-right"></i>
				</a>
				<div class="ecjia-category-info-l2">
					<div class="cate_detail">
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['val']->value['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<dl class="cate_detail_item cate_detail_item_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
							<dt class="cate_detail_tit">
								<a class="cate_detail_tit_lk" href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

								<i class="iconfont icon-jiantou-right"></i>
								</a>
							</dt>
							<dd class="cate_detail_con">
							<?php if ($_smarty_tpl->tpl_vars['v']->value['cat_id']) {?>
								<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
								<a class="cate_detail_con_lk" href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">
									<img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['img'];?>
">
									<span class="cat_name"><?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
</span>
								</a>
								<?php } ?>
							<?php } else { ?>
								<a class="cate_detail_con_lk" href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
									<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
">
									<span class="cat_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span>
								</a>
							<?php }?>
							</dd>
						</dl>
						<?php } ?>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	<div class="category-bg"></div>
</div>

<div class="ecjia-cycleimage">
	<div id="swiper-web" class="swiper-container">
		<div class="swiper-wrapper">
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cycleimage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
			<div class="swiper-slide" style="background:url('<?php echo $_smarty_tpl->tpl_vars['val']->value['image'];?>
') center center no-repeat;">
				<a href="<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
"></a>
			</div>
			<?php } ?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['count']->value>1) {?>
		<div class="swiper-pagination swiper-index-pagination"></div>
		<?php }?>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['has_goods']->value) {?>
<div class="ecjia-category-container ecjia-background-fff">
	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cat_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['val']->value['children']) {?>
	<div class="ecjia-category-item" id="item-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
		<div class="ecjia-category-content">
			<div class="cat-item cat-ul"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</div>
			<div class="category-list">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['val']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['v']->value['goods_list']) {?>
				<li class="cat-item" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span></li>
				<?php }?>
				<?php } ?>
			</div>
			
			<?php  $_smarty_tpl->tpl_vars['children'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['children']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['val']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['children']->key => $_smarty_tpl->tpl_vars['children']->value) {
$_smarty_tpl->tpl_vars['children']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['children']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value==0) {?>
				<div class="more-category"><a href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['children']->value['id'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
">更多<i class="iconfont icon-jiantou-right"></i></a></div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['children']->value['goods_list']) {?>
				<div class="category-goods ecjiaf-dn category-goods-<?php echo $_smarty_tpl->tpl_vars['children']->value['id'];?>
">
					<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['children']->value['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
					<div class="goods-item">
						<a href="<?php echo $_smarty_tpl->tpl_vars['goods_info_url']->value;?>
&goods_id=<?php echo $_smarty_tpl->tpl_vars['c']->value['goods_id'];?>
">
							<img src="<?php if ($_smarty_tpl->tpl_vars['c']->value['goods_img']) {?><?php echo $_smarty_tpl->tpl_vars['c']->value['goods_img'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/default/default_goods.png<?php }?>"/>
							<div class="goods-name"><?php echo $_smarty_tpl->tpl_vars['c']->value['goods_name'];?>
</div>
							<div class="item-list">
								<span class="goods-price"><?php if ($_smarty_tpl->tpl_vars['c']->value['unformatted_promote_price']!=0) {?><?php echo $_smarty_tpl->tpl_vars['c']->value['promote_price'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['c']->value['shop_price'];?>
<?php }?></span>
								<span class="view-detail">查看详情</span>
							</div>
						</a>
					</div>
					<?php } ?>
				</div>
				<?php }?>
			<?php } ?>
		</div>
	</div>
	<?php }?>
	<?php } ?>
</div>
<?php } else { ?>
<?php /*  Call merged included template "library/no_content.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/no_content.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8972597d66b62fba03-70407591');
content_597d66b76b5074_63551987($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/no_content.lbi.php" */?>
<?php }?>

<div class="J_f J_lift lift" id="lift">
	<ul class="lift_list">
		<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cat_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['val']->value['children']) {?>
		<li class="J_lift_item lift_item lift_item_first" data-id="item-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
			<a href="javascript:;" class="lift_btn"> 
				<span class="category-icon" data-item="#item-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
					<img src="<?php if ($_smarty_tpl->tpl_vars['val']->value['image']) {?><?php echo $_smarty_tpl->tpl_vars['val']->value['image'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/category/category_all_on.png<?php }?>">
					<span><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</span>
				</span>
			</a>
		</li>
		<?php }?>
		<?php } ?>
	</ul> 
</div>

<?php /*  Call merged included template "library/page_footer.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/page_footer.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8972597d66b62fba03-70407591');
content_597d66b79aecb6_44533877($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/page_footer.lbi.php" */?>
<?php /*  Call merged included template "library/choose_city.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/choose_city.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8972597d66b62fba03-70407591');
content_597d66b7ed3462_08360226($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/choose_city.lbi.php" */?>
<?php /*  Call merged included template "library/nav.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/nav.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8972597d66b62fba03-70407591');
content_597d66b828ac93_84147166($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/nav.lbi.php" */?>

	</div>
	
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/jquery/jquery.min.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/jquery/jquery.pjax.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/jquery/jquery.cookie.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/ecjiaUI/ecjia.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/swiper/js/swiper.min.js"></script>
	 <script type="text/javascript">var theme_url = "<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
";</script>
	 
	
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.pc.raty.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.pc.koala.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.pc.js" ></script>
	
<script type="text/javascript">
	sessionStorage.removeItem('index_swiper');
	ecjia.pc.init();
</script>

</body>
</html>
<?php }?>
<?php } else { ?>
<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>


<?php /*  Call merged included template "library/page_header.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/page_header.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8972597d66b62fba03-70407591');
content_597d66b68db9e5_06654046($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/page_header.lbi.php" */?>

<div class="ecjia-category-nav">
	<div class="category-info ecjia-category">
		<div class="ecjia-category-info">
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cat']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
			<div class="ecjia-category-info-l1">
				<a class="ecjia-category-l2" href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
					<span class="category-icon"><img src="<?php if ($_smarty_tpl->tpl_vars['val']->value['img']) {?><?php echo $_smarty_tpl->tpl_vars['val']->value['img'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/category/category_all_on.png<?php }?>"></span><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>

					<i class="iconfont icon-jiantou-right"></i>
				</a>
				<div class="ecjia-category-info-l2">
					<div class="cate_detail">
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['val']->value['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<dl class="cate_detail_item cate_detail_item_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
							<dt class="cate_detail_tit">
								<a class="cate_detail_tit_lk" href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

								<i class="iconfont icon-jiantou-right"></i>
								</a>
							</dt>
							<dd class="cate_detail_con">
							<?php if ($_smarty_tpl->tpl_vars['v']->value['cat_id']) {?>
								<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
								<a class="cate_detail_con_lk" href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">
									<img src="<?php echo $_smarty_tpl->tpl_vars['c']->value['img'];?>
">
									<span class="cat_name"><?php echo $_smarty_tpl->tpl_vars['c']->value['name'];?>
</span>
								</a>
								<?php } ?>
							<?php } else { ?>
								<a class="cate_detail_con_lk" href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
									<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
">
									<span class="cat_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span>
								</a>
							<?php }?>
							</dd>
						</dl>
						<?php } ?>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
	<div class="category-bg"></div>
</div>

<div class="ecjia-cycleimage">
	<div id="swiper-web" class="swiper-container">
		<div class="swiper-wrapper">
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cycleimage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
			<div class="swiper-slide" style="background:url('<?php echo $_smarty_tpl->tpl_vars['val']->value['image'];?>
') center center no-repeat;">
				<a href="<?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
"></a>
			</div>
			<?php } ?>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['count']->value>1) {?>
		<div class="swiper-pagination swiper-index-pagination"></div>
		<?php }?>
	</div>
</div>

<?php if ($_smarty_tpl->tpl_vars['has_goods']->value) {?>
<div class="ecjia-category-container ecjia-background-fff">
	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cat_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['val']->value['children']) {?>
	<div class="ecjia-category-item" id="item-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
		<div class="ecjia-category-content">
			<div class="cat-item cat-ul"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</div>
			<div class="category-list">
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['val']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['v']->value['goods_list']) {?>
				<li class="cat-item" data-id="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span></li>
				<?php }?>
				<?php } ?>
			</div>
			
			<?php  $_smarty_tpl->tpl_vars['children'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['children']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['val']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['children']->key => $_smarty_tpl->tpl_vars['children']->value) {
$_smarty_tpl->tpl_vars['children']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['children']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value==0) {?>
				<div class="more-category"><a href="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
&cat_id=<?php echo $_smarty_tpl->tpl_vars['children']->value['id'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['goods_url']->value;?>
">更多<i class="iconfont icon-jiantou-right"></i></a></div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['children']->value['goods_list']) {?>
				<div class="category-goods ecjiaf-dn category-goods-<?php echo $_smarty_tpl->tpl_vars['children']->value['id'];?>
">
					<?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['children']->value['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
					<div class="goods-item">
						<a href="<?php echo $_smarty_tpl->tpl_vars['goods_info_url']->value;?>
&goods_id=<?php echo $_smarty_tpl->tpl_vars['c']->value['goods_id'];?>
">
							<img src="<?php if ($_smarty_tpl->tpl_vars['c']->value['goods_img']) {?><?php echo $_smarty_tpl->tpl_vars['c']->value['goods_img'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/default/default_goods.png<?php }?>"/>
							<div class="goods-name"><?php echo $_smarty_tpl->tpl_vars['c']->value['goods_name'];?>
</div>
							<div class="item-list">
								<span class="goods-price"><?php if ($_smarty_tpl->tpl_vars['c']->value['unformatted_promote_price']!=0) {?><?php echo $_smarty_tpl->tpl_vars['c']->value['promote_price'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['c']->value['shop_price'];?>
<?php }?></span>
								<span class="view-detail">查看详情</span>
							</div>
						</a>
					</div>
					<?php } ?>
				</div>
				<?php }?>
			<?php } ?>
		</div>
	</div>
	<?php }?>
	<?php } ?>
</div>
<?php } else { ?>
<?php /*  Call merged included template "library/no_content.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/no_content.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8972597d66b62fba03-70407591');
content_597d66b76b5074_63551987($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/no_content.lbi.php" */?>
<?php }?>

<div class="J_f J_lift lift" id="lift">
	<ul class="lift_list">
		<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cat_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['val']->value['children']) {?>
		<li class="J_lift_item lift_item lift_item_first" data-id="item-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
			<a href="javascript:;" class="lift_btn"> 
				<span class="category-icon" data-item="#item-<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
					<img src="<?php if ($_smarty_tpl->tpl_vars['val']->value['image']) {?><?php echo $_smarty_tpl->tpl_vars['val']->value['image'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/category/category_all_on.png<?php }?>">
					<span><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</span>
				</span>
			</a>
		</li>
		<?php }?>
		<?php } ?>
	</ul> 
</div>

<?php /*  Call merged included template "library/page_footer.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/page_footer.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8972597d66b62fba03-70407591');
content_597d66b79aecb6_44533877($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/page_footer.lbi.php" */?>
<?php /*  Call merged included template "library/choose_city.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/choose_city.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8972597d66b62fba03-70407591');
content_597d66b7ed3462_08360226($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/choose_city.lbi.php" */?>
<?php /*  Call merged included template "library/nav.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/nav.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '8972597d66b62fba03-70407591');
content_597d66b828ac93_84147166($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/nav.lbi.php" */?>


<script type="text/javascript">
	sessionStorage.removeItem('index_swiper');
	ecjia.pc.init();
</script>

<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 04:55:18
         compiled from "E:\net\ecshop\content\themes\ecjia-pc\library\page_header.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d66b68db9e5_06654046')) {function content_597d66b68db9e5_06654046($_smarty_tpl) {?> 

<div class="ecjia-header fixed">
	<div class="ecjia-content">
		<div class="ecjia-fl ecjia-logo">
			<a href="<?php echo RC_Uri::home_url();?>
"><img class="wt-10" src="<?php if ($_smarty_tpl->tpl_vars['info']->value['shop_logo']) {?><?php echo $_smarty_tpl->tpl_vars['info']->value['shop_logo'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/shop_logo.png<?php }?>"></a>
			<div class="select-location">
				<i class="icon-position"></i>
				<span class="current-position"><?php echo $_smarty_tpl->tpl_vars['info']->value['city_name'];?>
</span>
				<span class="choose-city">切换城市</span>
			</div>
		</div>
		<div class="ecjia-fl search" data-url="<?php echo RC_Uri::url('main/index/search');?>
">
			<input type="text" placeholder="搜索商品名称或商家" name="keywords" value="<?php echo $_GET['keywords'];?>
" autocomplete="off"/>
			<button class="button search-button" data-url="<?php echo RC_Uri::url('goods/index/init');?>
"><i class="iconfont"></i></button>
			<ul class="shelper"></ul>
		</div>
		<div class="ecjia-fr">
			<ul class="nav">
				<li <?php if ($_smarty_tpl->tpl_vars['active']->value=='main') {?>class="active"<?php }?>><a href="<?php echo RC_Uri::home_url();?>
">首页</a></li>
				<li <?php if ($_smarty_tpl->tpl_vars['active']->value=='category') {?>class="active"<?php }?>><a class="merchant-list" href="<?php echo RC_Uri::url('merchant/store/category');?>
">商家</a></li>
				<li><a class="nopjax" href="<?php echo RC_Uri::site_url('/sites/app/');?>
">下载APP</a></li>
				<li><a class="nopjax" href="<?php echo $_smarty_tpl->tpl_vars['info']->value['merchant_url'];?>
" target="_blank">商家入驻</a></li>
				<li><a class="nopjax ecjia-back-green" href="<?php echo $_smarty_tpl->tpl_vars['info']->value['merchant_login'];?>
" target="_blank">商家登录</a></li>
			</ul>
		</div>
	</div>
</div>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 04:55:19
         compiled from "E:\net\ecshop\content\themes\ecjia-pc\library\no_content.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d66b76b5074_63551987')) {function content_597d66b76b5074_63551987($_smarty_tpl) {?>



<div class="ecjia-no-content">
	<div class="content">
		<div class="content-container">
			<div class="current-city">当前选择城市：<?php echo $_smarty_tpl->tpl_vars['info']->value['city_name'];?>
</div>
			<p>抱歉！您切换的城市暂时还没有店铺和商品。</p>
			<p>赶快来入驻吧</p>
			<a class="nopjax" href="<?php echo $_smarty_tpl->tpl_vars['info']->value['merchant_url'];?>
" target="_blank"><span class="go_settled">去入驻</span></a>
			<p>或者您还可以<span class="choose-city">去其他城市看看哦</span></p>
		</div>
	</div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 04:55:19
         compiled from "E:\net\ecshop\content\themes\ecjia-pc\library\page_footer.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d66b79aecb6_44533877')) {function content_597d66b79aecb6_44533877($_smarty_tpl) {?><div class="ecjia-page-footer">
	<div class="foot-top">
		<p>特色<span class="ecjia-green">到家</span>平台</p>
		<p class="">品类齐全，轻松购物，为您呈现不一样的生活服务平台</p>
		<div class="helper">
			<div class="mod" data-spm-ab="1">
				<div class="mod-wrap">
			  		<h4>
				 		<i class="icon-foot-1"></i>
				        <div>正品保障</div>
				        <div>正品行货，放心选购</div>
			      </h4>
				</div>
			</div>
			
			<div class="mod" data-spm-ab="2">
				<div class="mod-wrap">
			  		<h4>
				 		<i class="icon-foot-2"></i>
				        <div>产地直采</div>
				        <div>100%产地直采，放心低价</div>
			      </h4>
				</div>
			</div>
			
			<div class="mod" data-spm-ab="3">
				<div class="mod-wrap">
			  		<h4>
				 		<i class="icon-foot-3"></i>
				        <div>准时送达</div>
				        <div>收货时间，自主选择</div>
			      </h4>
				</div>
			</div>
			
			<div class="mod" data-spm-ab="4">
				<div class="mod-wrap">
			  		<h4>
				 		<i class="icon-foot-4"></i>
				        <div>售后无忧</div>
				        <div>客服全年无休，用户体验至上</div>
			      </h4>
				</div>
			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['info']->value['region_list']) {?>
		<div class="hot-city">
			<div class="hot-city-left">热门城市</div>
			<div class="hot-city-right">
				<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['region_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
				<li class="position-li" data-id="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</li>
				<?php } ?>
			</div>
		</div>
		<?php }?>
	</div>
</div>

<div class="page-footer">
	<div class="outlink">
		<?php if ($_smarty_tpl->tpl_vars['info']->value['shop_weibo_url']) {?>
        <span>
            <a class="blog-ico" href="<?php echo $_smarty_tpl->tpl_vars['info']->value['shop_weibo_url'];?>
" target="_blank"></a>
        </span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['info']->value['shop_wechat_qrcode']) {?>
		<span class="outlink-qrcode">
            <div class="wechar-code">
				<img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['shop_wechat_qrcode'];?>
">
				<span>打开微信扫一扫关注</span>
			</div>
			<a class="wechat" href="javascript:void(0)"></a>
		</span>
        <?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['info']->value['shop_info']) {?>
    <div class="footer-links">
        <p>
            <?php  $_smarty_tpl->tpl_vars['rs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info']->value['shop_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rs']->key => $_smarty_tpl->tpl_vars['rs']->value) {
$_smarty_tpl->tpl_vars['rs']->_loop = true;
?>
            <a class="nopjax" href="<?php echo $_smarty_tpl->tpl_vars['rs']->value['url'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['rs']->value['title'];?>
</a>
            <?php } ?>
        </p>
    </div>
    <?php }?>
    <p><?php if ($_smarty_tpl->tpl_vars['info']->value['company_name']) {?><?php echo $_smarty_tpl->tpl_vars['info']->value['company_name'];?>
 版权所有<?php }?> <?php if (ecjia::config('icp_number')) {?>&nbsp;&nbsp;<a href="http://www.miibeian.gov.cn" target="_blank"> <?php echo ecjia::config('icp_number');?>
</a><?php }?>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['info']->value['powered'];?>
</p>
    <p><?php if ($_smarty_tpl->tpl_vars['info']->value['shop_address']) {?>地址：<?php echo $_smarty_tpl->tpl_vars['info']->value['shop_address'];?>
 <?php }?> <?php if ($_smarty_tpl->tpl_vars['info']->value['service_phone']) {?> 咨询热线：<?php echo $_smarty_tpl->tpl_vars['info']->value['service_phone'];?>
<?php }?></p>
</div>
<?php if (ecjia::config('stats_code')) {?>
	<?php echo stripslashes(ecjia::config('stats_code'));?>

<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 04:55:19
         compiled from "E:\net\ecshop\content\themes\ecjia-pc\library\choose_city.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d66b7ed3462_08360226')) {function content_597d66b7ed3462_08360226($_smarty_tpl) {?>




<div class="choose-city-div">
	<div class="city-content">
		<div class="header">
			<div class="title">请选择您所在的城市</div>
			<span class="close_div">X</span>
		</div>
		<div class="content">
			<div class="content-position">
				<div class="guess-position">猜你在</div>
				<div class="position">
					<?php echo '/*%%SmartyNocache:8972597d66b62fba03-70407591%%*/<?php if ($_smarty_tpl->tpl_vars[\'info\']->value[\'location_id\']) {?>/*/%%SmartyNocache:8972597d66b62fba03-70407591%%*/';?>

						<?php echo '/*%%SmartyNocache:8972597d66b62fba03-70407591%%*/<?php  $_smarty_tpl->tpl_vars[\'val\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'val\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'info\']->value[\'region_list\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'val\']->key => $_smarty_tpl->tpl_vars[\'val\']->value) {
$_smarty_tpl->tpl_vars[\'val\']->_loop = true;
?>/*/%%SmartyNocache:8972597d66b62fba03-70407591%%*/';?>

						<?php echo '/*%%SmartyNocache:8972597d66b62fba03-70407591%%*/<?php if ($_smarty_tpl->tpl_vars[\'info\']->value[\'location_id\']==$_smarty_tpl->tpl_vars[\'val\']->value[\'id\']) {?>/*/%%SmartyNocache:8972597d66b62fba03-70407591%%*/';?>

							<li class="position-li <?php echo '/*%%SmartyNocache:8972597d66b62fba03-70407591%%*/<?php if ($_smarty_tpl->tpl_vars[\'info\']->value[\'city_id\']==$_smarty_tpl->tpl_vars[\'val\']->value[\'id\']) {?>/*/%%SmartyNocache:8972597d66b62fba03-70407591%%*/';?>
active<?php echo '/*%%SmartyNocache:8972597d66b62fba03-70407591%%*/<?php }?>/*/%%SmartyNocache:8972597d66b62fba03-70407591%%*/';?>
 location-position" data-id="<?php echo '/*%%SmartyNocache:8972597d66b62fba03-70407591%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'id\'];?>
/*/%%SmartyNocache:8972597d66b62fba03-70407591%%*/';?>
"><?php echo '/*%%SmartyNocache:8972597d66b62fba03-70407591%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'name\'];?>
/*/%%SmartyNocache:8972597d66b62fba03-70407591%%*/';?>
</li>
						<?php echo '/*%%SmartyNocache:8972597d66b62fba03-70407591%%*/<?php }?>/*/%%SmartyNocache:8972597d66b62fba03-70407591%%*/';?>

						<?php echo '/*%%SmartyNocache:8972597d66b62fba03-70407591%%*/<?php } ?>/*/%%SmartyNocache:8972597d66b62fba03-70407591%%*/';?>

					<?php echo '/*%%SmartyNocache:8972597d66b62fba03-70407591%%*/<?php }?>/*/%%SmartyNocache:8972597d66b62fba03-70407591%%*/';?>

				</div>
			</div>
			<div class="content-bottom">
				<div class="title">热门城市</div>
				<div class="position-list">
					<?php echo '/*%%SmartyNocache:8972597d66b62fba03-70407591%%*/<?php  $_smarty_tpl->tpl_vars[\'val\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'val\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'info\']->value[\'region_list\']; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'val\']->key => $_smarty_tpl->tpl_vars[\'val\']->value) {
$_smarty_tpl->tpl_vars[\'val\']->_loop = true;
?>/*/%%SmartyNocache:8972597d66b62fba03-70407591%%*/';?>

					<li class="position-li <?php echo '/*%%SmartyNocache:8972597d66b62fba03-70407591%%*/<?php if ($_smarty_tpl->tpl_vars[\'info\']->value[\'city_id\']==$_smarty_tpl->tpl_vars[\'val\']->value[\'id\']) {?>/*/%%SmartyNocache:8972597d66b62fba03-70407591%%*/';?>
active<?php echo '/*%%SmartyNocache:8972597d66b62fba03-70407591%%*/<?php }?>/*/%%SmartyNocache:8972597d66b62fba03-70407591%%*/';?>
" data-id="<?php echo '/*%%SmartyNocache:8972597d66b62fba03-70407591%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'id\'];?>
/*/%%SmartyNocache:8972597d66b62fba03-70407591%%*/';?>
"><?php echo '/*%%SmartyNocache:8972597d66b62fba03-70407591%%*/<?php echo $_smarty_tpl->tpl_vars[\'val\']->value[\'name\'];?>
/*/%%SmartyNocache:8972597d66b62fba03-70407591%%*/';?>
</li>
					<?php echo '/*%%SmartyNocache:8972597d66b62fba03-70407591%%*/<?php } ?>/*/%%SmartyNocache:8972597d66b62fba03-70407591%%*/';?>

				</div>
			</div>
		</div>
	</div>
</div>
<div class="choose-city-overlay"></div>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 04:55:20
         compiled from "E:\net\ecshop\content\themes\ecjia-pc\library\nav.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d66b828ac93_84147166')) {function content_597d66b828ac93_84147166($_smarty_tpl) {?>



<div class="suspension">
	<div class="suspension-box">
		<?php if ($_smarty_tpl->tpl_vars['info']->value['kf_qq']!='') {?>
		<div class="suspension-box-item">
			<a id="webqq" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $_smarty_tpl->tpl_vars['info']->value['kf_qq'];?>
&site=<?php echo $_smarty_tpl->tpl_vars['info']->value['http_host'];?>
&menu=yes" target="_blank" class="qq j-icon a"><i>qq</i></a>
			<div class="tencent j-tencent j-box">
				<a id="webqqf" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $_smarty_tpl->tpl_vars['info']->value['kf_qq'];?>
&site=<?php echo $_smarty_tpl->tpl_vars['info']->value['http_host'];?>
&menu=yes" target="_blank">
				<i class="tencent-i">tencent</i>
				<b class="tencent-b"><span class="tencent-span"><img class="tencent-qq" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/nav/qq-tencent.png" alt=""></span></b>
				<p class="tencent-p">
					在线客服<br>
					点击交谈
				</p>
				</a>
			</div>
		</div>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['info']->value['service_phone']) {?>
		<div class="suspension-box-item">
			<a class="a tel j-icon"><i>tel</i></a>
			<div class="tel j-box">
				<strong>服务热线：</strong>
				<p><?php echo $_smarty_tpl->tpl_vars['info']->value['service_phone'];?>
</p>
				<i></i>
			</div>
		</div>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['info']->value['shop_wechat_qrcode']) {?>
		<div class="suspension-box-item">
			<a class="code j-icon a"><i>code</i></a>
			<div class="code j-box">
				<img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['shop_wechat_qrcode'];?>
">
				<p>
					扫一扫，微信关注EC+到家
				</p>
				<i></i>
			</div>
		</div>
		<?php }?>
		<a class="back_top j-back-top a"><i>back_top</i></a>
	</div>
</div><?php }} ?>
