<?php /* Smarty version Smarty-3.1.19, created on 2019-01-24 15:45:47
         compiled from "/srv/www/pickeo.net/www/admin898yvnpu5/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9389367255c49cf9b550e29-39675322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7091bb9cf6e1e87f9b5351e4e72d44f94cd52a65' => 
    array (
      0 => '/srv/www/pickeo.net/www/admin898yvnpu5/themes/default/template/content.tpl',
      1 => 1519311023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9389367255c49cf9b550e29-39675322',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c49cf9b557be0_94132542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c49cf9b557be0_94132542')) {function content_5c49cf9b557be0_94132542($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
