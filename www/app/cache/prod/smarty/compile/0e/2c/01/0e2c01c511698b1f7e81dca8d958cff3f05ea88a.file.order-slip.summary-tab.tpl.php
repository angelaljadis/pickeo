<?php /* Smarty version Smarty-3.1.19, created on 2019-02-19 17:06:51
         compiled from "/srv/www/pickeo.net/www/pdf/order-slip.summary-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9415939345c6c299bc38f27-40390079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e2c01c511698b1f7e81dca8d958cff3f05ea88a' => 
    array (
      0 => '/srv/www/pickeo.net/www/pdf/order-slip.summary-tab.tpl',
      1 => 1519311024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9415939345c6c299bc38f27-40390079',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addresses' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c6c299bc94607_32583811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6c299bc94607_32583811')) {function content_5c6c299bc94607_32583811($_smarty_tpl) {?>
<table id="summary-tab" width="100%">
	<tr>
		<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'Order Reference','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'Order Date','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<?php if ($_smarty_tpl->tpl_vars['addresses']->value['invoice']->vat_number) {?>
			<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'VAT Number','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<?php }?>
	</tr>
	<tr>
		<td class="center small white"><?php echo $_smarty_tpl->tpl_vars['order']->value->getUniqReference();?>
</td>
		<td class="center small white"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['order']->value->date_add,'full'=>0),$_smarty_tpl);?>
</td>
		<?php if ($_smarty_tpl->tpl_vars['addresses']->value['invoice']->vat_number) {?>
			<td class="center small white">
				<?php echo $_smarty_tpl->tpl_vars['addresses']->value['invoice']->vat_number;?>

			</td>
		<?php }?>
	</tr>
</table>
<?php }} ?>
