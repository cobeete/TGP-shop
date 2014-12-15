<?php /* Smarty version Smarty-3.1.14, created on 2014-10-13 14:31:20
         compiled from "/home2/topgourm/public_html/modules/themeeditor/views/templates/admin/_configure/helpers/form/form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41369439543bc618af8c56-31831513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d84382b4c894f4990abf88351e9005e7c97907b' => 
    array (
      0 => '/home2/topgourm/public_html/modules/themeeditor/views/templates/admin/_configure/helpers/form/form.tpl',
      1 => 1412678508,
      2 => 'file',
    ),
    '4f232bcd1b13ad1bc509d06002c0f96cc752ee3a' => 
    array (
      0 => '/home2/topgourm/public_html/adminwe/themes/default/template/helpers/form/form.tpl',
      1 => 1400574918,
      2 => 'file',
    ),
    'e44bd8802f25b3f562c1ee7ac1ab1b30d44a75dc' => 
    array (
      0 => '/home2/topgourm/public_html/adminwe/themes/default/template/helpers/form/form_group.tpl',
      1 => 1400574918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41369439543bc618af8c56-31831513',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fields' => 0,
    'table' => 0,
    'name_controller' => 0,
    'current' => 0,
    'token' => 0,
    'style' => 0,
    'form_id' => 0,
    'identifier' => 0,
    'submit_action' => 0,
    'f' => 0,
    'fieldset' => 0,
    'key' => 0,
    'field' => 0,
    'input' => 0,
    'contains_states' => 0,
    'fields_value' => 0,
    'current_id_lang' => 0,
    'hint' => 0,
    'languages' => 0,
    'language' => 0,
    'defaultFormLanguage' => 0,
    'value_text' => 0,
    'name' => 0,
    'value' => 0,
    'optiongroup' => 0,
    'option' => 0,
    'field_value' => 0,
    'id_checkbox' => 0,
    'select' => 0,
    'k' => 0,
    'v' => 0,
    'categories_tree' => 0,
    'asso_shop' => 0,
    'p' => 0,
    'hookName' => 0,
    'show_cancel_button' => 0,
    'back_url' => 0,
    'btn' => 0,
    'tinymce' => 0,
    'iso' => 0,
    'ad' => 0,
    'firstCall' => 0,
    'vat_number' => 0,
    'allowEmployeeFormLang' => 0,
    'use_textarea_autosize' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543bc619504159_12944718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543bc619504159_12944718')) {function content_543bc619504159_12944718($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['title'])){?><h3><?php echo $_smarty_tpl->tpl_vars['fields']->value['title'];?>
</h3><?php }?>


<div class="row">
<div class="col-lg-2">
<div id="options_tab" class="">
	<ul class="list-group">
<?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value){
$_smarty_tpl->tpl_vars['tab']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['tab']->value['form']['tab_name']!='save_tab'){?><li <?php if ($_smarty_tpl->tpl_vars['tab']->value['form']['tab_name']=='main_tab'){?>class="active"<?php }?>><a class="list-group-item" href="#<?php echo $_smarty_tpl->tpl_vars['tab']->value['form']['tab_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['tab']->value['form']['legend']['title'];?>
</a></li><?php }?>
<?php } ?>
<ul>
</div>
</div>
<div class="col-lg-10 tab-content">

<form id="<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['form']['form']['id_form'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['form']['form']['id_form'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['table']->value==null){?>configuration_form<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form<?php }?><?php }?>" class="defaultForm <?php echo $_smarty_tpl->tpl_vars['name_controller']->value;?>
 form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
&amp;token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" method="post" enctype="multipart/form-data" <?php if (isset($_smarty_tpl->tpl_vars['style']->value)){?>style="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
"<?php }?> novalidate>
	<?php if ($_smarty_tpl->tpl_vars['form_id']->value){?>
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['identifier']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" />
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['submit_action']->value)){?>
		<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
" value="1" />
	<?php }?>
	
	<?php  $_smarty_tpl->tpl_vars['fieldset'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fieldset']->_loop = false;
 $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fieldset']->key => $_smarty_tpl->tpl_vars['fieldset']->value){
$_smarty_tpl->tpl_vars['fieldset']->_loop = true;
 $_smarty_tpl->tpl_vars['f']->value = $_smarty_tpl->tpl_vars['fieldset']->key;
?>
		
<?php if ($_smarty_tpl->tpl_vars['fieldset']->value['form']['tab_name']!='save_tab'){?><div class="tab-pane <?php if ($_smarty_tpl->tpl_vars['fieldset']->value['form']['tab_name']=='main_tab'){?>active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['tab_name'];?>
"><?php }?>

		<div class="panel" id="fieldset_<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
">
			<?php  $_smarty_tpl->tpl_vars['field'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldset']->value['form']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field']->key => $_smarty_tpl->tpl_vars['field']->value){
$_smarty_tpl->tpl_vars['field']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['field']->key;
?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value=='legend'){?>
					
						<div class="panel-heading">
							<?php if (isset($_smarty_tpl->tpl_vars['field']->value['image'])&&isset($_smarty_tpl->tpl_vars['field']->value['title'])){?><img src="<?php echo $_smarty_tpl->tpl_vars['field']->value['image'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" /><?php }?>
							<?php if (isset($_smarty_tpl->tpl_vars['field']->value['icon'])){?><i class="<?php echo $_smarty_tpl->tpl_vars['field']->value['icon'];?>
"></i><?php }?>
							<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>

						</div>
					
				<?php }elseif($_smarty_tpl->tpl_vars['key']->value=='description'&&$_smarty_tpl->tpl_vars['field']->value){?>
					<div class="alert alert-info"><?php echo $_smarty_tpl->tpl_vars['field']->value;?>
</div>
				<?php }elseif($_smarty_tpl->tpl_vars['key']->value=='input'){?>
					<?php  $_smarty_tpl->tpl_vars['input'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['input']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['input']->key => $_smarty_tpl->tpl_vars['input']->value){
$_smarty_tpl->tpl_vars['input']->_loop = true;
?>
						
<?php if (isset($_smarty_tpl->tpl_vars['input']->value['preffix_wrapper'])){?><div id="<?php echo $_smarty_tpl->tpl_vars['input']->value['preffix_wrapper'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['wrapper_hidden'])&&$_smarty_tpl->tpl_vars['input']->value['wrapper_hidden']){?> class="hidden"<?php }?>><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['input']->value['upper_separator'])&&$_smarty_tpl->tpl_vars['input']->value['upper_separator']){?><hr><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['input']->value['row_title'])){?>
<div class="col-lg-9 col-lg-offset-3 row-title"><?php echo $_smarty_tpl->tpl_vars['input']->value['row_title'];?>
</div>
<?php }?>

						<div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['input']->value['form_group_class'])){?> <?php echo $_smarty_tpl->tpl_vars['input']->value['form_group_class'];?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='hidden'){?> hide<?php }?>"<?php if ($_smarty_tpl->tpl_vars['input']->value['name']=='id_state'){?> id="contains_states"<?php if (!$_smarty_tpl->tpl_vars['contains_states']->value){?> style="display:none;"<?php }?><?php }?>>
						<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='hidden'){?>
							<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
" />
						<?php }else{ ?>
							
								<?php if (isset($_smarty_tpl->tpl_vars['input']->value['label'])){?>
									<label for="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php if (isset($_smarty_tpl->tpl_vars['input']->value['lang'])&&$_smarty_tpl->tpl_vars['input']->value['lang']){?>_<?php echo $_smarty_tpl->tpl_vars['current_id_lang']->value;?>
<?php }?><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php if (isset($_smarty_tpl->tpl_vars['input']->value['lang'])&&$_smarty_tpl->tpl_vars['input']->value['lang']){?>_<?php echo $_smarty_tpl->tpl_vars['current_id_lang']->value;?>
<?php }?><?php }?>" class="control-label col-lg-3 <?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']&&$_smarty_tpl->tpl_vars['input']->value['type']!='radio'){?>required<?php }?>">
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['hint'])){?>
										<span class="label-tooltip" data-toggle="tooltip" data-html="true"
											title="<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['hint'])){?>
													<?php  $_smarty_tpl->tpl_vars['hint'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hint']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['hint']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hint']->key => $_smarty_tpl->tpl_vars['hint']->value){
$_smarty_tpl->tpl_vars['hint']->_loop = true;
?>
														<?php if (is_array($_smarty_tpl->tpl_vars['hint']->value)){?>
															<?php echo $_smarty_tpl->tpl_vars['hint']->value['text'];?>

														<?php }else{ ?>
															<?php echo $_smarty_tpl->tpl_vars['hint']->value;?>

														<?php }?>
													<?php } ?>
												<?php }else{ ?>
													<?php echo $_smarty_tpl->tpl_vars['input']->value['hint'];?>

												<?php }?>">
										<?php }?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>

										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['hint'])){?>
										</span>
										<?php }?>
									</label>
								<?php }?>
							

							
								<div class="col-lg-<?php if (isset($_smarty_tpl->tpl_vars['input']->value['col'])){?><?php echo intval($_smarty_tpl->tpl_vars['input']->value['col']);?>
<?php }else{ ?>9<?php }?> <?php if (!isset($_smarty_tpl->tpl_vars['input']->value['label'])){?>col-lg-offset-3<?php }?>">
								

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='link_url'){?>
	  <a href="<?php echo $_smarty_tpl->tpl_vars['input']->value['url'];?>
"  data-fancybox-type="iframe" class="btn btn-default fancybox"><?php echo $_smarty_tpl->tpl_vars['input']->value['label'];?>
 <i class="icon-angle-right"></i></a>
	<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='background_image'){?>


	<script type="text/javascript"> bgToggle('<?php echo $_smarty_tpl->tpl_vars['input']->value['selector'];?>
'); </script>


	<p> <input id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" type="text" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
"> </p>
	 <a href="filemanager/dialog.php?type=1&field_id=<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="btn btn-default iframe-upload"  data-input-name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" type="button"><?php echo smartyTranslate(array('s'=>'Background image selector','mod'=>'themeeditor'),$_smarty_tpl);?>
 <i class="icon-angle-right"></i></a>
	<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='background_pattern'){?>
				 <label class="pattern pattern01" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_1">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern01" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_1"  <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern01'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern02" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_2">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern02" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_2" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern02'){?>checked="checked"<?php }?> />
				 </label>
				 
				 
				 <label class="pattern pattern03" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_3">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern03" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_3" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern03'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern04" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_4">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern04" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_4"  <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern04'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern05" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_5">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern05" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_5"  <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern05'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern06" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_6">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern06" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_6"  <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern06'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern07" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_7">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern07" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_7"   <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern07'){?>checked="checked"<?php }?>  />
				 </label>
				 
				 <label class="pattern pattern08" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_8">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern08" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_8"   <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern08'){?>checked="checked"<?php }?>  />
				 </label>
				 
				 <label class="pattern pattern09" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_9">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern09" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_9"   <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern09'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern10" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_10">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern10" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_10"  <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern10'){?>checked="checked"<?php }?>  />
				 </label>
				 				<label class="pattern pattern11" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_11">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern11" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_11"  <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern11'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern12" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_12">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern12" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_12" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern12'){?>checked="checked"<?php }?> />
				 </label>
				 
				 
				 <label class="pattern pattern13" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_13">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern13" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_13" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern13'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern14" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_14">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern14" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_14"  <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern14'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern15" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_15">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern15" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_15"  <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern15'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern16" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_16">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern16" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_16"  <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern16'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern17" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_17">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern17" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_17"   <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern17'){?>checked="checked"<?php }?>  />
				 </label>
				 
				 <label class="pattern pattern18" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_18">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern18" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_18"   <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern18'){?>checked="checked"<?php }?>  />
				 </label>
				 
				 <label class="pattern pattern19" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_19">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern19" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_19"   <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern19'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern20" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_20">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern20" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_20"  <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern20'){?>checked="checked"<?php }?>  />
				 </label>

				 				<label class="pattern pattern21" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_21">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern21" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_21"  <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern21'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern22" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_22">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern22" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_22" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern22'){?>checked="checked"<?php }?> />
				 </label>
				 
				 
				 <label class="pattern pattern23" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_23">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern23" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_23" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern23'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern24" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_24">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern24" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_24"  <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern24'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern25" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_25">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern25" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_25"  <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern25'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern26" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_26">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern26" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_26"  <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern26'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern27" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_27">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern27" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_27"   <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern27'){?>checked="checked"<?php }?>  />
				 </label>
				 
				 <label class="pattern pattern28" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_28">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern28" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_28"   <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern28'){?>checked="checked"<?php }?>  />
				 </label>
				 
				 <label class="pattern pattern29" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_29">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern29" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_29"   <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern29'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern30" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_30">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern30" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_30"  <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern30'){?>checked="checked"<?php }?>  />
				 </label>

				 				<label class="pattern pattern31" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_31">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern31" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_31"  <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern31'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern32" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_32">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern32" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_32" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern32'){?>checked="checked"<?php }?> />
				 </label>
				 
				 
				 <label class="pattern pattern33" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_33">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern33" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_33" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern33'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern34" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_34">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern34" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_34"  <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern34'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern35" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_35">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern35" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_35"  <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern35'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern36" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_36">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern36" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_36"  <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern36'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern37" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_37">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern37" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_37"   <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern37'){?>checked="checked"<?php }?>  />
				 </label>
				 
				 <label class="pattern pattern38" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_38">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern38" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_38"   <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern38'){?>checked="checked"<?php }?>  />
				 </label>
				 
				 <label class="pattern pattern39" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_39">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern39" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_39"   <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern39'){?>checked="checked"<?php }?> />
				 </label>
				 
				 <label class="pattern pattern40" for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_40">
				 <input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"   value="pattern40" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_40"  <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]=='pattern40'){?>checked="checked"<?php }?>  />
				 </label>
	 <p class="clear"><?php echo smartyTranslate(array('s'=>'Pattern are transparent, so you can use them with background color. Patterns will be apilled only with','mod'=>'themeeditor'),$_smarty_tpl);?>
</p>
	<p class="clear"><?php echo smartyTranslate(array('s'=>'Pattern credits: www.mfcreative.co.uk, freebiesbug.com, opendent.net and subtlepatterns.com','mod'=>'themeeditor'),$_smarty_tpl);?>
</p>
				 						 
	<?php }else{ ?>
		
								<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='text'||$_smarty_tpl->tpl_vars['input']->value['type']=='tags'){?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['lang'])&&$_smarty_tpl->tpl_vars['input']->value['lang']){?>
									<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
									<div class="form-group">
									<?php }?>
									<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
										<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']], null, 0);?>
										<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
										<div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value){?>style="display:none"<?php }?>>
											<div class="col-lg-9">
										<?php }?>
												<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags'){?>
													
														<script type="text/javascript">
															$().ready(function () {
																var input_id = '<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>';
																$('#'+input_id).tagify({delimiters: [13,44], addTagPrompt: '<?php echo smartyTranslate(array('s'=>'Add tag','js'=>1),$_smarty_tpl);?>
'});
																$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
																	$(this).find('#'+input_id).val($('#'+input_id).tagify('serialize'));
																});
															});
														</script>
													
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])){?>
												<div class="input-group">
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])){?>
												<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter" class="input-group-addon">
													<span class="text-count-down"><?php echo $_smarty_tpl->tpl_vars['input']->value['maxchar'];?>
</span>
												</span>
												<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])){?>
													<span class="input-group-addon">
													  <?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>

													</span>
													<?php }?>
												<input type="text"
													id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"
													name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"
													class="<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags'){?>tagify <?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"
													value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']){?><?php echo htmlspecialchars(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value), ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value_text']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
													onkeyup="if (isArrowKey(event)) return ;updateFriendlyURL();"
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])){?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])){?> data-maxchar="<?php echo $_smarty_tpl->tpl_vars['input']->value['maxchar'];?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])){?> maxlength="<?php echo $_smarty_tpl->tpl_vars['input']->value['maxlength'];?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']){?> readonly="readonly"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']){?> disabled="disabled"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']){?> autocomplete="off"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']){?> required="required" <?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']){?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?> />
													<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])){?>
													<span class="input-group-addon">
													  <?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>

													</span>
													<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])){?>
												</div>
												<?php }?>
										<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
											</div>
											<div class="col-lg-2">
												<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
													<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

													<i class="icon-caret-down"></i>
												</button>
												<ul class="dropdown-menu">
													<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
													<li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
													<?php } ?>
												</ul>
											</div>
										</div>
										<?php }?>
									<?php } ?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])){?>
									<script type="text/javascript">
									function countDown($source, $target) {
										var max = $source.attr("data-maxchar");
										$target.html(max-$source.val().length);

										$source.keyup(function(){
											$target.html(max-$source.val().length);
										});
									}

									$(document).ready(function(){
									<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
										countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter"));
									<?php } ?>
									});
									</script>
									<?php }?>
									<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
									</div>
									<?php }?>
									<?php }else{ ?>
										<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags'){?>
											
											<script type="text/javascript">
												$().ready(function () {
													var input_id = '<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>';
													$('#'+input_id).tagify({delimiters: [13,44], addTagPrompt: '<?php echo smartyTranslate(array('s'=>'Add tag'),$_smarty_tpl);?>
'});
													$('#<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form').submit( function() {
														$(this).find('#'+input_id).val($('#'+input_id).tagify('serialize'));
													});
												});
											</script>
											
										<?php }?>
										<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])){?>
										<div class="input-group">
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])){?>
										<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter" class="input-group-addon"><span class="text-count-down"><?php echo $_smarty_tpl->tpl_vars['input']->value['maxchar'];?>
</span></span>
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['prefix'])){?>
										<span class="input-group-addon">
										  <?php echo $_smarty_tpl->tpl_vars['input']->value['prefix'];?>

										</span>
										<?php }?>
										<input type="text"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']){?><?php echo htmlspecialchars(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value), ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value_text']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
											class="<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags'){?>tagify <?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])){?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])){?> data-maxchar="<?php echo $_smarty_tpl->tpl_vars['input']->value['maxchar'];?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])){?> maxlength="<?php echo $_smarty_tpl->tpl_vars['input']->value['maxlength'];?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']){?> readonly="readonly"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']){?> disabled="disabled"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']){?> autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']){?> required="required" <?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']){?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
											/>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])){?>
										<span class="input-group-addon">
										  <?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>

										</span>
										<?php }?>
										
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])||isset($_smarty_tpl->tpl_vars['input']->value['prefix'])||isset($_smarty_tpl->tpl_vars['input']->value['suffix'])){?>
										</div>
										<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])){?>
										<script type="text/javascript">
										function countDown($source, $target) {
											var max = $source.attr("data-maxchar");
											$target.html(max-$source.val().length);

											$source.keyup(function(){
												$target.html(max-$source.val().length);
											});
										}
										$(document).ready(function(){
											countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter"));
										});
										</script>
										<?php }?>
									<?php }?>
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='textbutton'){?>
									<?php $_smarty_tpl->tpl_vars['value_text'] = new Smarty_variable($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], null, 0);?>
									<div class="row">
										<div class="col-lg-9">
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])){?>
										<div class="input-group">
											<span id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter" class="input-group-addon">
												<span class="text-count-down"><?php echo $_smarty_tpl->tpl_vars['input']->value['maxchar'];?>
</span>
											</span>
										<?php }?>
										<input type="text"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											value="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['string_format'])&&$_smarty_tpl->tpl_vars['input']->value['string_format']){?><?php echo htmlspecialchars(sprintf($_smarty_tpl->tpl_vars['input']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value), ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value_text']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
											class="<?php if ($_smarty_tpl->tpl_vars['input']->value['type']=='tags'){?>tagify <?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])){?> size="<?php echo $_smarty_tpl->tpl_vars['input']->value['size'];?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])){?> data-maxchar="<?php echo $_smarty_tpl->tpl_vars['input']->value['maxchar'];?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxlength'])){?> maxlength="<?php echo $_smarty_tpl->tpl_vars['input']->value['maxlength'];?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?> class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['readonly'])&&$_smarty_tpl->tpl_vars['input']->value['readonly']){?> readonly="readonly"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']){?> disabled="disabled"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']){?> autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['placeholder'])&&$_smarty_tpl->tpl_vars['input']->value['placeholder']){?> placeholder="<?php echo $_smarty_tpl->tpl_vars['input']->value['placeholder'];?>
"<?php }?>
											/>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['suffix'];?>
<?php }?>
										<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])){?>
										</div>
										<?php }?>
										</div>
										<div class="col-lg-2">
											<button type="button" class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['input']->value['button']['attributes']['class'])){?> <?php echo $_smarty_tpl->tpl_vars['input']->value['button']['attributes']['class'];?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['button']['class'])){?> <?php echo $_smarty_tpl->tpl_vars['input']->value['button']['class'];?>
<?php }?>"
												<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['input']->value['button']['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
													<?php if (mb_strtolower($_smarty_tpl->tpl_vars['name']->value, 'UTF-8')!='class'){?>
													 <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"
													<?php }?>
												<?php } ?> >
												<?php echo $_smarty_tpl->tpl_vars['input']->value['button']['label'];?>

											</button>
										</div>
									</div>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['maxchar'])){?>
									<script type="text/javascript">
										function countDown($source, $target) {
											var max = $source.attr("data-maxchar");
											$target.html(max-$source.val().length);
											$source.keyup(function(){
												$target.html(max-$source.val().length);
											});
										}
										$(document).ready(function() {
											countDown($("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"), $("#<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>_counter"));
										});
									</script>
									<?php }?>
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='select'){?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['query'])&&!$_smarty_tpl->tpl_vars['input']->value['options']['query']&&isset($_smarty_tpl->tpl_vars['input']->value['empty_message'])){?>
										<?php echo $_smarty_tpl->tpl_vars['input']->value['empty_message'];?>

										<?php $_smarty_tpl->createLocalArrayVariable('input', null, 0);
$_smarty_tpl->tpl_vars['input']->value['required'] = false;?>
										<?php $_smarty_tpl->createLocalArrayVariable('input', null, 0);
$_smarty_tpl->tpl_vars['input']->value['desc'] = null;?>
									<?php }else{ ?>
										<select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'utf-8', true);?>
"
												class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['class'], ENT_QUOTES, 'utf-8', true);?>
<?php }?> fixed-width-xl"
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['id'], ENT_QUOTES, 'utf-8', true);?>
<?php }else{ ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['name'], ENT_QUOTES, 'utf-8', true);?>
<?php }?>"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])){?>multiple="multiple" <?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['size'])){?>size="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['size'], ENT_QUOTES, 'utf-8', true);?>
"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['onchange'])){?>onchange="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['onchange'], ENT_QUOTES, 'utf-8', true);?>
"<?php }?>>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['default'])){?>
												<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['options']['default']['value'], ENT_QUOTES, 'utf-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input']->value['options']['default']['label'], ENT_QUOTES, 'utf-8', true);?>
</option>
											<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['optiongroup'])){?>
												<?php  $_smarty_tpl->tpl_vars['optiongroup'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['optiongroup']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['optiongroup']->key => $_smarty_tpl->tpl_vars['optiongroup']->value){
$_smarty_tpl->tpl_vars['optiongroup']->_loop = true;
?>
													<optgroup label="<?php echo $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['optiongroup']['label']];?>
">
														<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['query']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']];?>
"
																<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])){?>
																	<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value){
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																		<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]){?>selected="selected"<?php }?>
																	<?php } ?>
																<?php }else{ ?>
																	<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['id']]){?>selected="selected"<?php }?>
																<?php }?>
															><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['options']['name']];?>
</option>
														<?php } ?>
													</optgroup>
												<?php } ?>
											<?php }else{ ?>
												<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
													<?php if (is_object($_smarty_tpl->tpl_vars['option']->value)){?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']};?>
"
															<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])){?>
																<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value){
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																	<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}){?>
																		selected="selected"
																	<?php }?>
																<?php } ?>
															<?php }else{ ?>
																<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['id']}){?>
																	selected="selected"
																<?php }?>
															<?php }?>
														><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['input']->value['options']['name']};?>
</option>
													<?php }elseif($_smarty_tpl->tpl_vars['option']->value=="-"){?>
														<option value="">-</option>
													<?php }else{ ?>
														<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']];?>
"
															<?php if (isset($_smarty_tpl->tpl_vars['input']->value['multiple'])){?>
																<?php  $_smarty_tpl->tpl_vars['field_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['field_value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->key => $_smarty_tpl->tpl_vars['field_value']->value){
$_smarty_tpl->tpl_vars['field_value']->_loop = true;
?>
																	<?php if ($_smarty_tpl->tpl_vars['field_value']->value==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]){?>
																		selected="selected"
																	<?php }?>
																<?php } ?>
															<?php }else{ ?>
																<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['id']]){?>
																	selected="selected"
																<?php }?>
															<?php }?>
														><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['input']->value['options']['name']];?>
</option>

													<?php }?>
												<?php } ?>
											<?php }?>
										</select>
									<?php }?>
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='radio'){?>
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<div class="radio <?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>">
											<label>
											<input type="radio"	name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['value'], ENT_QUOTES, 'UTF-8', true);?>
"
												<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['value']->value['value']){?>checked="checked"<?php }?>
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']){?>disabled="disabled"<?php }?> />
												<?php echo $_smarty_tpl->tpl_vars['value']->value['label'];?>

											</label>
										</div>
										<?php if (isset($_smarty_tpl->tpl_vars['value']->value['p'])&&$_smarty_tpl->tpl_vars['value']->value['p']){?><p class="help-block"><?php echo $_smarty_tpl->tpl_vars['value']->value['p'];?>
</p><?php }?>
									<?php } ?>
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='switch'){?>
									<span class="switch prestashop-switch fixed-width-lg">
										<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<input
											type="radio"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											<?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1){?>
												id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"
											<?php }else{ ?>
												id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"
											<?php }?>
											value="<?php echo $_smarty_tpl->tpl_vars['value']->value['value'];?>
"
											<?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]==$_smarty_tpl->tpl_vars['value']->value['value']){?>checked="checked"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['disabled'])&&$_smarty_tpl->tpl_vars['input']->value['disabled']){?>disabled="disabled"<?php }?>
										/>
										<label
											<?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1){?>
												for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_on"
											<?php }else{ ?>
												for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_off"
											<?php }?>
										>
											<?php if ($_smarty_tpl->tpl_vars['value']->value['value']==1){?>
												<?php echo smartyTranslate(array('s'=>'Yes'),$_smarty_tpl);?>

											<?php }else{ ?>
												<?php echo smartyTranslate(array('s'=>'No'),$_smarty_tpl);?>

											<?php }?>
										</label>
										<?php } ?>
										<a class="slide-button btn"></a>
									</span>
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='textarea'){?>
									<?php $_smarty_tpl->tpl_vars['use_textarea_autosize'] = new Smarty_variable(true, null, 0);?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['lang'])&&$_smarty_tpl->tpl_vars['input']->value['lang']){?>
									<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
									<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
									<div class="form-group translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"  <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang']!=$_smarty_tpl->tpl_vars['defaultFormLanguage']->value){?>style="display:none;"<?php }?>>

										<div class="col-lg-9">
									<?php }?>
											<textarea name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])&&$_smarty_tpl->tpl_vars['input']->value['autoload_rte']){?>rte autoload_rte <?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?><?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }else{ ?>textarea-autosize<?php }?><?php }?>" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['language']->value['id_lang']], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
									<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1){?>	
										</div>
										<div class="col-lg-2">
											<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
												<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

												<span class="caret"></span>
											</button>
											<ul class="dropdown-menu">
												<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
												<li>
													<a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
												</li>
												<?php } ?>
											</ul>
										</div>
									</div>
									<?php }?>
									<?php } ?>

									<?php }else{ ?>
										<textarea name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['input']->value['cols'])){?>cols="<?php echo $_smarty_tpl->tpl_vars['input']->value['cols'];?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['input']->value['rows'])){?>rows="<?php echo $_smarty_tpl->tpl_vars['input']->value['rows'];?>
"<?php }?> class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autoload_rte'])&&$_smarty_tpl->tpl_vars['input']->value['autoload_rte']){?>rte autoload_rte <?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?><?php }else{ ?>textarea-autosize<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
									<?php }?>

								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='checkbox'){?>
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand'])){?>
										<a class="btn btn-default show_checkbox<?php if ($_smarty_tpl->tpl_vars['input']->value['expand']['default']=='hide'){?> hidden <?php }?>" href="#">
											<i class="icon-<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['show']['icon'];?>
"></i>
											<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['show']['text'];?>

											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand']['print_total'])&&$_smarty_tpl->tpl_vars['input']->value['expand']['print_total']>0){?>
												<span class="badge"><?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'];?>
</span>
											<?php }?>
										</a>
										<a class="btn btn-default hide_checkbox<?php if ($_smarty_tpl->tpl_vars['input']->value['expand']['default']=='show'){?> hidden <?php }?>" href="#">
											<i class="icon-<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['hide']['icon'];?>
"></i>
											<?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['hide']['text'];?>

											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand']['print_total'])&&$_smarty_tpl->tpl_vars['input']->value['expand']['print_total']>0){?>
												<span class="badge"><?php echo $_smarty_tpl->tpl_vars['input']->value['expand']['print_total'];?>
</span>
											<?php }?>
										</a>
									<?php }?>
									<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['values']['query']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
										<?php $_smarty_tpl->tpl_vars['id_checkbox'] = new Smarty_variable((($_smarty_tpl->tpl_vars['input']->value['name']).('_')).($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['id']]), null, 0);?>
										<div class="checkbox<?php if (isset($_smarty_tpl->tpl_vars['input']->value['expand'])&&$_smarty_tpl->tpl_vars['input']->value['expand']['default']=='show'){?> hidden <?php }?>">
											<label for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
">
												<input type="checkbox"
													name="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"
													id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"
													class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"
													<?php if (isset($_smarty_tpl->tpl_vars['value']->value['val'])){?>value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value['val'], ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>
													<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value])&&$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]){?>checked="checked"<?php }?> />
												<?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['name']];?>

											</label>
										</div>
									<?php } ?>
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='change-password'){?>
									<div class="row">
										<div class="col-lg-12">
											<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-btn-change" class="btn btn-default">
												<i class="icon-lock"></i>
												<?php echo smartyTranslate(array('s'=>'Change password...'),$_smarty_tpl);?>

											</button>
											<div id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-change-container" class="form-password-change well hide">
												<div class="form-group">
													<label for="old_passwd" class="control-label col-lg-2 required">
														<?php echo smartyTranslate(array('s'=>'Current password'),$_smarty_tpl);?>

													</label>
													<div class="col-lg-10">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-unlock"></i>
															</span>
															<input type="password" id="old_passwd" name="old_passwd" class="form-control" value="" required="required">
														</div>
													</div>
												</div>
												<hr>
												<div class="form-group">
													<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="required control-label col-lg-2">
														<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="Minimum of 8 characters.">						
															<?php echo smartyTranslate(array('s'=>'New password'),$_smarty_tpl);?>

														</span>
													</label>
													<div class="col-lg-9">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-key"></i>
															</span>
															<input type="password"
																id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
																name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
																class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"
																value=""
																required="required"/>
														</div>
														<span id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-output"></span>
													</div>
												</div>
												<div class="form-group">
													<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2" class="required control-label col-lg-2">
														<?php echo smartyTranslate(array('s'=>'Confirm password'),$_smarty_tpl);?>

													</label>
													<div class="col-lg-4">
														<div class="input-group fixed-width-lg">
															<span class="input-group-addon">
																<i class="icon-key"></i>
															</span>
															<input type="password"
																id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2"
																name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2"
																class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"
																value=""/>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="col-lg-10 col-lg-offset-2">
														<input type="text" class="form-control fixed-width-md pull-left" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-field" disabled="disabled">
														<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-btn" class="btn btn-default">
															<i class="icon-random"></i>
															<?php echo smartyTranslate(array('s'=>'Generate password'),$_smarty_tpl);?>

														</button>
													</div>
												</div>
												<div class="form-group">
													<div class="col-lg-10 col-lg-offset-2">
														<p class="checkbox">
															<label for="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-checkbox-mail">
																<input name="passwd_send_email" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-checkbox-mail" type="checkbox" checked="checked">
																<?php echo smartyTranslate(array('s'=>'Send me this new password by Email'),$_smarty_tpl);?>

															</label>
														</p>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-12">
														<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-cancel-btn" class="btn btn-default">
															<i class="icon-remove"></i>
															<?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>

														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<script>
										$(function(){
											var $oldPwd = $('#old_passwd');
											var $passwordField = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
');
											var $output = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-output');
											var $generateBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-btn');
											var $generateField = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-generate-field');
											var $cancelBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-cancel-btn');
											
											var feedback = [
												{ badge: 'text-danger', text: '<?php echo smartyTranslate(array('s'=>"Invalid",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-warning', text: '<?php echo smartyTranslate(array('s'=>"Okay",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-success', text: '<?php echo smartyTranslate(array('s'=>"Good",'js'=>1),$_smarty_tpl);?>
' },
												{ badge: 'text-success', text: '<?php echo smartyTranslate(array('s'=>"Fabulous",'js'=>1),$_smarty_tpl);?>
' }
											];
											$.passy.requirements.length.min = 8;
											$.passy.requirements.characters = 'DIGIT';
											$passwordField.passy(function(strength, valid) {
												$output.text(feedback[strength].text);
												$output.removeClass('text-danger').removeClass('text-warning').removeClass('text-success');
												$output.addClass(feedback[strength].badge);
												if (valid){
													$output.show();
												}
												else {
													$output.hide();
												}
											});
											var $container = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-change-container');
											var $changeBtn = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-btn-change');
											var $confirmPwd = $('#<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2');

											$changeBtn.on('click',function(){
												$container.removeClass('hide');
												$changeBtn.addClass('hide');
											});
											$generateBtn.click(function() {
												$generateField.passy( 'generate', 8 );
												var generatedPassword = $generateField.val();
												$passwordField.val(generatedPassword);
												$confirmPwd.val(generatedPassword);
											});
											$cancelBtn.on('click',function() {
												$container.find("input").val("");
												$container.addClass('hide');
												$changeBtn.removeClass('hide');
											});

											$.validator.addMethod('password_same', function(value, element) {
												return $passwordField.val() == $confirmPwd.val();
											}, '<?php echo smartyTranslate(array('s'=>"Invalid password confirmation",'js'=>1),$_smarty_tpl);?>
');

											$('#employee_form').validate({
												rules: {
													"email": {
														email: true
													},
													"<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" : {
														minlength: 8
													},
													"<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
2": {
														password_same: true
													},
													"old_passwd" : {},
												},
												// override jquery validate plugin defaults for bootstrap 3
												highlight: function(element) {
													$(element).closest('.form-group').addClass('has-error');
												},
												unhighlight: function(element) {
													$(element).closest('.form-group').removeClass('has-error');
												},
												errorElement: 'span',
												errorClass: 'help-block',
												errorPlacement: function(error, element) {
													if(element.parent('.input-group').length) {
														error.insertAfter(element.parent());
													} else {
														error.insertAfter(element);
													}
												}
											});
										});
									</script>
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='password'){?>
									<div class="input-group fixed-width-lg">
										<span class="input-group-addon">
											<i class="icon-key"></i>
										</span>
										<input type="password"
											id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
											name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
											class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>"
											value=""
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['autocomplete'])&&!$_smarty_tpl->tpl_vars['input']->value['autocomplete']){?>autocomplete="off"<?php }?>
											<?php if (isset($_smarty_tpl->tpl_vars['input']->value['required'])&&$_smarty_tpl->tpl_vars['input']->value['required']){?> required="required" <?php }?> />
									</div>

								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='birthday'){?>
								<div class="form-group">
									<?php  $_smarty_tpl->tpl_vars['select'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['select']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['input']->value['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['select']->key => $_smarty_tpl->tpl_vars['select']->value){
$_smarty_tpl->tpl_vars['select']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['select']->key;
?>
									<div class="col-lg-2">
										<select name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
<?php }?>" class="fixed-width-lg">
											<option value="">-</option>
											<?php if ($_smarty_tpl->tpl_vars['key']->value=='months'){?>
												
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['key']->value]){?>selected="selected"<?php }?>><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['v']->value),$_smarty_tpl);?>
</option>
												<?php } ?>
											<?php }else{ ?>
												<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['select']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
													<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value==$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['key']->value]){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
												<?php } ?>
											<?php }?>
										</select>
									</div>
									<?php } ?>
								</div>
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='group'){?>
									<?php $_smarty_tpl->tpl_vars['groups'] = new Smarty_variable($_smarty_tpl->tpl_vars['input']->value['values'], null, 0);?>
									<?php /*  Call merged included template "helpers/form/form_group.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('helpers/form/form_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '41369439543bc618af8c56-31831513');
content_543bc619109b88_19153222($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "helpers/form/form_group.tpl" */?>
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='shop'){?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['html'];?>

								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='categories'){?>
									<?php echo $_smarty_tpl->tpl_vars['categories_tree']->value;?>

								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='file'){?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['file'];?>

								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='categories_select'){?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['category_tree'];?>

								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='asso_shop'&&isset($_smarty_tpl->tpl_vars['asso_shop']->value)&&$_smarty_tpl->tpl_vars['asso_shop']->value){?>
									<?php echo $_smarty_tpl->tpl_vars['asso_shop']->value;?>

								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='color'){?>
								<div class="form-group">
									<div class="col-lg-2">
										<div class="row">
											<div class="input-group">
												<input type="color"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?>class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php }else{ ?>class="color mColorPickerInput"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
" />
											</div>
										</div>
									</div>
								</div>
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='date'){?>
									<div class="row">
										<div class="input-group col-lg-4">
											<input
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
												type="text"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?>class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php }else{ ?>class="datepicker"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
" />
											<span class="input-group-addon">
												<i class="icon-calendar-empty"></i>
											</span>
										</div>
									</div>
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='datetime'){?>
									<div class="row">
										<div class="input-group col-lg-4">
											<input
												id="<?php if (isset($_smarty_tpl->tpl_vars['input']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
<?php }?>"
												type="text"
												data-hex="true"
												<?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])){?>class="<?php echo $_smarty_tpl->tpl_vars['input']->value['class'];?>
"
												<?php }else{ ?>class="datetimepicker"<?php }?>
												name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
												value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], ENT_QUOTES, 'UTF-8', true);?>
