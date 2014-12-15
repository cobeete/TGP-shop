<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:50:50
         compiled from "/home2/topgourm/public_html/modules/additionalproductstabs/views/templates/hook/additionaltab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1401606269543d0e1a329869-82860795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '209cd28b6e38e5e0e71e0b70b05c62277dea2a01' => 
    array (
      0 => '/home2/topgourm/public_html/modules/additionalproductstabs/views/templates/hook/additionaltab.tpl',
      1 => 1412678507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1401606269543d0e1a329869-82860795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tabContent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d0e1a3398c4_00818404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d0e1a3398c4_00818404')) {function content_543d0e1a3398c4_00818404($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['tabContent']->value)){?>
<section class="page-product-box tab-pane fade" id="additionalTab">
<div class="rte"><?php echo $_smarty_tpl->tpl_vars['tabContent']->value;?>
</div>
</section>
<?php }?><?php }} ?>