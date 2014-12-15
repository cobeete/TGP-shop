<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:50:51
         compiled from "/home2/topgourm/public_html/modules/productsnavpn/productsnavpn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2040929252543d0e1b582a14-72939914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '470e075968be84954476965a62aeb0a512b26753' => 
    array (
      0 => '/home2/topgourm/public_html/modules/productsnavpn/productsnavpn.tpl',
      1 => 1412678504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2040929252543d0e1b582a14-72939914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prevLink' => 0,
    'nextLink' => 0,
    'prevName' => 0,
    'nextName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d0e1b59cf72_04847611',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d0e1b59cf72_04847611')) {function content_543d0e1b59cf72_04847611($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['prevLink']->value!=null||$_smarty_tpl->tpl_vars['nextLink']->value!=null){?>
<div id="productsnavpn" class="pull-right"> 
<?php if ($_smarty_tpl->tpl_vars['prevLink']->value!=null){?><a href="<?php echo $_smarty_tpl->tpl_vars['prevLink']->value;?>
" class="p_prev_link transition-300" title="<?php echo smartyTranslate(array('s'=>'Previous product','mod'=>'productsnavpn'),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->tpl_vars['prevName']->value;?>
"><i class="icon-angle-left"></i></a><?php }?> 
<?php if ($_smarty_tpl->tpl_vars['nextLink']->value!=null){?><a href="<?php echo $_smarty_tpl->tpl_vars['nextLink']->value;?>
" class="p_next_link transition-300" title="<?php echo smartyTranslate(array('s'=>'Next product','mod'=>'productsnavpn'),$_smarty_tpl);?>
 - <?php echo $_smarty_tpl->tpl_vars['nextName']->value;?>
"><i class="icon-angle-right"></i></a><?php }?>
</div>
<?php }?><?php }} ?>