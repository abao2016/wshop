<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:02:19
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\category_list.dwt.php" */ ?>
<?php /*%%SmartyHeaderCode:15986597d685babc6d8-86273415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f84d70353eec8cb5b160fd38ba85a5bd4aecaaa' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\category_list.dwt.php',
      1 => 1498202372,
      2 => 'file',
    ),
    '0ca7a90c9cf9c6e3b82ac5b2647a09b563279891' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\ecjia-touch.dwt.php',
      1 => 1498202372,
      2 => 'file',
    ),
    '479f6c5ab5c51dba1b370891802d9e70a91bc15a' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\index_header.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
    'a9c4fec1220e6e4a89c59d881c63c6c13985e842' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\model_bar.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15986597d685babc6d8-86273415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'theme_url' => 0,
    'curr_style' => 0,
    'key' => 0,
    'referer' => 0,
    'hidenav' => 0,
    'hidetab' => 0,
    'hideinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_597d685ed979b8_02847153',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d685ed979b8_02847153')) {function content_597d685ed979b8_02847153($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'E:\\net\\ecshop\\content\\system\\smarty\\function.url.php';
?><?php if (!is_pjax()) {?>
<?php if (is_ajax()) {?>

<?php } else { ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta name="Generator" content="ECJIA 1.20" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=0, minimal-ui">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="format-detection" content="telephone=no" />
	<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
	<link href="<?php if (ecjia::config('wap_logo')) {?><?php echo RC_Upload::upload_url(ecjia::config('wap_logo'));?>
<?php } else { ?>favicon.ico<?php }?>" rel="shortcut icon bookmark">
	<link href="<?php if (ecjia::config('wap_logo')) {?><?php echo RC_Upload::upload_url(ecjia::config('wap_logo'));?>
<?php } else { ?>favicon.ico<?php }?>" rel="apple-touch-icon-precomposed">

	
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/bootstrap3/css/bootstrap.css">

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
dist/css/iconfont.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
css/ecjia.touch.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
css/ecjia.touch.develop.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
css/ecjia.touch.b2b2c.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
css/ecjia_city.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
css/ecjia_help.css">
    
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
css/ecjia.touch.models.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
dist/other/swiper.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/datePicker/css/datePicker.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/winderCheck/css/winderCheck.min.css">
    
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/photoswipe/css/photoswipe.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/photoswipe/css/default-skin/default-skin.css">
    
	
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['curr_style']->value;?>
">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/iOSOverlay/css/iosOverlay.css">
</head>
<body>
	<div class="ecjia" id="get_location" data-url="<?php echo smarty_function_url(array('path'=>'location/index/get_location_msg'),$_smarty_tpl);?>
">
		<input type="hidden" name="key" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"/>
		<input type="hidden" name="referer" value="<?php echo $_smarty_tpl->tpl_vars['referer']->value;?>
"/>
		
<div class="ecjia-mod category">
	<?php /*  Call merged included template "library/index_header.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/index_header.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '15986597d685babc6d8-86273415');
content_597d685c3d6ec9_67637774($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/index_header.lbi.php" */?>
    <ul class="ecjia-list category_left">
        <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
        <li<?php if ($_smarty_tpl->tpl_vars['cat']->value['id']==$_smarty_tpl->tpl_vars['cat_id']->value) {?> class="active"<?php }?>><a href="javascript:;" data-rh="1" data-val="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
        <?php } ?>
    </ul>
    <div class="category_right">
		<?php  $_smarty_tpl->tpl_vars['children'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['children']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['children']->key => $_smarty_tpl->tpl_vars['children']->value) {
$_smarty_tpl->tpl_vars['children']->_loop = true;
?>
			<div class="cat_list ecjia-category-list <?php if ($_smarty_tpl->tpl_vars['cat_id']->value==$_smarty_tpl->tpl_vars['children']->value['id']) {?>show<?php } else { ?>hide<?php }?>" id="category_<?php echo $_smarty_tpl->tpl_vars['children']->value['id'];?>
">
	            <a href="<?php if ($_smarty_tpl->tpl_vars['children']->value['url']) {?><?php echo $_smarty_tpl->tpl_vars['children']->value['url'];?>
<?php } else { ?><?php echo RC_Uri::url('goods/category/store_list');?>
&cid=<?php echo $_smarty_tpl->tpl_vars['children']->value['id'];?>
<?php }?>">
	            	<img src="<?php echo $_smarty_tpl->tpl_vars['children']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['children']->value['name'];?>
