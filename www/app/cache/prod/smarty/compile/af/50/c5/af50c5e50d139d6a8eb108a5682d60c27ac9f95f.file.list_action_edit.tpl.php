<?php /* Smarty version Smarty-3.1.19, created on 2019-01-28 11:55:40
         compiled from "/srv/www/pickeo.net/www/admin898yvnpu5/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10882800475c4edfacb4e050-38689993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af50c5e50d139d6a8eb108a5682d60c27ac9f95f' => 
    array (
      0 => '/srv/www/pickeo.net/www/admin898yvnpu5/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1519311024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10882800475c4edfacb4e050-38689993',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4edfacb60c34_43204345',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4edfacb60c34_43204345')) {function content_5c4edfacb60c34_43204345($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
