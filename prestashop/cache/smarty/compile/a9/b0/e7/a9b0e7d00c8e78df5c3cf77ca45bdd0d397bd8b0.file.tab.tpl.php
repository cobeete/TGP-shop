<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:50:50
         compiled from "/home2/topgourm/public_html/modules/additionalproductstabs/views/templates/hook/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1400757670543d0e1a1d1494-14104072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9b0e7d00c8e78df5c3cf77ca45bdd0d397bd8b0' => 
    array (
      0 => '/home2/topgourm/public_html/modules/additionalproductstabs/views/templates/hook/tab.tpl',
      1 => 1412678507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1400757670543d0e1a1d1494-14104072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tabName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d0e1a1d9393_16953661',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d0e1a1d9393_16953661')) {function content_543d0e1a1d9393_16953661($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['tabName']->value)){?>
<li><a href="#additionalTab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['tabName']->value;?>
</a></li>
<?php }?><?php }} ?>