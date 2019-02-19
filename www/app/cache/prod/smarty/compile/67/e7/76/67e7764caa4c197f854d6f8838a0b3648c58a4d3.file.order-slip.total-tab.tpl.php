<?php /* Smarty version Smarty-3.1.19, created on 2019-02-19 17:06:51
         compiled from "/srv/www/pickeo.net/www/pdf/order-slip.total-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17872221585c6c299bd3c3b5-00337435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67e7764caa4c197f854d6f8838a0b3648c58a4d3' => 
    array (
      0 => '/srv/www/pickeo.net/www/pdf/order-slip.total-tab.tpl',
      1 => 1519311024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17872221585c6c299bd3c3b5-00337435',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_slip' => 0,
    'tax_excluded_display' => 0,
    'order' => 0,
    'order_details' => 0,
    'total_cart_rule' => 0,
    'total_paid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c6c299bdaaf77_26270575',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6c299bdaaf77_26270575')) {function content_5c6c299bdaaf77_26270575($_smarty_tpl) {?>
<table id="total-tab" width="100%">

	<?php if ($_smarty_tpl->tpl_vars['order_slip']->value->shipping_cost_amount>0) {?>
		<tr>
			<?php if ($_smarty_tpl->tpl_vars['tax_excluded_display']->value) {?>
				<td class="grey" width="70%"><?php echo smartyTranslate(array('s'=>'Shipping (Tax Excl.)','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</td>
			<?php } else { ?>
				<td class="grey" width="70%"><?php echo smartyTranslate(array('s'=>'Shipping (Tax Incl.)','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</td>
			<?php }?>
			<td class="white" width="30%">
				- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['order_slip']->value->shipping_cost_amount),$_smarty_tpl);?>

			</td>
		</tr>
	<?php }?>

	<?php if (isset($_smarty_tpl->tpl_vars['order_details']->value)&&count($_smarty_tpl->tpl_vars['order_details']->value)>0) {?>
		<?php if ((($_smarty_tpl->tpl_vars['order']->value->total_paid_tax_incl-$_smarty_tpl->tpl_vars['order']->value->total_paid_tax_excl)>0)) {?>
			<?php if ($_smarty_tpl->tpl_vars['tax_excluded_display']->value) {?>
				<tr>
					<td class="grey" width="70%">
						<?php echo smartyTranslate(array('s'=>'Product Total (Tax Excl.)','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>

					</td>
					<td class="white" width="30%">
						- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['order']->value->total_products),$_smarty_tpl);?>

					</td>
				</tr>
			<?php } else { ?>
				<tr>
					<td class="grey" width="70%">
						<?php echo smartyTranslate(array('s'=>'Product Total (Tax Incl.)','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>

					</td>
					<td class="white" width="30%">
						- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['order']->value->total_products_wt),$_smarty_tpl);?>

					</td>
				</tr>
			<?php }?>
		<?php } else { ?>
			<tr>
				<td class="grey" width="70%">
					<?php echo smartyTranslate(array('s'=>'Product Total','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>

				</td>
				<td class="white" width="30%">
					- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['order']->value->total_products),$_smarty_tpl);?>

				</td>
			</tr>
		<?php }?>
	<?php }?>

	<?php if (($_smarty_tpl->tpl_vars['order']->value->total_paid_tax_incl-$_smarty_tpl->tpl_vars['order']->value->total_paid_tax_excl)>0) {?>
		<tr>
			<td class="grey" width="70%">
				<?php echo smartyTranslate(array('s'=>'Total Tax','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>

			</td>
			<td class="white" width="30%">
				- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>($_smarty_tpl->tpl_vars['order']->value->total_paid_tax_incl-$_smarty_tpl->tpl_vars['order']->value->total_paid_tax_excl)),$_smarty_tpl);?>

			</td>
		</tr>
	<?php }?>

  <?php if ($_smarty_tpl->tpl_vars['tax_excluded_display']->value) {?>
    <tr class="bold">
      <td class="grey" width="70%">
        <?php echo smartyTranslate(array('s'=>'Total (Tax Excl.)','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>

      </td>
      <td class="white" width="30%">
        <?php if ($_smarty_tpl->tpl_vars['total_cart_rule']->value) {?>
          <?php $_smarty_tpl->tpl_vars['total_paid'] = new Smarty_variable(0, null, 0);?>
          <?php $_smarty_tpl->tpl_vars['total_paid'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->total_paid_tax_excl-$_smarty_tpl->tpl_vars['total_cart_rule']->value, null, 0);?>
          - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['total_paid']->value),$_smarty_tpl);?>

        <?php } else { ?>
          - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['order']->value->total_paid_tax_excl),$_smarty_tpl);?>

        <?php }?>
      </td>
    </tr>
  <?php }?>

  <tr class="bold">
    <td class="grey" width="70%">
      <?php echo smartyTranslate(array('s'=>'Total (Tax Incl.)','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>

    </td>
    <td class="white" width="30%">
      <?php if ($_smarty_tpl->tpl_vars['total_cart_rule']->value) {?>
        <?php $_smarty_tpl->tpl_vars['total_paid'] = new Smarty_variable(0, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['total_paid'] = new Smarty_variable($_smarty_tpl->tpl_vars['order']->value->total_paid_tax_incl-$_smarty_tpl->tpl_vars['total_cart_rule']->value, null, 0);?>
        - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['total_paid']->value),$_smarty_tpl);?>

      <?php } else { ?>
        - <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['order']->value->total_paid_tax_incl),$_smarty_tpl);?>

      <?php }?>
    </td>
  </tr>

</table>
<?php }} ?>
