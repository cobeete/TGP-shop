<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:51:37
         compiled from "/home2/topgourm/public_html/modules/homenewproduct/homenewproduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151338310543d0e4917e580-81276144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '918bab941a96105c4c4f225a01626098537fe3a4' => 
    array (
      0 => '/home2/topgourm/public_html/modules/homenewproduct/homenewproduct.tpl',
      1 => 1412678504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151338310543d0e4917e580-81276144',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d0e49190b23_66534437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d0e49190b23_66534437')) {function content_543d0e49190b23_66534437($_smarty_tpl) {?><!-- MODULE Home new Products -->
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value){?>
<section id="new-products_block_center_mod" class="block products_block flexslider_carousel_block clearfix">
	<h4><?php echo smartyTranslate(array('s'=>'New products','mod'=>'homenewproduct'),$_smarty_tpl);?>
</h4>

	<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value){?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'id'=>'new_products_slider'), 0);?>

	<?php }else{ ?>
	<p>
		<?php echo smartyTranslate(array('s'=>'No new products','mod'=>'homenewproduct'),$_smarty_tpl);?>

	</p>
	<?php }?>


</section>
<?php }?>
<!-- /MODULE Home new Products -->
<?php }} ?>