<?php /* Smarty version Smarty-3.1.19, created on 2019-01-24 16:40:29
         compiled from "/srv/www/pickeo.net/www/themes/classic/templates/checkout/_partials/cart-summary-items-subtotal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15031958155c49dc6dbe4881-83456481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '436201ff93d47a5dbeb7d95857964cd87176b4e3' => 
    array (
      0 => '/srv/www/pickeo.net/www/themes/classic/templates/checkout/_partials/cart-summary-items-subtotal.tpl',
      1 => 1519311025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15031958155c49dc6dbe4881-83456481',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c49dc6dbeca12_68118530',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c49dc6dbeca12_68118530')) {function content_5c49dc6dbeca12_68118530($_smarty_tpl) {?>

  <div class="card-block cart-summary-line cart-summary-items-subtotal clearfix" id="items-subtotal">
    <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['products']['amount'], ENT_QUOTES, 'UTF-8');?>
</span>
  </div>

<?php }} ?>
