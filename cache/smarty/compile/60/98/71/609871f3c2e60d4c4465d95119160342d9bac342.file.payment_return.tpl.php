<?php /* Smarty version Smarty-3.1.19, created on 2016-03-05 11:28:22
         compiled from "/Users/brunnhildedayez/Documents/Bubu déco/SiteWeb/prestashop_1/prestashop/themes/default-bootstrap/modules/cheque/views/templates/hook/payment_return.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111309972856dab4c6c8c576-16394296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '609871f3c2e60d4c4465d95119160342d9bac342' => 
    array (
      0 => '/Users/brunnhildedayez/Documents/Bubu déco/SiteWeb/prestashop_1/prestashop/themes/default-bootstrap/modules/cheque/views/templates/hook/payment_return.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111309972856dab4c6c8c576-16394296',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'shop_name' => 0,
    'total_to_pay' => 0,
    'chequeName' => 0,
    'chequeAddress' => 0,
    'reference' => 0,
    'id_order' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dab4c6d4e9f4_56729352',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dab4c6d4e9f4_56729352')) {function content_56dab4c6d4e9f4_56729352($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['status']->value=='ok') {?>
	<p class="alert alert-success"><?php echo smartyTranslate(array('s'=>'Your order on %s is complete.','sprintf'=>$_smarty_tpl->tpl_vars['shop_name']->value,'mod'=>'cheque'),$_smarty_tpl);?>
</p>
	<div class="box order-confirmation">
		<h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Your check must include:','mod'=>'cheque'),$_smarty_tpl);?>
</h3>
		- <?php echo smartyTranslate(array('s'=>'Payment amount.','mod'=>'cheque'),$_smarty_tpl);?>
 <span class="price"><strong><?php echo $_smarty_tpl->tpl_vars['total_to_pay']->value;?>
</strong></span>
		<br />- <?php echo smartyTranslate(array('s'=>'Payable to the order of','mod'=>'cheque'),$_smarty_tpl);?>
 <strong><?php if ($_smarty_tpl->tpl_vars['chequeName']->value) {?><?php echo $_smarty_tpl->tpl_vars['chequeName']->value;?>
<?php } else { ?>___________<?php }?></strong>
		<br />- <?php echo smartyTranslate(array('s'=>'Mail to','mod'=>'cheque'),$_smarty_tpl);?>
 <strong><?php if ($_smarty_tpl->tpl_vars['chequeAddress']->value) {?><?php echo $_smarty_tpl->tpl_vars['chequeAddress']->value;?>
<?php } else { ?>___________<?php }?></strong>
		<?php if (!isset($_smarty_tpl->tpl_vars['reference']->value)&&isset($_smarty_tpl->tpl_vars['id_order']->value)&&$_smarty_tpl->tpl_vars['id_order']->value) {?>
			<br />- <?php echo smartyTranslate(array('s'=>'Do not forget to insert your order number #%d.','sprintf'=>$_smarty_tpl->tpl_vars['id_order']->value,'mod'=>'cheque'),$_smarty_tpl);?>

		<?php } else { ?>
			<br />- <?php echo smartyTranslate(array('s'=>'Do not forget to insert your order reference %s.','sprintf'=>$_smarty_tpl->tpl_vars['reference']->value,'mod'=>'cheque'),$_smarty_tpl);?>

		<?php }?>
		<br />- <?php echo smartyTranslate(array('s'=>'An email has been sent to you with this information.','mod'=>'cheque'),$_smarty_tpl);?>

		<br />- <strong><?php echo smartyTranslate(array('s'=>'Your order will be sent as soon as we receive your payment.','mod'=>'cheque'),$_smarty_tpl);?>
</strong>
		<br />- <?php echo smartyTranslate(array('s'=>'For any questions or for further information, please contact our','mod'=>'cheque'),$_smarty_tpl);?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'customer service department.','mod'=>'cheque'),$_smarty_tpl);?>
</a>.
	</div>
<?php } else { ?>
	<p class="alert alert-warning">
		<?php echo smartyTranslate(array('s'=>'We noticed a problem with your order. If you think this is an error, feel free to contact our','mod'=>'cheque'),$_smarty_tpl);?>

		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'customer service department.','mod'=>'cheque'),$_smarty_tpl);?>
</a>.
	</p>
<?php }?>
<?php }} ?>
