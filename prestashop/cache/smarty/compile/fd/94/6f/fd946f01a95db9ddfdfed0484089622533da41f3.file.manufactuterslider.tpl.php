<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:51:37
         compiled from "/home2/topgourm/public_html/modules/manufactuterslider/manufactuterslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1797382068543d0e49596300-93480631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd946f01a95db9ddfdfed0484089622533da41f3' => 
    array (
      0 => '/home2/topgourm/public_html/modules/manufactuterslider/manufactuterslider.tpl',
      1 => 1412678503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1797382068543d0e49596300-93480631',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manufacturers' => 0,
    'manufacturer' => 0,
    'myfile' => 0,
    'link' => 0,
    'img_manu_dir' => 0,
    'manufacturerSize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d0e495bd199_90167765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d0e495bd199_90167765')) {function content_543d0e495bd199_90167765($_smarty_tpl) {?><!-- Block manufacturers  slider module -->
<?php if ($_smarty_tpl->tpl_vars['manufacturers']->value){?>

<section id="manufacturers_slider" class=" ">
 <div id="manufacturers_logo_slider"  class="flexslider_carousel">
  <ul class="slides">
   <?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value){
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
?>
   <?php ob_start();?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["myfile"] = new Smarty_variable("img/m/".$_tmp1."-mf_image.jpg", null, 0);?>
   <?php if (file_exists($_smarty_tpl->tpl_vars['myfile']->value)){?>
   <li>
     <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']);?>
">

      <img src="<?php echo $_smarty_tpl->tpl_vars['img_manu_dir']->value;?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
-mf_image.jpg" class="img-responsive logo_manufacturer transition-300" <?php if (isset($_smarty_tpl->tpl_vars['manufacturerSize']->value)){?> width="<?php echo $_smarty_tpl->tpl_vars['manufacturerSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['manufacturerSize']->value['height'];?>
"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['name'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value['name'];?>
" />

    </a>
  </li>
  <?php }?>
  <?php } ?>
</ul>
</div>
</section>
<?php }?>

<!-- /Block manufacturers slider module -->
<?php }} ?>