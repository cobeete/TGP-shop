<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:50:49
         compiled from "/home2/topgourm/public_html/themes/warehouse/modules/productscategory/productscategory.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1927134929543d0e19ba2070-08487541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70a48cd652f7d0360261e566aca73a028f59e6ef' => 
    array (
      0 => '/home2/topgourm/public_html/themes/warehouse/modules/productscategory/productscategory.tpl',
      1 => 1412678491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1927134929543d0e19ba2070-08487541',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categoryProducts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d0e19bb4490_06533062',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d0e19bb4490_06533062')) {function content_543d0e19bb4490_06533062($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['categoryProducts']->value)>0&&$_smarty_tpl->tpl_vars['categoryProducts']->value!==false){?>
<section class="page-product-box flexslider_carousel_block blockproductscategory">
	<h3 class="productscategory_h3 page-product-heading"><?php echo count($_smarty_tpl->tpl_vars['categoryProducts']->value);?>
 <?php echo smartyTranslate(array('s'=>'other products in the same category:','mod'=>'productscategory'),$_smarty_tpl);?>
</h3>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['categoryProducts']->value,'id'=>'category_products_slider'), 0);?>

</section>
<?php }?><?php }} ?>