" />
											<span class="input-group-addon">
												<i class="icon-calendar-empty"></i>
											</span>
										</div>
									</div>
								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='free'){?>
									<?php echo $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']];?>

								<?php }elseif($_smarty_tpl->tpl_vars['input']->value['type']=='html'){?>
									<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>

								<?php }?>
								
    <?php }?>

								
									<?php if (isset($_smarty_tpl->tpl_vars['input']->value['desc'])&&!empty($_smarty_tpl->tpl_vars['input']->value['desc'])){?>
										<p class="help-block">
											<?php if (is_array($_smarty_tpl->tpl_vars['input']->value['desc'])){?>
												<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['input']->value['desc']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
													<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)){?>
														<span id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
													<?php }else{ ?>
														<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
<br />
													<?php }?>
												<?php } ?>
											<?php }else{ ?>
												<?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>

											<?php }?>
										</p>
									<?php }?>
								
								</div>
							
						<?php }?>
						</div>
						
<?php if (isset($_smarty_tpl->tpl_vars['input']->value['separator'])&&$_smarty_tpl->tpl_vars['input']->value['separator']){?><hr><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['input']->value['suffix_wrapper'])&&$_smarty_tpl->tpl_vars['input']->value['suffix_wrapper']){?></div><?php }?>

					<?php } ?>
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminForm','fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)){?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
Form<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value,'fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php }elseif(isset($_GET['controller'])){?>
						<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
Form<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value,'fieldset'=>$_smarty_tpl->tpl_vars['f']->value),$_smarty_tpl);?>

					<?php }?>
				<?php }elseif($_smarty_tpl->tpl_vars['key']->value=='desc'){?>
					<div class="alert alert-info col-lg-offset-3">
						<?php if (is_array($_smarty_tpl->tpl_vars['field']->value)){?>
							<?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['field']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['p']->key;
?>
								<?php if (is_array($_smarty_tpl->tpl_vars['p']->value)){?>
									<span<?php if (isset($_smarty_tpl->tpl_vars['p']->value['id'])){?> id="<?php echo $_smarty_tpl->tpl_vars['p']->value['id'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['p']->value['text'];?>
</span><br />
								<?php }else{ ?>
									<?php echo $_smarty_tpl->tpl_vars['p']->value;?>

									<?php if (isset($_smarty_tpl->tpl_vars['field']->value[$_smarty_tpl->tpl_vars['k']->value+1])){?><br /><?php }?>
								<?php }?>
							<?php } ?>
						<?php }else{ ?>
							<?php echo $_smarty_tpl->tpl_vars['field']->value;?>

						<?php }?>
					</div>
				<?php }?>
				
			<?php } ?>
			
				<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])||isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons'])){?>
					<div class="panel-footer">
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])&&!empty($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit'])){?>
						<button
							type="submit"
							value="1"
							id="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'])){?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['id'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_submit_btn<?php }?>"
							name="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'])){?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['name'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['submit_action']->value;?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay'])&&$_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['stay']){?>AndStay<?php }?>"
							class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'])){?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['class'];?>
<?php }else{ ?>btn btn-default pull-right<?php }?>"
							>
							<i class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'])){?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['icon'];?>
