<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:50:50
         compiled from "/home2/topgourm/public_html/modules/productsmanufacturer/views/templates/hook/productsmanufacturer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:691399590543d0e1a00a1c8-59388768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4cf56fefb71a131301ace1bf9fce7713c7183fd' => 
    array (
      0 => '/home2/topgourm/public_html/modules/productsmanufacturer/views/templates/hook/productsmanufacturer.tpl',
      1 => 1412678496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '691399590543d0e1a00a1c8-59388768',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manufacturer_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d0e1a022293_21832397',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d0e1a022293_21832397')) {function content_543d0e1a022293_21832397($_smarty_tpl) {?>	<!-- MODULE manufacturer Products -->
<section class="page-product-box flexslider_carousel_block blockproductscategory">
	<h3 class="productscategory_h3 page-product-heading"><?php echo smartyTranslate(array('s'=>'Products from the same manufacturer','mod'=>'productsmanufacturer'),$_smarty_tpl);?>
</h3>
		<?php if (isset($_smarty_tpl->tpl_vars['manufacturer_products']->value)&&$_smarty_tpl->tpl_vars['manufacturer_products']->value){?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['manufacturer_products']->value,'id'=>'manufacturer_products_slider'), 0);?>

		<?php }else{ ?>
		<p>
			<?php echo smartyTranslate(array('s'=>'No featured products','mod'=>'productsmanufacturer'),$_smarty_tpl);?>

		</p>
		<?php }?>
	</section>
	<!-- /MODULE manufacturer Products --><?php }} ?>