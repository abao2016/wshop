<?php /*%%SmartyHeaderCode:31347597d67e4a9dee0-34803479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae733a84e5261451794b9366ee953c50cc903b6b' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\select_location.dwt.php',
      1 => 1498202374,
      2 => 'file',
    ),
    '0ca7a90c9cf9c6e3b82ac5b2647a09b563279891' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\ecjia-touch.dwt.php',
      1 => 1498202372,
      2 => 'file',
    ),
    '31e579fad3a052239c42caf11f87b12de31f4b60' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\library\\page_menu.lbi.php',
      1 => 1498202374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31347597d67e4a9dee0-34803479',
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_597d67e91678a5_90298570',
  'has_nocache_code' => false,
  'cache_lifetime' => '3600',
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d67e91678a5_90298570')) {function content_597d67e91678a5_90298570($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta name="Generator" content="ECJIA 1.20" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=0, minimal-ui">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="format-detection" content="telephone=no" />
	<title>定位-ECJia到家 - 同城上门O2O解决方案</title>
	<link href="http://localhost/content/uploads/data/assets/ecjia-intro/wap_logo.png" rel="shortcut icon bookmark">
	<link href="http://localhost/content/uploads/data/assets/ecjia-intro/wap_logo.png" rel="apple-touch-icon-precomposed">

	
	<link rel="stylesheet" href="http://localhost/sites/m/content/themes/h5/lib/bootstrap3/css/bootstrap.css">

	<link rel="stylesheet" href="http://localhost/sites/m/content/themes/h5/dist/css/iconfont.min.css">
	<link rel="stylesheet" href="http://localhost/sites/m/content/themes/h5/css/ecjia.touch.css">
	<link rel="stylesheet" href="http://localhost/sites/m/content/themes/h5/css/ecjia.touch.develop.css">
	<link rel="stylesheet" href="http://localhost/sites/m/content/themes/h5/css/ecjia.touch.b2b2c.css">
	<link rel="stylesheet" href="http://localhost/sites/m/content/themes/h5/css/ecjia_city.css">
	<link rel="stylesheet" href="http://localhost/sites/m/content/themes/h5/css/ecjia_help.css">
    
	<link rel="stylesheet" href="http://localhost/sites/m/content/themes/h5/css/ecjia.touch.models.css">
	<link rel="stylesheet" href="http://localhost/sites/m/content/themes/h5/dist/other/swiper.min.css">
    <link rel="stylesheet" href="http://localhost/sites/m/content/themes/h5/lib/datePicker/css/datePicker.min.css">
    <link rel="stylesheet" href="http://localhost/sites/m/content/themes/h5/lib/winderCheck/css/winderCheck.min.css">
    
    <link rel="stylesheet" href="http://localhost/sites/m/content/themes/h5/lib/photoswipe/css/photoswipe.css">
    <link rel="stylesheet" href="http://localhost/sites/m/content/themes/h5/lib/photoswipe/css/default-skin/default-skin.css">
    
	
	<link rel="stylesheet" href="http://localhost/sites/m/content/themes/h5/style.css">
	<link rel="stylesheet" href="http://localhost/sites/m/content/themes/h5/lib/iOSOverlay/css/iosOverlay.css">
</head>
<body>
	<div class="ecjia" id="get_location" data-url="http://localhost/sites/m/index.php?m=location&c=index&a=get_location_msg">
		<input type="hidden" name="key" value="HVNBZ-HHR3P-HVBDP-LID55-D2YM3-2AF2W"/>
		<input type="hidden" name="referer" value="ecjiaapp"/>
		
<div class="ecjia-zs" id="ecjia-zs" data-type="index" data-url="http://localhost/sites/m/index.php?m=touch&c=index&a=init">
	<div class="ecjia-zt a1">
		<a href="http://localhost/sites/m/index.php?m=location&c=index&a=select_city&type=search&city_id=77">
			<h2 class="ecjia-zu"><span class="city-name">深圳</span></h2>
 		</a>
		<input class="ecjia-zv" type="text" id="search_location_list" data-toggle="search-address" data-url="http://localhost/sites/m/index.php?m=location&c=index&a=search_list"  name="address" placeholder="选择城市、小区、写字楼、学校" maxlength="50" >
	</div>
	<div class="ecjia-zw">
		<a class="external" href="https://apis.map.qq.com/tools/locpicker?search=1&type=0&backurl=http%3A%2F%2Flocalhost%2Fsites%2Fm%2Findex.php%3Fm%3Dtouch%26c%3Dindex%26a%3Dinit&key=HVNBZ-HHR3P-HVBDP-LID55-D2YM3-2AF2W&referer=ecjiaapp">
			<div class="ecjia-zx"><i></i><p>点击定位当前地点</p></div>
		</a>
	</div>
		
	<div class="ecjia-near-address">您附近的地址</div>
	<div class="ecjia-address_list">
		<ul class="nav-list-ready ecjia-location-list-wrap near-location-list">
							<li data-lng="113.94414" data-lat="22.59119">
				<p class="list_wrapper a1">
					<span class="ecjia-list_title ecjia-location-list-title">深圳职业技术学院(官龙山校区)</span>
					<span class="ecjia-list_title ecjia-location-list-address">广东省深圳市南山区同发路13</span>
				</p>
			</li>
					<li data-lng="113.94415" data-lat="22.59118">
				<p class="list_wrapper a1">
					<span class="ecjia-list_title ecjia-location-list-title">深职院北区饭堂</span>
					<span class="ecjia-list_title ecjia-location-list-address">广东省深圳市南山区同发路13号</span>
				</p>
			</li>
					<li data-lng="113.94415" data-lat="22.59118">
				<p class="list_wrapper a1">
					<span class="ecjia-list_title ecjia-location-list-title">深圳院北区饭堂</span>
					<span class="ecjia-list_title ecjia-location-list-address">广东省深圳市南山区同发路13号</span>
				</p>
			</li>
					<li data-lng="113.94434" data-lat="22.59099">
				<p class="list_wrapper a1">
					<span class="ecjia-list_title ecjia-location-list-title">深圳职业技术学院北校区崇德楼</span>
					<span class="ecjia-list_title ecjia-location-list-address">广东省深圳市南山区同发路15深圳职业技术学院北校区</span>
				</p>
			</li>
					<li data-lng="113.9445" data-lat="22.59107">
				<p class="list_wrapper a1">
					<span class="ecjia-list_title ecjia-location-list-title">崇德楼A座</span>
					<span class="ecjia-list_title ecjia-location-list-address">广东省深圳市南山区同发路113号</span>
				</p>
			</li>
					<li data-lng="113.9445" data-lat="22.59082">
				<p class="list_wrapper a1">
					<span class="ecjia-list_title ecjia-location-list-title">深圳职业技术学院报告厅</span>
					<span class="ecjia-list_title ecjia-location-list-address">广东省深圳市南山区同发路17号附近</span>
				</p>
			</li>
					<li data-lng="113.94397" data-lat="22.59217">
				<p class="list_wrapper a1">
					<span class="ecjia-list_title ecjia-location-list-title">菜鸟驿站</span>
					<span class="ecjia-list_title ecjia-location-list-address">广东省深圳市南山区同发路深圳职业技术学院北校区食堂K675美宜佳</span>
				</p>
			</li>
					<li data-lng="113.94436" data-lat="22.59021">
				<p class="list_wrapper a1">
					<span class="ecjia-list_title ecjia-location-list-title">崇德楼B座</span>
					<span class="ecjia-list_title ecjia-location-list-address">广东省深圳市南山区同发路29号附近</span>
				</p>
			</li>
					<li data-lng="113.944997" data-lat="22.591868">
				<p class="list_wrapper a1">
					<span class="ecjia-list_title ecjia-location-list-title">深职院北校区[公交站]</span>
					<span class="ecjia-list_title ecjia-location-list-address">B855</span>
				</p>
			</li>
					<li data-lng="113.94533" data-lat="22.59085">
				<p class="list_wrapper a1">
					<span class="ecjia-list_title ecjia-location-list-title">同发路与新高路交叉口</span>
					<span class="ecjia-list_title ecjia-location-list-address">广东省深圳市南山区 </span>
				</p>
			</li>
					<li data-lng="113.94453" data-lat="22.5925">
				<p class="list_wrapper a1">
					<span class="ecjia-list_title ecjia-location-list-title">瀚园B幢</span>
					<span class="ecjia-list_title ecjia-location-list-address">广东省深圳市南山区同发路</span>
				</p>
			</li>
					<li data-lng="113.945603" data-lat="22.591883">
				<p class="list_wrapper a1">
					<span class="ecjia-list_title ecjia-location-list-title">家具协会[公交站]</span>
					<span class="ecjia-list_title ecjia-location-list-address">382,M429,237,M459</span>
				</p>
			</li>
					<li data-lng="113.94462" data-lat="22.59272">
				<p class="list_wrapper a1">
					<span class="ecjia-list_title ecjia-location-list-title">瀚园A幢</span>
					<span class="ecjia-list_title ecjia-location-list-address">广东省深圳市南山区同发路与沙河西路交叉口西南200米</span>
				</p>
			</li>
					<li data-lng="113.94591" data-lat="22.5911">
				<p class="list_wrapper a1">
					<span class="ecjia-list_title ecjia-location-list-title">深圳时尚创意产业联盟</span>
					<span class="ecjia-list_title ecjia-location-list-address">广东省深圳市南山区同发路8号</span>
				</p>
			</li>
					<li data-lng="113.94591" data-lat="22.5911">
				<p class="list_wrapper a1">
					<span class="ecjia-list_title ecjia-location-list-title">深圳市家具行业协会</span>
					<span class="ecjia-list_title ecjia-location-list-address">广东省深圳市南山区同发路8</span>
				</p>
			</li>
					<li data-lng="113.94594" data-lat="22.59092">
				<p class="list_wrapper a1">
					<span class="ecjia-list_title ecjia-location-list-title">深圳市赛德检测技术有限公司</span>
					<span class="ecjia-list_title ecjia-location-list-address">广东省深圳市南山区同发路8号</span>
				</p>
			</li>
					<li data-lng="113.94552" data-lat="22.59003">
				<p class="list_wrapper a1">
					<span class="ecjia-list_title ecjia-location-list-title">T6艺术馆</span>
					<span class="ecjia-list_title ecjia-location-list-address">广东省深圳市南山区T6艺术区</span>
				</p>
			</li>
					<li data-lng="113.9449" data-lat="22.59282">
				<p class="list_wrapper a1">
					<span class="ecjia-list_title ecjia-location-list-title">杏林书院</span>
					<span class="ecjia-list_title ecjia-location-list-address">广东省深圳市南山区同发路与沙河西路交叉口西南200米</span>
				</p>
			</li>
					<li data-lng="113.94445" data-lat="22.59298">
				<p class="list_wrapper a1">
					<span class="ecjia-list_title ecjia-location-list-title">瀚园C幢</span>
					<span class="ecjia-list_title ecjia-location-list-address">广东省深圳市南山区同发路与沙河西路交叉口西南200米</span>
				</p>
			</li>
					<li data-lng="113.9455" data-lat="22.58984">
				<p class="list_wrapper a1">
					<span class="ecjia-list_title ecjia-location-list-title">锦荷装饰设计有限公司</span>
					<span class="ecjia-list_title ecjia-location-list-address">广东省深圳市南山区同发路t6艺术区1楼b09</span>
				</p>
			</li>
						</ul>   
		<ul class="nav-list-ready ecjia-location-list-wrap location-search-result">
		</ul> 
	</div>
</div>

		<div class="ecjia-menu" id="ecjia-menu">
	<ul>
		<li><a href="http://localhost/sites/m/index.php?m=touch&c=index&a=init"><i class="iconfont icon-home"></i></a></li>
		<li><a href="http://localhost/sites/m/index.php?m=touch&c=index&a=search"><i class="iconfont icon-search"></i></a></li>
		<li><a href="http://localhost/sites/m/index.php?m=cart&c=index&a=init"><i class="iconfont icon-gouwuche"></i></a></li>
		<li><a href="http://localhost/sites/m/index.php?m=touch&c=my&a=init"><i class="iconfont icon-gerenzhongxin"></i></a></li>
		<li><a href="javascript:;"><i class="iconfont icon-top"></i></a></li>
	</ul>
	<div class="main"><a class="nopjax" href="javascript:;"><i class="iconfont icon-add"></i></a></div>
</div>

	</div>
	
	<script charset="utf-8" src="https://map.qq.com/api/js?v=2.exp&libraries=convertor"></script>
	<script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/lib/jquery/jquery.min.js" ></script>
	<script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/lib/multi-select/js/jquery.quicksearch.js" ></script>
	<script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/lib/jquery/jquery.pjax.js" ></script>
	<script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/lib/jquery/jquery.cookie.js" ></script>
	<script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/lib/iscroll/js/iscroll.js" ></script>
	<script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/lib/bootstrap3/js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/lib/ecjiaUI/ecjia.js" ></script>
	<script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/lib/jquery-form/jquery.form.min.js" ></script>	
	<script type="text/javascript" src="https://3gimg.qq.com/lightmap/components/geolocation/geolocation.min.js"></script>
	
	<script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/lib/jquery-localstorage/jquery.localstorage.js" ></script>	
	
	<script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/lib/photoswipe/js/photoswipe.min.js"></script>
	<script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/lib/photoswipe/js/photoswipe-ui-default.min.js"></script>

	
	<script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/js/ecjia.touch.koala.js" ></script>
	<script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/js/ecjia.touch.js" ></script>
    <script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/js/ecjia.touch.others.js" ></script>
    <script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/js/ecjia.touch.goods.js" ></script>
    <script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/js/ecjia.touch.user.js" ></script>
    <script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/js/ecjia.touch.flow.js" ></script>

    <script type="text/javascript">var theme_url = "http://localhost/sites/m/content/themes/h5/";</script>
    <script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/js/ecjia.touch.goods_detail.js" ></script>
    <script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/js/ecjia.touch.spread.js" ></script>
    <script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/js/ecjia.touch.user_account.js" ></script>
    <script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/js/ecjia.touch.franchisee.js" ></script>
    <script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/js/ecjia.touch.comment.js" ></script>
    <script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/js/ecjia.touch.raty.js" ></script>
    <script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/js/ecjia.touch.fly.js" ></script>
    
    <script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/js/ecjia.touch.intro.min.js" ></script>
	<script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/lib/Validform/Validform_v5.3.2_min.js"></script>

	<script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/lib/swiper/js/swiper.min.js"></script>
    <script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/lib/datePicker/js/datePicker.min.js"></script>
    <script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/lib/winderCheck/js/winderCheck.min.js"></script>
    <script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/js/greenCheck.js"></script>
    
    <script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/lib/iOSOverlay/js/iosOverlay.js"></script>
    <script type="text/javascript" src="http://localhost/sites/m/content/themes/h5/lib/iOSOverlay/js/prettify.js"></script>
	
<script type="text/javascript">
	ecjia.touch.region_change();
	ecjia.touch.address_list();
</script>

	<script type="text/javascript">
    	window.onunload = unload;
    	function unload (e){
    	  window.scrollTo(0,0);
    	}
	</script>
	<script type="text/javascript">
		var hidenav = 0, hidetab = 0, hideinfo = 0;
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
<?php }} ?>