<?php }else{ ?>process-icon-save<?php }?>"></i> <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['submit']['title'];?>

						</button>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['show_cancel_button']->value)&&$_smarty_tpl->tpl_vars['show_cancel_button']->value){?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['back_url']->value;?>
" class="btn btn-default" onclick="window.history.back()">
							<i class="process-icon-cancel"></i> <?php echo smartyTranslate(array('s'=>'Cancel'),$_smarty_tpl);?>

						</a>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset'])){?>
						<button
							type="reset"
							id="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['id'])){?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['id'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['table']->value;?>
_form_reset_btn<?php }?>"
							class="<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['class'])){?><?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['class'];?>
<?php }else{ ?>btn btn-default<?php }?>"
							>
							<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['icon'])){?><i class="<?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['icon'];?>
"></i> <?php }?> <?php echo $_smarty_tpl->tpl_vars['fieldset']->value['form']['reset']['title'];?>

						</button>
						<?php }?>
						<?php if (isset($_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons'])){?>
						<?php  $_smarty_tpl->tpl_vars['btn'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['btn']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['fieldset']->value['form']['buttons']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['btn']->key => $_smarty_tpl->tpl_vars['btn']->value){
$_smarty_tpl->tpl_vars['btn']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['btn']->key;
?>
							<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['href'])&&trim($_smarty_tpl->tpl_vars['btn']->value['href'])!=''){?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['btn']->value['href'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['id'])){?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?> class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['class'])){?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js'])&&$_smarty_tpl->tpl_vars['btn']->value['js']){?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['icon'])){?><i class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
" ></i> <?php }?><?php echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</a>
							<?php }else{ ?>
								<button type="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['type'])){?><?php echo $_smarty_tpl->tpl_vars['btn']->value['type'];?>
<?php }else{ ?>button<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['btn']->value['id'])){?>id="<?php echo $_smarty_tpl->tpl_vars['btn']->value['id'];?>
"<?php }?> class="btn btn-default<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['class'])){?> <?php echo $_smarty_tpl->tpl_vars['btn']->value['class'];?>
<?php }?>" name="<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['name'])){?><?php echo $_smarty_tpl->tpl_vars['btn']->value['name'];?>
<?php }else{ ?>submitOptions<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['btn']->value['js'])&&$_smarty_tpl->tpl_vars['btn']->value['js']){?> onclick="<?php echo $_smarty_tpl->tpl_vars['btn']->value['js'];?>
"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['btn']->value['icon'])){?><i class="<?php echo $_smarty_tpl->tpl_vars['btn']->value['icon'];?>
" ></i> <?php }?><?php echo $_smarty_tpl->tpl_vars['btn']->value['title'];?>
</button>
							<?php }?>
						<?php } ?>
						<?php }?>
					</div>
				<?php }?>
			
		</div>
		
