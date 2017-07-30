<?php /* Smarty version Smarty-3.1.18, created on 2017-07-30 05:15:25
         compiled from "E:\net\ecshop\content\plugins\calculator\calculator.lbi.php" */ ?>
<?php /*%%SmartyHeaderCode:6522597d6b6ddf09e0-09937429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c04976993a2494b9fe4cf07860b62182175006a5' => 
    array (
      0 => 'E:\\net\\ecshop\\content\\plugins\\calculator\\calculator.lbi.php',
      1 => 1498202368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6522597d6b6ddf09e0-09937429',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_597d6b6de65cf2_62558746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597d6b6de65cf2_62558746')) {function content_597d6b6de65cf2_62558746($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include 'E:\\net\\ecshop\\content\\system\\smarty\\block.t.php';
?><div class="accordion-group">
	<div class="accordion-heading">
		<a href="#collapse101" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
		   <i class="icon-th"></i> <?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
计算器<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</a>
	</div>
	<div class="accordion-body collapse" id="collapse101">
		<div class="accordion-inner">
			<form name="Calc" id="calc">
				<div class="formSep control-group input-append">
					<input type="text" style="width:130px" name="Input" /><button type="button" class="btn" name="clear" value="c" OnClick="Calc.Input.value = ''"><i class="icon-remove"></i></button>
				</div>
				<div class="control-group">
					<input type="button" class="btn btn-large" name="seven" value="7" OnClick="Calc.Input.value += '7'" />
					<input type="button" class="btn btn-large" name="eight" value="8" OnCLick="Calc.Input.value += '8'" />
					<input type="button" class="btn btn-large" name="nine" value="9" OnClick="Calc.Input.value += '9'" />
					<input type="button" class="btn btn-large" name="div" value="/" OnClick="Calc.Input.value += ' / '">
				</div>
				<div class="control-group">
					<input type="button" class="btn btn-large" name="four" value="4" OnClick="Calc.Input.value += '4'" />
					<input type="button" class="btn btn-large" name="five" value="5" OnCLick="Calc.Input.value += '5'" />
					<input type="button" class="btn btn-large" name="six" value="6" OnClick="Calc.Input.value += '6'" />
					<input type="button" class="btn btn-large" name="times" value="x" OnClick="Calc.Input.value += ' * '" />
				</div>
				<div class="control-group">
					<input type="button" class="btn btn-large" name="one" value="1" OnClick="Calc.Input.value += '1'" />
					<input type="button" class="btn btn-large" name="two" value="2" OnCLick="Calc.Input.value += '2'" />
					<input type="button" class="btn btn-large" name="three" value="3" OnClick="Calc.Input.value += '3'" />
					<input type="button" class="btn btn-large" name="minus" value="-" OnClick="Calc.Input.value += ' - '" />
				</div>
				<div class="formSep control-group">
					<input type="button" class="btn btn-large" name="dot" value="." OnClick="Calc.Input.value += '.'" />
					<input type="button" class="btn btn-large" name="zero" value="0" OnClick="Calc.Input.value += '0'" />
					<input type="button" class="btn btn-large" name="DoIt" value="=" OnClick="Calc.Input.value = Math.round( eval(Calc.Input.value) * 1000)/1000" />
					<input type="button" class="btn btn-large" name="plus" value="+" OnClick="Calc.Input.value += ' + '" />
				</div>
			</form>
		</div>
	 </div>
</div><?php }} ?>
