<?php /* Smarty version Smarty-3.1.14, created on 2014-10-11 09:58:37
         compiled from "/home2/topgourm/public_html/modules/customcontactpage/customcontactpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5399721075438e32d4f51c8-33337501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '112d874ea63f606b5e68116fabee4bf90f1f0b98' => 
    array (
      0 => '/home2/topgourm/public_html/modules/customcontactpage/customcontactpage.tpl',
      1 => 1412678496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5399721075438e32d4f51c8-33337501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'customcontactpage_company' => 0,
    'customcontactpage_address' => 0,
    'customcontactpage_phone' => 0,
    'customcontactpage_email' => 0,
    'customcontactpage_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5438e32d529eb7_24244812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5438e32d529eb7_24244812')) {function content_5438e32d529eb7_24244812($_smarty_tpl) {?><?php if (!is_callable('smarty_function_mailto')) include '/home2/topgourm/public_html/tools/smarty/plugins/function.mailto.php';
?>

<!-- MODULE Block contact infos -->
<section id="customcontactpage">
	<div class="row">
	<div class="col-xs-12 col-sm-8">
	<div id="mapcontact"></div>
	</div>	
	<div class="text_info col-xs-12 col-sm-4">
        <h4 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Store Information','mod'=>'customcontactpage'),$_smarty_tpl);?>
</h4>
        <ul>
            <li>
                <strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customcontactpage_company']->value, ENT_QUOTES, 'UTF-8', true);?>
</strong>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['customcontactpage_address']->value!=''){?>
            	<li>
            		<i class="icon-map-marker"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customcontactpage_address']->value, ENT_QUOTES, 'UTF-8', true);?>

            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['customcontactpage_phone']->value!=''){?>
            	<li>
            		<i class="icon-phone"></i> <?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'customcontactpage'),$_smarty_tpl);?>
 
            		<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customcontactpage_phone']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['customcontactpage_email']->value!=''){?>
            	<li>
            		<i class="icon-envelope-alt"></i> <?php echo smartyTranslate(array('s'=>'Email:','mod'=>'customcontactpage'),$_smarty_tpl);?>
 
            		<span><?php echo smarty_function_mailto(array('address'=>htmlspecialchars($_smarty_tpl->tpl_vars['customcontactpage_email']->value, ENT_QUOTES, 'UTF-8', true),'encode'=>"hex"),$_smarty_tpl);?>
</span>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['customcontactpage_text']->value!=''){?>
            	<li class="customcontactpage_text">
            	<?php echo $_smarty_tpl->tpl_vars['customcontactpage_text']->value;?>

            	</li>
            <?php }?>
        </ul>
    </div></div>
</section>
<!-- /MODULE Block contact infos -->
<?php }} ?>