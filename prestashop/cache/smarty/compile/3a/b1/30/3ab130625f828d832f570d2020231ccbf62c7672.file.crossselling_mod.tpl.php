<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:50:49
         compiled from "/home2/topgourm/public_html/modules/crossselling_mod/views/templates/hook/crossselling_mod.tpl" */ ?>
<?php /*%%SmartyHeaderCode:914330192543d0e19f10376-73939180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ab130625f828d832f570d2020231ccbf62c7672' => 
    array (
      0 => '/home2/topgourm/public_html/modules/crossselling_mod/views/templates/hook/crossselling_mod.tpl',
      1 => 1412678496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '914330192543d0e19f10376-73939180',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderProducts' => 0,
    'page_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d0e19f24088_06133503',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d0e19f24088_06133503')) {function content_543d0e19f24088_06133503($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['orderProducts']->value)&&count($_smarty_tpl->tpl_vars['orderProducts']->value)){?>
    <section id="crossselling" class="page-product-box flexslider_carousel_block">
    	<h3 class="productscategory_h2 page-product-heading">
            <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='product'){?>
                <?php echo smartyTranslate(array('s'=>'Customers who bought this product also bought:','mod'=>'crossselling_mod'),$_smarty_tpl);?>

            <?php }else{ ?>
                <?php echo smartyTranslate(array('s'=>'We recommend','mod'=>'crossselling_mod'),$_smarty_tpl);?>

            <?php }?>
        </h3>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['orderProducts']->value,'id'=>'crossseling_products_slider'), 0);?>

    </section>
<?php }?><?php }} ?>