<?php if ($_smarty_tpl->tpl_vars['fieldset']->value['form']['tab_name']!='save_tab'){?></div><?php }?>

		
	<?php } ?>
</form>

</div>
</div>




<div class="bootstrap panel">
	<h3><i class="icon-cogs"></i> <?php echo smartyTranslate(array('s'=>'Latest news from iqit-commerce.com','mod'=>'themeeditor'),$_smarty_tpl);?>
 </h3>
<iframe width="100%" height="250px" src="http://iqit-commerce.com/iframe/iframe.html" style="border: none; overflow: hidden;"></iframe>
			</div>


<?php if (isset($_smarty_tpl->tpl_vars['tinymce']->value)&&$_smarty_tpl->tpl_vars['tinymce']->value){?>
<script type="text/javascript">
	var iso = '<?php echo addslashes($_smarty_tpl->tpl_vars['iso']->value);?>
';
	var pathCSS = '<?php echo addslashes(@constant('_THEME_CSS_DIR_'));?>
';
	var ad = '<?php echo addslashes($_smarty_tpl->tpl_vars['ad']->value);?>
';

	$(document).ready(function(){
		
			tinySetup({
				editor_selector :"autoload_rte"
			});
		
	});
</script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['firstCall']->value){?>
	<script type="text/javascript">
		var module_dir = '<?php echo @constant('_MODULE_DIR_');?>
';
		var id_language = <?php echo $_smarty_tpl->tpl_vars['defaultFormLanguage']->value;?>
;
		var languages = new Array();
		var vat_number = <?php if ($_smarty_tpl->tpl_vars['vat_number']->value){?>1<?php }else{ ?>0<?php }?>;
		// Multilang field setup must happen before document is ready so that calls to displayFlags() to avoid
		// precedence conflicts with other document.ready() blocks
		<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
			languages[<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
] = {
				id_lang: <?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
,
				iso_code: '<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>
',
				name: '<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
',
				is_default: '<?php echo $_smarty_tpl->tpl_vars['language']->value['is_default'];?>
'
			};
		<?php } ?>
		// we need allowEmployeeFormLang var in ajax request
		allowEmployeeFormLang = <?php echo intval($_smarty_tpl->tpl_vars['allowEmployeeFormLang']->value);?>
