<?php /* Smarty version Smarty-3.1.19, created on 2019-02-19 17:06:51
         compiled from "/srv/www/pickeo.net/www/pdf/order-slip.payment-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16707458845c6c299bdc0bb2-14612020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5754338c615e579c21eda715afa2761d285bf3b3' => 
    array (
      0 => '/srv/www/pickeo.net/www/pdf/order-slip.payment-tab.tpl',
      1 => 1519311024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16707458845c6c299bdc0bb2-14612020',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c6c299bdc7220_82974112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6c299bdc7220_82974112')) {function content_5c6c299bdc7220_82974112($_smarty_tpl) {?>
<table id="payment-tab" width="100%">
	<tr>
		<td class="payment center small grey bold" width="44%"><?php echo smartyTranslate(array('s'=>'Payment Method','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</td>
		<td class="payment left white" width="56%">
			<?php echo $_smarty_tpl->tpl_vars['order']->value->payment;?>

		</td>
	</tr>
</table>
<?php }} ?>
