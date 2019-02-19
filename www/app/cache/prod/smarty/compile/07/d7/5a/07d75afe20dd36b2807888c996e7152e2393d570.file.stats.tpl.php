<?php /* Smarty version Smarty-3.1.19, created on 2019-02-18 20:38:58
         compiled from "/srv/www/pickeo.net/www/admin898yvnpu5/themes/default/template/controllers/stats/stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1077782285c6b09d2901d94-26082969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07d75afe20dd36b2807888c996e7152e2393d570' => 
    array (
      0 => '/srv/www/pickeo.net/www/admin898yvnpu5/themes/default/template/controllers/stats/stats.tpl',
      1 => 1519311024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1077782285c6b09d2901d94-26082969',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'module_instance' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c6b09d2911aa1_62794855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c6b09d2911aa1_62794855')) {function content_5c6b09d2911aa1_62794855($_smarty_tpl) {?>

		<div class="panel">
			<?php if ($_smarty_tpl->tpl_vars['module_name']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['module_instance']->value&&$_smarty_tpl->tpl_vars['module_instance']->value->active) {?>
					<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

				<?php } else { ?>
					<?php echo smartyTranslate(array('s'=>'Module not found','d'=>'Admin.Stats.Notification'),$_smarty_tpl);?>

				<?php }?>
			<?php } else { ?>
				<h3 class="space"><?php echo smartyTranslate(array('s'=>'Please select a module from the left column.','d'=>'Admin.Stats.Notification'),$_smarty_tpl);?>
</h3>
			<?php }?>
		</div>
	</div>
</div>
<?php }} ?>
