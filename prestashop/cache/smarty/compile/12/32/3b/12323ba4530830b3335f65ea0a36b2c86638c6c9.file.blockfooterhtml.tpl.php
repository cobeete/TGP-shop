<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:51:37
         compiled from "/home2/topgourm/public_html/modules/blockfooterhtml/blockfooterhtml.tpl" */ ?>
<?php /*%%SmartyHeaderCode:457109727543d0e4972d244-12773447%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12323ba4530830b3335f65ea0a36b2c86638c6c9' => 
    array (
      0 => '/home2/topgourm/public_html/modules/blockfooterhtml/blockfooterhtml.tpl',
      1 => 1412678506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '457109727543d0e4972d244-12773447',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'footerhtml_val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d0e49734f60_46425100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d0e49734f60_46425100')) {function content_543d0e49734f60_46425100($_smarty_tpl) {?>

<!-- MODULE Block contact infos -->
<?php if (isset($_smarty_tpl->tpl_vars['footerhtml_val']->value)&&$_smarty_tpl->tpl_vars['footerhtml_val']->value){?>
<section id="block_footer_html" class="footer-block col-xs-12 col-sm-3">
<?php echo $_smarty_tpl->tpl_vars['footerhtml_val']->value;?>

</section>
	<?php }?>
<!-- /MODULE Block contact infos -->
<?php }} ?>