<?php /* Smarty version Smarty-3.1.14, created on 2014-10-07 13:11:52
         compiled from "/home2/topgourm/public_html/modules/textmaster/views/templates/admin/main_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20550114865433e69822c836-44358915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de425b711a7d26865fa03369d98d9d469fbb845f' => 
    array (
      0 => '/home2/topgourm/public_html/modules/textmaster/views/templates/admin/main_list.tpl',
      1 => 1412687455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20550114865433e69822c836-44358915',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'full_url' => 0,
    'page' => 0,
    'total_pages' => 0,
    'pagination' => 0,
    'value' => 0,
    'selected_pagination' => 0,
    'list_total' => 0,
    'cookie_projectFilter_id_project' => 0,
    'cookie_projectFilter_name' => 0,
    'cookie_projectFilter_language_from' => 0,
    'cookie_projectFilter_language_to' => 0,
    'cookie_projectFilter_date_add_0' => 0,
    'cookie_projectFilter_date_add_1' => 0,
    'cookie_projectFilter_date_upd_0' => 0,
    'cookie_projectFilter_date_upd_1' => 0,
    'cookie_projectFilter_status' => 0,
    'projects' => 0,
    'status_readable' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5433e6985197d1_81340714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5433e6985197d1_81340714')) {function content_5433e6985197d1_81340714($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/home2/topgourm/public_html/tools/smarty/plugins/modifier.escape.php';
?>

    <script>
        $(function() {
            if ($(".datepicker").length > 0)
            {
                $(".datepicker").datepicker({
                    prevText: '',
                    nextText: '',
                    dateFormat: 'yy-mm-dd'
                });
            }
        });

        $(document).ready(function() {
            $('table.project .filter').keypress(function(event){
                formSubmit(event, 'submitFilterButtonproject')
            })
        });

    </script>

    <style>
        .table th a
        {
            text-decoration: none !important;
        }
    </style>

<form class="form" action="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
#project" method="post">
<input type="hidden" value="0" name="submitFilterproject" id="submitFilterproject">
<table name="list_table" class="table_grid">
<tbody>
<tr>
    <td style="vertical-align: bottom;">
                        <span style="float: left;">
                            <?php if ($_smarty_tpl->tpl_vars['page']->value>1){?>
                                <input type="image" src="../img/admin/list-prev2.gif" onclick="getE('submitFilterproject').value=1"/>&nbsp;
                                <input type="image" src="../img/admin/list-prev.gif" onclick="getE('submitFilterproject').value=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')-1;?>
"/>
                            <?php }?>
                            <?php echo smartyTranslate(array('s'=>'Page','mod'=>'textmaster'),$_smarty_tpl);?>
 <b><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</b> / <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['total_pages']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                            <?php if ($_smarty_tpl->tpl_vars['page']->value<$_smarty_tpl->tpl_vars['total_pages']->value){?>
                                <input type="image" src="../img/admin/list-next.gif" onclick="getE('submitFilterproject').value=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['page']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')+1;?>
"/>&nbsp;
                                <input type="image" src="../img/admin/list-next2.gif" onclick="getE('submitFilterproject').value=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['total_pages']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
                            <?php }?>
                            | <?php echo smartyTranslate(array('s'=>'Display','mod'=>'textmaster'),$_smarty_tpl);?>

                            <select name="pagination" onchange="submit()">
                                
                                <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pagination']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
                                    <option value="<?php echo mb_convert_encoding(htmlspecialchars(intval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['selected_pagination']->value==$_smarty_tpl->tpl_vars['value']->value){?> selected="selected" <?php }elseif($_smarty_tpl->tpl_vars['selected_pagination']->value==null&&$_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['pagination']->value[1]){?> selected="selected2"<?php }?>><?php echo mb_convert_encoding(htmlspecialchars(intval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
                                <?php } ?>
                            </select>
                            / <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['list_total']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo smartyTranslate(array('s'=>'result(s)','mod'=>'textmaster'),$_smarty_tpl);?>

                        </span>
                        <span style="float: right;">
                            <input type="submit" class="button" value="<?php echo smartyTranslate(array('s'=>'Reset','mod'=>'textmaster'),$_smarty_tpl);?>
" name="submitResetproject">
                            <input type="submit" class="button" value="<?php echo smartyTranslate(array('s'=>'Filter','mod'=>'textmaster'),$_smarty_tpl);?>
" name="submitFilter" id="submitFilterButtonproject">
                        </span>
        <span class="clear"></span>
    </td>
</tr>
<tr>
<td>
<table cellspacing="0" cellpadding="0" style="width: 100%; margin-bottom:10px;" class="table  project">
<colgroup>
    <col width="10px">
    <col width="20px">
    <col>
    <col width="125px">
    <col width="125px">
    <col width="125px">
    <col width="125px">
    <col width="75px">
    <col width="20px">
    <col width="52px">
</colgroup>
<thead>
<tr style="height: 40px" class="nodrag nodrop">
    <th class="center">
    </th>
    <th class="center">
                                    <span class="title_box">
                                        <?php echo smartyTranslate(array('s'=>'Id','mod'=>'textmaster'),$_smarty_tpl);?>

                                    </span>
        <br>
        <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&projectOrderby=id_project&projectOrderway=desc">
            <?php if (isset($_GET['projectOrderby'])&&isset($_GET['projectOrderway'])&&$_GET['projectOrderby']=='id_project'&&$_GET['projectOrderway']=='desc'){?>
                <img border="0" src="../img/admin/down_d.gif">
            <?php }else{ ?>
                <img border="0" src="../img/admin/down.gif">
            <?php }?>
        </a>
        <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&projectOrderby=id_project&projectOrderway=asc">
            <?php if (isset($_GET['projectOrderby'])&&isset($_GET['projectOrderway'])&&$_GET['projectOrderby']=='id_project'&&$_GET['projectOrderway']=='asc'){?>
                <img border="0" src="../img/admin/up_d.gif">
            <?php }else{ ?>
                <img border="0" src="../img/admin/up.gif">
            <?php }?>
        </a>
    </th>
    <th>
									<span class="title_box">
										<?php echo smartyTranslate(array('s'=>'Name','mod'=>'textmaster'),$_smarty_tpl);?>

									</span>
        <br>
        <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&projectOrderby=name&projectOrderway=desc">
            <?php if (isset($_GET['projectOrderby'])&&isset($_GET['projectOrderway'])&&$_GET['projectOrderby']=='name'&&$_GET['projectOrderway']=='desc'){?>
                <img border="0" src="../img/admin/down_d.gif">
            <?php }else{ ?>
                <img border="0" src="../img/admin/down.gif">
            <?php }?>
        </a>
        <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&projectOrderby=name&amp;projectOrderway=asc">
            <?php if (isset($_GET['projectOrderby'])&&isset($_GET['projectOrderway'])&&$_GET['projectOrderby']=='name'&&$_GET['projectOrderway']=='asc'){?>
                <img border="0" src="../img/admin/up_d.gif">
            <?php }else{ ?>
                <img border="0" src="../img/admin/up.gif">
            <?php }?>
        </a>
    </th>
    <th class="center">
									<span class="title_box">
										<?php echo smartyTranslate(array('s'=>'Language from','mod'=>'textmaster'),$_smarty_tpl);?>

									</span>
        <br>
        <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&projectOrderby=language_from&projectOrderway=desc">
            <?php if (isset($_GET['projectOrderby'])&&isset($_GET['projectOrderway'])&&$_GET['projectOrderby']=='language_from'&&$_GET['projectOrderway']=='desc'){?>
                <img border="0" src="../img/admin/down_d.gif">
            <?php }else{ ?>
                <img border="0" src="../img/admin/down.gif">
            <?php }?>
        </a>
        <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&projectOrderby=language_from&projectOrderway=asc">
            <?php if (isset($_GET['projectOrderby'])&&isset($_GET['projectOrderway'])&&$_GET['projectOrderby']=='language_from'&&$_GET['projectOrderway']=='asc'){?>
                <img border="0" src="../img/admin/up_d.gif">
            <?php }else{ ?>
                <img border="0" src="../img/admin/up.gif">
            <?php }?>
        </a>
    </th>
    <th class="center">
									<span class="title_box">
										<?php echo smartyTranslate(array('s'=>'Language to','mod'=>'textmaster'),$_smarty_tpl);?>

									</span>
        <br>
        <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&projectOrderby=language_to&projectOrderway=desc">
            <?php if (isset($_GET['projectOrderby'])&&isset($_GET['projectOrderway'])&&$_GET['projectOrderby']=='language_to'&&$_GET['projectOrderway']=='desc'){?>
                <img border="0" src="../img/admin/down_d.gif">
            <?php }else{ ?>
                <img border="0" src="../img/admin/down.gif">
            <?php }?>
        </a>
        <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&projectOrderby=language_to&projectOrderway=asc">
            <?php if (isset($_GET['projectOrderby'])&&isset($_GET['projectOrderway'])&&$_GET['projectOrderby']=='language_to'&&$_GET['projectOrderway']=='asc'){?>
                <img border="0" src="../img/admin/up_d.gif">
            <?php }else{ ?>
                <img border="0" src="../img/admin/up.gif">
            <?php }?>
        </a>
    </th>
    <th class="right">
									<span class="title_box">
										<?php echo smartyTranslate(array('s'=>'Creation date','mod'=>'textmaster'),$_smarty_tpl);?>

									</span>
        <br>
        <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&projectOrderby=date_add&projectOrderway=desc">
            <?php if (isset($_GET['projectOrderby'])&&isset($_GET['projectOrderway'])&&$_GET['projectOrderby']=='date_add'&&$_GET['projectOrderway']=='desc'){?>
                <img border="0" src="../img/admin/down_d.gif">
            <?php }else{ ?>
                <img border="0" src="../img/admin/down.gif">
            <?php }?>
        </a>
        <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&projectOrderby=date_add&projectOrderway=asc">
            <?php if (isset($_GET['projectOrderby'])&&isset($_GET['projectOrderway'])&&$_GET['projectOrderby']=='date_add'&&$_GET['projectOrderway']=='asc'){?>
                <img border="0" src="../img/admin/up_d.gif">
            <?php }else{ ?>
                <img border="0" src="../img/admin/up.gif">
            <?php }?>
        </a>
    </th>
    <th class="right">
									<span class="title_box">
										<?php echo smartyTranslate(array('s'=>'Date of last modification','mod'=>'textmaster'),$_smarty_tpl);?>

									</span>
        <br>
        <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&projectOrderby=date_upd&projectOrderway=desc">
            <?php if (isset($_GET['projectOrderby'])&&isset($_GET['projectOrderway'])&&$_GET['projectOrderby']=='date_upd'&&$_GET['projectOrderway']=='desc'){?>
                <img border="0" src="../img/admin/down_d.gif">
            <?php }else{ ?>
                <img border="0" src="../img/admin/down.gif">
            <?php }?>
        </a>
        <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&projectOrderby=date_upd&projectOrderway=asc">
            <?php if (isset($_GET['projectOrderby'])&&isset($_GET['projectOrderway'])&&$_GET['projectOrderby']=='date_upd'&&$_GET['projectOrderway']=='asc'){?>
                <img border="0" src="../img/admin/up_d.gif">
            <?php }else{ ?>
                <img border="0" src="../img/admin/up.gif">
            <?php }?>
        </a>
    </th>
    <th class="center">
									<span class="title_box">
										<?php echo smartyTranslate(array('s'=>'Status','mod'=>'textmaster'),$_smarty_tpl);?>

									</span>
        <br>
        <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&projectOrderby=status&projectOrderway=desc">
            <?php if (isset($_GET['projectOrderby'])&&isset($_GET['projectOrderway'])&&$_GET['projectOrderby']=='status'&&$_GET['projectOrderway']=='desc'){?>
                <img border="0" src="../img/admin/down_d.gif">
            <?php }else{ ?>
                <img border="0" src="../img/admin/down.gif">
            <?php }?>
        </a>
        <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&projectOrderby=status&projectOrderway=asc">
            <?php if (isset($_GET['projectOrderby'])&&isset($_GET['projectOrderway'])&&$_GET['projectOrderby']=='status'&&$_GET['projectOrderway']=='asc'){?>
                <img border="0" src="../img/admin/up_d.gif">
            <?php }else{ ?>
                <img border="0" src="../img/admin/up.gif">
            <?php }?>
        </a>
    </th>
    <th class="center">
									<span class="title_box">
										<?php echo smartyTranslate(array('s'=>'Launch','mod'=>'textmaster'),$_smarty_tpl);?>

									</span>
        <br>
        <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&projectOrderby=show_launch_button&projectOrderway=desc">
            <?php if (isset($_GET['projectOrderby'])&&isset($_GET['projectOrderway'])&&$_GET['projectOrderby']=='show_launch_button'&&$_GET['projectOrderway']=='desc'){?>
                <img border="0" src="../img/admin/down_d.gif">
            <?php }else{ ?>
                <img border="0" src="../img/admin/down.gif">
            <?php }?>
        </a>
        <a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&projectOrderby=show_launch_button&projectOrderway=asc">
            <?php if (isset($_GET['projectOrderby'])&&isset($_GET['projectOrderway'])&&$_GET['projectOrderby']=='show_launch_button'&&$_GET['projectOrderway']=='asc'){?>
                <img border="0" src="../img/admin/up_d.gif">
            <?php }else{ ?>
                <img border="0" src="../img/admin/up.gif">
            <?php }?>
        </a>
    </th>
    <th class="center">
        <?php echo smartyTranslate(array('s'=>'Actions','mod'=>'textmaster'),$_smarty_tpl);?>
<br>&nbsp;
    </th>
</tr>
<tr style="height: 35px;" class="nodrag nodrop filter row_hover">
    <td class="center">

    </td>
    <td class="center">
        <input type="text" style="width:20px" value="<?php if (isset($_smarty_tpl->tpl_vars['cookie_projectFilter_id_project']->value)){?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cookie_projectFilter_id_project']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" name="projectFilter_id_project" class="filter">
    </td>
    <td>
        <input type="text" style="width:95%" value="<?php if (isset($_smarty_tpl->tpl_vars['cookie_projectFilter_name']->value)){?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cookie_projectFilter_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" name="projectFilter_name" class="filter">
    </td>
    <td class="center">
        <input type="text" style="width:125px" value="<?php if (isset($_smarty_tpl->tpl_vars['cookie_projectFilter_language_from']->value)){?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cookie_projectFilter_language_from']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" name="projectFilter_language_from" class="filter">
    </td>
    <td class="center">
        <input type="text" style="width:125px" value="<?php if (isset($_smarty_tpl->tpl_vars['cookie_projectFilter_language_to']->value)){?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cookie_projectFilter_language_to']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" name="projectFilter_language_to" class="filter">
    </td>
    <td class="right">
        <?php echo smartyTranslate(array('s'=>'From','mod'=>'textmaster'),$_smarty_tpl);?>
 <input type="text" style="width:70px" value="<?php if (isset($_smarty_tpl->tpl_vars['cookie_projectFilter_date_add_0']->value)){?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cookie_projectFilter_date_add_0']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" name="projectFilter_date_add[0]" id="projectFilter_date_add_0" class="filter datepicker">
        <br>
        <?php echo smartyTranslate(array('s'=>'To','mod'=>'textmaster'),$_smarty_tpl);?>
 <input type="text" style="width:70px" value="<?php if (isset($_smarty_tpl->tpl_vars['cookie_projectFilter_date_add_1']->value)){?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cookie_projectFilter_date_add_1']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" name="projectFilter_date_add[1]" id="projectFilter_date_add_1" class="filter datepicker">
    </td>
    <td class="right">
        <?php echo smartyTranslate(array('s'=>'From','mod'=>'textmaster'),$_smarty_tpl);?>
 <input type="text" style="width:70px" value="<?php if (isset($_smarty_tpl->tpl_vars['cookie_projectFilter_date_upd_0']->value)){?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cookie_projectFilter_date_upd_0']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" name="projectFilter_date_upd[0]" id="projectFilter_date_upd_0" class="filter datepicker">
        <br>
        <?php echo smartyTranslate(array('s'=>'To','mod'=>'textmaster'),$_smarty_tpl);?>
 <input type="text" style="width:70px" value="<?php if (isset($_smarty_tpl->tpl_vars['cookie_projectFilter_date_upd_1']->value)){?><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['cookie_projectFilter_date_upd_1']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?>" name="projectFilter_date_upd[1]" id="projectFilter_date_upd_1" class="filter datepicker">
    </td>

    <td class="center">
        <select style="width:75px" name="projectFilter_status" onchange="$('#submitFilterButtonproject').focus();$('#submitFilterButtonproject').click();">
            <option <?php if (!isset($_smarty_tpl->tpl_vars['cookie_projectFilter_status']->value)){?>selected="selected"<?php }?> value="">--</option>
            <option <?php if (isset($_smarty_tpl->tpl_vars['cookie_projectFilter_status']->value)&&$_smarty_tpl->tpl_vars['cookie_projectFilter_status']->value=='in_creation'){?>selected="selected" <?php }?>value="in_creation"><?php echo smartyTranslate(array('s'=>'In creation','mod'=>'textmaster'),$_smarty_tpl);?>
</option>
            <option <?php if (isset($_smarty_tpl->tpl_vars['cookie_projectFilter_status']->value)&&$_smarty_tpl->tpl_vars['cookie_projectFilter_status']->value=='in_progress'){?>selected="selected" <?php }?>value="in_progress"><?php echo smartyTranslate(array('s'=>'In progress','mod'=>'textmaster'),$_smarty_tpl);?>
</option>
            <option <?php if (isset($_smarty_tpl->tpl_vars['cookie_projectFilter_status']->value)&&$_smarty_tpl->tpl_vars['cookie_projectFilter_status']->value=='in_review'){?>selected="selected" <?php }?>value="in_review"><?php echo smartyTranslate(array('s'=>'In review','mod'=>'textmaster'),$_smarty_tpl);?>
</option>
            <option <?php if (isset($_smarty_tpl->tpl_vars['cookie_projectFilter_status']->value)&&$_smarty_tpl->tpl_vars['cookie_projectFilter_status']->value=='paused'){?>selected="selected" <?php }?>value="paused"><?php echo smartyTranslate(array('s'=>'Paused','mod'=>'textmaster'),$_smarty_tpl);?>
</option>
            <option <?php if (isset($_smarty_tpl->tpl_vars['cookie_projectFilter_status']->value)&&$_smarty_tpl->tpl_vars['cookie_projectFilter_status']->value=='completed'){?>selected="selected" <?php }?>value="completed"><?php echo smartyTranslate(array('s'=>'Completed','mod'=>'textmaster'),$_smarty_tpl);?>
</option>
            <option <?php if (isset($_smarty_tpl->tpl_vars['cookie_projectFilter_status']->value)&&$_smarty_tpl->tpl_vars['cookie_projectFilter_status']->value=='canceled'){?>selected="selected" <?php }?>value="canceled"><?php echo smartyTranslate(array('s'=>'Cancelled','mod'=>'textmaster'),$_smarty_tpl);?>
</option>
        </select>
    </td>
    <td class="center">
        --
    </td>
    <td class="center">--</td>
</tr>
</thead>
<tbody>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['ii'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['ii']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['name'] = 'ii';
$_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['projects']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['ii']['total']);
?>
    <?php if ($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['status']=='in_creation'){?>
        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "status_readable", null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'In creation','mod'=>'textmaster'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }elseif($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['status']=='in_progress'){?>
        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "status_readable", null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'In progress','mod'=>'textmaster'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }elseif($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['status']=='in_review'){?>
        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "status_readable", null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'In review','mod'=>'textmaster'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }elseif($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['status']=='paused'){?>
        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "status_readable", null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Paused','mod'=>'textmaster'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }elseif($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['status']=='completed'){?>
        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "status_readable", null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Completed','mod'=>'textmaster'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }elseif($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['status']=='canceled'){?>
        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "status_readable", null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Cancelled','mod'=>'textmaster'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }else{ ?>
        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "status_readable", null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'In creation','mod'=>'textmaster'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php }?>
    <tr class="row_hover" id="tr_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['section']['ii']['index'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')+1;?>
_<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['id_project'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
_0">
        <td class="center">
        </td>
        <td onclick="document.location = '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&id_project=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['id_project'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&viewproject'" class="pointer center">
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['id_project'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

        </td>
        <td onclick="document.location = '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&id_project=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['id_project'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&viewproject'" class="pointer">
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

        </td>
        <td onclick="document.location = '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&id_project=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['id_project'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&viewproject'" class="pointer center">
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['language_from'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

        </td>
        <td onclick="document.location = '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&id_project=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['id_project'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&viewproject'" class="pointer center">
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['language_to'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

        </td>
        <td onclick="document.location = '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&id_project=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['id_project'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&viewproject'" class="pointer right">
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['date_add'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

        </td>
        <td onclick="document.location = '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&id_project=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['id_project'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&viewproject'" class="pointer right">
            <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['date_upd'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

        </td>
        <td onclick="document.location = '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&id_project=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['id_project'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&viewproject'" class="pointer center">
            <img title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['status_readable']->value, 'UTF-8');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['status_readable']->value, 'UTF-8');?>
" src="../img/admin/../../modules/textmaster/img/status/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['status'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
.png">
        </td>
        <td class="pointer center">
            <?php if ($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['status']=='in_creation'){?>
                <a title="<?php echo smartyTranslate(array('s'=>'Launch','mod'=>'textmaster'),$_smarty_tpl);?>
" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&id_project=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['id_project'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&launch_project">
                    <img src="../modules/textmaster/img/launch.png">
                </a>
            <?php }else{ ?>
                --
            <?php }?>
        </td>
        <td style="white-space: nowrap;" class="center">
            <a onclick="if (confirm('<?php echo smartyTranslate(array('s'=>'Are You sure?','mod'=>'textmaster'),$_smarty_tpl);?>
')) document.location = '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&id_project=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['id_project'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&duplicateproject'; else document.location = '<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&id_project=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['id_project'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&duplicateproject&noimage=1';" title="<?php echo smartyTranslate(array('s'=>'Duplicate','mod'=>'textmaster'),$_smarty_tpl);?>
" class="pointer">
                <img alt="<?php echo smartyTranslate(array('s'=>'Duplicate','mod'=>'textmaster'),$_smarty_tpl);?>
" src="../img/admin/duplicate.png">
            </a>
            <a title="<?php echo smartyTranslate(array('s'=>'View','mod'=>'textmaster'),$_smarty_tpl);?>
" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&id_project=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['id_project'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&viewproject">
                <img alt="<?php echo smartyTranslate(array('s'=>'View','mod'=>'textmaster'),$_smarty_tpl);?>
" src="../img/admin/details.gif">
            </a>
            <?php if ($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['status']=='in_creation'){?>
                <a title="<?php echo smartyTranslate(array('s'=>'Edit','mod'=>'textmaster'),$_smarty_tpl);?>
" class="edit" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&id_project=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['id_project'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&updateproject">
                    <img alt="<?php echo smartyTranslate(array('s'=>'Edit','mod'=>'textmaster'),$_smarty_tpl);?>
" src="../img/admin/edit.gif">
                </a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['status']=='in_creation'||$_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['status']=='paused'){?>
                <a title="<?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'textmaster'),$_smarty_tpl);?>
" onclick="if (confirm('{l s='Are you sure?' mod='textmaster'}')){ return true; }else{ event.stopPropagation(); event.preventDefault();};" class="delete" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['full_url']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&id_project=<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['projects']->value[$_smarty_tpl->getVariable('smarty')->value['section']['ii']['index']]['id_project'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
&deleteproject">
                    <img alt="<?php echo smartyTranslate(array('s'=>'Cancel','mod'=>'textmaster'),$_smarty_tpl);?>
" src="../img/admin/delete.gif">
                </a>
            <?php }?>
        </td>
    </tr>
<?php endfor; endif; ?>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</form><?php }} ?>