">
	            </a>
	            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['children']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
	            <div>
		            <div class="hd">
		                <h5>
		                    <span class="line"></span>
		                    <a href="<?php if ($_smarty_tpl->tpl_vars['val']->value['url']) {?><?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
<?php } else { ?><?php echo RC_Uri::url('goods/category/store_list');?>
&cid=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
<?php }?>">
		                    	<span class="goods-index-title"><span class="point"></span><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
<span class="iconfont icon-jiantou-right"></span></span>
		                    </a>
		                </h5>
		            </div>
		            <ul class="ecjia-margin-t">
		            	<?php if ($_smarty_tpl->tpl_vars['val']->value['children']) {?>
		                <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['val']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
		                <li>
		                    <a href="<?php if ($_smarty_tpl->tpl_vars['cat']->value['url']) {?><?php echo $_smarty_tpl->tpl_vars['cat']->value['url'];?>
<?php } else { ?><?php echo RC_Uri::url('goods/category/store_list');?>
&cid=<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
<?php }?>">
		                        <div class="cat-img">
		                            <img src="<?php if ($_smarty_tpl->tpl_vars['cat']->value['image']) {?><?php echo $_smarty_tpl->tpl_vars['cat']->value['image'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/default-goods-pic.png<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
">
		                        </div>
		                        <div class="child_name"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</div>
		                    </a>
		                </li>
			           	<?php } ?>
			           	<?php } else { ?>
			           	<li>
		                    <a href="<?php if ($_smarty_tpl->tpl_vars['val']->value['url']) {?><?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
<?php } else { ?><?php echo RC_Uri::url('goods/category/store_list');?>
&cid=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
<?php }?>">
		                        <div class="cat-img">
		                            <img src="<?php if ($_smarty_tpl->tpl_vars['val']->value['image']) {?><?php echo $_smarty_tpl->tpl_vars['val']->value['image'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/default-goods-pic.png<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
">
		                        </div>
		                        <div class="child_name"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</div>
		                    </a>
		                </li>
		                <?php }?>
		            </ul>
				</div>
		    	<?php } ?>  
            </div>
    	<?php } ?>
    </div>
