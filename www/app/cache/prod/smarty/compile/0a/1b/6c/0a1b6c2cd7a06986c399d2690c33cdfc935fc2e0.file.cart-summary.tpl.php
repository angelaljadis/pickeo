<?php /* Smarty version Smarty-3.1.19, created on 2019-01-28 08:56:11
         compiled from "/srv/www/pickeo.net/www/themes/classic/templates/checkout/_partials/cart-summary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12688886005c4eb59b3b53f6-08102879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a1b6c2cd7a06986c399d2690c33cdfc935fc2e0' => 
    array (
      0 => '/srv/www/pickeo.net/www/themes/classic/templates/checkout/_partials/cart-summary.tpl',
      1 => 1547650125,
      2 => 'file',
    ),
    'faebf2d97b705040e6ad4e0569e457a537102cf8' => 
    array (
      0 => '/srv/www/pickeo.net/www/themes/classic/templates/checkout/_partials/cart-summary-product-line.tpl',
      1 => 1519311025,
      2 => 'file',
    ),
    '2deb68e159f1264955a2fc3c0ac41b169f050f67' => 
    array (
      0 => '/srv/www/pickeo.net/www/themes/classic/templates/checkout/_partials/cart-voucher.tpl',
      1 => 1519311025,
      2 => 'file',
    ),
    '36b66841e72617ccb4c2529d6ba61a1441b0a438' => 
    array (
      0 => '/srv/www/pickeo.net/www/themes/classic/templates/checkout/_partials/cart-summary-totals.tpl',
      1 => 1547595966,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12688886005c4eb59b3b53f6-08102879',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urls' => 0,
    'cart' => 0,
    'product' => 0,
    'subtotal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4eb59b4b7a34_26941568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4eb59b4b7a34_26941568')) {function content_5c4eb59b4b7a34_26941568($_smarty_tpl) {?>
<section id="js-checkout-summary" class="card js-cart" data-refresh-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
?ajax=1&action=refresh">
  <div class="card-block">
    
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayCheckoutSummaryTop'),$_smarty_tpl);?>

    

    
      <div class="cart-summary-products">

        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['summary_string'], ENT_QUOTES, 'UTF-8');?>
</p>

        <p>
          <a href="#" data-toggle="collapse" data-target="#cart-summary-product-list">
            <?php echo smartyTranslate(array('s'=>'show details','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

          </a>
        </p>

        
          <div class="collapse" id="cart-summary-product-list">
            <ul class="media-list">
              <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
                <li class="media"><?php /*  Call merged included template "checkout/_partials/cart-summary-product-line.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('checkout/_partials/cart-summary-product-line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, '12688886005c4eb59b3b53f6-08102879');
content_5c4eb59b425243_85448129($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "checkout/_partials/cart-summary-product-line.tpl" */?></li>
              <?php } ?>
            </ul>
          </div>
        
      </div>
    

    
    
    
      <?php  $_smarty_tpl->tpl_vars["subtotal"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["subtotal"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['subtotals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["subtotal"]->key => $_smarty_tpl->tpl_vars["subtotal"]->value) {
$_smarty_tpl->tpl_vars["subtotal"]->_loop = true;
?>
          
        <?php if ($_smarty_tpl->tpl_vars['subtotal']->value&&$_smarty_tpl->tpl_vars['subtotal']->value['type']!=='tax') {?>
          <div class="cart-summary-line cart-summary-subtotals" id="cart-subtotal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['type'], ENT_QUOTES, 'UTF-8');?>
">
            <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>
</span>
            <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</span>
          </div>
        <?php }?>
      <?php } ?>
    
    
    
    
  </div>

  
    <?php /*  Call merged included template "checkout/_partials/cart-voucher.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('checkout/_partials/cart-voucher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '12688886005c4eb59b3b53f6-08102879');
content_5c4eb59b45d227_94568813($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "checkout/_partials/cart-voucher.tpl" */?>
  

  <hr class="separator">

  
    <?php /*  Call merged included template "checkout/_partials/cart-summary-totals.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('checkout/_partials/cart-summary-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, '12688886005c4eb59b3b53f6-08102879');
content_5c4eb59b49acf8_38119758($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "checkout/_partials/cart-summary-totals.tpl" */?>
  

</section>
  
  
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2019-01-28 08:56:11
         compiled from "/srv/www/pickeo.net/www/themes/classic/templates/checkout/_partials/cart-summary-product-line.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5c4eb59b425243_85448129')) {function content_5c4eb59b425243_85448129($_smarty_tpl) {?>

  <div class="media-left">
    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
      <img class="media-object" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['small']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
    </a>
  </div>
  <div class="media-body">
    <span class="product-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="product-quantity">x<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="product-price float-xs-right"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl);?>

  </div>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2019-01-28 08:56:11
         compiled from "/srv/www/pickeo.net/www/themes/classic/templates/checkout/_partials/cart-voucher.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5c4eb59b45d227_94568813')) {function content_5c4eb59b45d227_94568813($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['allowed']) {?>
  
    <div class="block-promo">
      <div class="cart-voucher">
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['added']) {?>
          
            <ul class="promo-name card-block">
              <?php  $_smarty_tpl->tpl_vars['voucher'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['voucher']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['vouchers']['added']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->key => $_smarty_tpl->tpl_vars['voucher']->value) {
$_smarty_tpl->tpl_vars['voucher']->_loop = true;
?>
                <li class="cart-summary-line">
                  <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['delete_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="remove-voucher"><i class="material-icons">&#xE872;</i></a>
                  <div class="float-xs-right">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['voucher']->value['reduction_formatted'], ENT_QUOTES, 'UTF-8');?>

                  </div>
                </li>
              <?php } ?>
            </ul>
          
        <?php }?>

        <p>
          <a class="collapse-button promo-code-button" data-toggle="collapse" href="#promo-code" aria-expanded="false" aria-controls="promo-code">
            <?php echo smartyTranslate(array('s'=>'Have a promo code?','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>

          </a>
        </p>

        <div class="promo-code collapse<?php if (count($_smarty_tpl->tpl_vars['cart']->value['discounts'])>0) {?> in<?php }?>" id="promo-code">
          
            <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="add-voucher" method="post">
              <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
              <input type="hidden" name="addDiscount" value="1">
              <input class="promo-input" type="text" name="discount_name" placeholder="<?php echo smartyTranslate(array('s'=>'Promo code','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
">
              <button type="submit" class="btn btn-primary"><span><?php echo smartyTranslate(array('s'=>'Add','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span></button>
            </form>
          

          
            <div class="alert alert-danger js-error" role="alert">
              <i class="material-icons">&#xE001;</i><span class="ml-1 js-error-text"></span>
            </div>
          
        </div>

        <?php if (count($_smarty_tpl->tpl_vars['cart']->value['discounts'])>0) {?>
          <p class="block-promo promo-highlighted">
            <?php echo smartyTranslate(array('s'=>'Take advantage of our exclusive offers:','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

          </p>
          <ul class="js-discount card-block promo-discounts">
          <?php  $_smarty_tpl->tpl_vars['discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['discounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['discount']->key => $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->_loop = true;
?>
            <li class="cart-summary-line">
              <span class="label"><span class="code"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['code'], ENT_QUOTES, 'UTF-8');?>
</span> - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['discount']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
            </li>
          <?php } ?>
          </ul>
        <?php }?>
      </div>
    </div>
  
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2019-01-28 08:56:11
         compiled from "/srv/www/pickeo.net/www/themes/classic/templates/checkout/_partials/cart-summary-totals.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5c4eb59b49acf8_38119758')) {function content_5c4eb59b49acf8_38119758($_smarty_tpl) {?>
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
