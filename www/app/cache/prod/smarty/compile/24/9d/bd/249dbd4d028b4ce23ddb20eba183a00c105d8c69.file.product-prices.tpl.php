<?php /* Smarty version Smarty-3.1.19, created on 2019-01-24 16:40:10
         compiled from "/srv/www/pickeo.net/www/themes/classic/templates/catalog/_partials/product-prices.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16216466435c49dc5a7fc998-66337147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '249dbd4d028b4ce23ddb20eba183a00c105d8c69' => 
    array (
      0 => '/srv/www/pickeo.net/www/themes/classic/templates/catalog/_partials/product-prices.tpl',
      1 => 1542017902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16216466435c49dc5a7fc998-66337147',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'currency' => 0,
    'feature' => 0,
    'price_unit' => 0,
    'price_unit_percentage_referencia' => 0,
    'price_unit_final' => 0,
    'kg' => 0,
    'regular_price_val' => 0,
    'kg_referencia' => 0,
    'str_description' => 0,
    'displayUnitPrice' => 0,
    'priceDisplay' => 0,
    'displayPackPrice' => 0,
    'noPackPrice' => 0,
    'configuration' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c49dc5aaaa513_59386416',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c49dc5aaaa513_59386416')) {function content_5c49dc5aaaa513_59386416($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/srv/www/pickeo.net/www/vendor/prestashop/smarty/plugins/modifier.replace.php';
?>
<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
  <div class="product-prices">
    
      <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']&&$_smarty_tpl->tpl_vars['product']->value['id_category_default']!=14) {?>
        <div class="product-discount">
          <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>

          <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
      <?php }?>
    

    
      <div
        class="product-price h5 <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>has-discount<?php }?>"
        itemprop="offers"
        itemscope
        itemtype="https://schema.org/Offer"
      >
        <link itemprop="availability" href="https://schema.org/InStock"/>
        <meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
        <div class="current-price">           
	 <?php if ($_smarty_tpl->tpl_vars['product']->value['price_amount']>0) {?>
             
            <?php if ($_smarty_tpl->tpl_vars['product']->value['id_category_default']!=14) {?>
                <span itemprop="price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['features']) {?>            
                    <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['features']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['id_feature']==10) {?>
                            <?php $_smarty_tpl->tpl_vars['price_unit'] = new Smarty_variable(((smarty_modifier_replace((smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value['price'],'€','')),',','.'))/$_smarty_tpl->tpl_vars['feature']->value['value']), null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                                <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type']==='percentage') {?>
                                    <?php $_smarty_tpl->tpl_vars['price_unit_final'] = new Smarty_variable(sprintf("%.2f",($_smarty_tpl->tpl_vars['price_unit']->value-(($_smarty_tpl->tpl_vars['price_unit']->value*$_smarty_tpl->tpl_vars['product']->value['discount_percentage_absolute'])/100))), null, 0);?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->tpl_vars['price_unit_percentage_referencia'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['discount_to_display']*100/$_smarty_tpl->tpl_vars['product']->value['price'], null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars['price_unit_final'] = new Smarty_variable(sprintf("%.2f",($_smarty_tpl->tpl_vars['price_unit']->value-(($_smarty_tpl->tpl_vars['price_unit']->value*$_smarty_tpl->tpl_vars['price_unit_percentage_referencia']->value)/100))), null, 0);?>
                                <?php }?>
                            <br/>
                            <span class="unit_price_discount" ><?php echo htmlspecialchars(smarty_modifier_replace(sprintf("%.2f",$_smarty_tpl->tpl_vars['price_unit']->value),'.',','), ENT_QUOTES, 'UTF-8');?>
</span>
                            <span class="unit_price" ><?php echo htmlspecialchars(smarty_modifier_replace(sprintf("%.2f",$_smarty_tpl->tpl_vars['price_unit_final']->value),'.',','), ENT_QUOTES, 'UTF-8');?>
 €/<?php echo smartyTranslate(array('s'=>'Unit','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</span>
                        <?php } else { ?>
                            <br/>
                            <span class="unit_price" ><?php echo htmlspecialchars(smarty_modifier_replace(sprintf("%.2f",$_smarty_tpl->tpl_vars['price_unit']->value),'.',','), ENT_QUOTES, 'UTF-8');?>
 €/<?php echo smartyTranslate(array('s'=>'Unit','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</span>
                        <?php }?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['feature']->value['id_feature']==28) {?>
                        <?php $_smarty_tpl->tpl_vars['kg'] = new Smarty_variable(explode("€",$_smarty_tpl->tpl_vars['feature']->value['value']), null, 0);?>
                        <?php $_smarty_tpl->tpl_vars['str_description'] = new Smarty_variable(explode(".",$_smarty_tpl->tpl_vars['kg']->value[1]), null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>

                            <?php $_smarty_tpl->tpl_vars['regular_price_val'] = new Smarty_variable(smarty_modifier_replace($_smarty_tpl->tpl_vars['product']->value['regular_price'],',','.'), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['kg_referencia'] = new Smarty_variable((smarty_modifier_replace($_smarty_tpl->tpl_vars['regular_price_val']->value,'€',''))/(smarty_modifier_replace($_smarty_tpl->tpl_vars['kg']->value[0],',','.')), null, 0);?>
                            <br/><br/>
                            <span class="unit_price_discount" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['kg']->value[0], ENT_QUOTES, 'UTF-8');?>
  €/Kg </span>
                            <br/><br/>
                            <span class="unit_price" ><?php echo htmlspecialchars(smarty_modifier_replace(sprintf("%.2f",($_smarty_tpl->tpl_vars['product']->value['price_amount']/$_smarty_tpl->tpl_vars['kg_referencia']->value)),'.',','), ENT_QUOTES, 'UTF-8');?>
 €/Kg</span>
                            <?php if ($_smarty_tpl->tpl_vars['str_description']->value[1]) {?>
                                <?php echo smartyTranslate(array('s'=>'See Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

                            <?php }?>
                        <?php } else { ?>
                            <br/><br/>
                            <span class="unit_price" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['kg']->value[0], ENT_QUOTES, 'UTF-8');?>
 €/Kg </span>
                            <?php if ($_smarty_tpl->tpl_vars['str_description']->value[1]) {?>
                                <?php echo smartyTranslate(array('s'=>'See Description','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

                            <?php }?>
                        <?php }?>
                    <?php }?>
                <?php } ?>              
          <?php }?>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type']==='percentage') {?>
              <span class="discount discount-percentage">
                  <?php echo smartyTranslate(array('s'=>'Save %percentage%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%percentage%'=>$_smarty_tpl->tpl_vars['product']->value['discount_percentage_absolute'])),$_smarty_tpl);?>

              </span></br>
            <?php } else { ?>
              <span class="discount discount-amount">
                  <?php echo smartyTranslate(array('s'=>'Save %amount%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['discount_to_display'])),$_smarty_tpl);?>

              </span>
            <?php }?>
          <?php }?>
         <?php }?>
	 <?php if ($_smarty_tpl->tpl_vars['product']->value['price_amount']==0||$_smarty_tpl->tpl_vars['product']->value['id_category_default']==14) {?>
		<span itemprop="price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smartyTranslate(array('s'=>'(Add to the cart to request a budget)','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</span>
	 <?php }?> 
        </div>
        
          <?php if ($_smarty_tpl->tpl_vars['displayUnitPrice']->value) {?>
            <p class="product-unit-price sub"><?php echo smartyTranslate(array('s'=>'(%unit_price%)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%unit_price%'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_full'])),$_smarty_tpl);?>
</p>
          <?php }?>
        
      </div>
    

    
      <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value==2) {?>
        <p class="product-without-taxes"><?php echo smartyTranslate(array('s'=>'%price% tax excl.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc'])),$_smarty_tpl);?>
</p>
      <?php }?>
    

    
      <?php if ($_smarty_tpl->tpl_vars['displayPackPrice']->value) {?>
        <p class="product-pack-price"><span><?php echo smartyTranslate(array('s'=>'Instead of %price%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['noPackPrice']->value)),$_smarty_tpl);?>
</span></p>
      <?php }?>
    

    
      <?php if ($_smarty_tpl->tpl_vars['product']->value['ecotax']['amount']>0) {?>
        <p class="price-ecotax"><?php echo smartyTranslate(array('s'=>'Including %amount% for ecotax','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['ecotax']['value'])),$_smarty_tpl);?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
            <?php echo smartyTranslate(array('s'=>'(not impacted by the discount)','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>

          <?php }?>
        </p>
      <?php }?>
    

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight",'hook_origin'=>'product_sheet'),$_smarty_tpl);?>


    <div class="tax-shipping-delivery-label">
      <?php if ($_smarty_tpl->tpl_vars['configuration']->value['display_taxes_label']) {?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['labels']['tax_long'], ENT_QUOTES, 'UTF-8');?>

      <?php }?>
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl);?>

      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"after_price"),$_smarty_tpl);?>

    </div>
  </div>
<?php }?>
<?php }} ?>