</div>
<?php /*  Call merged included template "library/model_bar.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/model_bar.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '15986597d685babc6d8-86273415');
content_597d685d4a6314_88308804($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/model_bar.lbi.php" */?>

		<?php echo $_smarty_tpl->getSubTemplate ("library/page_menu.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

	</div>
	
	<script charset="utf-8" src="https://map.qq.com/api/js?v=2.exp&libraries=convertor"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/jquery/jquery.min.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/multi-select/js/jquery.quicksearch.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/jquery/jquery.pjax.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/jquery/jquery.cookie.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/iscroll/js/iscroll.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/bootstrap3/js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/ecjiaUI/ecjia.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/jquery-form/jquery.form.min.js" ></script>	
	<script type="text/javascript" src="https://3gimg.qq.com/lightmap/components/geolocation/geolocation.min.js"></script>
	
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/jquery-localstorage/jquery.localstorage.js" ></script>	
	
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/photoswipe/js/photoswipe.min.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/photoswipe/js/photoswipe-ui-default.min.js"></script>

	
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.koala.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.others.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.goods.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.user.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.flow.js" ></script>

    <script type="text/javascript">var theme_url = "<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
";</script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.goods_detail.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.spread.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.user_account.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.franchisee.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.comment.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.raty.js" ></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.fly.js" ></script>
    
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/ecjia.touch.intro.min.js" ></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/Validform/Validform_v5.3.2_min.js"></script>

	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/swiper/js/swiper.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/datePicker/js/datePicker.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/winderCheck/js/winderCheck.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
js/greenCheck.js"></script>
    
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/iOSOverlay/js/iosOverlay.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
lib/iOSOverlay/js/prettify.js"></script>
	
<script type="text/javascript">
	ecjia.touch.category.init();
</script>

	<script type="text/javascript">
    	window.onunload = unload;
    	function unload (e){
    	  window.scrollTo(0,0);
    	}
	</script>
	<script type="text/javascript">
		var hidenav = <?php if ($_smarty_tpl->tpl_vars['hidenav']->value==1) {?>1<?php } else { ?>0<?php }?>, hidetab = <?php if ($_smarty_tpl->tpl_vars['hidetab']->value==1) {?>1<?php } else { ?>0<?php }?>, hideinfo = <?php if ($_smarty_tpl->tpl_vars['hideinfo']->value) {?>1<?php } else { ?>0<?php }?>;
		if (hideinfo) {
			$('header').hide();
			$('footer').hide();
			$('.ecjia-menu').hide();
		} else {
			hidenav && $('header').hide();
			hidetab && $('footer').hide();
		}
	</script>
</body>
</html>
<?php }?>
<?php } else { ?>
<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>


<div class="ecjia-mod category">
	<?php /*  Call merged included template "library/index_header.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/index_header.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '15986597d685babc6d8-86273415');
content_597d685c3d6ec9_67637774($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/index_header.lbi.php" */?>
    <ul class="ecjia-list category_left">
        <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
        <li<?php if ($_smarty_tpl->tpl_vars['cat']->value['id']==$_smarty_tpl->tpl_vars['cat_id']->value) {?> class="active"<?php }?>><a href="javascript:;" data-rh="1" data-val="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
        <?php } ?>
    </ul>
    <div class="category_right">
		<?php  $_smarty_tpl->tpl_vars['children'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['children']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['children']->key => $_smarty_tpl->tpl_vars['children']->value) {
$_smarty_tpl->tpl_vars['children']->_loop = true;
?>
			<div class="cat_list ecjia-category-list <?php if ($_smarty_tpl->tpl_vars['cat_id']->value==$_smarty_tpl->tpl_vars['children']->value['id']) {?>show<?php } else { ?>hide<?php }?>" id="category_<?php echo $_smarty_tpl->tpl_vars['children']->value['id'];?>
">
	            <a href="<?php if ($_smarty_tpl->tpl_vars['children']->value['url']) {?><?php echo $_smarty_tpl->tpl_vars['children']->value['url'];?>
<?php } else { ?><?php echo RC_Uri::url('goods/category/store_list');?>
&cid=<?php echo $_smarty_tpl->tpl_vars['children']->value['id'];?>
<?php }?>">
	            	<img src="<?php echo $_smarty_tpl->tpl_vars['children']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['children']->value['name'];?>
">
	            </a>
	            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['children']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
	            <div>
		            <div class="hd">
		                <h5>
		                    <span class="line"></span>
		                    <a href="<?php if ($_smarty_tpl->tpl_vars['val']->value['url']) {?><?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
<?php } else { ?><?php echo RC_Uri::url('goods/category/store_list');?>
&cid=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
<?php }?>">
		                    	<span class="goods-index-title"><span class="point"></span><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
<span class="iconfont icon-jiantou-right"></span></span>
		                    </a>
		                </h5>
		            </div>
		            <ul class="ecjia-margin-t">
		            	<?php if ($_smarty_tpl->tpl_vars['val']->value['children']) {?>
		                <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['val']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
		                <li>
		                    <a href="<?php if ($_smarty_tpl->tpl_vars['cat']->value['url']) {?><?php echo $_smarty_tpl->tpl_vars['cat']->value['url'];?>
<?php } else { ?><?php echo RC_Uri::url('goods/category/store_list');?>
&cid=<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
<?php }?>">
		                        <div class="cat-img">
		                            <img src="<?php if ($_smarty_tpl->tpl_vars['cat']->value['image']) {?><?php echo $_smarty_tpl->tpl_vars['cat']->value['image'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/default-goods-pic.png<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
">
		                        </div>
		                        <div class="child_name"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</div>
		                    </a>
		                </li>
			           	<?php } ?>
			           	<?php } else { ?>
			           	<li>
		                    <a href="<?php if ($_smarty_tpl->tpl_vars['val']->value['url']) {?><?php echo $_smarty_tpl->tpl_vars['val']->value['url'];?>
<?php } else { ?><?php echo RC_Uri::url('goods/category/store_list');?>
&cid=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
<?php }?>">
		                        <div class="cat-img">
		                            <img src="<?php if ($_smarty_tpl->tpl_vars['val']->value['image']) {?><?php echo $_smarty_tpl->tpl_vars['val']->value['image'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/default-goods-pic.png<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
