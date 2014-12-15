<?php /* Smarty version Smarty-3.1.14, created on 2014-10-07 13:11:48
         compiled from "/home2/topgourm/public_html/modules/textmaster/views/templates/admin/info_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11757495775433e694db77e3-15129263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb10a06342308793bc3e03f74965185407675457' => 
    array (
      0 => '/home2/topgourm/public_html/modules/textmaster/views/templates/admin/info_block.tpl',
      1 => 1412687455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11757495775433e694db77e3-15129263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'credits' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5433e694dc4af5_63067998',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5433e694dc4af5_63067998')) {function content_5433e694dc4af5_63067998($_smarty_tpl) {?>
<p class="hint clear list info">
    <?php echo smartyTranslate(array('s'=>'You have','mod'=>'textmaster'),$_smarty_tpl);?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['credits']->value, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo smartyTranslate(array('s'=>'left on your wallet. If you want to get more credits,','mod'=>'textmaster'),$_smarty_tpl);?>

    <a target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'please click here','mod'=>'textmaster'),$_smarty_tpl);?>
</a>
</p><?php }} ?>