<?php /* Smarty version Smarty-3.1.14, created on 2014-09-24 10:20:58
         compiled from "/home2/topgourm/public_html/themes/ikon/modules/blockbestsellers/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76048621654227eea254186-12625316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87ef0f02335b6d6613cb376701f9e8a876ee0aaf' => 
    array (
      0 => '/home2/topgourm/public_html/themes/ikon/modules/blockbestsellers/tab.tpl',
      1 => 1411546792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76048621654227eea254186-12625316',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54227eea25d599_24662401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54227eea25d599_24662401')) {function content_54227eea25d599_24662401($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home2/topgourm/public_html/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#blockbestsellers" class="blockbestsellers"><?php echo smartyTranslate(array('s'=>'Best Sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</a></li><?php }} ?>