<?php /* Smarty version Smarty-3.1.19, created on 2019-01-25 09:44:37
         compiled from "/srv/www/pickeo.net/www/pdf/delivery-slip.addresses-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10909709245c4acc759009d7-91147340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76e7f7985e44485da5f81b0c12db9c60b36ba39a' => 
    array (
      0 => '/srv/www/pickeo.net/www/pdf/delivery-slip.addresses-tab.tpl',
      1 => 1531120973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10909709245c4acc759009d7-91147340',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_invoice' => 0,
    'invoice_address' => 0,
    'delivery_address' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4acc75924e39_13533408',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4acc75924e39_13533408')) {function content_5c4acc75924e39_13533408($_smarty_tpl) {?>
<table id="addresses-tab" cellspacing="0" cellpadding="0">
	<tr>
	<td width="40%"><span class="bold"><?php echo smartyTranslate(array('s'=>'Sender Address','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</span><br/><br/>
                <table>
                    <tbody>
                    <tr>
                        
                        <td>Juan Luis Rivas Anoro</td>
                    </tr>
                    <tr>
                        
                        <td>C/ de la Cabeza Molar 10</td>
                    </tr>
                    <tr>
                        
                        <td>19160 Chiloeches</td>
                    </tr>
                    <tr>
                        
                        <td>Guadalajara-ESPAÑA</td>
                    </tr>
                    <tr>
                        
                        <td>01935014R</td>
                    </tr>
                    <tr>
                        
                        <td>+34-949 874 055/ +34-949 874 074</td>
                    </tr>
                    <tr>
                        
                        <td>+34-665 634 853/ +34-665 634 989</td>
                    </tr>
                    <tr>
                        
                        <td><a style="color: #00A4E7;text-decoration: underline">tienda@pickeo.net</a></td>
                    </tr>
                    <tr>
                        
                        <td><a style="color: #00A4E7;text-decoration: underline">www.pickeo.net</a></td>
                    </tr>
                    </tbody>
                </table>
            </td>
		<!--<td width="33%"><span class="bold"> </span><br/><br/>
			<?php echo $_smarty_tpl->tpl_vars['order_invoice']->value->shop_address;?>

		</td>-->
		<?php if (!empty($_smarty_tpl->tpl_vars['invoice_address']->value)) {?>
			<td width="30%"><?php if ($_smarty_tpl->tpl_vars['delivery_address']->value) {?><span class="bold"><?php echo smartyTranslate(array('s'=>'Delivery Address','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</span><br/><br/>
					<?php echo $_smarty_tpl->tpl_vars['delivery_address']->value;?>

				<?php }?>
			</td>
			<td width="30%"><span class="bold"><?php echo smartyTranslate(array('s'=>'Billing Address','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</span><br/><br/>
				<?php echo $_smarty_tpl->tpl_vars['invoice_address']->value;?>

			</td>
		<?php } else { ?>
			<td width="60%"><?php if ($_smarty_tpl->tpl_vars['delivery_address']->value) {?><span class="bold"><?php echo smartyTranslate(array('s'=>'Billing & Delivery Address','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</span><br/><br/>
					<?php echo $_smarty_tpl->tpl_vars['delivery_address']->value;?>

				<?php }?>
			</td>
		<?php }?>
	</tr>
</table>
<?php }} ?>
