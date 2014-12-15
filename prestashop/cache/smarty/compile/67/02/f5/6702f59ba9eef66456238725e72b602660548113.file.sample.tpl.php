<?php /* Smarty version Smarty-3.1.14, created on 2014-09-24 09:56:24
         compiled from "/home2/topgourm/public_html/modules/belvg_samplemodule/views/admin/sample.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1900444176542279281e55e2-71464596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6702f59ba9eef66456238725e72b602660548113' => 
    array (
      0 => '/home2/topgourm/public_html/modules/belvg_samplemodule/views/admin/sample.tpl',
      1 => 1411545344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1900444176542279281e55e2-71464596',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'belvg_textarea' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5422792820d8d5_63210369',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5422792820d8d5_63210369')) {function content_5422792820d8d5_63210369($_smarty_tpl) {?>

<!-- Belvg_SampleModule -->
<input type="hidden" name="submitted_tabs[]" value="belvg_samplemodule" />
	<h4><?php echo smartyTranslate(array('s'=>'Belvg Sample Module','mod'=>'belvg_samplemodule'),$_smarty_tpl);?>
</h4>
	<div class="separation"></div>
	<fieldset style="border:none;">
        <textarea name="belvg_sample" rows="10" cols="45"><?php if (isset($_smarty_tpl->tpl_vars['belvg_textarea']->value)){?><?php echo $_smarty_tpl->tpl_vars['belvg_textarea']->value;?>
<?php }?></textarea>
    </fieldset>
<div class="separation"></div>
<div class="clear">&nbsp;</div>
<!-- /Belvg_SampleModule -->
<?php }} ?>