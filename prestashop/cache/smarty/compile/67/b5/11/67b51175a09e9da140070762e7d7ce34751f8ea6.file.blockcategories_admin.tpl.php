<?php /* Smarty version Smarty-3.1.14, created on 2014-10-13 15:59:06
         compiled from "/home2/topgourm/public_html/modules/blockcategories/views/blockcategories_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1122576225543bdaaa24c890-48673844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67b51175a09e9da140070762e7d7ce34751f8ea6' => 
    array (
      0 => '/home2/topgourm/public_html/modules/blockcategories/views/blockcategories_admin.tpl',
      1 => 1411987037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1122576225543bdaaa24c890-48673844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'helper' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543bdaaa257ce9_56962011',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543bdaaa257ce9_56962011')) {function content_543bdaaa257ce9_56962011($_smarty_tpl) {?>
<div class="form-group">
	<label class="control-label col-lg-3">
		<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo smartyTranslate(array('s'=>'You can upload a maximum of 3 images.','mod'=>'blockcategories'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Thumbnails','mod'=>'blockcategories'),$_smarty_tpl);?>

		</span>
	</label>
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['helper']->value;?>

	</div>
</div>
<?php }} ?>