<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:51:37
         compiled from "/home2/topgourm/public_html/modules/slidetopcontent/slidetopcontent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:507370231543d0e499d4948-91242608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b93208edce7d6c2add25dc077dfd8185c3e736d' => 
    array (
      0 => '/home2/topgourm/public_html/modules/slidetopcontent/slidetopcontent.tpl',
      1 => 1412678504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '507370231543d0e499d4948-91242608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homepage_logo' => 0,
    'image_path' => 0,
    'link' => 0,
    'slidetopcontent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d0e49a17213_08469695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d0e49a17213_08469695')) {function content_543d0e49a17213_08469695($_smarty_tpl) {?><!-- Module slidetopcontent -->
<div id="slidetopcontent" class="slidetopcontent">
	<div class="container">
		<ul class="row clearfix">

			<?php if ($_smarty_tpl->tpl_vars['homepage_logo']->value){?><li class="col-sm-4"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['image_path']->value), ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['slidetopcontent']->value->main_title){?>alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['slidetopcontent']->value->main_title);?>
" <?php }?>/></li><?php }?>
			<li class="col-sm-<?php if ($_smarty_tpl->tpl_vars['homepage_logo']->value){?>4<?php }else{ ?>6<?php }?>">

				<?php if ($_smarty_tpl->tpl_vars['slidetopcontent']->value->main_title){?><h4><?php echo stripslashes($_smarty_tpl->tpl_vars['slidetopcontent']->value->main_title);?>
</h4><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['slidetopcontent']->value->main_paragraph){?><div class="rte"><?php echo stripslashes($_smarty_tpl->tpl_vars['slidetopcontent']->value->main_paragraph);?>
</div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['slidetopcontent']->value->main_link){?><div class="rte"><a class="btn btn-default button button-small pull-right" href="<?php echo stripslashes($_smarty_tpl->tpl_vars['slidetopcontent']->value->main_link);?>
"><span><?php echo smartyTranslate(array('s'=>'Read more','mod'=>'slidetopcontent'),$_smarty_tpl);?>
</span></a></div><?php }?>

			</li>
			<li class="col-sm-<?php if ($_smarty_tpl->tpl_vars['homepage_logo']->value){?>4<?php }else{ ?>6<?php }?>">

				<?php if ($_smarty_tpl->tpl_vars['slidetopcontent']->value->second_title){?><h4><?php echo stripslashes($_smarty_tpl->tpl_vars['slidetopcontent']->value->second_title);?>
</h4><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['slidetopcontent']->value->second_paragraph){?><div class="rte"><?php echo stripslashes($_smarty_tpl->tpl_vars['slidetopcontent']->value->second_paragraph);?>
</div><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['slidetopcontent']->value->second_link){?><div class="rte"><a class="btn btn-default button button-small pull-right" href="<?php echo stripslashes($_smarty_tpl->tpl_vars['slidetopcontent']->value->second_link);?>
"><span><?php echo smartyTranslate(array('s'=>'Read more','mod'=>'slidetopcontent'),$_smarty_tpl);?>
</span></a></div><?php }?>
			</li>
		</ul>
	</div></div>
	<!-- /Module slidetopcontent --><?php }} ?>