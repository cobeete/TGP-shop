<?php /* Smarty version Smarty-3.1.14, created on 2014-10-07 13:11:48
         compiled from "/home2/topgourm/public_html/modules/textmaster/views/templates/admin/navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2616055525433e694d33120-45435571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b836fb56c1cb0cb6ccadb6aa329903e0ccc8fc59' => 
    array (
      0 => '/home2/topgourm/public_html/modules/textmaster/views/templates/admin/navigation.tpl',
      1 => 1412687455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2616055525433e694d33120-45435571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_project_link' => 0,
    'translation_page_url' => 0,
    'proofreading_page_url' => 0,
    'settings_page_url' => 0,
    'help_page_url' => 0,
    'module_display_name' => 0,
    'current_page_name' => 0,
    'current_inner_page_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5433e694db21a1_98637619',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5433e694db21a1_98637619')) {function content_5433e694db21a1_98637619($_smarty_tpl) {?>
<div class="toolbar-placeholder">
    <div class="toolbarBox toolbarHead">
        <ul class="cc_button">
            <li>
                <a id="new_project" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['new_project_link']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="toolbar_btn">
                    <span class="process-icon-new new"></span>
                    <div><?php echo smartyTranslate(array('s'=>'New project','mod'=>'textmaster'),$_smarty_tpl);?>
</div>
                </a>
            </li>
            <li>
                <a id="translation_page" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['translation_page_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="toolbar_btn">
                    <span class="process-icon-translation translation"></span>
                    <div><?php echo smartyTranslate(array('s'=>'Translation projects','mod'=>'textmaster'),$_smarty_tpl);?>
</div>
                </a>
            </li>
            <li>
                <a id="proofreading_page" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['proofreading_page_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="toolbar_btn">
                    <span class="process-icon-proofreading proofreading"></span>
                    <div><?php echo smartyTranslate(array('s'=>'Proofreading projects','mod'=>'textmaster'),$_smarty_tpl);?>
</div>
                </a>
            </li>
            <li>
                <a id="settings_page" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['settings_page_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="toolbar_btn">
                    <span class="process-icon-settings settings"></span>
                    <div><?php echo smartyTranslate(array('s'=>'Settings','mod'=>'textmaster'),$_smarty_tpl);?>
</div>
                </a>
            </li>
            <li>
                <a id="help_page" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['help_page_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="toolbar_btn">
                    <span class="process-icon-help help"></span>
                    <div><?php echo smartyTranslate(array('s'=>'Help','mod'=>'textmaster'),$_smarty_tpl);?>
</div>
                </a>
            </li>
        </ul>
        <div class="pageTitle">
            <h3>
                <span id="current_obj" style="font-weight: normal;">
                    <span class="breadcrumb item-0 ">
                        <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_display_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                        <?php if (isset($_smarty_tpl->tpl_vars['current_page_name']->value)){?>
                            <img src="<?php echo mb_convert_encoding(htmlspecialchars(@constant('_MODULE_DIR_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
textmaster/img/separator_breadcrumb.png" style="margin-right:5px" alt=">">
                            <span class="breadcrumb item-1"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['current_page_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
                        <?php }?>
                        <?php if (isset($_smarty_tpl->tpl_vars['current_inner_page_name']->value)&&$_smarty_tpl->tpl_vars['current_inner_page_name']->value){?>
                            <img src="<?php echo mb_convert_encoding(htmlspecialchars(@constant('_MODULE_DIR_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
textmaster/img/separator_breadcrumb.png" style="margin-right:5px" alt=">">
                            <span class="breadcrumb item-1"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['current_inner_page_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</span>
                        <?php }?>
                    </span>
                </span>
            </h3>
        </div>
    </div>
</div><?php }} ?>