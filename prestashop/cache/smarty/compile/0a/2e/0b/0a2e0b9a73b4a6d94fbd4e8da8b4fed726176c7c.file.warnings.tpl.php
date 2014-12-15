<?php /* Smarty version Smarty-3.1.14, created on 2014-10-07 15:11:38
         compiled from "/home2/topgourm/public_html/modules/textmaster/views/templates/admin/warnings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11192350265433e68aae3f81-73957480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a2e0b9a73b4a6d94fbd4e8da8b4fed726176c7c' => 
    array (
      0 => '/home2/topgourm/public_html/modules/textmaster/views/templates/admin/warnings.tpl',
      1 => 1412687455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11192350265433e68aae3f81-73957480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'warnings' => 0,
    'warning' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5433e68ab1ff93_99615971',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5433e68ab1ff93_99615971')) {function content_5433e68ab1ff93_99615971($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['warnings']->value)){?>
    <div class="warning">
        <?php if (count($_smarty_tpl->tpl_vars['warnings']->value)==1){?>
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['warnings']->value[0], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

        <?php }else{ ?>
            <?php echo smartyTranslate(array('s'=>'%d warnings','mod'=>'textmaster','sprintf'=>count($_smarty_tpl->tpl_vars['warnings']->value)),$_smarty_tpl);?>

            <br/>
            <ol>
                <?php  $_smarty_tpl->tpl_vars['warning'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['warning']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['warnings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['warning']->key => $_smarty_tpl->tpl_vars['warning']->value){
$_smarty_tpl->tpl_vars['warning']->_loop = true;
?>
                    <li><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['warning']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</li>
                <?php } ?>
            </ol>
        <?php }?>
    </div>
<?php }?><?php }} ?>