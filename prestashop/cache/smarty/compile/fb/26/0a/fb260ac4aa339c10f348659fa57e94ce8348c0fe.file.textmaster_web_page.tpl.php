<?php /* Smarty version Smarty-3.1.14, created on 2014-10-07 15:10:57
         compiled from "/home2/topgourm/public_html/modules/textmaster/views/templates/admin/textmaster_web_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13073322255433e66116ee55-95948531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb260ac4aa339c10f348659fa57e94ce8348c0fe' => 
    array (
      0 => '/home2/topgourm/public_html/modules/textmaster/views/templates/admin/textmaster_web_page.tpl',
      1 => 1412687455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13073322255433e66116ee55-95948531',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ps14' => 0,
    'login_form_url' => 0,
    'register_form_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5433e6611c0907_57836854',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5433e6611c0907_57836854')) {function content_5433e6611c0907_57836854($_smarty_tpl) {?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge;chrome=1">
<meta name="viewport" content="initial-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" type="text/css" href="<?php echo mb_convert_encoding(htmlspecialchars(@constant('_MODULE_DIR_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
textmaster/css/layout.css" media="screen" />
    <div class="action-log">
      <div class="wrap<?php if (isset($_smarty_tpl->tpl_vars['ps14']->value)){?> ps14<?php }?>">
        <a href="#" class="logo hide_replace"><?php echo smartyTranslate(array('s'=>'TextMaster','mod'=>'textmaster'),$_smarty_tpl);?>
</a>
        <span class="baseline"><?php echo smartyTranslate(array('s'=>'Translate your online store directly through PrestaShop','mod'=>'textmaster'),$_smarty_tpl);?>
</span>
        <div class="get-started">
          <h1 class="title"><?php echo smartyTranslate(array('s'=>'High quality translation in','mod'=>'textmaster'),$_smarty_tpl);?>
 <strong><?php echo smartyTranslate(array('s'=>'4 simple steps','mod'=>'textmaster'),$_smarty_tpl);?>
</strong></h1>
          <div class="process<?php if (isset($_smarty_tpl->tpl_vars['ps14']->value)){?> ps14<?php }?>"></div>
          <ul<?php if (isset($_smarty_tpl->tpl_vars['ps14']->value)){?> class="ps14"<?php }?>>
            <li><p><?php echo smartyTranslate(array('s'=>'Setup your TextMaster module','mod'=>'textmaster'),$_smarty_tpl);?>
 <br /> <?php echo smartyTranslate(array('s'=>'and account','mod'=>'textmaster'),$_smarty_tpl);?>
</p></li>
            <li><p><?php echo smartyTranslate(array('s'=>'Select the language and level for your product sheet translation','mod'=>'textmaster'),$_smarty_tpl);?>
</p></li>
            <li><p><?php echo smartyTranslate(array('s'=>'Send your order','mod'=>'textmaster'),$_smarty_tpl);?>
</p></li>
            <li class="last"><p><?php echo smartyTranslate(array('s'=>'Ask for as many changes as needed before validating your order','mod'=>'textmaster'),$_smarty_tpl);?>
</p></li>
            <div class="cb"></div>
          </ul>
          <h2><?php echo smartyTranslate(array('s'=>'That’s all there is to it! Your ﬁnal order is automatically integrated into PrestaShop.','mod'=>'textmaster'),$_smarty_tpl);?>
</h2>
        </div>
      </div>
      <div class="reassurance">
        <div class="wrap<?php if (isset($_smarty_tpl->tpl_vars['ps14']->value)){?> ps14<?php }?>">
          <div class="left">
            <form enctype="multipart/form-data" method="post" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['login_form_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="defaultForm login_textmaster" id="textmaster_login_form">
              <fieldset id="fieldset_0">
                  <legend>
                      <img alt="Login" src="<?php echo @constant('__PS_BASE_URI__');?>
img/admin/cog.gif"> <?php echo smartyTranslate(array('s'=>'Login','mod'=>'textmaster'),$_smarty_tpl);?>

                  </legend>
                  <label>
                      <?php echo smartyTranslate(array('s'=>'Email Address','mod'=>'textmaster'),$_smarty_tpl);?>

                  </label>		
                  <div class="margin-form">
                      <input type="text" size="18" class="" value="" id="login_email" name="login_email">
                  </div>
                  <div class="clear"></div>
                  <label>
                      <?php echo smartyTranslate(array('s'=>'Password','mod'=>'textmaster'),$_smarty_tpl);?>

                  </label>							
                  <div class="margin-form">
                      <input type="password" value="" class="" size="18" name="login_password">
                  </div>
                  <div class="clear"></div>
                  <div class="margin-form">
                      <input type="submit" class="button" name="login_to_textmaster_system" value="<?php echo smartyTranslate(array('s'=>'Login','mod'=>'textmaster'),$_smarty_tpl);?>
" id="textmaster_login_form_submit_btn">
                  </div>
              </fieldset>
            </form>
          </div>
          <div class="right">
            <form enctype="multipart/form-data" method="post" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['register_form_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="defaultForm login_textmaster" id="textmaster_register_form">
              <fieldset id="fieldset_0">
                  <legend>
                      <img alt="Create New Account" src="<?php echo @constant('__PS_BASE_URI__');?>
img/admin/cog.gif"> <?php echo smartyTranslate(array('s'=>'Create New Account','mod'=>'textmaster'),$_smarty_tpl);?>

                  </legend>
                  <label>
                      <?php echo smartyTranslate(array('s'=>'Email Address','mod'=>'textmaster'),$_smarty_tpl);?>

                  </label>
                  <div class="margin-form">
                      <input type="text" size="18" class="" value="" id="register_email" name="register_email">
                  </div>
                  <div class="clear"></div>
                  <label>
                      <?php echo smartyTranslate(array('s'=>'Password','mod'=>'textmaster'),$_smarty_tpl);?>

                  </label>
                  <div class="margin-form">
                      <input type="password" value="" class="" size="18" name="register_password">
                  </div>
                  <div class="clear"></div>
                  <label>
                      <?php echo smartyTranslate(array('s'=>'Confirm Password','mod'=>'textmaster'),$_smarty_tpl);?>

                  </label>
                  <div class="margin-form">
                      <input type="password" value="" class="" size="18" name="register_password_confirm">
                  </div>
                  <div class="clear"></div>
                  <label>
                      <?php echo smartyTranslate(array('s'=>'Phone (optional)','mod'=>'textmaster'),$_smarty_tpl);?>

                  </label>
                  <div class="margin-form">
                      <input type="text" value="" class="" size="18" name="register_phone">
                  </div>
                  <div class="clear"></div>
                  <div class="margin-form">
                      <input type="submit" class="button" name="register_to_textmaster_system" value="<?php echo smartyTranslate(array('s'=>'Create Free Account','mod'=>'textmaster'),$_smarty_tpl);?>
" id="textmaster_register_form_submit_btn">
                  </div>
              </fieldset>
            </form>
          </div>
        </div>
        <div class="cb"></div>
        <div class="wrap<?php if (isset($_smarty_tpl->tpl_vars['ps14']->value)){?> ps14<?php }?>">
          <h3><?php echo smartyTranslate(array('s'=>'Why choose TextMaster? Here are a few ways that we make your life easier','mod'=>'textmaster'),$_smarty_tpl);?>
</h3>
          <ul<?php if (isset($_smarty_tpl->tpl_vars['ps14']->value)){?> class="ps14_"<?php }?>>
            <li class="quality">
              <i></i>
              <p><?php echo smartyTranslate(array('s'=>'High quality translation from certiﬁed professionals','mod'=>'textmaster'),$_smarty_tpl);?>
</p>
            </li>
            <li class="available">
              <i></i>
              <p><?php echo smartyTranslate(array('s'=>'Our community of 60,000 translators are available 24/7','mod'=>'textmaster'),$_smarty_tpl);?>
</p>
            </li>
            <li class="store">
              <i></i>
              <p><?php echo smartyTranslate(array('s'=>'Your store can be translated into 10 languages','mod'=>'textmaster'),$_smarty_tpl);?>
</p>
            </li>
            <li class="proof">
              <i></i>
              <p><?php echo smartyTranslate(array('s'=>'Our proofreading services ensure the quality of your content','mod'=>'textmaster'),$_smarty_tpl);?>
</p>
            </li>
            <li class="money">
              <i></i>
              <p><?php echo smartyTranslate(array('s'=>'Flexible rates based on the size and frequency of your orders','mod'=>'textmaster'),$_smarty_tpl);?>
</p>
            </li>
            <div class="cb"></div>
          </ul>
        </div>
      </div>
    </div><?php }} ?>