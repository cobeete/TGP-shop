<?php /* Smarty version Smarty-3.1.14, created on 2014-10-13 13:31:12
         compiled from "/home2/topgourm/public_html/modules/paypal/views/templates/hook/column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170721113543bb8006afdc9-29194691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2f6ddb5df398bf72b8045ddb7d7581d4cf63002' => 
    array (
      0 => '/home2/topgourm/public_html/modules/paypal/views/templates/hook/column.tpl',
      1 => 1411495413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170721113543bb8006afdc9-29194691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543bb8006b90c0_40428687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543bb8006b90c0_40428687')) {function content_543bb8006b90c0_40428687($_smarty_tpl) {?>

<div id="paypal-column-block">
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/about.php" rel="nofollow"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="PayPal" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" style="max-width: 100%" /></a></p>
</div>
<?php }} ?>