;
		displayFlags(languages, id_language, allowEmployeeFormLang);

		$(document).ready(function() {

			$(".show_checkbox").click(function () {
				$(this).addClass('hidden')
				$(this).siblings('.checkbox').removeClass('hidden');
				$(this).siblings('.hide_checkbox').removeClass('hidden');
				return false;
			});
			$(".hide_checkbox").click(function () {
				$(this).addClass('hidden')
				$(this).siblings('.checkbox').addClass('hidden');
				$(this).siblings('.show_checkbox').removeClass('hidden');
				return false;
			});

			<?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value['id_state'])){?>
				if ($('#id_country') && $('#id_state'))
				{
					ajaxStates(<?php echo $_smarty_tpl->tpl_vars['fields_value']->value['id_state'];?>
);
					$('#id_country').change(function() {
						ajaxStates();
					});
				}
			<?php }?>

			if ($(".datepicker").length > 0)
				$(".datepicker").datepicker({
					prevText: '',
					nextText: '',
					dateFormat: 'yy-mm-dd'
				});

			if ($(".datetimepicker").length > 0)
			$('.datetimepicker').datetimepicker({
				prevText: '',
				nextText: '',
				dateFormat: 'yy-mm-dd',
				// Define a custom regional settings in order to use PrestaShop translation tools
				currentText: '<?php echo smartyTranslate(array('s'=>'Now'),$_smarty_tpl);?>
',
				closeText: '<?php echo smartyTranslate(array('s'=>'Done'),$_smarty_tpl);?>
',
				ampm: false,
				amNames: ['AM', 'A'],
				pmNames: ['PM', 'P'],
				timeFormat: 'hh:mm:ss tt',
				timeSuffix: '',
				timeOnlyTitle: '<?php echo smartyTranslate(array('s'=>'Choose Time'),$_smarty_tpl);?>
',
				timeText: '<?php echo smartyTranslate(array('s'=>'Time'),$_smarty_tpl);?>
',
				hourText: '<?php echo smartyTranslate(array('s'=>'Hour'),$_smarty_tpl);?>
',
				minuteText: '<?php echo smartyTranslate(array('s'=>'Minute'),$_smarty_tpl);?>
',
			});
			<?php if (isset($_smarty_tpl->tpl_vars['use_textarea_autosize']->value)){?>
			$(".textarea-autosize").autosize();
			<?php }?>
		});
	state_token = '<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['getAdminToken'][0][0]->getAdminTokenLiteSmarty(array('tab'=>'AdminStates'),$_smarty_tpl);?>
