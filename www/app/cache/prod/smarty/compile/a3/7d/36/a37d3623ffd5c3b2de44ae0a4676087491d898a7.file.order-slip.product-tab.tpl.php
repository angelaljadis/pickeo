<?php /* Smarty version Smarty-3.1.19, created on 2019-02-19 17:06:51
         compiled from "/srv/www/pickeo.net/www/pdf/order-slip.product-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11190641815c6c299bc9e9f0-87674590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a37d3623ffd5c3b2de44ae0a4676087491d898a7' => 
    array (
      0 => '/srv/www/pickeo.net/www/pdf/order-slip.product-tab.tpl',
      1 => 1519311024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11190641815c6c299bc9e9f0-87674590',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tax_excluded_display' => 0,
    'order_details' => 0,
    'bgcolor_class' => 0,
    'order_detail' => 0,
    'order' => 0,
    'customizationPerAddress' => 0,
    'customization' => 0,
    'customization_infos' => 0,
    'cart_rules' => 0,
    'cart_rule' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c6c299bd31612_05553837',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6c299bd31612_05553837')) {function content_5c6c299bd31612_05553837($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/srv/www/pickeo.net/www/vendor/prestashop/smarty/plugins/function.cycle.php';
?>

<table class="product" width="100%" cellpadding="4" cellspacing="0">

	<thead>
		<tr>
			<th class="product header small" width="60%"><?php echo smartyTranslate(array('s'=>'Product / Reference','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</th>
			<th class="product header small" width="10%"><?php echo smartyTranslate(array('s'=>'Qty','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</th>
			<th class="product header-right small" width="15%"><?php echo smartyTranslate(array('s'=>'Unit price','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
<br /><?php if ($_smarty_tpl->tpl_vars['tax_excluded_display']->value) {?><?php echo smartyTranslate(array('s'=>'(Tax Excl.)','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'(Tax Incl.)','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
<?php }?></th>
			<th class="product header-right small" width="15%"><?php echo smartyTranslate(array('s'=>'Price','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
<br /><?php if ($_smarty_tpl->tpl_vars['tax_excluded_display']->value) {?><?php echo smartyTranslate(array('s'=>'(Tax Excl.)','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'(Tax Incl.)','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
<?php }?></th>
		</tr>
	</thead>

	<tbody>
		<?php if (!isset($_smarty_tpl->tpl_vars['order_details']->value)||count($_smarty_tpl->tpl_vars['order_details']->value)==0) {?>
			<tr class="product" colspan="4">
				<td class="product center">
					<?php echo smartyTranslate(array('s'=>'No details','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>

				</td>
			</tr>
		<?php } else { ?>
			<?php  $_smarty_tpl->tpl_vars['order_detail'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order_detail']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_details']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order_detail']->key => $_smarty_tpl->tpl_vars['order_detail']->value) {
$_smarty_tpl->tpl_vars['order_detail']->_loop = true;
?>
				<?php echo smarty_function_cycle(array('values'=>array("color_line_even","color_line_odd"),'assign'=>'bgcolor_class'),$_smarty_tpl);?>

				<tr class="product <?php echo $_smarty_tpl->tpl_vars['bgcolor_class']->value;?>
">
					<td class="product left">
						<?php echo $_smarty_tpl->tpl_vars['order_detail']->value['product_name'];?>

					</td>
					<td class="product center">
						<?php echo $_smarty_tpl->tpl_vars['order_detail']->value['product_quantity'];?>

					</td>
					<td class="product right">
						<?php if ($_smarty_tpl->tpl_vars['tax_excluded_display']->value) {?>
							- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['order_detail']->value['unit_price_tax_excl']),$_smarty_tpl);?>

						<?php } else { ?>
							- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['order_detail']->value['unit_price_tax_incl']),$_smarty_tpl);?>

						<?php }?>
					</td>
					<td class="product right">
						<?php if ($_smarty_tpl->tpl_vars['tax_excluded_display']->value) {?>
							- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['order_detail']->value['total_price_tax_excl']),$_smarty_tpl);?>

						<?php } else { ?>
							- <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency,'price'=>$_smarty_tpl->tpl_vars['order_detail']->value['total_price_tax_incl']),$_smarty_tpl);?>

						<?php }?>
					</td>
				</tr>

				<?php  $_smarty_tpl->tpl_vars['customizationPerAddress'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customizationPerAddress']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_detail']->value['customizedDatas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customizationPerAddress']->key => $_smarty_tpl->tpl_vars['customizationPerAddress']->value) {
$_smarty_tpl->tpl_vars['customizationPerAddress']->_loop = true;
?>
					<?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_smarty_tpl->tpl_vars['customizationId'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customizationPerAddress']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
 $_smarty_tpl->tpl_vars['customizationId']->value = $_smarty_tpl->tpl_vars['customization']->key;
?>
						<tr class="customization_data <?php echo $_smarty_tpl->tpl_vars['bgcolor_class']->value;?>
">
							<td>
								<table style="width: 100%;"><tr><td>
									<?php  $_smarty_tpl->tpl_vars['customization_types'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization_types']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customization']->value['datas']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization_types']->key => $_smarty_tpl->tpl_vars['customization_types']->value) {
$_smarty_tpl->tpl_vars['customization_types']->_loop = true;
?>
										<?php if (isset($_smarty_tpl->tpl_vars['customization']->value['datas'][Product::CUSTOMIZE_TEXTFIELD])&&count($_smarty_tpl->tpl_vars['customization']->value['datas'][Product::CUSTOMIZE_TEXTFIELD])>0) {?>
											<?php  $_smarty_tpl->tpl_vars['customization_infos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization_infos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customization']->value['datas'][Product::CUSTOMIZE_TEXTFIELD]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization_infos']->key => $_smarty_tpl->tpl_vars['customization_infos']->value) {
$_smarty_tpl->tpl_vars['customization_infos']->_loop = true;
?>
												<?php echo $_smarty_tpl->tpl_vars['customization_infos']->value['name'];?>
: <?php echo $_smarty_tpl->tpl_vars['customization_infos']->value['value'];?>

												<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['custo_foreach']['last']) {?><br /><?php }?>
											<?php } ?>
										<?php }?>

										<?php if (isset($_smarty_tpl->tpl_vars['customization']->value['datas'][Product::CUSTOMIZE_FILE])&&count($_smarty_tpl->tpl_vars['customization']->value['datas'][Product::CUSTOMIZE_FILE])>0) {?>
											<?php echo count($_smarty_tpl->tpl_vars['customization']->value['datas'][Product::CUSTOMIZE_FILE]);?>
 <?php echo smartyTranslate(array('s'=>'image(s)','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>

										<?php }?>

									<?php } ?>
								</td></tr></table>
							</td>

							<td class="center">(<?php echo $_smarty_tpl->tpl_vars['customization']->value['quantity'];?>
)</td>
							<td class="product"></td>
							<td class="product"></td>
						</tr>
					<?php } ?>
				<?php } ?>
			<?php } ?>
		<?php }?>

		<?php if (is_array($_smarty_tpl->tpl_vars['cart_rules']->value)&&count($_smarty_tpl->tpl_vars['cart_rules']->value)) {?>
			<?php  $_smarty_tpl->tpl_vars['cart_rule'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cart_rule']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart_rules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cart_rule']->key => $_smarty_tpl->tpl_vars['cart_rule']->value) {
$_smarty_tpl->tpl_vars['cart_rule']->_loop = true;
?>
				<tr class="discount">
					<td class="white left" colspan="3"><?php echo $_smarty_tpl->tpl_vars['cart_rule']->value['name'];?>
</td>
					<td class="white right">
						<?php if ($_smarty_tpl->tpl_vars['tax_excluded_display']->value) {?>
							+ <?php echo $_smarty_tpl->tpl_vars['cart_rule']->value['value_tax_excl'];?>

						<?php } else { ?>
							+ <?php echo $_smarty_tpl->tpl_vars['cart_rule']->value['value'];?>

						<?php }?>
					</td>
				</tr>
			<?php } ?>
		<?php }?>

	</tbody>

</table>
<?php }} ?>
