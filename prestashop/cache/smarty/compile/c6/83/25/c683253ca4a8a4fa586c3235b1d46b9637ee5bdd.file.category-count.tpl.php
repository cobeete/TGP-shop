<?php /* Smarty version Smarty-3.1.14, created on 2014-09-24 10:21:28
         compiled from "/home2/topgourm/public_html/themes/ikon/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105749458654227f08b15643-68947260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c683253ca4a8a4fa586c3235b1d46b9637ee5bdd' => 
    array (
      0 => '/home2/topgourm/public_html/themes/ikon/category-count.tpl',
      1 => 1411546793,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105749458654227f08b15643-68947260',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54227f08b2bec9_65406693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54227f08b2bec9_65406693')) {function content_54227f08b2bec9_65406693($_smarty_tpl) {?>
<span class="heading-counter"><?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?><?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?><?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span><?php }} ?>