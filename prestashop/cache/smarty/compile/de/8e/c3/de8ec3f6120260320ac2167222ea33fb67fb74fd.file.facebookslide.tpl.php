<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:51:37
         compiled from "/home2/topgourm/public_html/modules/facebookslide/facebookslide.tpl" */ ?>
<?php /*%%SmartyHeaderCode:877400837543d0e49a1f5c8-72059166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de8ec3f6120260320ac2167222ea33fb67fb74fd' => 
    array (
      0 => '/home2/topgourm/public_html/modules/facebookslide/facebookslide.tpl',
      1 => 1412678506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '877400837543d0e49a1f5c8-72059166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_iso' => 0,
    'fbmod_position' => 0,
    'fbmod_link' => 0,
    'fbmod_faces' => 0,
    'fbmod_stream' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d0e49a34a49_29183603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d0e49a34a49_29183603')) {function content_543d0e49a34a49_29183603($_smarty_tpl) {?><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
_<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
/all.js#xfbml=1&appId=345551085518968";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="fblike-box" <?php if ($_smarty_tpl->tpl_vars['fbmod_position']->value==1){?>class="left_fb"<?php }else{ ?>class="right_fb"<?php }?>>
	<div class="outside">
		<div class="inside">
			<div class="fb-like-box" data-href="<?php echo $_smarty_tpl->tpl_vars['fbmod_link']->value;?>
" data-width="292" data-show-faces="<?php if ($_smarty_tpl->tpl_vars['fbmod_faces']->value==1){?>true<?php }else{ ?>false<?php }?>" data-stream="<?php if ($_smarty_tpl->tpl_vars['fbmod_stream']->value==1){?>true<?php }else{ ?>false<?php }?>" data-show-border="false" data-header="false"></div>

		</div>
	</div>
	<div class="belt"><i class="icon-facebook"></i></div>
</div><?php }} ?>