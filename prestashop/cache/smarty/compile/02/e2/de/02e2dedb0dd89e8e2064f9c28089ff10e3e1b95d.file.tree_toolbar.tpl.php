<?php /* Smarty version Smarty-3.1.14, created on 2014-09-23 20:20:32
         compiled from "/home2/topgourm/public_html/adminwe/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1003968355421b9f0910ec2-53232746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02e2dedb0dd89e8e2064f9c28089ff10e3e1b95d' => 
    array (
      0 => '/home2/topgourm/public_html/adminwe/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1400574918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1003968355421b9f0910ec2-53232746',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5421b9f093c7c7_80917091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5421b9f093c7c7_80917091')) {function content_5421b9f093c7c7_80917091($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)){?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value){
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>