<?php /*%%SmartyHeaderCode:5541597d68459119d6-66263659%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f46ff474c9ddbd84e9bb1dc529b59488d4edf6f' => 
    array (
      0 => 'E:\\net\\ecshop\\sites\\m\\content\\themes\\h5\\search.dwt.php',
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
  'nocache_hash' => '5541597d68459119d6-66263659',
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
  'unifunc' => 'content_597d68476df876_96557748',
  'cache_lifetime' => '3600',
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d68476df876_96557748')) {function content_597d68476df876_96557748($_smarty_tpl) {?><title>搜索-ECJia到家 - 同城上门O2O解决方案</title>


<header class="ecjia-header">
	<div class="ecjia-search-header ecjia-search">
		<form class="ecjia-form" action="http://localhost/sites/m/index.php?m=goods&c=category&a=store_list">
			<input id="keywordBox" name="keywords" type="search" placeholder="搜索附近门店" >
			<i class="iconfont icon-search btn-search"></i>
		</form>
		<div class="cancel"><a href="javascript:history.go(-1)">取消</a></div>
	</div>
</header>

<div class="ecjia-no-record">您还没有搜索记录</div>

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


<script type="text/javascript">ecjia.touch.enter_search();</script>

<?php }} ?>