';
	


$(document).ready(function() {
		$(".fancybox").fancybox();

		 $('.iframe-upload').fancybox({	
			'width'		: 900,
			'height'	: 600,
			'type'		: 'iframe',
      		'autoScale' : false,
      		'autoDimensions': false,
      		 'fitToView' : false,
  			 'autoSize' : false,
  			 onUpdate : function(){ $('.fancybox-iframe').contents().find('a.link').data('field_id', $(this.element).data("input-name"));
			 	 $('.fancybox-iframe').contents().find('a.link').attr('data-field_id', $(this.element).data("input-name"));},
  			 afterShow: function(){
			 	 $('.fancybox-iframe').contents().find('a.link').data('field_id', $(this.element).data("input-name"));
			 	 $('.fancybox-iframe').contents().find('a.link').attr('data-field_id', $(this.element).data("input-name"));
			}
  		  });


		$('#options_tab a').click(function (e) {
		e.preventDefault()
		$(this).tab('show')
	});

var control = $("#font_headings_type");
		
if (control.val() == 1) 
{
$("#heading_google_wrapper").removeClass('hidden');
$("#heading_default_wrapper").addClass('hidden');
}

if (control.val() == 0) {
$("#heading_google_wrapper").addClass('hidden');
$("#heading_default_wrapper").removeClass('hidden');
}




$("#font_headings_type").change(function() {
	var control = $(this);
		
if (control.val() == 1) 
{
$("#heading_google_wrapper").removeClass('hidden');
$("#heading_default_wrapper").addClass('hidden');
}

if (control.val() == 0) {
$("#heading_google_wrapper").addClass('hidden');
$("#heading_default_wrapper").removeClass('hidden');
}

});


var control = $("#font_txt_type");
		
if (control.val() == 1) 
{
$("#txt_google_wrapper").removeClass('hidden');
$("#txt_default_wrapper").addClass('hidden');
}

if (control.val() == 0) {
$("#txt_google_wrapper").addClass('hidden');
$("#txt_default_wrapper").removeClass('hidden');
}

$("#font_txt_type").change(function() {
	var control = $(this);

if (control.val() == 2) 
{
$("#txt_google_wrapper").addClass('hidden');
$("#txt_default_wrapper").addClass('hidden');
}
		
if (control.val() == 1) 
{
$("#txt_google_wrapper").removeClass('hidden');
$("#txt_default_wrapper").addClass('hidden');
}

if (control.val() == 0) {
$("#txt_google_wrapper").addClass('hidden');
$("#txt_default_wrapper").removeClass('hidden');
}

});

});


	</script>
