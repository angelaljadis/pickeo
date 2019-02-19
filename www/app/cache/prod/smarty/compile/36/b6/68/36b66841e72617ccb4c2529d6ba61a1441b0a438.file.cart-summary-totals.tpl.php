<?php /* Smarty version Smarty-3.1.19, created on 2019-01-24 16:40:29
         compiled from "/srv/www/pickeo.net/www/themes/classic/templates/checkout/_partials/cart-summary-totals.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17847802935c49dc6dbf40e4-94249523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36b66841e72617ccb4c2529d6ba61a1441b0a438' => 
    array (
      0 => '/srv/www/pickeo.net/www/themes/classic/templates/checkout/_partials/cart-summary-totals.tpl',
      1 => 1547595966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17847802935c49dc6dbf40e4-94249523',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c49dc6dc282d8_66767858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c49dc6dc282d8_66767858')) {function content_5c49dc6dc282d8_66767858($_smarty_tpl) {?>
<div class="card-block cart-summary-totals">

  
    <div class="cart-summary-line cart-total">
      <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span>
      <span class="value" id="valor_total"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
  

  
    <div class="cart-summary-line">
      <span class="label sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
      <span class="value sub"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span>
    </div>
  

</div>
<?php }} ?>
