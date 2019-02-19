<?php /* Smarty version Smarty-3.1.19, created on 2019-02-04 20:39:11
         compiled from "modules/ceca/views/templates/front/resultOK.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5029792785c5894df681101-84914901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '706cd52e5173c0b5cb695904892458b4ca3c87b8' => 
    array (
      0 => 'modules/ceca/views/templates/front/resultOK.tpl',
      1 => 1520353430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5029792785c5894df681101-84914901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'order_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c5894df6ea6b4_93668062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c5894df6ea6b4_93668062')) {function content_5c5894df6ea6b4_93668062($_smarty_tpl) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Credit card payment result','mod'=>'ceca'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<h1 id="cart_title"><?php echo smartyTranslate(array('s'=>'Credit card payment result','mod'=>'ceca'),$_smarty_tpl);?>
</h1>
<div style="margin: 20px;">
	<div style="float:left; margin-right: 10px;"><img style="margin-right: 10px;" src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
/views/img/ok.png" alt="OK" /></div>
	<div>
		<p><?php echo smartyTranslate(array('s'=>'Payment of your order will be successful.','mod'=>'ceca'),$_smarty_tpl);?>
</p>
		<p><?php echo smartyTranslate(array('s'=>'Check the status of your order by clicking','mod'=>'ceca'),$_smarty_tpl);?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['order_link']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'here','mod'=>'ceca'),$_smarty_tpl);?>
</a>.</p>
	</div>
</div><?php }} ?>
