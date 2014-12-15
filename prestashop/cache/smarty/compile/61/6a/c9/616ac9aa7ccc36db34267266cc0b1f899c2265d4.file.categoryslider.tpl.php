<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:51:37
         compiled from "/home2/topgourm/public_html/modules/categoryslider/categoryslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:619526677543d0e491ab238-05601032%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '616ac9aa7ccc36db34267266cc0b1f899c2265d4' => 
    array (
      0 => '/home2/topgourm/public_html/modules/categoryslider/categoryslider.tpl',
      1 => 1412678504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '619526677543d0e491ab238-05601032',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
    'tmpCatSlider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d0e491d3873_68000304',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d0e491d3873_68000304')) {function content_543d0e491d3873_68000304($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['categories']->value)&&$_smarty_tpl->tpl_vars['categories']->value){?>
<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>

<!-- MODULE Home category Products -->
<section id="categories-products_block_center_mod_<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" class="block products_block flexslider_carousel_block clearfix">
	<h4><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</h4>
	<?php if (isset($_smarty_tpl->tpl_vars['category']->value['products'])&&$_smarty_tpl->tpl_vars['category']->value['products']){?>
	<script type="text/javascript"> createCategorySlider('#categoryslider_slider_<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
'); </script>
	<?php $_smarty_tpl->tpl_vars['tmpCatSlider'] = new Smarty_variable("categoryslider_slider_".((string)$_smarty_tpl->tpl_vars['category']->value['id']), null, 0);?>
	<?php if (isset($_smarty_tpl->tpl_vars['category']->value['productimg'])){?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['category']->value['products'],'productimg'=>$_smarty_tpl->tpl_vars['category']->value['productimg'],'id'=>$_smarty_tpl->tpl_vars['tmpCatSlider']->value), 0);?>

	<?php }else{ ?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['category']->value['products'],'id'=>$_smarty_tpl->tpl_vars['tmpCatSlider']->value), 0);?>

	<?php }?>
	<?php }else{ ?>
	<p>
		<?php echo smartyTranslate(array('s'=>'No products','mod'=>'categoryslider'),$_smarty_tpl);?>

	</p>
	<?php }?>
</section>
<!-- /MODULE Home category Products -->
<?php } ?>
<?php }?><?php }} ?>