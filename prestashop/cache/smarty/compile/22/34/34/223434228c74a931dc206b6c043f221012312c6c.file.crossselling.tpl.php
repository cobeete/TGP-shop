<?php /* Smarty version Smarty-3.1.14, created on 2014-10-11 10:00:48
         compiled from "/home2/topgourm/public_html/themes/warehouse/modules/blockcart/crossselling.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10754695725438e3b057bd00-91318993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '223434228c74a931dc206b6c043f221012312c6c' => 
    array (
      0 => '/home2/topgourm/public_html/themes/warehouse/modules/blockcart/crossselling.tpl',
      1 => 1412678490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10754695725438e3b057bd00-91318993',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderProducts' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5438e3b05ae4f0_34635123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5438e3b05ae4f0_34635123')) {function content_5438e3b05ae4f0_34635123($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['orderProducts']->value)&&count($_smarty_tpl->tpl_vars['orderProducts']->value)>0){?>
	<div class="crossseling-content">
		<h5 class="crossseling_pop_title"><?php echo smartyTranslate(array('s'=>'Customers who bought this product also bought:','mod'=>'blockcart'),$_smarty_tpl);?>
</h5>

		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['orderProducts']->value,'id'=>'crossseling_popup_products_slider'), 0);?>

	</div>
<?php }?><?php }} ?>