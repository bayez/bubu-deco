<?php /* Smarty version Smarty-3.1.19, created on 2016-03-05 14:10:00
         compiled from "/Users/brunnhildedayez/Documents/Bubu déco/SiteWeb/bubu-deco/admin/themes/default/template/helpers/list/list_action_supplier_order_receipt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78790187756dadaa8ddfd88-58599358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57d85f64fb3594e0c42b8340e42bf65a63803483' => 
    array (
      0 => '/Users/brunnhildedayez/Documents/Bubu déco/SiteWeb/bubu-deco/admin/themes/default/template/helpers/list/list_action_supplier_order_receipt.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78790187756dadaa8ddfd88-58599358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dadaa8e07234_83558167',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dadaa8e07234_83558167')) {function content_56dadaa8e07234_83558167($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-truck"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
