<?php
/*
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class ContactformOverride extends Contactform
{
    protected $contact;
    protected $customer_thread;

    public function __construct()
    {
        parent::__construct();
    }
    
    public function renderWidget($hookName = null, array $configuration = [])
    {
        $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));
        // for recaptcha language
        $this->smarty->assign('hl', $this->context->language->iso_code);
        return $this->display(__FILE__, 'views/templates/widget/contactform.tpl');
    }
    
    public function sendMessage()
    {
        $extension = array('.txt', '.rtf', '.doc', '.docx', '.pdf', '.zip', '.png', '.jpeg', '.gif', '.jpg');
        $file_attachment = Tools::fileAttachment('fileUpload');
        $message = Tools::getValue('message');

        if (!($from = trim(Tools::getValue('from'))) || !Validate::isEmail($from)) {
            $this->context->controller->errors[] = $this->trans('Invalid email address.', array(), 'Shop.Notifications.Error');
        } elseif (!$message) {
            $this->context->controller->errors[] = $this->trans('The message cannot be blank.', array(), 'Shop.Notifications.Error');
        } elseif (!Validate::isCleanHtml($message)) {
            $this->context->controller->errors[] = $this->trans('Invalid message', array(), 'Shop.Notifications.Error');
        } elseif (!($id_contact = (int)Tools::getValue('id_contact')) || !(Validate::isLoadedObject($contact = new Contact($id_contact, $this->context->language->id)))) {
            $this->context->controller->errors[] = $this->trans('Please select a subject from the list provided. ', array(), 'Modules.Contactform.Shop');
        } elseif (!empty($file_attachment['name']) && $file_attachment['error'] != 0) {
            $this->context->controller->errors[] = $this->trans('An error occurred during the file-upload process.', array(), 'Modules.Contactform.Shop');
        } elseif (!empty($file_attachment['name']) && !in_array(Tools::strtolower(substr($file_attachment['name'], -4)), $extension) && !in_array(Tools::strtolower(substr($file_attachment['name'], -5)), $extension)) {
            $this->context->controller->errors[] = $this->trans('Bad file extension', array(), 'Modules.Contactform.Shop');
        } elseif (!($gcaptcha = (int)(Tools::getValue('g-recaptcha-response')))) {
            $this->context->controller->errors[] = $this->trans('Captcha error', array(), 'Modules.Contactform.Shop');
        }else {
            $customer = $this->context->customer;
            if (!$customer->id) {
                $customer->getByEmail($from);
            }

            $id_order = (int)Tools::getValue('id_order');

            $id_customer_thread = CustomerThread::getIdCustomerThreadByEmailAndIdOrder($from, $id_order);

            if ($contact->customer_service) {
                if ((int)$id_customer_thread) {
                    $ct = new CustomerThread($id_customer_thread);
                    $ct->status = 'open';
                    $ct->id_lang = (int)$this->context->language->id;
                    $ct->id_contact = (int)$id_contact;
                    $ct->id_order = (int)$id_order;
                    if ($id_product = (int)Tools::getValue('id_product')) {
                        $ct->id_product = $id_product;
                    }
                    $ct->update();
                } else {
                    $ct = new CustomerThread();
                    if (isset($customer->id)) {
                        $ct->id_customer = (int)$customer->id;
                    }
                    $ct->id_shop = (int)$this->context->shop->id;
                    $ct->id_order = (int)$id_order;
                    if ($id_product = (int)Tools::getValue('id_product')) {
                        $ct->id_product = $id_product;
                    }
                    $ct->id_contact = (int)$id_contact;
                    $ct->id_lang = (int)$this->context->language->id;
                    $ct->email = $from;
                    $ct->status = 'open';
                    $ct->token = Tools::passwdGen(12);
                    $ct->add();
                }

                if ($ct->id) {

                    $lastMessage = CustomerMessage::getLastMessageForCustomerThread($ct->id);
                    $testFileUpload = (isset($file_attachment['rename']) && !empty($file_attachment['rename']));

                    // if last message is the same as new message (and no file upload), do not consider this contact
                    if ($lastMessage != $message || $testFileUpload) {
                        $cm = new CustomerMessage();
                        $cm->id_customer_thread = $ct->id;
                        $cm->message = $message;
                        if ($testFileUpload && rename($file_attachment['tmp_name'], _PS_UPLOAD_DIR_ . basename($file_attachment['rename']))) {
                            $cm->file_name = $file_attachment['rename'];
                            @chmod(_PS_UPLOAD_DIR_ . basename($file_attachment['rename']), 0664);
                        }
                        $cm->ip_address = (int)ip2long(Tools::getRemoteAddr());
                        $cm->user_agent = $_SERVER['HTTP_USER_AGENT'];
                        if (!$cm->add()) {
                            $this->context->controller->errors[] = $this->trans('An error occurred while sending the message.', array(), 'Modules.Contactform.Shop');
                        }
                    } else {
                        $mailAlreadySend = true;
                    }
                } else {
                    $this->context->controller->errors[] = $this->trans('An error occurred while sending the message.', array(), 'Modules.Contactform.Shop');
                }
            }

            if (!count($this->context->controller->errors) && empty($mailAlreadySend)) {
                $var_list = [
                    '{order_name}' => '-',
                    '{attached_file}' => '-',
                    '{message}' => Tools::nl2br(stripslashes($message)),
                    '{email}' =>  $from,
                    '{product_name}' => '',
                ];

                if (isset($file_attachment['name'])) {
                    $var_list['{attached_file}'] = $file_attachment['name'];
                }

                $id_product = (int)Tools::getValue('id_product');

                if (isset($ct) && Validate::isLoadedObject($ct) && $ct->id_order) {
                    $order = new Order((int)$ct->id_order);
                    $var_list['{order_name}'] = $order->getUniqReference();
                    $var_list['{id_order}'] = (int)$order->id;
                }

                if ($id_product) {
                    $product = new Product((int)$id_product);
                    if (Validate::isLoadedObject($product) && isset($product->name[Context::getContext()->language->id])) {
                        $var_list['{product_name}'] = $product->name[Context::getContext()->language->id];
                    }
                }

                if (empty($contact->email)) {
                    Mail::Send(
                        $this->context->language->id,
                        'contact_form',
                        ((isset($ct) && Validate::isLoadedObject($ct)) ? $this->trans('Your message has been correctly sent #ct%thread_id% #tc%thread_token%', array('%thread_id%' => $ct->id, '%thread_token%' => $ct->token), 'Emails.Subject') : $this->trans('Your message has been correctly sent', array(), 'Emails.Subject')),
                        $var_list,
                        $from,
                        null,
                        null,
                        null,
                        $file_attachment
                    );
                } else {
                    if (!Mail::Send(
                        $this->context->language->id,
                        'contact',
                        $this->trans('Message from contact form', array(), 'Emails.Subject').' [no_sync]',
                        $var_list,
                        $contact->email,
                        $contact->name,
                        null,
                        null,
                        $file_attachment,
                        null,
                        _PS_MAIL_DIR_,
                        false,
                        null,
                        null,
                        $from
                    ) || !Mail::Send(
                        $this->context->language->id,
                        'contact_form',
                        ((isset($ct) && Validate::isLoadedObject($ct)) ? $this->trans('Your message has been correctly sent #ct%thread_id% #tc%thread_token%', array('%thread_id%' => $ct->id, '%thread_token%' => $ct->token), 'Emails.Subject') : $this->trans('Your message has been correctly sent', array(), 'Emails.Subject')),
                        $var_list,
                        $from,
                        null,
                        null,
                        null,
                        $file_attachment,
                        null,
                        _PS_MAIL_DIR_,
                        false,
                        null,
                        null,
                        $contact->email
                    )) {
                        $this->context->controller->errors[] = $this->trans('An error occurred while sending the message.', array(), 'Modules.Contactform.Shop');
                    }
                }
            }

            if (!count($this->context->controller->errors)) {
                $this->context->controller->success[] = $this->trans('Your message has been successfully sent to our team.', array(), 'Modules.Contactform.Shop');
            }
        }
    }
}