">
		                        </div>
		                        <div class="child_name"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</div>
		                    </a>
		                </li>
		                <?php }?>
		            </ul>
				</div>
		    	<?php } ?>  
            </div>
    	<?php } ?>
    </div>
</div>
<?php /*  Call merged included template "library/model_bar.lbi.php" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("library/model_bar.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '15986597d685babc6d8-86273415');
content_597d685d4a6314_88308804($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "library/model_bar.lbi.php" */?>

<?php echo $_smarty_tpl->getSubTemplate ("library/page_menu.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<script type="text/javascript">
	ecjia.touch.category.init();
</script>

<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:02:20
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\library\index_header.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d685c3d6ec9_67637774')) {function content_597d685c3d6ec9_67637774($_smarty_tpl) {?><?php if (!is_callable('smarty_function_url')) include 'E:\\net\\ecshop\\content\\system\\smarty\\function.url.php';
?>
<?php if ($_smarty_tpl->tpl_vars['address']->value) {?>
<div class="ecjia-mod ecjia-header ecjia-header-index" style="height:5.5em" id="location">
	<div class="ecjia-web">
		<div class="ecjia-address">
			<a href="<?php echo smarty_function_url(array('path'=>'location/index/select_location'),$_smarty_tpl);?>
">
				<p class="address-text"><?php echo $_COOKIE['location_name'];?>
</p>
				<i class="bottom-jiantou"></i>
			</a>
		</div>
	</div>
	
	<div class="ecjia-search-header">
		<span class="bg search-goods" style="margin-top:2em;" data-url="<?php echo RC_Uri::url('touch/index/search');?>
<?php if ($_smarty_tpl->tpl_vars['store_id']->value) {?>&store_id=<?php echo $_smarty_tpl->tpl_vars['store_id']->value;?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['keywords']->value!='') {?>style="text-align: left;" data-val="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"<?php }?>>
			<i class="iconfont icon-search"></i><?php if ($_smarty_tpl->tpl_vars['keywords']->value!='') {?><span class="keywords"><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
</span><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['store_id']->value) {?>搜索店内商品<?php } else { ?>搜索附近门店<?php }?><?php }?>
		</span>
	</div>
</div>
<?php } else { ?>
<div class="ecjia-mod ecjia-header ecjia-header-index">
	<div class="ecjia-search-header">
		<span class="bg search-goods" data-url="<?php echo RC_Uri::url('touch/index/search');?>
<?php if ($_smarty_tpl->tpl_vars['store_id']->value) {?>&store_id=<?php echo $_smarty_tpl->tpl_vars['store_id']->value;?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['keywords']->value!='') {?>style="text-align: left;" data-val="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
"<?php }?>>
			<i class="iconfont icon-search"></i><?php if ($_smarty_tpl->tpl_vars['keywords']->value!='') {?><span class="keywords"><?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
</span><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['store_id']->value) {?>搜索店内商品<?php } else { ?>搜索附近门店<?php }?><?php }?>
		</span>
	</div>
</div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:02:21
         compiled from "E:\net\ecshop\sites\m\content\themes\h5\library\model_bar.lbi.php" */ ?>
<?php if ($_valid && !is_callable('content_597d685d4a6314_88308804')) {function content_597d685d4a6314_88308804($_smarty_tpl) {?><div class="ecjia-mod ecjia-floor ecjia-bottom-bar-pannel o <?php echo $_smarty_tpl->tpl_vars['active']->value;?>
">
	<a class="index" href="<?php echo RC_Uri::url('touch/index/init');?>
">首页</a>
	<a class="category" href="<?php echo RC_Uri::url('goods/category/init');?>
">分类</a>
	<a class="discover" href="<?php echo RC_Uri::url('article/index/init');?>
">发现</a>
	<a class="cartList" href="<?php echo RC_Uri::url('cart/index/init');?>
">购物车</a>
	<a class="mine" href="<?php echo RC_Uri::url('touch/my/init');?>
">我的</a>
</div><?php }} ?>
