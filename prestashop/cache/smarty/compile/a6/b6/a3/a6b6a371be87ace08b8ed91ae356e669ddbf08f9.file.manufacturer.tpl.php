<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 12:26:43
         compiled from "/home2/topgourm/public_html/themes/warehouse/manufacturer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:896564578543cfa63b66682-09083200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6b6a371be87ace08b8ed91ae356e669ddbf08f9' => 
    array (
      0 => '/home2/topgourm/public_html/themes/warehouse/manufacturer.tpl',
      1 => 1412678493,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '896564578543cfa63b66682-09083200',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'manufacturer' => 0,
    'myfile' => 0,
    'base_dir_ssl' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543cfa63bb20c9_04849695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543cfa63bb20c9_04849695')) {function content_543cfa63bb20c9_04849695($_smarty_tpl) {?>


<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<?php if (!isset($_smarty_tpl->tpl_vars['errors']->value)||!sizeof($_smarty_tpl->tpl_vars['errors']->value)){?>
	<h1 class="page-heading product-listing">
		<?php echo smartyTranslate(array('s'=>'List of products by manufacturer'),$_smarty_tpl);?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value->name, ENT_QUOTES, 'UTF-8', true);?>

					<?php $_smarty_tpl->tpl_vars["myfile"] = new Smarty_variable("img/m/".((string)$_smarty_tpl->tpl_vars['manufacturer']->value->id_manufacturer)."-mf_image2.jpg", null, 0);?>
<?php if (file_exists($_smarty_tpl->tpl_vars['myfile']->value)){?><img itemprop="image" class="pull-right" src="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
img/m/<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->id_manufacturer;?>
-mf_image2.jpg" />
<?php }?>
	</h1>
	<?php if (!empty($_smarty_tpl->tpl_vars['manufacturer']->value->description)||!empty($_smarty_tpl->tpl_vars['manufacturer']->value->short_description)){?>
		<div class="description_box clearfix rte">
			<?php if (!empty($_smarty_tpl->tpl_vars['manufacturer']->value->short_description)){?>
				<div class="short_desc">
					<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->short_description;?>

				</div>
				<div class="hide_desc">
					<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->description;?>

				</div>
				<a href="#" onclick="$(this).prev().slideDown('slow'); $(this).hide();$(this).prev().prev().hide(); return false;" class="lnk_more btn btn-default pull-right"><i class="icon-plus"></i> <?php echo smartyTranslate(array('s'=>'More'),$_smarty_tpl);?>

				</a>
			<?php }else{ ?>
				<div>
					<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->description;?>

				</div>
			<?php }?>
		</div>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['products']->value){?>
<div class="content_sortPagiBar clearfix">
            	<div class="sortPagiBar clearfix">
            		<?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                	<?php echo $_smarty_tpl->getSubTemplate ("./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <div class="top-pagination-content clearfix">
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                </div>
				</div>
			</div>
			<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>

			<div class="content_sortPagiBar">
				<div class="bottom-pagination-content clearfix">
                    <?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('paginationId'=>'bottom'), 0);?>

				</div>
			</div>
	<?php }else{ ?>
		<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No products for this manufacturer.'),$_smarty_tpl);?>
</p>
	<?php }?> 
<?php }?>
<?php }} ?>