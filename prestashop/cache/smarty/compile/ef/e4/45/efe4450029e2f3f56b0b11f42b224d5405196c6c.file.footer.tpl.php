<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:51:37
         compiled from "/home2/topgourm/public_html/themes/warehouse/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:557312347543d0e49bb5be8-79210751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efe4450029e2f3f56b0b11f42b224d5405196c6c' => 
    array (
      0 => '/home2/topgourm/public_html/themes/warehouse/footer.tpl',
      1 => 1412678489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '557312347543d0e49bb5be8-79210751',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'warehouse_vars' => 0,
    'left_column_size' => 0,
    'right_column_size' => 0,
    'HOOK_LEFT_COLUMN' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d0e49c1fa82_06220270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d0e49c1fa82_06220270')) {function content_543d0e49c1fa82_06220270($_smarty_tpl) {?>
<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
					</div><!-- #center_column -->
						<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['left_on_phones'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['left_on_phones']==1){?>
					<?php if (isset($_smarty_tpl->tpl_vars['left_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['left_column_size']->value)){?>
					<div id="left_column" class="column col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['left_column_size']->value);?>
 col-sm-pull-<?php echo 12-$_smarty_tpl->tpl_vars['left_column_size']->value-$_smarty_tpl->tpl_vars['right_column_size']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>
</div>
					<?php }?>
					<?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)){?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<!-- Footer -->
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'footerTopBanner'),$_smarty_tpl);?>
 
			<div class="footer-container <?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['f_wrap_width'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['f_wrap_width']==0){?> container <?php }?>">
				<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['footer_width'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['footer_width']==1){?>
				<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)){?><div class="footer-container-inner">
				<footer id="footer"  class="container">
					<div class="row"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</div>
				</footer>
				</div>
				<?php }?>
				<?php }elseif(isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['footer_width'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['footer_width']==0){?>
				<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)){?>
				<footer id="footer"  class="container footer-container-inner">
						
					<div class="row"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</div>
					
				</footer>
				<?php }?>
				<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['second_footer'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['second_footer']==1){?>
            <div class="footer_copyrights">
            <footer class="container clearfix">
            	<div class="row">
            <?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['copyright_text'])){?><div class="col-sm-6"> <?php echo $_smarty_tpl->tpl_vars['warehouse_vars']->value['copyright_text'];?>
  </div><?php }?>

             <?php if (isset($_smarty_tpl->tpl_vars['warehouse_vars']->value['footer_img_src'])&&$_smarty_tpl->tpl_vars['warehouse_vars']->value['footer_img_src']){?><div class="paymants_logos col-sm-6"><img class="img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['warehouse_vars']->value['image_path']), ENT_QUOTES, 'UTF-8', true);?>
" alt="footerlogo" /></div><?php }?>



            </div>
            </footer></div>
            <?php }?>

			</div><!-- #footer -->
		</div><!-- #page -->
<?php }?>
<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?><div id="toTop" class="transition-300"></div>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'belowFooter'),$_smarty_tpl);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</body>
</html><?php }} ?>