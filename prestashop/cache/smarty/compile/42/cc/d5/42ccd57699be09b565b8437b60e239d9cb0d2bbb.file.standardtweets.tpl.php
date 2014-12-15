<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:25:35
         compiled from "/home2/topgourm/public_html/modules/standardtweets/standardtweets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:605622542543d082fa2fac1-44063354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42ccd57699be09b565b8437b60e239d9cb0d2bbb' => 
    array (
      0 => '/home2/topgourm/public_html/modules/standardtweets/standardtweets.tpl',
      1 => 1412678496,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '605622542543d082fa2fac1-44063354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username' => 0,
    'widgetid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d082fa371f9_87265646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d082fa371f9_87265646')) {function content_543d082fa371f9_87265646($_smarty_tpl) {?><section id="standardtweets_module" class="block clearfix">
<a class="twitter-timeline" href="https://twitter.com/<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" data-widget-id="<?php echo $_smarty_tpl->tpl_vars['widgetid']->value;?>
">Tweets by @<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</section>
<?php }} ?>