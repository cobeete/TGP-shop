<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:50:50
         compiled from "/home2/topgourm/public_html/themes/warehouse/modules/blockwishlist/blockwishlist-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1895005301543d0e1a16bff3-00143421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea3ec50fb807f14fd4236f771362982141ae8088' => 
    array (
      0 => '/home2/topgourm/public_html/themes/warehouse/modules/blockwishlist/blockwishlist-extra.tpl',
      1 => 1412678491,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1895005301543d0e1a16bff3-00143421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d0e1a174ab1_64474045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d0e1a174ab1_64474045')) {function content_543d0e1a174ab1_64474045($_smarty_tpl) {?>

<div class="buttons_bottom_block additional_button no-print">
	<a id="wishlist_button" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" rel="nofollow"  title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</div>
<?php }} ?>