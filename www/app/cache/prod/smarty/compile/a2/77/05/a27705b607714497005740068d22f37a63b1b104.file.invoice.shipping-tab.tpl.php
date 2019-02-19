<?php /* Smarty version Smarty-3.1.19, created on 2019-01-25 09:44:35
         compiled from "/srv/www/pickeo.net/www/pdf/invoice.shipping-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9790863365c4acc733bf9f9-67807245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a27705b607714497005740068d22f37a63b1b104' => 
    array (
      0 => '/srv/www/pickeo.net/www/pdf/invoice.shipping-tab.tpl',
      1 => 1519311024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9790863365c4acc733bf9f9-67807245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carrier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4acc733c7d01_52522595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4acc733c7d01_52522595')) {function content_5c4acc733c7d01_52522595($_smarty_tpl) {?>
<table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo smartyTranslate(array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }} ?>
