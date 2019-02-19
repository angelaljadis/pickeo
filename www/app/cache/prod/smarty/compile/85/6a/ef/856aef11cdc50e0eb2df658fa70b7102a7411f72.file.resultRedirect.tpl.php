<?php /* Smarty version Smarty-3.1.19, created on 2019-01-24 16:51:25
         compiled from "/srv/www/pickeo.net/www/modules/ceca/views/templates/front/resultRedirect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1189834795c49defd1ce976-98440821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '856aef11cdc50e0eb2df658fa70b7102a7411f72' => 
    array (
      0 => '/srv/www/pickeo.net/www/modules/ceca/views/templates/front/resultRedirect.tpl',
      1 => 1520353430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1189834795c49defd1ce976-98440821',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c49defd222ce7_58033684',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c49defd222ce7_58033684')) {function content_5c49defd222ce7_58033684($_smarty_tpl) {?>
<div style="padding-25px;">
	<p style="text-align:center"><img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
/views/img/loading.gif" alt="<?php echo smartyTranslate(array('s'=>'Loading...','mod'=>'ceca'),$_smarty_tpl);?>
" width="32" height="32" /></p>
	<p style="text-align:center"><?php echo smartyTranslate(array('s'=>'Espere por favor, le estamos redireccionando a la tienda...','mod'=>'ceca'),$_smarty_tpl);?>
</p>
</div>
<script>
	setTimeout(function() {
		window.parent.location = "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
";
	}, 1000);
</script><?php }} ?>
