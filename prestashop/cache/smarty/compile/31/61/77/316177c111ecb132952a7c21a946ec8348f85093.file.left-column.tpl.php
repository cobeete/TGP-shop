<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:25:35
         compiled from "/home2/topgourm/public_html/modules/ph_simpleblog/views/templates/hook/left-column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11614253543d082fa12bd1-48740835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '316177c111ecb132952a7c21a946ec8348f85093' => 
    array (
      0 => '/home2/topgourm/public_html/modules/ph_simpleblog/views/templates/hook/left-column.tpl',
      1 => 1412678505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11614253543d082fa12bd1-48740835',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d082fa282b1_39434613',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d082fa282b1_39434613')) {function content_543d082fa282b1_39434613($_smarty_tpl) {?><div id="ph_simpleblog_categories" class="block informations_block_left">
	<p class="title_block"><a href="<?php echo ph_simpleblog::getLink();?>
" title="<?php echo smartyTranslate(array('s'=>'Blog','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Blog','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
</a></p>
	<div class="block_content list-block">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['category']->value['url'];?>
" title="<?php echo smartyTranslate(array('s'=>'Link to','mod'=>'ph_simpleblog'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a></li>
			<?php } ?>
		</ul>
	</div>
</div><?php }} ?>