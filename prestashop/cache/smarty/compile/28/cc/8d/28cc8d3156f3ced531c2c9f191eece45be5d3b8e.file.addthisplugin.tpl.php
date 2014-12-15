<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:50:50
         compiled from "/home2/topgourm/public_html/modules/addthisplugin/addthisplugin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2094254438543d0e1a180ea7-01653482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28cc8d3156f3ced531c2c9f191eece45be5d3b8e' => 
    array (
      0 => '/home2/topgourm/public_html/modules/addthisplugin/addthisplugin.tpl',
      1 => 1412678504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2094254438543d0e1a180ea7-01653482',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addthisplugin_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d0e1a190e80_73581505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d0e1a190e80_73581505')) {function content_543d0e1a190e80_73581505($_smarty_tpl) {?><div class="addthis_toolbox addthis_default_style additional_button">
<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<?php if (isset($_smarty_tpl->tpl_vars['addthisplugin_id']->value)&&($_smarty_tpl->tpl_vars['addthisplugin_id']->value=="0")){?>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-506085301209b251"></script>
<?php }else{ ?>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=<?php echo $_smarty_tpl->tpl_vars['addthisplugin_id']->value;?>
"></script>
<?php }?><?php }} ?>