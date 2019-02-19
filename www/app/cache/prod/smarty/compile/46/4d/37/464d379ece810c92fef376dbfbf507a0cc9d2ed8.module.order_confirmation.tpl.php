<?php /* Smarty version Smarty-3.1.19, created on 2019-02-03 09:55:35
         compiled from "module:paypal/views/templates/hook/order_confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6196205065c56ac878607c6-41094361%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '464d379ece810c92fef376dbfbf507a0cc9d2ed8' => 
    array (
      0 => 'module:paypal/views/templates/hook/order_confirmation.tpl',
      1 => 1523642815,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '6196205065c56ac878607c6-41094361',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_msg' => 0,
    'method' => 0,
    'transaction_id' => 0,
    'ppp_information' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5c56ac87903ab5_71927541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c56ac87903ab5_71927541')) {function content_5c56ac87903ab5_71927541($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['error_msg']->value)) {?>
<div class="alert alert-danger">
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error_msg']->value, ENT_QUOTES, 'UTF-8');?>

</div>
<?php }?>
<li id="paypal_transaction_id">
    <?php if ($_smarty_tpl->tpl_vars['method']->value=='BT') {?>
        <?php echo smartyTranslate(array('s'=>'Braintree transaction id :','mod'=>'paypal'),$_smarty_tpl);?>

    <?php } else { ?>
        <?php echo smartyTranslate(array('s'=>'Paypal transaction id :','mod'=>'paypal'),$_smarty_tpl);?>

    <?php }?>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['transaction_id']->value, ENT_QUOTES, 'UTF-8');?>

</li>
<?php if (isset($_smarty_tpl->tpl_vars['ppp_information']->value)) {?>
    <dl>
        <dd>
            <?php echo smartyTranslate(array('s'=>'The bank name','mod'=>'paypal'),$_smarty_tpl);?>
 : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ppp_information']->value->recipient_banking_instruction->bank_name, ENT_QUOTES, 'UTF-8');?>

        </dd>
        <dd>
            <?php echo smartyTranslate(array('s'=>'Account holder name','mod'=>'paypal'),$_smarty_tpl);?>
 : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ppp_information']->value->recipient_banking_instruction->account_holder_name, ENT_QUOTES, 'UTF-8');?>

        </dd>
        <dd>
            <?php echo smartyTranslate(array('s'=>'IBAN','mod'=>'paypal'),$_smarty_tpl);?>
 : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ppp_information']->value->recipient_banking_instruction->international_bank_account_number, ENT_QUOTES, 'UTF-8');?>

        </dd>
        <dd>
            <?php echo smartyTranslate(array('s'=>'BIC','mod'=>'paypal'),$_smarty_tpl);?>
 : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ppp_information']->value->recipient_banking_instruction->bank_identifier_code, ENT_QUOTES, 'UTF-8');?>

        </dd>
        <dd>
            <?php echo smartyTranslate(array('s'=>'Amount due / currency','mod'=>'paypal'),$_smarty_tpl);?>
 : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ppp_information']->value->amount->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ppp_information']->value->amount->currency, ENT_QUOTES, 'UTF-8');?>

        </dd>
        <dd>
            <?php echo smartyTranslate(array('s'=>'Payment due date','mod'=>'paypal'),$_smarty_tpl);?>
 : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ppp_information']->value->payment_due_date, ENT_QUOTES, 'UTF-8');?>

        </dd>
        <dd>
            <?php echo smartyTranslate(array('s'=>'Reference','mod'=>'paypal'),$_smarty_tpl);?>
 : <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ppp_information']->value->reference_number, ENT_QUOTES, 'UTF-8');?>

        </dd>
    </dl>
<?php }?><?php }} ?>