<?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2014-10-13 14:31:21
         compiled from "/home2/topgourm/public_html/adminwe/themes/default/template/helpers/form/form_group.tpl" */ ?>
<?php if ($_valid && !is_callable('content_543bc619109b88_19153222')) {function content_543bc619109b88_19153222($_smarty_tpl) {?>

<?php if (count($_smarty_tpl->tpl_vars['groups']->value)&&isset($_smarty_tpl->tpl_vars['groups']->value)){?>
<div class="row">
	<div class="col-lg-6">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th class="fixed-width-xs">
						<span class="title_box">
							<input type="checkbox" name="checkme" id="checkme" onclick="checkDelBoxes(this.form, 'groupBox[]', this.checked)" />
						</span>
					</th>
					<th class="fixed-width-xs"><span class="title_box"><?php echo smartyTranslate(array('s'=>'ID'),$_smarty_tpl);?>
</span></th>
					<th>
						<span class="title_box">
							<?php echo smartyTranslate(array('s'=>'Group name'),$_smarty_tpl);?>

						</span>
					</th>
				</tr>
			</thead>
			<tbody>
			<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
				<tr>
					<td>
						<?php $_smarty_tpl->tpl_vars['id_checkbox'] = new Smarty_variable((('groupBox').('_')).($_smarty_tpl->tpl_vars['group']->value['id_group']), null, 0);?>
						<input type="checkbox" name="groupBox[]" class="groupBox" id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['id_group'];?>
" <?php if ($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]){?>checked="checked"<?php }?> />
					</td>
					<td><?php echo $_smarty_tpl->tpl_vars['group']->value['id_group'];?>
</td>
					<td>
						<label for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</label>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<?php }else{ ?>
<p>
	<?php echo smartyTranslate(array('s'=>'No group created'),$_smarty_tpl);?>

</p>
<?php }?><?php }} ?>