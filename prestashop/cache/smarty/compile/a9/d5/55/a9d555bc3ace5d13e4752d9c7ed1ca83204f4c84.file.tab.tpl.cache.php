<?php /* Smarty version Smarty-3.1.14, created on 2014-09-24 10:20:58
         compiled from "/home2/topgourm/public_html/themes/ikon/modules/homefeatured/tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:142235864754227eea238e27-13188369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9d555bc3ace5d13e4752d9c7ed1ca83204f4c84' => 
    array (
      0 => '/home2/topgourm/public_html/themes/ikon/modules/homefeatured/tab.tpl',
      1 => 1411546792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '142235864754227eea238e27-13188369',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54227eea242cb2_85956717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54227eea242cb2_85956717')) {function content_54227eea242cb2_85956717($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include '/home2/topgourm/public_html/tools/smarty/plugins/function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1){?> class="active"<?php }?>><a data-toggle="tab" href="#homefeatured" class="homefeatured"><?php echo smartyTranslate(array('s'=>'Popular','mod'=>'homefeatured'),$_smarty_tpl);?>
</a></li><?php }} ?>