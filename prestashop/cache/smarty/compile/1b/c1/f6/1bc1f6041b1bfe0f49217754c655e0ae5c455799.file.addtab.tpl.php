<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 14:01:17
         compiled from "/home2/topgourm/public_html/modules/additionalproductstabs/views/templates/admin/addtab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1623203835543d108d327b53-14303735%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bc1f6041b1bfe0f49217754c655e0ae5c455799' => 
    array (
      0 => '/home2/topgourm/public_html/modules/additionalproductstabs/views/templates/admin/addtab.tpl',
      1 => 1412678507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1623203835543d108d327b53-14303735',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_common_field' => 0,
    'bullet_common_field' => 0,
    'activeAdditionalTab' => 0,
    'id_lang' => 0,
    'languages' => 0,
    'titleAdditionalTab' => 0,
    'contentAdditionalTab' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d108d385d20_11161425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d108d385d20_11161425')) {function content_543d108d385d20_11161425($_smarty_tpl) {?>
<div id="ModuleAdditionalproductstabs" class="panel product-tab">
	<input type="hidden" name="submitted_tabs[]" value="ModuleAdditionalproductstabs" />
	<h3><?php echo smartyTranslate(array('s'=>'Add or modify customizable properties','mod'=>'additionalproductstabs'),$_smarty_tpl);?>
</h3>

	<?php if (isset($_smarty_tpl->tpl_vars['display_common_field']->value)&&$_smarty_tpl->tpl_vars['display_common_field']->value){?>
		<div class="alert alert-info"><?php echo smartyTranslate(array('s'=>'Warning, if you change the value of fields with an orange bullet %s, the value will be changed for all other shops for this product','mod'=>'additionalproductstabs','sprintf'=>$_smarty_tpl->tpl_vars['bullet_common_field']->value),$_smarty_tpl);?>
</div>
	<?php }?>
<div class="form-group">		
		<label class="control-label col-lg-3">
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>"active",'type'=>"radio",'onclick'=>''), 0);?>

			<?php echo smartyTranslate(array('s'=>'Enabled','mod'=>'additionalproductstabs'),$_smarty_tpl);?>

		</label>
		<div class="col-lg-9">
			<span class="switch prestashop-switch fixed-width-lg">
				<input  type="radio" name="activeAdditionalTab" id="activeAdditionalTab_on" value="1" <?php if ($_smarty_tpl->tpl_vars['activeAdditionalTab']->value){?>checked="checked" <?php }?> />
				<label for="activeAdditionalTab_on" class="radioCheck">
					<?php echo smartyTranslate(array('s'=>'Yes','mod'=>'additionalproductstabs'),$_smarty_tpl);?>

				</label>
				<input type="radio" name="activeAdditionalTab" id="activeAdditionalTab_off" value="0" <?php if (!$_smarty_tpl->tpl_vars['activeAdditionalTab']->value){?>checked="checked"<?php }?> />
				<label for="activeAdditionalTab_off" class="radioCheck">
					<?php echo smartyTranslate(array('s'=>'No','mod'=>'additionalproductstabs'),$_smarty_tpl);?>

				</label>
				<a class="slide-button btn"></a>
			</span>
		</div>
	</div>

	<div class="form-group">
			
		<label class="control-label col-lg-3" for="titleAdditionalTab_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
">
			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo smartyTranslate(array('s'=>'The public name for this product.','mod'=>'additionalproductstabs'),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'Invalid characters:','mod'=>'additionalproductstabs'),$_smarty_tpl);?>
 &lt;&gt;;=#{}">
				<?php echo smartyTranslate(array('s'=>'Name'),$_smarty_tpl);?>

			</span>
		</label>
		<div class="col-lg-5">
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/input_text_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_value'=>$_smarty_tpl->tpl_vars['titleAdditionalTab']->value,'input_name'=>"titleAdditionalTab"), 0);?>

		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-lg-3" for="contentAdditionalTab_<?php echo $_smarty_tpl->tpl_vars['id_lang']->value;?>
">
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/multishop/checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('field'=>"contentAdditionalTab",'type'=>"tinymce",'multilang'=>"true"), 0);?>

			<span class="label-tooltip" data-toggle="tooltip"
				title="<?php echo smartyTranslate(array('s'=>'Appears on product tab','mod'=>'additionalproductstabs'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Tab content','mod'=>'additionalproductstabs'),$_smarty_tpl);?>

			</span>
		</label>
		<div class="col-lg-9">
			<?php echo $_smarty_tpl->getSubTemplate ("controllers/products/textarea_lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('languages'=>$_smarty_tpl->tpl_vars['languages']->value,'input_name'=>"contentAdditionalTab",'class'=>"rte",'input_value'=>$_smarty_tpl->tpl_vars['contentAdditionalTab']->value), 0);?>

		</div>
	</div>

<script language="javascript" type="text/javascript">
	$(function() {
		tinySetup();
	});
</script>
	<div class="panel-footer">
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminProducts');?>
" class="btn btn-default"><i class="process-icon-cancel"></i> <?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>
</a>
		<button type="submit" name="submitAddproduct" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save'),$_smarty_tpl);?>
</button>
		<button type="submit" name="submitAddproductAndStay" class="btn btn-default pull-right"><i class="process-icon-save"></i> <?php echo smartyTranslate(array('s'=>'Save and stay'),$_smarty_tpl);?>
</button>
	</div>
</div>
<?php }} ?>