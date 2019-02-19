<?php /* Smarty version Smarty-3.1.19, created on 2019-01-24 12:37:21
         compiled from "/srv/www/pickeo.net/www/themes/classic/templates/catalog/_partials/quickview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1914651255c49a3719f24b7-49278017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c51cc76585f4fcad3f5338ee84b03659009e0aa' => 
    array (
      0 => '/srv/www/pickeo.net/www/themes/classic/templates/catalog/_partials/quickview.tpl',
      1 => 1519311025,
      2 => 'file',
    ),
    '3850cbca5e921387ad3d8b24bf6e8860f63ad9a2' => 
    array (
      0 => '/srv/www/pickeo.net/www/themes/classic/templates/catalog/_partials/product-cover-thumbnails.tpl',
      1 => 1519311025,
      2 => 'file',
    ),
    '249dbd4d028b4ce23ddb20eba183a00c105d8c69' => 
    array (
      0 => '/srv/www/pickeo.net/www/themes/classic/templates/catalog/_partials/product-prices.tpl',
      1 => 1542017902,
      2 => 'file',
    ),
    '2b08a6a8af28ed5dc1354683696c56463b8ac064' => 
    array (
      0 => '/srv/www/pickeo.net/www/themes/classic/templates/catalog/_partials/product-variants.tpl',
      1 => 1519311025,
      2 => 'file',
    ),
    '365bbe4eb8f3ab4a74eb532733e2078ff94d0792' => 
    array (
      0 => '/srv/www/pickeo.net/www/themes/classic/templates/catalog/_partials/product-add-to-cart.tpl',
      1 => 1519311025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1914651255c49a3719f24b7-49278017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'urls' => 0,
    'static_token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c49a371c21953_67562726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c49a371c21953_67562726')) {function content_5c49a371c21953_67562726($_smarty_tpl) {?>
<div id="quickview-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" class="modal fade quickview" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <div class="modal-body">
      <div class="row">
        <div class="col-md-6 col-sm-6 hidden-xs-down">
          
            <?php /*  Call merged included template "catalog/_partials/product-cover-thumbnails.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1914651255c49a3719f24b7-49278017');
content_5c49a371a55117_50696418($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-cover-thumbnails.tpl" */?>
          
          <div class="arrows js-arrows">
            <i class="material-icons arrow-up js-arrow-up">&#xE316;</i>
            <i class="material-icons arrow-down js-arrow-down">&#xE313;</i>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <h1 class="h1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
          
            <?php /*  Call merged included template "catalog/_partials/product-prices.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1914651255c49a3719f24b7-49278017');
content_5c49a371a8acc6_30074275($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-prices.tpl" */?>
          
          
            <div id="product-description-short" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
          
          
            <div class="product-actions">
              <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
                <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">
                
                  <?php /*  Call merged included template "catalog/_partials/product-variants.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1914651255c49a3719f24b7-49278017');
content_5c49a371b9b942_26812333($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-variants.tpl" */?>
                

                
                  <?php /*  Call merged included template "catalog/_partials/product-add-to-cart.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1914651255c49a3719f24b7-49278017');
content_5c49a371bea342_90928402($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-add-to-cart.tpl" */?>
                

                
                  <input class="product-refresh" data-url-update="false" name="refresh" type="submit" value="<?php echo smartyTranslate(array('s'=>'Refresh','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
" hidden>
                
            </form>
          </div>
        
        </div>
      </div>
     </div>
     <div class="modal-footer">
       <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

    </div>
   </div>
 </div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2019-01-24 12:37:21
         compiled from "/srv/www/pickeo.net/www/themes/classic/templates/catalog/_partials/product-cover-thumbnails.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5c49a371a55117_50696418')) {function content_5c49a371a55117_50696418($_smarty_tpl) {?>
<div class="images-container">
  
    <div class="product-cover">
      <img class="js-qv-product-cover" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" style="width:100%;" itemprop="image">
      <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
        <i class="material-icons zoom-in">&#xE8FF;</i>
      </div>
    </div>
  

  
    <div class="js-qv-mask mask">
      <ul class="product-images js-qv-product-images">
        <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
          <li class="thumb-container">
            <img
              class="thumb js-thumb <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image']==$_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> selected <?php }?>"
              data-image-medium-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
              data-image-large-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
              src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
              alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
              title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
              width="100"
              itemprop="image"
            >
          </li>
        <?php } ?>
      </ul>
    </div>
  
