<?php /* Smarty version Smarty-3.1.14, created on 2014-09-24 09:56:42
         compiled from "/home2/topgourm/public_html/modules/belvg_samplemodule/views/frontend/sample.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9948289575422793a9c34d5-59993440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '911bf1e884274f35cb65defe9b979d015a1aaf5c' => 
    array (
      0 => '/home2/topgourm/public_html/modules/belvg_samplemodule/views/frontend/sample.tpl',
      1 => 1411545344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9948289575422793a9c34d5-59993440',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'belvg_textarea' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5422793a9c9e39_32903818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5422793a9c9e39_32903818')) {function content_5422793a9c9e39_32903818($_smarty_tpl) {?>
 
<?php if (isset($_smarty_tpl->tpl_vars['belvg_textarea']->value)){?>
<!-- Belvg_SampleModule -->
	<fieldset style="border:none;">
        <textarea name="belvg_sample" rows="10" cols="45"><?php echo $_smarty_tpl->tpl_vars['belvg_textarea']->value;?>
</textarea>
    </fieldset>
<div class="clear">&nbsp;</div>
<!-- /Belvg_SampleModule -->
<?php }?><?php }} ?>