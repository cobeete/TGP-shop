<?php /* Smarty version Smarty-3.1.14, created on 2014-09-24 10:21:41
         compiled from "/home2/topgourm/public_html/themes/ikon/modules/blockwishlist/blockwishlist-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151562332454227f1563d766-32057580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa2eeaaf287ea1c2317fe58b872fcdfe4592923b' => 
    array (
      0 => '/home2/topgourm/public_html/themes/ikon/modules/blockwishlist/blockwishlist-extra.tpl',
      1 => 1411546792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151562332454227f1563d766-32057580',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54227f15644c47_57351726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54227f15644c47_57351726')) {function content_54227f15644c47_57351726($_smarty_tpl) {?>

<p class="buttons_bottom_block no-print">
	<a id="wishlist_button" href="#" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;" rel="nofollow"  title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</p>
<?php }} ?>