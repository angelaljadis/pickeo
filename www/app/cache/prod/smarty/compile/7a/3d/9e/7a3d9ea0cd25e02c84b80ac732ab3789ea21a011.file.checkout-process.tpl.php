<?php /* Smarty version Smarty-3.1.19, created on 2019-01-24 15:53:00
         compiled from "/srv/www/pickeo.net/www/themes/classic/templates/checkout/checkout-process.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2347074515c49d14c604644-42630402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a3d9ea0cd25e02c84b80ac732ab3789ea21a011' => 
    array (
      0 => '/srv/www/pickeo.net/www/themes/classic/templates/checkout/checkout-process.tpl',
      1 => 1519311025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2347074515c49d14c604644-42630402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'steps' => 0,
    'step' => 0,
    'index' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c49d14c611d77_90739040',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c49d14c611d77_90739040')) {function content_5c49d14c611d77_90739040($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars["step"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["step"]->_loop = false;
 $_smarty_tpl->tpl_vars["index"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['steps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["step"]->key => $_smarty_tpl->tpl_vars["step"]->value) {
$_smarty_tpl->tpl_vars["step"]->_loop = true;
 $_smarty_tpl->tpl_vars["index"]->value = $_smarty_tpl->tpl_vars["step"]->key;
?>
  <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0][0]->smartyRender(array('identifier'=>$_smarty_tpl->tpl_vars['step']->value['identifier'],'position'=>($_smarty_tpl->tpl_vars['index']->value+1),'ui'=>$_smarty_tpl->tpl_vars['step']->value['ui']),$_smarty_tpl);?>

<?php } ?>
<?php }} ?>
