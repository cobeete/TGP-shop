<?php /* Smarty version Smarty-3.1.14, created on 2014-09-24 10:23:48
         compiled from "/home2/topgourm/public_html/adminwe/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213491189454227f944b1026-14357752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bd7e75f3042523dde74bb3b0325b1d37b59c8b7' => 
    array (
      0 => '/home2/topgourm/public_html/adminwe/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1400574918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213491189454227f944b1026-14357752',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54227f944d5ce7_55271833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54227f944d5ce7_55271833')) {function content_54227f944d5ce7_55271833($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>