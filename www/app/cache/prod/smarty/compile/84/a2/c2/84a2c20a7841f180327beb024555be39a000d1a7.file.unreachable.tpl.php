<?php /* Smarty version Smarty-3.1.19, created on 2019-01-24 15:53:00
         compiled from "/srv/www/pickeo.net/www/themes/classic/templates/checkout/_partials/steps/unreachable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7369113635c49d14c7d0791-88028347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84a2c20a7841f180327beb024555be39a000d1a7' => 
    array (
      0 => '/srv/www/pickeo.net/www/themes/classic/templates/checkout/_partials/steps/unreachable.tpl',
      1 => 1519311025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7369113635c49d14c7d0791-88028347',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identifier' => 0,
    'position' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c49d14c7da3b2_13441066',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c49d14c7da3b2_13441066')) {function content_5c49d14c7da3b2_13441066($_smarty_tpl) {?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>

<?php }} ?>
