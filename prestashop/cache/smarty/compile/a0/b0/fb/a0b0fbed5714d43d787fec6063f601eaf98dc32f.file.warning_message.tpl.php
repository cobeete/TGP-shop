<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:27:42
         compiled from "/home2/topgourm/public_html/modules/seur/views/templates/admin/warning_message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1904909436543d08aeb77966-26161003%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0b0fbed5714d43d787fec6063f601eaf98dc32f' => 
    array (
      0 => '/home2/topgourm/public_html/modules/seur/views/templates/admin/warning_message.tpl',
      1 => 1412074357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1904909436543d08aeb77966-26161003',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seur_warning_message' => 0,
    'ps_16' => 0,
    'ps_14' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d08aebb8ef5_10568455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d08aebb8ef5_10568455')) {function content_543d08aebb8ef5_10568455($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['seur_warning_message']->value)&&$_smarty_tpl->tpl_vars['seur_warning_message']->value){?>
	<?php if (isset($_smarty_tpl->tpl_vars['ps_16']->value)&&$_smarty_tpl->tpl_vars['ps_16']->value){?>
		<div class="bootstrap">
	<?php }?>
	<p class="warning warn alert alert-warning">
		<?php if (isset($_smarty_tpl->tpl_vars['ps_14']->value)&&$_smarty_tpl->tpl_vars['ps_14']->value){?>
			<img src="<?php echo mb_convert_encoding(htmlspecialchars(@constant('_PS_ADMIN_IMG_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
warning.gif" alt="<?php echo smartyTranslate(array('s'=>'warning','mod'=>'seur'),$_smarty_tpl);?>
" />
		<?php }?>
		<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['seur_warning_message']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

	</p>
	<?php if (isset($_smarty_tpl->tpl_vars['ps_16']->value)&&$_smarty_tpl->tpl_vars['ps_16']->value){?>
		</div>
	<?php }?>
<?php }?><?php }} ?>