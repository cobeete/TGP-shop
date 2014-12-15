<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:59:38
         compiled from "/home2/topgourm/public_html/modules/blocksocial_mod/blocksocial_mod_maintance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2101706061543d102acc0f55-97553519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '341b98008bb2f27f422d99942e93978bb30b5fca' => 
    array (
      0 => '/home2/topgourm/public_html/modules/blocksocial_mod/blocksocial_mod_maintance.tpl',
      1 => 1412678496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2101706061543d102acc0f55-97553519',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_template_dir' => 0,
    'facebook_url' => 0,
    'twitter_url' => 0,
    'google_url' => 0,
    'youtube_url' => 0,
    'pinterest_url' => 0,
    'instagram_url' => 0,
    'tumblr_url' => 0,
    'rss_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d102ad16213_39275708',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d102ad16213_39275708')) {function content_543d102ad16213_39275708($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['module_template_dir']->value;?>
blocksocial_mod.css" rel="stylesheet" type="text/css" />
<section id="social_block_mod" class="title_block col-xs-12 col-ms-6">
	<h4><?php echo smartyTranslate(array('s'=>'Follow us','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
</h4>
	<ul>
	<?php if ($_smarty_tpl->tpl_vars['facebook_url']->value!=''){?><li class="facebook"><a href="<?php echo $_smarty_tpl->tpl_vars['facebook_url']->value;?>
" class="transition-300" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Facebook','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['twitter_url']->value!=''){?><li class="twitter"><a href="<?php echo $_smarty_tpl->tpl_vars['twitter_url']->value;?>
" class="transition-300" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['google_url']->value!=''){?><li class="google"><a href="<?php echo $_smarty_tpl->tpl_vars['google_url']->value;?>
" class="transition-300" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Google +','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['youtube_url']->value!=''){?><li class="youtube"><a href="<?php echo $_smarty_tpl->tpl_vars['youtube_url']->value;?>
" class="transition-300" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Youtube','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['pinterest_url']->value!=''){?><li class="pinterest"><a href="<?php echo $_smarty_tpl->tpl_vars['pinterest_url']->value;?>
" class="transition-300" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Pinterest','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['instagram_url']->value!=''){?><li class="instagram"><a href="<?php echo $_smarty_tpl->tpl_vars['instagram_url']->value;?>
" class="transition-300" target="_blank" title="<?php echo smartyTranslate(array('s'=>'Instagram','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tumblr_url']->value!=''){?><li class="tumblr"><a href="<?php echo $_smarty_tpl->tpl_vars['tumblr_url']->value;?>
" target="_blank" class="transition-300" title="<?php echo smartyTranslate(array('s'=>'Tumblr','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['rss_url']->value!=''){?><li class="rss"><a href="<?php echo $_smarty_tpl->tpl_vars['rss_url']->value;?>
" target="_blank" class="transition-300" title="<?php echo smartyTranslate(array('s'=>'RSS','mod'=>'blocksocial_mod'),$_smarty_tpl);?>
"></a></li><?php }?>
	</ul>
</section><?php }} ?>