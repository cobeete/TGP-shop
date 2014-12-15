<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:50:50
         compiled from "/home2/topgourm/public_html/modules/videostab/views/templates/hook/videostab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:875277431543d0e1a2df0a4-97967793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3af46d990652fa3b24ad6a6523807664db367994' => 
    array (
      0 => '/home2/topgourm/public_html/modules/videostab/views/templates/hook/videostab.tpl',
      1 => 1412678506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '875277431543d0e1a2df0a4-97967793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'videos' => 0,
    'video' => 0,
    'this_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d0e1a2f6431_97991228',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d0e1a2f6431_97991228')) {function content_543d0e1a2f6431_97991228($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['videos']->value){?>
<section class="page-product-box tab-pane fade" id="videosTab">
    <?php  $_smarty_tpl->tpl_vars['video'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['video']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['videos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['video']->key => $_smarty_tpl->tpl_vars['video']->value){
$_smarty_tpl->tpl_vars['video']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['video']->value['type']==0){?>
        <div class="videoWrapper videotab_video"><?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['video']->value['video']);?>
</div>
        <?php }else{ ?>
        <div class="mp4content videotab_video">
        <video style="width:100%;height:100%;" src="<?php echo $_smarty_tpl->tpl_vars['this_path']->value;?>
uploads/<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['video']->value['video']);?>
" type="video/mp4" 
	id="player1" 
	controls="controls" preload="none"></video>
    </div>
        <?php }?>
    <?php } ?>
</section>
<?php }?><?php }} ?>