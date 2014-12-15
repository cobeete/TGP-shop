<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:50:50
         compiled from "/home2/topgourm/public_html/modules/videostab/views/templates/hook/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1285014190543d0e1a1b32f3-16400604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5b63c670b03932fb5a92b9f6a10b8ca670df320' => 
    array (
      0 => '/home2/topgourm/public_html/modules/videostab/views/templates/hook/tab.tpl',
      1 => 1412678506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1285014190543d0e1a1b32f3-16400604',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'videosNb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d0e1a1bf5e7_69064534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d0e1a1bf5e7_69064534')) {function content_543d0e1a1bf5e7_69064534($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['videosNb']->value>0){?>
<li><a href="#videosTab" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Videos','mod'=>'videostab'),$_smarty_tpl);?>
(<?php echo $_smarty_tpl->tpl_vars['videosNb']->value;?>
)</a></li>
<?php }?><?php }} ?>