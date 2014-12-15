<?php /* Smarty version Smarty-3.1.14, created on 2014-09-24 10:20:59
         compiled from "/home2/topgourm/public_html/themes/ikon/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187677926054227eeb3188b2-30426697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79e081baed09147e505aa47651f979440fb71e9b' => 
    array (
      0 => '/home2/topgourm/public_html/themes/ikon/footer.tpl',
      1 => 1411546790,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187677926054227eeb3188b2-30426697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54227eeb32f5f9_97843585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54227eeb32f5f9_97843585')) {function content_54227eeb32f5f9_97843585($_smarty_tpl) {?>
<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)){?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<!-- Footer -->
			<div class="footer-container">
				<footer id="footer"  class="container">
					<div class="row"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</div>
				</footer>
			</div><!-- #footer -->
		</div><!-- #page -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	<script>
	(function(){						
			$('.toggle-link-open').click(function(){		
				$('.footer-container').slideDown(500,"easeOutBounce").delay(100);
			});		
	})();
	(function(){						
			$('.toggle-link-close').click(function(){		
				$('.footer-container').slideUp(500,"easeOutBounce").delay(100);
			});		
	})();
	</script>
	</body>
</html><?php }} ?>