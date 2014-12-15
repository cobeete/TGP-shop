<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:51:37
         compiled from "/home2/topgourm/public_html/modules/specialslider/specialslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:817896093543d0e4919a1b9-58831723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4332e5acbc757780b6af71c469603f7b24f0e41e' => 
    array (
      0 => '/home2/topgourm/public_html/modules/specialslider/specialslider.tpl',
      1 => 1412678493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '817896093543d0e4919a1b9-58831723',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'special' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d0e491a3b60_89573064',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d0e491a3b60_89573064')) {function content_543d0e491a3b60_89573064($_smarty_tpl) {?>
	<!-- MODULE Home Specials Products -->

	<?php if (isset($_smarty_tpl->tpl_vars['special']->value)){?>
	<section id="specials-products_block_center_mod" class="block products_block flexslider_carousel_block clearfix">
		<h4><?php echo smartyTranslate(array('s'=>'Price drops','mod'=>'specialslider'),$_smarty_tpl);?>
</h4>
	
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['special']->value,'id'=>'specials_products_slider'), 0);?>

		
	</section>
	<?php }?>

	<!-- /MODULE specials -->
<?php }} ?>