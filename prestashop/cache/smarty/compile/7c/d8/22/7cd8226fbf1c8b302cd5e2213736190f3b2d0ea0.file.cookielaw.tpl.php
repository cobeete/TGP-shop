<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:51:37
         compiled from "/home2/topgourm/public_html/modules/cookielaw/cookielaw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1169316018543d0e49c29878-78750851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cd8226fbf1c8b302cd5e2213736190f3b2d0ea0' => 
    array (
      0 => '/home2/topgourm/public_html/modules/cookielaw/cookielaw.tpl',
      1 => 1412678506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1169316018543d0e49c29878-78750851',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cookielaw' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d0e49c2f534_65448420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d0e49c2f534_65448420')) {function content_543d0e49c2f534_65448420($_smarty_tpl) {?><div id="cookielaw" class="cookielaw">
<div class="container">
<a id="cookie_close" class="button btn btn-default button-small" href="#"><span><?php echo smartyTranslate(array('s'=>'Accept','mod'=>'cookielaw'),$_smarty_tpl);?>
</span></a>
<?php echo $_smarty_tpl->tpl_vars['cookielaw']->value->body_paragraph;?>

    </div>
</div><?php }} ?>