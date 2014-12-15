<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:51:37
         compiled from "/home2/topgourm/public_html/modules/headerlinks/headerlinks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1479671482543d0e49ae03f6-60725673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '295753dba8ebaf342065bb47310540dfbafb5d44' => 
    array (
      0 => '/home2/topgourm/public_html/modules/headerlinks/headerlinks.tpl',
      1 => 1412678495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1479671482543d0e49ae03f6-60725673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'headerlinks_links' => 0,
    'lang' => 0,
    'headerlinks_link' => 0,
    'url' => 0,
    'showcontactlink' => 0,
    'link' => 0,
    'showsitemaplink' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d0e49b27d01_87659144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d0e49b27d01_87659144')) {function content_543d0e49b27d01_87659144($_smarty_tpl) {?>

<!-- Block header links module -->
<ul id="header_links" class="clearfix">

    	<?php  $_smarty_tpl->tpl_vars['headerlinks_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['headerlinks_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['headerlinks_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['headerlinks_link']->key => $_smarty_tpl->tpl_vars['headerlinks_link']->value){
$_smarty_tpl->tpl_vars['headerlinks_link']->_loop = true;
?>
		<?php if (isset($_smarty_tpl->tpl_vars['headerlinks_link']->value[$_smarty_tpl->tpl_vars['lang']->value])){?> 
			<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['headerlinks_link']->value[$_smarty_tpl->tpl_vars['url']->value], ENT_QUOTES, 'UTF-8', true);?>
"<?php if ($_smarty_tpl->tpl_vars['headerlinks_link']->value['newWindow']){?> onclick="window.open(this.href);return false;"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['headerlinks_link']->value[$_smarty_tpl->tpl_vars['lang']->value], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
		<?php }?>
	<?php } ?>
    
    	<?php if (isset($_smarty_tpl->tpl_vars['showcontactlink']->value)&&$_smarty_tpl->tpl_vars['showcontactlink']->value==1){?><li id="header_link_contact"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact','mod'=>'headerlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact','mod'=>'headerlinks'),$_smarty_tpl);?>
</a></li><?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['showsitemaplink']->value)&&$_smarty_tpl->tpl_vars['showsitemaplink']->value==1){?><li id="header_link_sitemap"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('sitemap'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Sitemap','mod'=>'headerlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Sitemap','mod'=>'headerlinks'),$_smarty_tpl);?>
</a></li><?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['title']->value)&&$_smarty_tpl->tpl_vars['title']->value!=''){?> 
    <?php if ((isset($_smarty_tpl->tpl_vars['showcontactlink']->value)&&$_smarty_tpl->tpl_vars['showcontactlink']->value==1)||(isset($_smarty_tpl->tpl_vars['showsitemaplink']->value)&&$_smarty_tpl->tpl_vars['showsitemaplink']->value==1)){?><li class="separator">|</li><?php }?>
    
    <li><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li><?php }?>
</ul>
<!-- /Block header links module -->
<?php }} ?>