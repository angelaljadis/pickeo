<?php /* Smarty version Smarty-3.1.19, created on 2019-01-25 09:44:37
         compiled from "/srv/www/pickeo.net/www/pdf/delivery-slip.summary-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10011244715c4acc7592d1c2-16834219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '574392b2ac1a7998aa4aaa2604d032507ed63f28' => 
    array (
      0 => '/srv/www/pickeo.net/www/pdf/delivery-slip.summary-tab.tpl',
      1 => 1519311024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10011244715c4acc7592d1c2-16834219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carrier' => 0,
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4acc75943952_49294514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4acc75943952_49294514')) {function content_5c4acc75943952_49294514($_smarty_tpl) {?>
<table id="summary-tab" width="100%">
	<tr>
		<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'Order Reference','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'Order Date','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<?php if (isset($_smarty_tpl->tpl_vars['carrier']->value)) {?>
			<th class="header small" valign="middle"><?php echo smartyTranslate(array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl);?>
</th>
		<?php }?>
	</tr>
	<tr>
		<td class="center small white"><?php echo $_smarty_tpl->tpl_vars['order']->value->getUniqReference();?>
</td>
		<td class="center small white"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['order']->value->date_add,'full'=>0),$_smarty_tpl);?>
</td>
		<?php if (isset($_smarty_tpl->tpl_vars['carrier']->value)) {?>
			<td class="center small white"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
		<?php }?>
	</tr>
</table>

<?php }} ?>
