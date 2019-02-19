<?php /* Smarty version Smarty-3.1.19, created on 2019-01-24 15:53:21
         compiled from "/srv/www/pickeo.net/www/themes/classic/templates/checkout/_partials/steps/shipping.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20878015475c49d161a4afe2-31753035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22cfff6d19d474fe6ff64b479a28a8710ba4f088' => 
    array (
      0 => '/srv/www/pickeo.net/www/themes/classic/templates/checkout/_partials/steps/shipping.tpl',
      1 => 1548257565,
      2 => 'file',
    ),
    'd65d56b9aac3904b54dbd9ce89d63d2586df3550' => 
    array (
      0 => '/srv/www/pickeo.net/www/themes/classic/templates/checkout/_partials/steps/checkout-step.tpl',
      1 => 1519311025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20878015475c49d161a4afe2-31753035',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identifier' => 0,
    'step_is_current' => 0,
    'step_is_reachable' => 0,
    'step_is_complete' => 0,
    'position' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c49d161b57e60_48804257',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c49d161b57e60_48804257')) {function content_5c49d161b57e60_48804257($_smarty_tpl) {?>

  <section  id    = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
"
            class = "<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames(array('checkout-step'=>true,'-current'=>$_smarty_tpl->tpl_vars['step_is_current']->value,'-reachable'=>$_smarty_tpl->tpl_vars['step_is_reachable']->value,'-complete'=>$_smarty_tpl->tpl_vars['step_is_complete']->value,'js-current-step'=>$_smarty_tpl->tpl_vars['step_is_current']->value)), ENT_QUOTES, 'UTF-8');?>
"
  >
    <h1 class="step-title h3">
      <i class="material-icons done">&#xE876;</i>
      <span class="step-number"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span>
      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

      <span class="step-edit text-muted"><i class="material-icons edit">mode_edit</i> <?php echo smartyTranslate(array('s'=>'Edit','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</span>
    </h1>

    <div class="content">
      
    <div id="hook-display-before-carrier">
        <?php echo $_smarty_tpl->tpl_vars['hookDisplayBeforeCarrier']->value;?>

    </div>
    
    
    <?php if (count($_smarty_tpl->tpl_vars['cart']->value['products'])) {?>       
        <?php $_smarty_tpl->tpl_vars['first_types_product'] = new Smarty_variable($_smarty_tpl->tpl_vars['cart']->value['products'][0]['id_category_default'], null, 0);?>
        <?php $_smarty_tpl->tpl_vars['count_diferent_types_products'] = new Smarty_variable(1, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['cats'] = new Smarty_variable('', null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
            
            <?php if ($_smarty_tpl->tpl_vars['product']->value['id_category_default']!=$_smarty_tpl->tpl_vars['first_types_product']->value) {?> 
                <?php $_smarty_tpl->tpl_vars['count_diferent_types_products'] = new Smarty_variable($_smarty_tpl->tpl_vars['count_diferent_types_products']->value+1, null, 0);?>
            <?php }?>            
        <?php } ?>    
    <?php }?> 
    <div class="delivery-options-list">
        
        
        <?php if (count($_smarty_tpl->tpl_vars['delivery_options']->value)) {?>  
            <form 
                    class="clearfix "
                    id="js-delivery"
                    data-url-update="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->getUrlSmarty(array('entity'=>'order','params'=>array('ajax'=>1,'action'=>'selectDeliveryOption')),$_smarty_tpl);?>
"
                    method="post"
            >
                <div class="form-fields" <?php if ($_smarty_tpl->tpl_vars['count_diferent_types_products']->value>1) {?> style="display: none"<?php }?>>
                    
                        <div class="delivery-options">
                            <?php  $_smarty_tpl->tpl_vars['carrier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrier']->_loop = false;
 $_smarty_tpl->tpl_vars['carrier_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['delivery_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['carrier']->key => $_smarty_tpl->tpl_vars['carrier']->value) {
$_smarty_tpl->tpl_vars['carrier']->_loop = true;
 $_smarty_tpl->tpl_vars['carrier_id']->value = $_smarty_tpl->tpl_vars['carrier']->key;
?>
                                <div class="row delivery-option">
                                    <div class="row">
                                    <div class="col-sm-1">
                      <span class="custom-radio float-xs-left">
                        <input type="radio" name="delivery_option[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_address']->value, ENT_QUOTES, 'UTF-8');?>
]" id="delivery_option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['delivery_option']->value==$_smarty_tpl->tpl_vars['carrier_id']->value) {?> checked<?php }?> class="shipping-radio">
                        <span></span>
                      </span>
                                    </div>
                                    <label for="delivery_option_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="col-sm-11 delivery-option-2">
                                        <div class="row">
                                            <div class="col-sm-5 col-xs-12">
                                                <div class="row">
                                                    <?php if ($_smarty_tpl->tpl_vars['carrier']->value['logo']) {?>
                                                        <div class="col-xs-3">
                                                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['name'], ENT_QUOTES, 'UTF-8');?>
"/>
                                                        </div>
                                                    <?php }?>
                                                    <div class="<?php if ($_smarty_tpl->tpl_vars['carrier']->value['logo']) {?>col-xs-9<?php } else { ?>col-xs-12<?php }?>">
                                                        <span class="h6 carrier-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 col-xs-12">
                                                <?php if (!$_smarty_tpl->tpl_vars['aceites']->value) {?>
                                                    <span class="carrier-delay"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier']->value['delay'], ENT_QUOTES, 'UTF-8');?>
</span>
                                                <?php }?>
                                            </div>
                                            <div class="col-sm-3 col-xs-12">
                                                <?php if (!$_smarty_tpl->tpl_vars['aceites']->value) {?>
                                                    <span class="carrier-price"><?php echo $_smarty_tpl->tpl_vars['carrier']->value['price'];?>
</span>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </label>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayEnvialiaOptions",'carrier'=>$_smarty_tpl->tpl_vars['carrier']->value),$_smarty_tpl);?>

                                        </div>
                                    </div>
                                </div>
                                <div class="row carrier-extra-content"<?php if ($_smarty_tpl->tpl_vars['delivery_option']->value!=$_smarty_tpl->tpl_vars['carrier_id']->value) {?> style="display:none;"<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['carrier']->value['extraContent'];?>

                                </div>
                                <div class="clearfix"></div>

                            <?php } ?>
                        </div>
                    
                    <div class="order-options">
                        <?php if (!$_smarty_tpl->tpl_vars['aceites']->value) {?>
                            <div id="delivery">
                                <label for="delivery_message"><?php echo smartyTranslate(array('s'=>'If you would like to add a comment about your order, please write it in the field below.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</label>
                                <textarea rows="2" cols="120" id="delivery_message"
                                          name="delivery_message"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_message']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>
                            </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['recyclablePackAllowed']->value) {?>
                            <span class="custom-checkbox">
                <input type="checkbox" id="input_recyclable" name="recyclable" value="1" <?php if ($_smarty_tpl->tpl_vars['recyclable']->value) {?> checked <?php }?>>
                <span><i class="material-icons checkbox-checked">&#xE5CA;</i></span>
                <label for="input_recyclable"><?php echo smartyTranslate(array('s'=>'I would like to receive my order in recycled packaging.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</label>
              </span>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['gift']->value['allowed']) {?>
                            <span class="custom-checkbox">
                <input class="js-gift-checkbox" id="input_gift" name="gift" type="checkbox" value="1"
                       <?php if ($_smarty_tpl->tpl_vars['gift']->value['isGift']) {?>checked="checked"<?php }?>>
                <span><i class="material-icons checkbox-checked">&#xE5CA;</i></span>
                <label for="input_gift"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['label'], ENT_QUOTES, 'UTF-8');?>
</label>
              </span>
                            <div id="gift" class="collapse<?php if ($_smarty_tpl->tpl_vars['gift']->value['isGift']) {?> in<?php }?>">
                                <label for="gift_message"><?php echo smartyTranslate(array('s'=>'If you\'d like, you can add a note to the gift:','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</label>
                                <textarea rows="2" cols="120" id="gift_message"
                                          name="gift_message"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['gift']->value['message'], ENT_QUOTES, 'UTF-8');?>
</textarea>
                            </div>
                        <?php }?>

                    </div>
                </div>
                                 
                <div class="delivery-option no-delivery-option ">  
                    <?php if ($_smarty_tpl->tpl_vars['count_diferent_types_products']->value>1) {?> 
                    <?php  $_smarty_tpl->tpl_vars["subtotal"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["subtotal"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart']->value['subtotals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["subtotal"]->key => $_smarty_tpl->tpl_vars["subtotal"]->value) {
$_smarty_tpl->tpl_vars["subtotal"]->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['subtotal']->value&&$_smarty_tpl->tpl_vars['subtotal']->value['type']!=='tax'&&$_smarty_tpl->tpl_vars['subtotal']->value['type']=='shipping') {?>
                            <p class="tax-shipping"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
 <?php echo smartyTranslate(array('s'=>'tax_incl','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</p>
                        <?php }?>
                    <?php } ?>
                    <?php }?> 
                    <?php echo smartyTranslate(array('s'=>'Message for more one delivery options','sprintf'=>array('[break]'=>'<br/>'),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>

                </div>
                       
                <button type="submit" class="continue btn btn-primary float-xs-right" name="confirmDeliveryOption"
                        value="1">
                    <?php echo smartyTranslate(array('s'=>'Continue','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>

                </button>
            </form>
            
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['weightExceeded']->value) {?>
                <p class="alert alert-danger"><?php echo smartyTranslate(array('s'=>'El peso del pedido no puede exceder los 90kg.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</p>
                <p class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Le recomendamos que realice varios pedidos con un peso menor a 90 kg para obtener los productos que desea.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</p>
            <?php } else { ?>
                <p class="alert alert-danger"><?php echo smartyTranslate(array('s'=>'Unfortunately, there are no carriers available for your delivery address.','d'=>'Shop.Theme.Checkout'),$_smarty_tpl);?>
</p>
            <?php }?>
        <?php }?>
    </div>
    <div id="hook-display-after-carrier">
        <?php echo $_smarty_tpl->tpl_vars['hookDisplayAfterCarrier']->value;?>

    </div>
    <div id="extra_carrier"></div>
    <script>
        var envialia_charge = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['envialia_charge']->value, ENT_QUOTES, 'UTF-8');?>
';
    </script>

    </div>
  </section>

<?php }} ?>