</div>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterProductThumbs'),$_smarty_tpl);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2019-01-24 12:37:21
         compiled from "/srv/www/pickeo.net/www/themes/classic/templates/catalog/_partials/product-prices.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5c49a371a8acc6_30074275')) {function content_5c49a371a8acc6_30074275($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/srv/www/pickeo.net/www/vendor/prestashop/smarty/plugins/modifier.replace.php';
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
<?php /* Smarty version Smarty-3.1.19, created on 2019-01-24 12:37:21
         compiled from "/srv/www/pickeo.net/www/themes/classic/templates/catalog/_partials/product-variants.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5c49a371b9b942_26812333')) {function content_5c49a371b9b942_26812333($_smarty_tpl) {?>
<div class="product-variants">
  <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['id_attribute_group'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['id_attribute_group']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
    <div class="clearfix product-variants-item">
      <span class="control-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
      <?php if ($_smarty_tpl->tpl_vars['group']->value['group_type']=='select') {?>
        <select
          class="form-control form-control-select"
          id="group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
"
          data-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
"
          name="group[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
]">
          <?php  $_smarty_tpl->tpl_vars['group_attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_attribute']->_loop = false;
 $_smarty_tpl->tpl_vars['id_attribute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_attribute']->key => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->_loop = true;
 $_smarty_tpl->tpl_vars['id_attribute']->value = $_smarty_tpl->tpl_vars['group_attribute']->key;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
          <?php } ?>
        </select>
      <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_type']=='color') {?>
        <ul id="group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
">
          <?php  $_smarty_tpl->tpl_vars['group_attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_attribute']->_loop = false;
 $_smarty_tpl->tpl_vars['id_attribute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_attribute']->key => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->_loop = true;
 $_smarty_tpl->tpl_vars['id_attribute']->value = $_smarty_tpl->tpl_vars['group_attribute']->key;
?>
            <li class="float-xs-left input-container">
              <label>
                <input class="input-color" type="radio" data-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
" name="group[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> checked="checked"<?php }?>>
                <span
                  <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['html_color_code']) {?>class="color" style="background-color: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['html_color_code'], ENT_QUOTES, 'UTF-8');?>
" <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['texture']) {?>class="color texture" style="background-image: url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['texture'], ENT_QUOTES, 'UTF-8');?>
)" <?php }?>
                ><span class="sr-only"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span></span>
              </label>
            </li>
          <?php } ?>
        </ul>
      <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_type']=='radio') {?>
        <ul id="group_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
">
          <?php  $_smarty_tpl->tpl_vars['group_attribute'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group_attribute']->_loop = false;
 $_smarty_tpl->tpl_vars['id_attribute'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['group']->value['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group_attribute']->key => $_smarty_tpl->tpl_vars['group_attribute']->value) {
$_smarty_tpl->tpl_vars['group_attribute']->_loop = true;
 $_smarty_tpl->tpl_vars['id_attribute']->value = $_smarty_tpl->tpl_vars['group_attribute']->key;
?>
            <li class="input-container float-xs-left">
              <label>
                <input class="input-radio" type="radio" data-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
" name="group[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute_group']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_attribute']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['group_attribute']->value['selected']) {?> checked="checked"<?php }?>>
                <span class="radio-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['group_attribute']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
              </label>
            </li>
          <?php } ?>
        </ul>
      <?php }?>
    </div>
  <?php } ?>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2019-01-24 12:37:21
         compiled from "/srv/www/pickeo.net/www/themes/classic/templates/catalog/_partials/product-add-to-cart.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5c49a371bea342_90928402')) {function content_5c49a371bea342_90928402($_smarty_tpl) {?>
<div class="product-add-to-cart">
  <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
    <span class="control-label"><?php echo smartyTranslate(array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</span>

    
      <div class="product-quantity clearfix">
        <div class="qty">
          <input
            type="text"
            name="qty"
            id="quantity_wanted"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_wanted'], ENT_QUOTES, 'UTF-8');?>
"
            class="input-group"
            min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
            aria-label="<?php echo smartyTranslate(array('s'=>'Quantity','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
"
          >
        </div>

        <div class="add">
          <button
            class="btn btn-primary add-to-cart"
            data-button-action="add-to-cart"
            type="submit"
            <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
              disabled
            <?php }?>
          >
            <i class="material-icons shopping-cart">&#xE547;</i>
            <?php echo smartyTranslate(array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

          </button>
        </div>
      </div>
    

    
      <span id="product-availability">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability']&&$_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['availability']=='available') {?>
            <i class="material-icons product-available">&#xE5CA;</i>
          <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability']=='last_remaining_items') {?>
            <i class="material-icons product-last-items">&#xE002;</i>
          <?php } else { ?>
            <i class="material-icons product-unavailable">&#xE14B;</i>
          <?php }?>
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

        <?php }?>
      </span>
    
    
    
      <p class="product-minimal-quantity">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']>1) {?>
          <?php echo smartyTranslate(array('s'=>'The minimum purchase order quantity for the product is %quantity%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%quantity%'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity'])),$_smarty_tpl);?>

        <?php }?>
      </p>
    
  <?php }?>
</div>
<?php }} ?>
