<?php /* Smarty version Smarty-3.1.14, created on 2014-09-24 10:21:29
         compiled from "/home2/topgourm/public_html/themes/ikon/modules/blockwishlist/blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132879283654227f092a1a48-49575183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62abe90bffc8e05e37425a99f0a480e3a06af1d7' => 
    array (
      0 => '/home2/topgourm/public_html/themes/ikon/modules/blockwishlist/blockwishlist_button.tpl',
      1 => 1411546792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132879283654227f092a1a48-49575183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54227f092b8113_40837305',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54227f092b8113_40837305')) {function content_54227f092b8113_40837305($_smarty_tpl) {?>

<div class="wishlist">
	<a class="addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" rel="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;">
		<?php echo smartyTranslate(array('s'=>"Add to Wishlist",'mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</div><?php }} ?>