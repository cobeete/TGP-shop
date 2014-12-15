<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:51:36
         compiled from "/home2/topgourm/public_html/modules/homefeatured_mod/homefeatured_mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:772560213543d0e48dfdfa6-52653087%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f74d28b0db4c12a4f4c82804fc8ab6a167daeed4' => 
    array (
      0 => '/home2/topgourm/public_html/modules/homefeatured_mod/homefeatured_mod.tpl',
      1 => 1412678495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '772560213543d0e48dfdfa6-52653087',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d0e48e0d564_01491923',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d0e48e0d564_01491923')) {function content_543d0e48e0d564_01491923($_smarty_tpl) {?>	<!-- MODULE Home Featured Products -->
	<section id="featured-products_block_center_mod" class="block products_block flexslider_carousel_block clearfix">
		<h4><?php echo smartyTranslate(array('s'=>'Featured products','mod'=>'homefeatured_mod'),$_smarty_tpl);?>
</h4>
		<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value){?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'id'=>'featured_products_slider'), 0);?>

		<?php }else{ ?>
		<p>
			<?php echo smartyTranslate(array('s'=>'No featured products','mod'=>'homefeatured_mod'),$_smarty_tpl);?>

		</p>
		<?php }?>
	</section>
	<!-- /MODULE Home Featured Products -->
<?php }} ?>