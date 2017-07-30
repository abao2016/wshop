<?php /*%%SmartyHeaderCode:11130597d678f03e122-41427347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55949ffa06fc54a571a2af24cf78396a83e1cb39' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\store_list.dwt.php',
      1 => 1498202374,
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
    '960f3d1d17cb24464854582136934e1d25244916' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\goods_attr_static_modal.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
    '91418ce8bd89e8ce3b93c7ff8654b310f910afc8' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\address_modal.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
    '31e579fad3a052239c42caf11f87b12de31f4b60' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\page_menu.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11130597d678f03e122-41427347',
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_597d75d967cb35_55927221',
  'has_nocache_code' => true,
  'cache_lifetime' => '3600',
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d75d967cb35_55927221')) {function content_597d75d967cb35_55927221($_smarty_tpl) {?><?php $_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_function_url')) include 'E:\\net\\ecshop\\content\\system\\smarty\\function.url.php';
?><?php if (!is_pjax()) {?>
<?php if (is_ajax()) {?>

	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
	<li class="search-goods-list">
		<a class="linksGoods w" href="<?php echo RC_Uri::url('goods/index/show');?>
&goods_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
			<img class="pic" src="<?php echo $_smarty_tpl->tpl_vars['val']->value['img']['small'];?>
">
			<dl>
				<dt><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</dt>
				<dd></dd>
				<dd><label><?php if ($_smarty_tpl->tpl_vars['val']->value['promote_price']) {?><?php echo $_smarty_tpl->tpl_vars['val']->value['promote_price'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['val']->value['shop_price'];?>
<?php }?></label></dd>
			</dl>
		</a>
		<div class="box" id="goods_<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
			<?php if ($_smarty_tpl->tpl_vars['val']->value['specification']) {?>
			<div class="goods_attr goods_spec_<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
				<span class="choose_attr spec_goods" rec_id="<?php echo $_smarty_tpl->tpl_vars['val']->value['rec_id'];?>
" goods_id="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" data-num="<?php echo $_smarty_tpl->tpl_vars['val']->value['num'];?>
" data-spec="<?php echo $_smarty_tpl->tpl_vars['val']->value['default_spec'];?>
" data-url="<?php echo RC_Uri::url('cart/index/check_spec');?>
&store_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['store_id'];?>
">选规格</span>
				<?php if ($_smarty_tpl->tpl_vars['val']->value['num']) {?><i class="attr-number"><?php echo $_smarty_tpl->tpl_vars['val']->value['num'];?>
</i><?php }?>
			</div>
			<?php } else { ?>
			<span class="reduce <?php if ($_smarty_tpl->tpl_vars['val']->value['num']) {?>show<?php } else { ?>hide<?php }?>" data-toggle="remove-to-cart" rec_id="<?php echo $_smarty_tpl->tpl_vars['val']->value['rec_id'];?>
">减11</span>
			<label class="<?php if ($_smarty_tpl->tpl_vars['val']->value['num']) {?>show<?php } else { ?>hide<?php }?>"><?php echo $_smarty_tpl->tpl_vars['val']->value['num'];?>
</label>
			<span class="add" data-toggle="add-to-cart" rec_id="<?php echo $_smarty_tpl->tpl_vars['val']->value['rec_id'];?>
" goods_id="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">加11</span>
			<?php }?>
		</div>
	</li>
	<?php } ?>

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
		
<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_function_url')) include 'E:\\net\\ecshop\\content\\system\\smarty\\function.url.php';
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
<?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
<div class="ecjia-mod ecjia-store-goods-list" <?php if ($_smarty_tpl->tpl_vars['store_id']->value&&$_smarty_tpl->tpl_vars['count_search']->value>6) {?>style="padding-bottom:7em;"<?php }?>>
	<ul class="ecjia-store-list" <?php if ($_smarty_tpl->tpl_vars['is_last']->value!=1) {?>data-toggle="asynclist" data-loadimg="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
dist/images/loader.gif" data-url="<?php echo smarty_function_url(array('path'=>'goods/category/store_list'),$_smarty_tpl);?>
&type=ajax_get<?php if ($_smarty_tpl->tpl_vars['store_id']->value) {?>&store_id=<?php echo $_smarty_tpl->tpl_vars['store_id']->value;?>
<?php }?>&keywords=<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php if ($_smarty_tpl->tpl_vars['cid']->value) {?>&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
<?php }?>" data-page="2"<?php }?>>
		<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
		<?php if (!$_smarty_tpl->tpl_vars['store_id']->value) {?>
		<li class="single_item">
			<ul class="single_store">
				<li class="store-info">
					<a href="<?php echo RC_Uri::url('merchant/index/init');?>
&store_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
					<div class="basic-info">
						<div class="store-left">
							<img src="<?php if ($_smarty_tpl->tpl_vars['val']->value['seller_logo']) {?><?php echo $_smarty_tpl->tpl_vars['val']->value['seller_logo'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/store_default.png<?php }?>">
						</div>
						<div class="store-right">
							<div class="store-title">
								<span class="store-name"><?php echo $_smarty_tpl->tpl_vars['val']->value['seller_name'];?>
</span>
								<?php if ($_smarty_tpl->tpl_vars['val']->value['manage_mode']=='self') {?><span class="manage_mode">自营</span><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['val']->value['distance']) {?><span class="store-distance"><?php echo $_smarty_tpl->tpl_vars['val']->value['distance'];?>
</span><?php }?>
							</div>
							<div class="store-range">
								<i class="icon-shop-time"></i><?php echo $_smarty_tpl->tpl_vars['val']->value['label_trade_time'];?>

							</div>
							<div class="store-notice">
								<i class="icon-shop-notice"></i><?php echo $_smarty_tpl->tpl_vars['val']->value['seller_notice'];?>

							</div>
						</div>
						<div class="clear"></div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['val']->value['favourable_list']) {?>
					<ul class="store-promotion">
						<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['val']->value['favourable_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
						<li class="promotion">
							<span class="promotion-label"><?php echo $_smarty_tpl->tpl_vars['list']->value['type_label'];?>
</span>
							<span class="promotion-name"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</span>
						</li>
						<?php } ?>
					</ul>
					<?php }?>
					</a>
					<?php if ($_smarty_tpl->tpl_vars['val']->value['seller_goods']) {?>
					<ul class="store-goods">
						<?php  $_smarty_tpl->tpl_vars['goods'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goods']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['val']->value['seller_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goods']->key => $_smarty_tpl->tpl_vars['goods']->value) {
$_smarty_tpl->tpl_vars['goods']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['goods']->key;
?>
							<a href="<?php echo RC_Uri::url('goods/index/show');?>
&goods_id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_id'];?>
">
							<li class="goods-info <?php if ($_smarty_tpl->tpl_vars['key']->value>2) {?>goods-hide-list<?php }?>">
								<span class="goods-image"><img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['img']['small'];?>
"></span>
								<p>
									<?php echo $_smarty_tpl->tpl_vars['goods']->value['name'];?>

									<label class="price"><?php if ($_smarty_tpl->tpl_vars['goods']->value['promote_price']) {?><?php echo $_smarty_tpl->tpl_vars['goods']->value['promote_price'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['goods']->value['shop_price'];?>
<?php }?></label>
								</p>
							</li>
							</a>
						<?php } ?>
					</ul>
					<?php }?>
				</li>
			</ul>
			<?php if ($_smarty_tpl->tpl_vars['val']->value['goods_count']>3) {?>
			<ul>
				<li class="goods-info view-more">
					查看更多（<?php echo $_smarty_tpl->tpl_vars['val']->value['goods_count']-3;?>
）<i class="iconfont icon-jiantou-bottom"></i>
				</li>
				<li class="goods-info view-more retract hide">
					收起<i class="iconfont icon-jiantou-top"></i>
				</li>
			</ul>
			<?php }?>
		</li>
		<?php } else { ?>
		<li class="search-goods-list">
			<a class="linksGoods w"  href="<?php echo RC_Uri::url('goods/index/show');?>
&goods_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
				<img class="pic" src="<?php echo $_smarty_tpl->tpl_vars['val']->value['img']['small'];?>
">
				<dl>
					<dt><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</dt>
					<dd><label><?php if ($_smarty_tpl->tpl_vars['val']->value['promote_price']) {?><?php echo $_smarty_tpl->tpl_vars['val']->value['promote_price'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['val']->value['shop_price'];?>
<?php }?></label></dd>
				</dl>
			</a>
			<div class="box" id="goods_<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
				<?php if ($_smarty_tpl->tpl_vars['val']->value['specification']) {?>
				<div class="goods_attr goods_spec_<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
					<span class="choose_attr spec_goods" rec_id="<?php echo $_smarty_tpl->tpl_vars['val']->value['rec_id'];?>
" goods_id="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" data-num="<?php echo $_smarty_tpl->tpl_vars['val']->value['num'];?>
" data-spec="<?php echo $_smarty_tpl->tpl_vars['val']->value['default_spec'];?>
" data-url="<?php echo RC_Uri::url('cart/index/check_spec');?>
&store_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['store_id'];?>
">选规格</span>
					<?php if ($_smarty_tpl->tpl_vars['val']->value['num']) {?><i class="attr-number"><?php echo $_smarty_tpl->tpl_vars['val']->value['num'];?>
</i><?php }?>
				</div>
				<?php } else { ?>
				<span class="reduce <?php if ($_smarty_tpl->tpl_vars['val']->value['num']) {?>show<?php } else { ?>hide<?php }?>" data-toggle="remove-to-cart" rec_id="<?php echo $_smarty_tpl->tpl_vars['val']->value['rec_id'];?>
">减</span>
				<label class="<?php if ($_smarty_tpl->tpl_vars['val']->value['num']) {?>show<?php } else { ?>hide<?php }?>"><?php echo $_smarty_tpl->tpl_vars['val']->value['num'];?>
</label>
				<span class="add" data-toggle="add-to-cart" rec_id="<?php echo $_smarty_tpl->tpl_vars['val']->value['rec_id'];?>
" goods_id="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">加</span>
				<?php }?>
			</div>
		</li>
		<?php }?>
		<?php } ?>
	</ul>
	<?php if ($_smarty_tpl->tpl_vars['store_id']->value) {?>
	<div class="ecjia-h48"></div>
	<?php }?>
</div>
<div class="ecjia-attr-static ecjia-attr-modal">
	<div class="modal-inners">
		<span class="ecjia-close-modal-icon"><i class="iconfont icon-close"></i></span>
		<div class="modal-title"></div>
		<div class="goods-attr-list"></div>
	</div>
	<div class="modal-buttons modal-buttons-2 modal-buttons-vertical">
		<div class="modal-left">
			<span class="goods-attr-price"></span>
			<span class="goods-attr-name"></span>
		</div>
		<div class="ecjia-choose-attr-box box">
			<span class="add add_spec" data-toggle="add-to-cart"></span>
		    <label></label>
		    <span class="reduce remove_spec" data-toggle="remove-to-cart"></span>
		</div>           
		<a class="add-tocart add_spec" data-toggle="add-to-cart">加入购物车</a>
		<input type="hidden" name="goods_price"  />
		<input type="hidden" name="check_spec" value="<?php echo RC_Uri::url('cart/index/check_spec');?>
&store_id=<?php if ($_smarty_tpl->tpl_vars['goods_info']->value['seller_id']) {?><?php echo $_smarty_tpl->tpl_vars['goods_info']->value['seller_id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['store_id']->value;?>
<?php }?>" />
	</div>
</div>
<div class="ecjia-attr-static-overlay ecjia-attr-static-overlay-visible"></div>
<?php } else { ?>
<div class="ecjia-mod search-no-pro ecjia-margin-t ecjia-margin-b">
	<div class="ecjia-nolist">
		<?php if (!$_smarty_tpl->tpl_vars['store_id']->value) {?>
		<p><img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/no_store.png"></p>
		<?php } else { ?>
		<p><img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/no_goods.png"></p>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['keywords']->value) {?>
		暂无搜索结果
		<?php } else { ?>
		暂时没有商家
		<?php }?>
	</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['store_id']->value) {?>
<div class="ecjia-mod store-add-cart a4w">
	<div class="a52"></div>
	<a href="javascript:void 0;" class="a4x <?php if ($_smarty_tpl->tpl_vars['real_count']->value['goods_number']) {?>light<?php } else { ?>disabled<?php }?> outcartcontent show show_cart" show="false">
		<?php if ($_smarty_tpl->tpl_vars['real_count']->value['goods_number']) {?>
		<i class="a4y">
		<?php if ($_smarty_tpl->tpl_vars['real_count']->value['goods_number']>99) {?>99+<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['real_count']->value['goods_number'];?>
<?php }?>
		</i>
		<?php }?>
	</a>
	<div class="a4z" style="transform: translateX(0px);">
		<?php if (!$_smarty_tpl->tpl_vars['real_count']->value['goods_number']) {?>
			<div class="a50">购物车是空的</div>
		<?php } else { ?>
		<div>
			<?php echo $_smarty_tpl->tpl_vars['count']->value['goods_price'];?>
<?php if ($_smarty_tpl->tpl_vars['count']->value['discount']!=0) {?><label>(已减<?php echo $_smarty_tpl->tpl_vars['count']->value['discount'];?>
)</label><?php }?>
		</div>
		<?php }?>
	</div>
	<a class="a51 <?php if (!$_smarty_tpl->tpl_vars['count']->value['check_one']) {?>disabled<?php }?> check_cart" data-href="<?php echo RC_Uri::url('cart/flow/checkout');?>
" data-store="<?php echo $_smarty_tpl->tpl_vars['store_id']->value;?>
" data-address="<?php echo $_smarty_tpl->tpl_vars['address_id']->value;?>
" data-rec="<?php echo $_smarty_tpl->tpl_vars['rec_id']->value;?>
" href="javascript:;">去结算</a>
	<div class="minicart-content" style="transform: translateY(0px); display: block;">
		<a href="javascript:void 0;" class="a4x <?php if ($_smarty_tpl->tpl_vars['count']->value['goods_number']) {?>light<?php } else { ?>disabled<?php }?> incartcontent show_cart" show="false">
			<?php if ($_smarty_tpl->tpl_vars['real_count']->value['goods_number']) {?>
			<i class="a4y">
			<?php if ($_smarty_tpl->tpl_vars['real_count']->value['goods_number']>99) {?>99+<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['real_count']->value['goods_number'];?>
<?php }?>
			</i>
			<?php }?>
		</a>
		<i class="a57"></i>
		<div class="a58 ">
			<span class="a69 a6a <?php if ($_smarty_tpl->tpl_vars['count']->value['check_all']) {?>checked<?php }?>" data-toggle="toggle_checkbox" data-children=".checkbox" id="checkall">全选</span>
			<p class="a6c">(已选<?php echo $_smarty_tpl->tpl_vars['count']->value['goods_number'];?>
件)</p>
			<a href="javascript:void 0;" class="a59" data-toggle="deleteall" data-url="<?php echo RC_Uri::url('cart/index/update_cart');?>
">清空购物车</a>
		</div>
		<div class="a5b" style="max-height: 21em;">
			<div class="a5l single">
				<?php if ($_smarty_tpl->tpl_vars['store_info']->value['favourable_list']) {?>
				<ul class="store-promotion" id="store-promotion">
					<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['store_info']->value['favourable_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
					<li class="promotion">
						<span class="promotion-label"><?php echo $_smarty_tpl->tpl_vars['list']->value['type_label'];?>
</span>
						<span class="promotion-name"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</span>
					</li>
					<?php } ?>
				</ul>
				<?php }?>
				<ul class="minicart-goods-list single"> 
					<?php  $_smarty_tpl->tpl_vars['cart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cart']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cart']->key => $_smarty_tpl->tpl_vars['cart']->value) {
$_smarty_tpl->tpl_vars['cart']->_loop = true;
?>
					<li class="a5n single <?php if ($_smarty_tpl->tpl_vars['cart']->value['is_disabled']==1) {?>disabled<?php }?>">
						<span class="a69 a5o <?php if ($_smarty_tpl->tpl_vars['cart']->value['is_checked']) {?>checked<?php }?> checkbox <?php if ($_smarty_tpl->tpl_vars['cart']->value['is_disabled']==1) {?>disabled<?php }?>" data-toggle="toggle_checkbox" rec_id="<?php echo $_smarty_tpl->tpl_vars['cart']->value['rec_id'];?>
"></span>
						<table class="a5s">
							<tbody>
								<tr>
									<td style="width:75px; height:75px">
										<img class="a7g" src="<?php echo $_smarty_tpl->tpl_vars['cart']->value['img']['small'];?>
">
										<?php if ($_smarty_tpl->tpl_vars['cart']->value['is_disabled']==1) {?>
										<div class="product_empty"><?php echo $_smarty_tpl->tpl_vars['cart']->value['disabled_label'];?>
</div>
										<?php }?>
									</td>
									<td>
										<div class="a7j"><?php echo $_smarty_tpl->tpl_vars['cart']->value['goods_name'];?>
</div> 
										<?php if ($_smarty_tpl->tpl_vars['cart']->value['attr']) {?><div class="a7s"><?php echo $_smarty_tpl->tpl_vars['cart']->value['attr'];?>
</div><?php }?>
										<span class="a7c">
										<?php if ($_smarty_tpl->tpl_vars['cart']->value['goods_price']==0) {?>免费<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['cart']->value['formated_goods_price'];?>
<?php }?>
										</span>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="box" id="goods_cart_<?php echo $_smarty_tpl->tpl_vars['cart']->value['goods_id'];?>
">
							<span class="a5u reduce <?php if ($_smarty_tpl->tpl_vars['cart']->value['is_disabled']==1) {?>disabled<?php }?>" data-toggle="remove-to-cart" rec_id="<?php echo $_smarty_tpl->tpl_vars['cart']->value['rec_id'];?>
" goods_id="<?php echo $_smarty_tpl->tpl_vars['cart']->value['goods_id'];?>
"></span>
							<lable class="a5x"><?php echo $_smarty_tpl->tpl_vars['cart']->value['goods_number'];?>
</lable>
							<span class="a5v <?php if ($_smarty_tpl->tpl_vars['cart']->value['is_disabled']==1) {?>disabled<?php }?>" data-toggle="add-to-cart" rec_id="<?php echo $_smarty_tpl->tpl_vars['cart']->value['rec_id'];?>
" goods_id="<?php echo $_smarty_tpl->tpl_vars['cart']->value['goods_id'];?>
"></span>
						</div>
					</li>
					<input type="hidden" name="rec_id" value="<?php echo $_smarty_tpl->tpl_vars['cart']->value['rec_id'];?>
" />
					<?php } ?>
				</ul>
				<div class="a5m single"></div>
			</div>
		</div>
	</div>
</div>

<div class="a53" style="display: none;"></div>
<input type="hidden" value="<?php echo RC_Uri::url('cart/index/update_cart');?>
" name="update_cart_url" />
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['store_id']->value;?>
" name="store_id" />
<?php }?>
<div class="ecjia-modal">
	<div class="modal-inner">
		<div class="modal-title"><i class="position"></i>您当前使用的地址是：</div>
		<div class="modal-text"><?php echo $_COOKIE['location_name'];?>
</div>
	</div>
	<div class="modal-buttons modal-buttons-2 modal-buttons-vertical">
		<a href="<?php echo RC_Uri::url('user/address/add_address');?>
&clear=1<?php if ($_COOKIE['location_address']) {?>&addr=<?php echo $_COOKIE['location_name'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['referer_url']->value) {?>&referer_url=<?php echo $_smarty_tpl->tpl_vars['referer_url']->value;?>
<?php }?>"><span class="modal-button" style="border-radius: 0;"><span class="create_address">新建收货地址</span></span></a>
		<a href="<?php echo RC_Uri::url('location/index/select_location');?>
<?php if ($_smarty_tpl->tpl_vars['referer_url']->value) {?>&referer_url=<?php echo $_smarty_tpl->tpl_vars['referer_url']->value;?>
<?php }?>"><span class="modal-button"><span class="edit_address">更换地址</span></span></a>
	</div>
</div>
<div class="ecjia-modal-overlay ecjia-modal-overlay-visible"></div>	

		<?php echo $_smarty_tpl->getSubTemplate ("library/page_menu.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
<?php if ($_smarty_tpl->tpl_vars['releated_goods']->value) {?>
var releated_goods = <?php echo $_smarty_tpl->tpl_vars['releated_goods']->value;?>
;
<?php }?>
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


<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_function_url')) include 'E:\\net\\ecshop\\content\\system\\smarty\\function.url.php';
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
<?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
<div class="ecjia-mod ecjia-store-goods-list" <?php if ($_smarty_tpl->tpl_vars['store_id']->value&&$_smarty_tpl->tpl_vars['count_search']->value>6) {?>style="padding-bottom:7em;"<?php }?>>
	<ul class="ecjia-store-list" <?php if ($_smarty_tpl->tpl_vars['is_last']->value!=1) {?>data-toggle="asynclist" data-loadimg="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
dist/images/loader.gif" data-url="<?php echo smarty_function_url(array('path'=>'goods/category/store_list'),$_smarty_tpl);?>
&type=ajax_get<?php if ($_smarty_tpl->tpl_vars['store_id']->value) {?>&store_id=<?php echo $_smarty_tpl->tpl_vars['store_id']->value;?>
<?php }?>&keywords=<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
<?php if ($_smarty_tpl->tpl_vars['cid']->value) {?>&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
<?php }?>" data-page="2"<?php }?>>
		<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
		<?php if (!$_smarty_tpl->tpl_vars['store_id']->value) {?>
		<li class="single_item">
			<ul class="single_store">
				<li class="store-info">
					<a href="<?php echo RC_Uri::url('merchant/index/init');?>
&store_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
					<div class="basic-info">
						<div class="store-left">
							<img src="<?php if ($_smarty_tpl->tpl_vars['val']->value['seller_logo']) {?><?php echo $_smarty_tpl->tpl_vars['val']->value['seller_logo'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/store_default.png<?php }?>">
						</div>
						<div class="store-right">
							<div class="store-title">
								<span class="store-name"><?php echo $_smarty_tpl->tpl_vars['val']->value['seller_name'];?>
</span>
								<?php if ($_smarty_tpl->tpl_vars['val']->value['manage_mode']=='self') {?><span class="manage_mode">自营</span><?php }?>
								<?php if ($_smarty_tpl->tpl_vars['val']->value['distance']) {?><span class="store-distance"><?php echo $_smarty_tpl->tpl_vars['val']->value['distance'];?>
</span><?php }?>
							</div>
							<div class="store-range">
								<i class="icon-shop-time"></i><?php echo $_smarty_tpl->tpl_vars['val']->value['label_trade_time'];?>

							</div>
							<div class="store-notice">
								<i class="icon-shop-notice"></i><?php echo $_smarty_tpl->tpl_vars['val']->value['seller_notice'];?>

							</div>
						</div>
						<div class="clear"></div>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['val']->value['favourable_list']) {?>
					<ul class="store-promotion">
						<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['val']->value['favourable_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
						<li class="promotion">
							<span class="promotion-label"><?php echo $_smarty_tpl->tpl_vars['list']->value['type_label'];?>
</span>
							<span class="promotion-name"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</span>
						</li>
						<?php } ?>
					</ul>
					<?php }?>
					</a>
					<?php if ($_smarty_tpl->tpl_vars['val']->value['seller_goods']) {?>
					<ul class="store-goods">
						<?php  $_smarty_tpl->tpl_vars['goods'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goods']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['val']->value['seller_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goods']->key => $_smarty_tpl->tpl_vars['goods']->value) {
$_smarty_tpl->tpl_vars['goods']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['goods']->key;
?>
							<a href="<?php echo RC_Uri::url('goods/index/show');?>
&goods_id=<?php echo $_smarty_tpl->tpl_vars['goods']->value['goods_id'];?>
">
							<li class="goods-info <?php if ($_smarty_tpl->tpl_vars['key']->value>2) {?>goods-hide-list<?php }?>">
								<span class="goods-image"><img src="<?php echo $_smarty_tpl->tpl_vars['goods']->value['img']['small'];?>
"></span>
								<p>
									<?php echo $_smarty_tpl->tpl_vars['goods']->value['name'];?>

									<label class="price"><?php if ($_smarty_tpl->tpl_vars['goods']->value['promote_price']) {?><?php echo $_smarty_tpl->tpl_vars['goods']->value['promote_price'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['goods']->value['shop_price'];?>
<?php }?></label>
								</p>
							</li>
							</a>
						<?php } ?>
					</ul>
					<?php }?>
				</li>
			</ul>
			<?php if ($_smarty_tpl->tpl_vars['val']->value['goods_count']>3) {?>
			<ul>
				<li class="goods-info view-more">
					查看更多（<?php echo $_smarty_tpl->tpl_vars['val']->value['goods_count']-3;?>
）<i class="iconfont icon-jiantou-bottom"></i>
				</li>
				<li class="goods-info view-more retract hide">
					收起<i class="iconfont icon-jiantou-top"></i>
				</li>
			</ul>
			<?php }?>
		</li>
		<?php } else { ?>
		<li class="search-goods-list">
			<a class="linksGoods w"  href="<?php echo RC_Uri::url('goods/index/show');?>
&goods_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
				<img class="pic" src="<?php echo $_smarty_tpl->tpl_vars['val']->value['img']['small'];?>
">
				<dl>
					<dt><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</dt>
					<dd><label><?php if ($_smarty_tpl->tpl_vars['val']->value['promote_price']) {?><?php echo $_smarty_tpl->tpl_vars['val']->value['promote_price'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['val']->value['shop_price'];?>
<?php }?></label></dd>
				</dl>
			</a>
			<div class="box" id="goods_<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
				<?php if ($_smarty_tpl->tpl_vars['val']->value['specification']) {?>
				<div class="goods_attr goods_spec_<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
					<span class="choose_attr spec_goods" rec_id="<?php echo $_smarty_tpl->tpl_vars['val']->value['rec_id'];?>
" goods_id="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" data-num="<?php echo $_smarty_tpl->tpl_vars['val']->value['num'];?>
" data-spec="<?php echo $_smarty_tpl->tpl_vars['val']->value['default_spec'];?>
" data-url="<?php echo RC_Uri::url('cart/index/check_spec');?>
&store_id=<?php echo $_smarty_tpl->tpl_vars['val']->value['store_id'];?>
">选规格</span>
					<?php if ($_smarty_tpl->tpl_vars['val']->value['num']) {?><i class="attr-number"><?php echo $_smarty_tpl->tpl_vars['val']->value['num'];?>
</i><?php }?>
				</div>
				<?php } else { ?>
				<span class="reduce <?php if ($_smarty_tpl->tpl_vars['val']->value['num']) {?>show<?php } else { ?>hide<?php }?>" data-toggle="remove-to-cart" rec_id="<?php echo $_smarty_tpl->tpl_vars['val']->value['rec_id'];?>
">减</span>
				<label class="<?php if ($_smarty_tpl->tpl_vars['val']->value['num']) {?>show<?php } else { ?>hide<?php }?>"><?php echo $_smarty_tpl->tpl_vars['val']->value['num'];?>
</label>
				<span class="add" data-toggle="add-to-cart" rec_id="<?php echo $_smarty_tpl->tpl_vars['val']->value['rec_id'];?>
" goods_id="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">加</span>
				<?php }?>
			</div>
		</li>
		<?php }?>
		<?php } ?>
	</ul>
	<?php if ($_smarty_tpl->tpl_vars['store_id']->value) {?>
	<div class="ecjia-h48"></div>
	<?php }?>
</div>
<div class="ecjia-attr-static ecjia-attr-modal">
	<div class="modal-inners">
		<span class="ecjia-close-modal-icon"><i class="iconfont icon-close"></i></span>
		<div class="modal-title"></div>
		<div class="goods-attr-list"></div>
	</div>
	<div class="modal-buttons modal-buttons-2 modal-buttons-vertical">
		<div class="modal-left">
			<span class="goods-attr-price"></span>
			<span class="goods-attr-name"></span>
		</div>
		<div class="ecjia-choose-attr-box box">
			<span class="add add_spec" data-toggle="add-to-cart"></span>
		    <label></label>
		    <span class="reduce remove_spec" data-toggle="remove-to-cart"></span>
		</div>           
		<a class="add-tocart add_spec" data-toggle="add-to-cart">加入购物车</a>
		<input type="hidden" name="goods_price"  />
		<input type="hidden" name="check_spec" value="<?php echo RC_Uri::url('cart/index/check_spec');?>
&store_id=<?php if ($_smarty_tpl->tpl_vars['goods_info']->value['seller_id']) {?><?php echo $_smarty_tpl->tpl_vars['goods_info']->value['seller_id'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['store_id']->value;?>
<?php }?>" />
	</div>
</div>
<div class="ecjia-attr-static-overlay ecjia-attr-static-overlay-visible"></div>
<?php } else { ?>
<div class="ecjia-mod search-no-pro ecjia-margin-t ecjia-margin-b">
	<div class="ecjia-nolist">
		<?php if (!$_smarty_tpl->tpl_vars['store_id']->value) {?>
		<p><img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/no_store.png"></p>
		<?php } else { ?>
		<p><img src="<?php echo $_smarty_tpl->tpl_vars['theme_url']->value;?>
images/no_goods.png"></p>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['keywords']->value) {?>
		暂无搜索结果
		<?php } else { ?>
		暂时没有商家
		<?php }?>
	</div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['store_id']->value) {?>
<div class="ecjia-mod store-add-cart a4w">
	<div class="a52"></div>
	<a href="javascript:void 0;" class="a4x <?php if ($_smarty_tpl->tpl_vars['real_count']->value['goods_number']) {?>light<?php } else { ?>disabled<?php }?> outcartcontent show show_cart" show="false">
		<?php if ($_smarty_tpl->tpl_vars['real_count']->value['goods_number']) {?>
		<i class="a4y">
		<?php if ($_smarty_tpl->tpl_vars['real_count']->value['goods_number']>99) {?>99+<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['real_count']->value['goods_number'];?>
<?php }?>
		</i>
		<?php }?>
	</a>
	<div class="a4z" style="transform: translateX(0px);">
		<?php if (!$_smarty_tpl->tpl_vars['real_count']->value['goods_number']) {?>
			<div class="a50">购物车是空的</div>
		<?php } else { ?>
		<div>
			<?php echo $_smarty_tpl->tpl_vars['count']->value['goods_price'];?>
<?php if ($_smarty_tpl->tpl_vars['count']->value['discount']!=0) {?><label>(已减<?php echo $_smarty_tpl->tpl_vars['count']->value['discount'];?>
)</label><?php }?>
		</div>
		<?php }?>
	</div>
	<a class="a51 <?php if (!$_smarty_tpl->tpl_vars['count']->value['check_one']) {?>disabled<?php }?> check_cart" data-href="<?php echo RC_Uri::url('cart/flow/checkout');?>
" data-store="<?php echo $_smarty_tpl->tpl_vars['store_id']->value;?>
" data-address="<?php echo $_smarty_tpl->tpl_vars['address_id']->value;?>
" data-rec="<?php echo $_smarty_tpl->tpl_vars['rec_id']->value;?>
" href="javascript:;">去结算</a>
	<div class="minicart-content" style="transform: translateY(0px); display: block;">
		<a href="javascript:void 0;" class="a4x <?php if ($_smarty_tpl->tpl_vars['count']->value['goods_number']) {?>light<?php } else { ?>disabled<?php }?> incartcontent show_cart" show="false">
			<?php if ($_smarty_tpl->tpl_vars['real_count']->value['goods_number']) {?>
			<i class="a4y">
			<?php if ($_smarty_tpl->tpl_vars['real_count']->value['goods_number']>99) {?>99+<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['real_count']->value['goods_number'];?>
<?php }?>
			</i>
			<?php }?>
		</a>
		<i class="a57"></i>
		<div class="a58 ">
			<span class="a69 a6a <?php if ($_smarty_tpl->tpl_vars['count']->value['check_all']) {?>checked<?php }?>" data-toggle="toggle_checkbox" data-children=".checkbox" id="checkall">全选</span>
			<p class="a6c">(已选<?php echo $_smarty_tpl->tpl_vars['count']->value['goods_number'];?>
件)</p>
			<a href="javascript:void 0;" class="a59" data-toggle="deleteall" data-url="<?php echo RC_Uri::url('cart/index/update_cart');?>
">清空购物车</a>
		</div>
		<div class="a5b" style="max-height: 21em;">
			<div class="a5l single">
				<?php if ($_smarty_tpl->tpl_vars['store_info']->value['favourable_list']) {?>
				<ul class="store-promotion" id="store-promotion">
					<?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['store_info']->value['favourable_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
					<li class="promotion">
						<span class="promotion-label"><?php echo $_smarty_tpl->tpl_vars['list']->value['type_label'];?>
</span>
						<span class="promotion-name"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</span>
					</li>
					<?php } ?>
				</ul>
				<?php }?>
				<ul class="minicart-goods-list single"> 
					<?php  $_smarty_tpl->tpl_vars['cart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cart']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cart']->key => $_smarty_tpl->tpl_vars['cart']->value) {
$_smarty_tpl->tpl_vars['cart']->_loop = true;
?>
					<li class="a5n single <?php if ($_smarty_tpl->tpl_vars['cart']->value['is_disabled']==1) {?>disabled<?php }?>">
						<span class="a69 a5o <?php if ($_smarty_tpl->tpl_vars['cart']->value['is_checked']) {?>checked<?php }?> checkbox <?php if ($_smarty_tpl->tpl_vars['cart']->value['is_disabled']==1) {?>disabled<?php }?>" data-toggle="toggle_checkbox" rec_id="<?php echo $_smarty_tpl->tpl_vars['cart']->value['rec_id'];?>
"></span>
						<table class="a5s">
							<tbody>
								<tr>
									<td style="width:75px; height:75px">
										<img class="a7g" src="<?php echo $_smarty_tpl->tpl_vars['cart']->value['img']['small'];?>
">
										<?php if ($_smarty_tpl->tpl_vars['cart']->value['is_disabled']==1) {?>
										<div class="product_empty"><?php echo $_smarty_tpl->tpl_vars['cart']->value['disabled_label'];?>
</div>
										<?php }?>
									</td>
									<td>
										<div class="a7j"><?php echo $_smarty_tpl->tpl_vars['cart']->value['goods_name'];?>
</div> 
										<?php if ($_smarty_tpl->tpl_vars['cart']->value['attr']) {?><div class="a7s"><?php echo $_smarty_tpl->tpl_vars['cart']->value['attr'];?>
</div><?php }?>
										<span class="a7c">
										<?php if ($_smarty_tpl->tpl_vars['cart']->value['goods_price']==0) {?>免费<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['cart']->value['formated_goods_price'];?>
<?php }?>
										</span>
									</td>
								</tr>
							</tbody>
						</table>
						<div class="box" id="goods_cart_<?php echo $_smarty_tpl->tpl_vars['cart']->value['goods_id'];?>
">
							<span class="a5u reduce <?php if ($_smarty_tpl->tpl_vars['cart']->value['is_disabled']==1) {?>disabled<?php }?>" data-toggle="remove-to-cart" rec_id="<?php echo $_smarty_tpl->tpl_vars['cart']->value['rec_id'];?>
" goods_id="<?php echo $_smarty_tpl->tpl_vars['cart']->value['goods_id'];?>
"></span>
							<lable class="a5x"><?php echo $_smarty_tpl->tpl_vars['cart']->value['goods_number'];?>
</lable>
							<span class="a5v <?php if ($_smarty_tpl->tpl_vars['cart']->value['is_disabled']==1) {?>disabled<?php }?>" data-toggle="add-to-cart" rec_id="<?php echo $_smarty_tpl->tpl_vars['cart']->value['rec_id'];?>
" goods_id="<?php echo $_smarty_tpl->tpl_vars['cart']->value['goods_id'];?>
"></span>
						</div>
					</li>
					<input type="hidden" name="rec_id" value="<?php echo $_smarty_tpl->tpl_vars['cart']->value['rec_id'];?>
" />
					<?php } ?>
				</ul>
				<div class="a5m single"></div>
			</div>
		</div>
	</div>
</div>

<div class="a53" style="display: none;"></div>
<input type="hidden" value="<?php echo RC_Uri::url('cart/index/update_cart');?>
" name="update_cart_url" />
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['store_id']->value;?>
" name="store_id" />
<?php }?>
<div class="ecjia-modal">
	<div class="modal-inner">
		<div class="modal-title"><i class="position"></i>您当前使用的地址是：</div>
		<div class="modal-text"><?php echo $_COOKIE['location_name'];?>
</div>
	</div>
	<div class="modal-buttons modal-buttons-2 modal-buttons-vertical">
		<a href="<?php echo RC_Uri::url('user/address/add_address');?>
&clear=1<?php if ($_COOKIE['location_address']) {?>&addr=<?php echo $_COOKIE['location_name'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['referer_url']->value) {?>&referer_url=<?php echo $_smarty_tpl->tpl_vars['referer_url']->value;?>
<?php }?>"><span class="modal-button" style="border-radius: 0;"><span class="create_address">新建收货地址</span></span></a>
		<a href="<?php echo RC_Uri::url('location/index/select_location');?>
<?php if ($_smarty_tpl->tpl_vars['referer_url']->value) {?>&referer_url=<?php echo $_smarty_tpl->tpl_vars['referer_url']->value;?>
<?php }?>"><span class="modal-button"><span class="edit_address">更换地址</span></span></a>
	</div>
</div>
<div class="ecjia-modal-overlay ecjia-modal-overlay-visible"></div>	

<?php echo $_smarty_tpl->getSubTemplate ("library/page_menu.lbi.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script type="text/javascript">
ecjia.touch.category.init();
<?php if ($_smarty_tpl->tpl_vars['releated_goods']->value) {?>
var releated_goods = <?php echo $_smarty_tpl->tpl_vars['releated_goods']->value;?>
;
<?php }?>
</script>

<?php }?><?php }} ?>
