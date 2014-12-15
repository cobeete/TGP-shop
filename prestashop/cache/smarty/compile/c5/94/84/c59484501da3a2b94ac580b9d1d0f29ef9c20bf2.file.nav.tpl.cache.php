<?php /* Smarty version Smarty-3.1.14, created on 2014-09-24 10:20:59
         compiled from "/home2/topgourm/public_html/themes/ikon/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97755065954227eeb290f37-13572949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c59484501da3a2b94ac580b9d1d0f29ef9c20bf2' => 
    array (
      0 => '/home2/topgourm/public_html/themes/ikon/modules/blockcontact/nav.tpl',
      1 => 1411546792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97755065954227eeb290f37-13572949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54227eeb29cb32_08190850',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54227eeb29cb32_08190850')) {function content_54227eeb29cb32_08190850($_smarty_tpl) {?>
<div id="contact-link">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php }} ?>