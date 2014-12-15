<?php /* Smarty version Smarty-3.1.14, created on 2014-09-23 20:15:58
         compiled from "/home2/topgourm/public_html/adminwe/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:690906135421b8dec59dc3-93036694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fb6ae8553dfa87dc8ceca547bb941ac940fb9fd' => 
    array (
      0 => '/home2/topgourm/public_html/adminwe/themes/default/template/content.tpl',
      1 => 1400574918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '690906135421b8dec59dc3-93036694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5421b8dec60c10_14570823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5421b8dec60c10_14570823')) {function content_5421b8dec60c10_14570823($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>

<?php if (isset($_smarty_tpl->tpl_vars['content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }?>
<?php }} ?>