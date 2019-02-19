<?php /* Smarty version Smarty-3.1.19, created on 2019-01-28 20:51:27
         compiled from "/srv/www/pickeo.net/www/mails/en/order_conf_product_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16584671605c4f5d3fe71466-13946828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5088b2f72d936afeb16e155f7cc180107403ef5' => 
    array (
      0 => '/srv/www/pickeo.net/www/mails/en/order_conf_product_list.tpl',
      1 => 1531767864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16584671605c4f5d3fe71466-13946828',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'product' => 0,
    'customization' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c4f5d3feaccd3_95700081',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c4f5d3feaccd3_95700081')) {function content_5c4f5d3feaccd3_95700081($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
    <tr>
        <td style="border:1px solid #D6D4D4;">
            <table class="table">
                <tr>
                    <td width="10">&nbsp;</td>
                    <td>
                        <font size="2" face="Open-sans, sans-serif" color="#555454">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>

                        </font>
                    </td>
                    <td width="10">&nbsp;</td>
                </tr>
            </table>
        </td>
        <td style="border:1px solid #D6D4D4;">
            <table class="table">
                <tr>
                    <td width="10">&nbsp;</td>
                    <td>
                        <font size="2" face="Open-sans, sans-serif" color="#555454">
                            <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</strong>
                            <?php if (count($_smarty_tpl->tpl_vars['product']->value['customization'])==1) {?>
                                <br>
                                <?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customization']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
?>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['customization_text'], ENT_QUOTES, 'UTF-8');?>

                                <?php } ?>
                            <?php }?>

                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl);?>

                        </font>
                    </td>
                    <td width="10">&nbsp;</td>
                </tr>
            </table>
        </td>
        <td style="border:1px solid #D6D4D4;">
            <table class="table">
                <tr>
                    <td width="10">&nbsp;</td>
                    <td align="right">
                        <font size="2" face="Open-sans, sans-serif" color="#555454">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['unit_price'], ENT_QUOTES, 'UTF-8');?>

                        </font>
                    </td>
                    <td width="10">&nbsp;</td>
                </tr>
            </table>
        </td>
        <td style="border:1px solid #D6D4D4;">
            <table class="table">
                <tr>
                    <td width="10">&nbsp;</td>
                    <td align="right">
                        <font size="2" face="Open-sans, sans-serif" color="#555454">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>

                        </font>
                    </td>
                    <td width="10">&nbsp;</td>
                </tr>
            </table>
        </td>
        <td style="border:1px solid #D6D4D4;">
            <table class="table">
                <tr>
                    <td width="10">&nbsp;</td>
                    <td align="right">
                        <font size="2" face="Open-sans, sans-serif" color="#555454">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

                        </font>
                    </td>
                    <td width="10">&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
    <?php if (count($_smarty_tpl->tpl_vars['product']->value['customization'])>1) {?>
        <?php  $_smarty_tpl->tpl_vars['customization'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['customization']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product']->value['customization']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->key => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->_loop = true;
?>
            <tr>
                <td colspan="3" style="border:1px solid #D6D4D4;">
                    <table class="table">
                        <tr>
                            <td width="10">&nbsp;</td>
                            <td>
                                <font size="2" face="Open-sans, sans-serif" color="#555454">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['customization_text'], ENT_QUOTES, 'UTF-8');?>

                                </font>
                            </td>
                            <td width="10">&nbsp;</td>
                        </tr>
                    </table>
                </td>
                <td style="border:1px solid #D6D4D4;">
                    <table class="table">
                        <tr>
                            <td width="10">&nbsp;</td>
                            <td align="right">
                                <font size="2" face="Open-sans, sans-serif" color="#555454">
                                    <?php if (count($_smarty_tpl->tpl_vars['product']->value['customization'])>1) {?>
                                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['customization_quantity'], ENT_QUOTES, 'UTF-8');?>

                                    <?php }?>
                                </font>
                            </td>
                            <td width="10">&nbsp;</td>
                        </tr>
                    </table>
                </td>
                <td style="border:1px solid #D6D4D4;"></td>
            </tr>
        <?php } ?>
    <?php }?>
<?php } ?><?php }} ?>
