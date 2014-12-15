<?php /* Smarty version Smarty-3.1.14, created on 2014-10-07 15:34:29
         compiled from "/home2/topgourm/public_html/modules/sociallogin/views/templates/hook/loginradius.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11673015415433ebe5ebf5f6-56485643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc2fa0b4b480aa199a5acb043601cc2f16ff3dc8' => 
    array (
      0 => '/home2/topgourm/public_html/modules/sociallogin/views/templates/hook/loginradius.tpl',
      1 => 1412678495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11673015415433ebe5ebf5f6-56485643',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'right' => 0,
    'iframe' => 0,
    'sl_title' => 0,
    'margin_style' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5433ebe5edf7d0_88499733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5433ebe5edf7d0_88499733')) {function content_5433ebe5edf7d0_88499733($_smarty_tpl) {?>

<!-- Block mymodule -->
<?php if ($_smarty_tpl->tpl_vars['right']->value){?>
<div id="mymodule_block_left" class="block" >
  <h4><?php echo smartyTranslate(array('s'=>'Social Login','mod'=>'sociallogin'),$_smarty_tpl);?>
</h4>
  <div class="block_content">
    <ul>
      <li>
        <?php if ($_smarty_tpl->tpl_vars['iframe']->value=="error"){?>
          <p style='color:red'>Your LoginRadius API Key or secret is not valid, please correct it or contact
          LoginRadius support at<br/><a href='http://www.LoginRadius.com' target='_blank'>www.loginradius.com</a></p>
        <?php }else{ ?>
          <?php if ($_smarty_tpl->tpl_vars['sl_title']->value){?>
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['sl_title']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

          <?php }?>
	 <br/><div class="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['iframe']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"></div>
        <?php }?>
	  </li>
    </ul>
  </div>
</div>
<?php }else{ ?>
<div id="mymodule_block_left"  <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['margin_style']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
>
  <div class="block_content">
    <ul>
      <?php if ($_smarty_tpl->tpl_vars['iframe']->value=="error"){?>
        <p style='color:red'>Your LoginRadius API Key or secret is not valid, please correct it or contact
          LoginRadius support at<br/><a href='http://www.LoginRadius.com' target='_blank'>www.loginradius.com</a></p>
      <?php }else{ ?>
        
        <script>$(function(){loginradius_interface();});</script>
      
	  <div style="padding-top:5px;"><div class="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['iframe']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"></div></div>
      <?php }?>
    </ul>
  </div>
</div>
<?php }?>


<!-- /Block mymodule -->


<?php }} ?>