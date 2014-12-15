<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:51:37
         compiled from "/home2/topgourm/public_html/modules/hompagetabs/hompagetabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:989333299543d0e491e95f6-18552807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dea0fe2a2892cda70cf014a9999eb8839b678ca9' => 
    array (
      0 => '/home2/topgourm/public_html/modules/hompagetabs/hompagetabs.tpl',
      1 => 1412678507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '989333299543d0e491e95f6-18552807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fproducts' => 0,
    'nproducts' => 0,
    'special' => 0,
    'categories' => 0,
    'category' => 0,
    'fproducts_productimg' => 0,
    'nproducts_productimg' => 0,
    'sproducts_productimg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d0e4925e845_07350168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d0e4925e845_07350168')) {function content_543d0e4925e845_07350168($_smarty_tpl) {?>	<!-- MODULE Home Tabs Products -->
	<section id="homepagetabs_module" class="homepagetabs_module_list block  clearfix">


		<ul class="nav nav-tabs">
			<?php if (isset($_smarty_tpl->tpl_vars['fproducts']->value)&&$_smarty_tpl->tpl_vars['fproducts']->value){?>
			<li> 
				<a href="#featured_products_tab" title="<?php echo smartyTranslate(array('s'=>'Featured products','mod'=>'hompagetabs'),$_smarty_tpl);?>
" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Featured products','mod'=>'hompagetabs'),$_smarty_tpl);?>
</a>
			</li>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['nproducts']->value)&&$_smarty_tpl->tpl_vars['nproducts']->value){?>
			<li>
				<a href="#new_products_tab" title="<?php echo smartyTranslate(array('s'=>'New products','mod'=>'hompagetabs'),$_smarty_tpl);?>
" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'New products','mod'=>'hompagetabs'),$_smarty_tpl);?>
</a>
			</li>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['special']->value)&&$_smarty_tpl->tpl_vars['special']->value){?>
			<li>
				<a href="#special_products_tab"  title="<?php echo smartyTranslate(array('s'=>'Price drops','mod'=>'hompagetabs'),$_smarty_tpl);?>
" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Price drops','mod'=>'hompagetabs'),$_smarty_tpl);?>
</a>
			</li>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['categories']->value)&&$_smarty_tpl->tpl_vars['categories']->value){?>
			<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
			<?php if (isset($_smarty_tpl->tpl_vars['category']->value['products'])&&$_smarty_tpl->tpl_vars['category']->value['products']){?>
			<li>
				<a href="#category_products_tab_<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>
			</li>
			<?php }?>
			<?php } ?>
			<?php }?>
		</ul>

		<div class="tab-content">
			<?php if (isset($_smarty_tpl->tpl_vars['fproducts']->value)&&$_smarty_tpl->tpl_vars['fproducts']->value){?>
			<div id="featured_products_tab"  class="tab-pane fade">
				<?php if (isset($_smarty_tpl->tpl_vars['fproducts_productimg']->value)){?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('productimg'=>$_smarty_tpl->tpl_vars['fproducts_productimg']->value,'products'=>$_smarty_tpl->tpl_vars['fproducts']->value), 0);?>

				<?php }else{ ?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['fproducts']->value), 0);?>

				<?php }?>
			</div>
			<?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['nproducts']->value)&&$_smarty_tpl->tpl_vars['nproducts']->value){?>
			<div id="new_products_tab"  class="tab-pane fade">
				<?php if (isset($_smarty_tpl->tpl_vars['nproducts_productimg']->value)){?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('productimg'=>$_smarty_tpl->tpl_vars['nproducts_productimg']->value,'products'=>$_smarty_tpl->tpl_vars['nproducts']->value), 0);?>

				<?php }else{ ?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['nproducts']->value), 0);?>

				<?php }?>
			</div>
			<?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['special']->value)&&$_smarty_tpl->tpl_vars['special']->value){?>

			<div id="special_products_tab"  class="tab-pane fade">
				<?php if (isset($_smarty_tpl->tpl_vars['sproducts_productimg']->value)){?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('productimg'=>$_smarty_tpl->tpl_vars['sproducts_productimg']->value,'products'=>$_smarty_tpl->tpl_vars['special']->value), 0);?>

				<?php }else{ ?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['special']->value), 0);?>

				<?php }?>	
			</div>
			<?php }?>

			<?php if (isset($_smarty_tpl->tpl_vars['categories']->value)&&$_smarty_tpl->tpl_vars['categories']->value){?>
			<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>

			<?php if (isset($_smarty_tpl->tpl_vars['category']->value['products'])&&$_smarty_tpl->tpl_vars['category']->value['products']){?>

			<div id="category_products_tab_<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"  class="tab-pane fade">
				<?php if (isset($_smarty_tpl->tpl_vars['category']->value['productimg'])){?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['category']->value['products'],'productimg'=>$_smarty_tpl->tpl_vars['category']->value['productimg']), 0);?>

				<?php }else{ ?>	
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['category']->value['products']), 0);?>

				<?php }?>	
			</div>
			<?php }?>
			
			<?php } ?>
			<?php }?>
		</div>

	</section>
	<!-- /MODULE Homepage tabs  Products -->
<?php }} ?>