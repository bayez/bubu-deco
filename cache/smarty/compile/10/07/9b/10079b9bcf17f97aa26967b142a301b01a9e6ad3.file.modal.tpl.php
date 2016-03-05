<?php /* Smarty version Smarty-3.1.19, created on 2016-03-05 14:10:02
         compiled from "/Users/brunnhildedayez/Documents/Bubu déco/SiteWeb/bubu-deco/admin/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88160417056dadaaaa6cb49-65664469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10079b9bcf17f97aa26967b142a301b01a9e6ad3' => 
    array (
      0 => '/Users/brunnhildedayez/Documents/Bubu déco/SiteWeb/bubu-deco/admin/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88160417056dadaaaa6cb49-65664469',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dadaaaa7cc63_01344585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dadaaaa7cc63_01344585')) {function content_56dadaaaa7cc63_01344585($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
