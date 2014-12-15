<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:25:35
         compiled from "/home2/topgourm/public_html/modules/columnadverts/columnadverts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108835327543d082f982b99-00551710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8685c89fc9511fe6399df5af4105a64d0b881ff7' => 
    array (
      0 => '/home2/topgourm/public_html/modules/columnadverts/columnadverts.tpl',
      1 => 1412678507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108835327543d082f982b99-00551710',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'climages' => 0,
    'image' => 0,
    'modules_dir' => 0,
    'imgLink' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d082f9adb87_64547864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d082f9adb87_64547864')) {function content_543d082f9adb87_64547864($_smarty_tpl) {?>        <section id="columnadverts" class="block">
			<p class="title_block"><?php echo smartyTranslate(array('s'=>'Check also','mod'=>'columnadverts'),$_smarty_tpl);?>
</p>
	<div class="block_content clearfix">
        	<ul>

        		<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['climages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['image']->key;
?>
        		<li>
        			<?php if (isset($_smarty_tpl->tpl_vars['image']->value['link'])&&$_smarty_tpl->tpl_vars['image']->value['link']){?>

        			<a href="<?php echo $_smarty_tpl->tpl_vars['image']->value['link'];?>
">
        				<?php }?>
        				<?php if (isset($_smarty_tpl->tpl_vars['image']->value['name'])&&$_smarty_tpl->tpl_vars['image']->value['name']){?>
        				<?php $_smarty_tpl->tpl_vars["imgLink"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['modules_dir']->value)."columnadverts/slides/".((string)$_smarty_tpl->tpl_vars['image']->value['name']), null, 0);?>
        				<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['imgLink']->value), ENT_QUOTES, 'UTF-8', true);?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['name'];?>
" >
        				<?php }?>	

        				<?php if (isset($_smarty_tpl->tpl_vars['image']->value['link'])&&$_smarty_tpl->tpl_vars['image']->value['link']){?>
        			</a>    
        			<?php }?></li>
        			<?php } ?>
        		</ul><!-- ei-slider-large -->
</div>
        	</section><!-- ei-slider -->




<?php }} ?>