<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:59:38
         compiled from "/home2/topgourm/public_html/themes/warehouse/maintenance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100613603543d102ad22ec3-68186878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a57d75109bea27deb766edd2445f8aa7cfbf8f9' => 
    array (
      0 => '/home2/topgourm/public_html/themes/warehouse/maintenance.tpl',
      1 => 1412678489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100613603543d102ad22ec3-68186878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_iso' => 0,
    'meta_title' => 0,
    'meta_description' => 0,
    'meta_keywords' => 0,
    'nobots' => 0,
    'favicon_url' => 0,
    'css_dir' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
    'HOOK_MAINTENANCE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d102ad543d9_44970590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d102ad543d9_44970590')) {function content_543d102ad543d9_44970590($_smarty_tpl) {?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
" lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">
	<head>
		<title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_title']->value, ENT_QUOTES, 'UTF-8', true);?>
</title>	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if (isset($_smarty_tpl->tpl_vars['meta_description']->value)){?>
		<meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_description']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['meta_keywords']->value)){?>
		<meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['meta_keywords']->value, ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
		<meta name="robots" content="<?php if (isset($_smarty_tpl->tpl_vars['nobots']->value)){?>no<?php }?>index,follow" />
		<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['favicon_url']->value;?>
" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
_bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
maintenance.css" rel="stylesheet" type="text/css" />
        <link href='//fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css' />
	</head>
	<body id="maintenance-page">
		<header id="header"><div class="container">
			 <div class="logo"><img src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['logo_image_width']->value){?>width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['logo_image_height']->value){?>height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?> alt="logo" />	</div>
				</div>
		</header>
			<section id="maintenance">
		<div class="container">
             <div id="message">
				<?php echo smartyTranslate(array('s'=>'In order to perform website maintenance, our online store will be temporarily offline.'),$_smarty_tpl);?>

				<?php echo smartyTranslate(array('s'=>'We apologize for the inconvenience and ask that you please try again later.'),$_smarty_tpl);?>

			 </div>
			 </div>
		</section>
        
        	<footer id="footer">
			<div class="container">
				<div class="row">
			<section id="maintance_text" class="title_block col-xs-12 col-ms-6">
			<h4><?php echo smartyTranslate(array('s'=>'Contact Us'),$_smarty_tpl);?>
</h4>
			<?php echo smartyTranslate(array('s'=>'Phone: +44 11 222 1221'),$_smarty_tpl);?>
<br />
			<?php echo smartyTranslate(array('s'=>'E-mail: sample@mail.com'),$_smarty_tpl);?>

			</section>
				<?php echo $_smarty_tpl->tpl_vars['HOOK_MAINTENANCE']->value;?>

			</div></div>
			</footer>
	</body>
</html>
<?php }} ?>