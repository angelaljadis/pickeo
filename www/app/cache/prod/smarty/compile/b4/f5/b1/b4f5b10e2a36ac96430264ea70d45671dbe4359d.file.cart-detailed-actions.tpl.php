<?php /* Smarty version Smarty-3.1.19, created on 2019-01-24 16:40:29
         compiled from "/srv/www/pickeo.net/www/themes/classic/templates/checkout/_partials/cart-detailed-actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19377221175c49dc6dc30fe6-80600405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4f5b10e2a36ac96430264ea70d45671dbe4359d' => 
    array (
      0 => '/srv/www/pickeo.net/www/themes/classic/templates/checkout/_partials/cart-detailed-actions.tpl',
      1 => 1519311025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19377221175c49dc6dc30fe6-80600405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c49dc6dc45575_81252233',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c49dc6dc45575_81252233')) {function content_5c49dc6dc45575_81252233($_smarty_tpl) {?>

  <div class="checkout cart-detailed-actions card-block">
    <?php if ($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired']) {?>
      <div class="alert alert-warning" role="alert">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired'], ENT_QUOTES, 'UTF-8');?>

      </div>
      <div class="text-sm-center">
        <button type="button" class="btn btn-primary disabled" disabled><?php echo smartyTranslate(array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</button>
      </div>
    <?php } elseif (empty($_smarty_tpl->tpl_vars['cart']->value['products'])) {?>
      <div class="text-sm-center">
        <button type="button" class="btn btn-primary disabled" disabled><?php echo smartyTranslate(array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</button>
      </div>
    <?php } else { ?>
      <div class="text-sm-center">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary"><?php echo smartyTranslate(array('s'=>'Proceed to checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayExpressCheckout'),$_smarty_tpl);?>

      </div>
    <?php }?>
  </div>

<?php }} ?>
