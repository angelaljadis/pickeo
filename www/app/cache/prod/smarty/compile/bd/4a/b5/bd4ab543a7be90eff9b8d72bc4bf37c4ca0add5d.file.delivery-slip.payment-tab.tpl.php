<?php /* Smarty version Smarty-3.1.19, created on 2019-01-25 09:44:37
         compiled from "/srv/www/pickeo.net/www/pdf/delivery-slip.payment-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18001946945c4acc759b7e29-89309074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd4ab543a7be90eff9b8d72bc4bf37c4ca0add5d' => 
    array (
      0 => '/srv/www/pickeo.net/www/pdf/delivery-slip.payment-tab.tpl',
      1 => 1531125543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18001946945c4acc759b7e29-89309074',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_invoice' => 0,
    'payment' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4acc759c9da4_76218297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4acc759c9da4_76218297')) {function content_5c4acc759c9da4_76218297($_smarty_tpl) {?>
<table id="payment-tab" width="100%" cellpadding="4" cellspacing="0">
	<tr>
		<td class="payment center small grey bold" width="44%"><?php echo smartyTranslate(array('s'=>'Payment Method','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</td>
		<td class="payment left white" width="56%">
			<table width="100%" border="0">
				<?php  $_smarty_tpl->tpl_vars['payment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_invoice']->value->getOrderPaymentCollection(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment']->key => $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->_loop = true;
?>
					<tr>
						<td class="right small"><?php echo $_smarty_tpl->tpl_vars['payment']->value->payment_method;?>
</td>
						<td class="right small"><!--<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['payment']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['payment']->value->amount),$_smarty_tpl);?>
--></td>
					</tr>
				<?php }
if (!$_smarty_tpl->tpl_vars['payment']->_loop) {
?>
					<tr>
						<td><?php echo smartyTranslate(array('s'=>'No payment','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</td>
					</tr>
				<?php } ?>
			</table>
		</td>
	</tr>
</table>
<?php }} ?>
