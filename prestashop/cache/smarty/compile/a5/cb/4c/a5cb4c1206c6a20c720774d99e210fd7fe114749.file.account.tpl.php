<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:28:52
         compiled from "/home2/topgourm/public_html/modules/seur/views/templates/admin/account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1097523678543d08f485b2a7-29326572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5cb4c1206c6a20c720774d99e210fd7fe114749' => 
    array (
      0 => '/home2/topgourm/public_html/modules/seur/views/templates/admin/account.tpl',
      1 => 1412074357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1097523678543d08f485b2a7-29326572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img_path' => 0,
    'street_types' => 0,
    'abbreviation' => 0,
    'street_type' => 0,
    'token' => 0,
    'employee' => 0,
    'seur_countries' => 0,
    'seur_country' => 0,
    'merchant_data' => 0,
    'user_seurcom' => 0,
    'pass_seurcom' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d08f4943b64_53340614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d08f4943b64_53340614')) {function content_543d08f4943b64_53340614($_smarty_tpl) {?>
<div id="new_customer">
	<div class="mostrarNoUsuario">
	   <p class="contactplease"> <?php echo smartyTranslate(array('s'=>'Please contact','mod'=>'seur'),$_smarty_tpl);?>
 </p>
		<p> <?php echo smartyTranslate(array('s'=>'902 10 10 10','mod'=>'seur'),$_smarty_tpl);?>
</p>
		<p> <?php echo smartyTranslate(array('s'=>'www.seur.com','mod'=>'seur'),$_smarty_tpl);?>
</p>
		<p class="gracias"> <?php echo smartyTranslate(array('s'=>'Thank you','mod'=>'seur'),$_smarty_tpl);?>
</p>
	</div>
	
	<form action="<?php echo mb_convert_encoding(htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" method="post" name="merchant_form" class="ocultar">
		<fieldset>
			<legend id="legentNuevaAlta">
			  <img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['img_path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
new-user.png" alt="<?php echo smartyTranslate(array('s'=>'New user','mod'=>'seur'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'New user','mod'=>'seur'),$_smarty_tpl);?>
" /><?php echo smartyTranslate(array('s'=>'New user','mod'=>'seur'),$_smarty_tpl);?>

			</legend>
			
			<legend id="legendLogin">
				<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['img_path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
login-on.png" alt="<?php echo smartyTranslate(array('s'=>'Login','mod'=>'seur'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'Login','mod'=>'seur'),$_smarty_tpl);?>
" /><?php echo smartyTranslate(array('s'=>'Login','mod'=>'seur'),$_smarty_tpl);?>

			</legend>
			
			<p class="check_required"><sup>*</sup> <?php echo smartyTranslate(array('s'=>'Required fields','mod'=>'seur'),$_smarty_tpl);?>
</p>
			
			<dl>
				<dt><label><?php echo smartyTranslate(array('s'=>'NIF / CIF','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd class="required">
					<input type="text" name="nif_dni" />
					<sup name="nif_dni">*</sup>
					<span class="field-help"><?php echo smartyTranslate(array('s'=>'Enter the NIF / CIF Company. (Eg. 11111111-A)','mod'=>'seur'),$_smarty_tpl);?>

				</dd>

				<dt><label><?php echo smartyTranslate(array('s'=>'Name','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd class="required">
					<input type="text" name="name" />
					<sup name="name">*</sup>
					<span class="field-help"><?php echo smartyTranslate(array('s'=>'Name of the contact person.','mod'=>'seur'),$_smarty_tpl);?>

				</dd>

				<dt><label><?php echo smartyTranslate(array('s'=>'Firstname','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd class="required">
					<input type="text" name="first_name" />
					<sup name="first_name">*</sup>
					<span class="field-help"><?php echo smartyTranslate(array('s'=>'Firstname of the contact person.','mod'=>'seur'),$_smarty_tpl);?>

				</dd>

				<dt><label><?php echo smartyTranslate(array('s'=>'Company Name','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd class="required">
					<input type="text" name="company_name" />
					<sup name="company_name">*</sup>
					<span class="field-help"><?php echo smartyTranslate(array('s'=>'Legal name of the company.','mod'=>'seur'),$_smarty_tpl);?>

				</dd>
				
				<dt><label><?php echo smartyTranslate(array('s'=>'Street Type','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd class="required">
					<select name="street_type">
						<option value="">---</option>
						<?php  $_smarty_tpl->tpl_vars['street_type'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['street_type']->_loop = false;
 $_smarty_tpl->tpl_vars['abbreviation'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['street_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['street_type']->key => $_smarty_tpl->tpl_vars['street_type']->value){
$_smarty_tpl->tpl_vars['street_type']->_loop = true;
 $_smarty_tpl->tpl_vars['abbreviation']->value = $_smarty_tpl->tpl_vars['street_type']->key;
?>
							<option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['abbreviation']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['abbreviation']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['street_type']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
						<?php } ?>
					</select>
					<sup name="street_type">*</sup>
				</dd>
				
				<dt><label><?php echo smartyTranslate(array('s'=>'Name street','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd class="required">
					<input type="text" name="street_name" />
					<sup name="street_name">*</sup>
				</dd>
				
				<dt><label><?php echo smartyTranslate(array('s'=>'Number','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd class="required">
					<input type="text" name="street_number" />
					<sup name="street_number">*</sup>
				</dd>
				
				<dt><label><?php echo smartyTranslate(array('s'=>'Staircase','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd><input type="text" name="staircase" /></dd>
				
				<dt><label><?php echo smartyTranslate(array('s'=>'Floor','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd><input type="text" name="floor" /></dd>
				
				<dt><label><?php echo smartyTranslate(array('s'=>'Door','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd><input type="text" name="door" /></dd>
				
				<dt><label><?php echo smartyTranslate(array('s'=>'Postal Code','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd class="required"><input type="text" name="post_code_cfg" />
					<sup name="post_code_cfg">*</sup>
					<span class="field-help"><?php echo smartyTranslate(array('s'=>'Postal code of the company.','mod'=>'seur'),$_smarty_tpl);?>
</span>
					<input type="hidden" name="token" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
					<input type="hidden" name="id_employee" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['employee']->value->id, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
				</dd>

				<dt><label><?php echo smartyTranslate(array('s'=>'City','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd class="required">
					<input type="text" name="town_cfg" value=""  />
					<sup name="town_cfg">*</sup>
				</dd>

				
				<dt><label><?php echo smartyTranslate(array('s'=>'State','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd class="required">
					<input type="text" name="state_cfg" value="" />
					<sup name="state_cfg">*</sup>
				</dd>

				
				<dt><label><?php echo smartyTranslate(array('s'=>'Country','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd class="required">
					<select name="country_cfg">
						<option value=""></option>
						<?php  $_smarty_tpl->tpl_vars['seur_country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['seur_country']->_loop = false;
 $_smarty_tpl->tpl_vars['abbreviation'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['seur_countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['seur_country']->key => $_smarty_tpl->tpl_vars['seur_country']->value){
$_smarty_tpl->tpl_vars['seur_country']->_loop = true;
 $_smarty_tpl->tpl_vars['abbreviation']->value = $_smarty_tpl->tpl_vars['seur_country']->key;
?>
							<option value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['abbreviation']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['seur_country']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</option>
						<?php } ?>
					</select>
					<sup name="country">*</sup>
				</dd>

				
				<dt><label><?php echo smartyTranslate(array('s'=>'Franchise','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd class="required">
					<input type="text" name="franchise_cfg" value=""/>
					<sup name="franchise_cfg">*</sup>
				</dd>
				
				<dt><label><?php echo smartyTranslate(array('s'=>'Phone','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd class="required">
					<input type="text" name="phone" />
					<sup name="phone">*</sup>
				</dd>
				
				<dt><label><?php echo smartyTranslate(array('s'=>'Fax','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd><input type="text" name="fax" /></dd>
				
				<dt><label><?php echo smartyTranslate(array('s'=>'Email','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd class="required">
					<input type="text" name="email" />
					<sup name="email">*</sup>
				</dd>
				
				<dt><label><?php echo smartyTranslate(array('s'=>'CCC','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd class="required">
					<input type="text" name="ccc_cfg" />
					<sup name="ccc_cfg">*</sup>
					<span class="field-help"><?php echo smartyTranslate(array('s'=>'The CCC will be provided by SEUR. It is a numeric code from 1 to 7 digits.','mod'=>'seur'),$_smarty_tpl);?>

				</dd>
				
				<dt><label><?php echo smartyTranslate(array('s'=>'CIT','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd class="required">
					<input type="text" name="ci" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['merchant_data']->value['cit'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
					<sup name="ci">*</sup>
				</dd>
				
				<dt><label><?php echo smartyTranslate(array('s'=>'User','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd class="required">
					<input type="text" name="user_cfg" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['merchant_data']->value['user'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" /><sup name="user_cfg">*</sup>
					<input type="hidden" name="token_cfg" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
					<input type="hidden" name="id_employee_cfg" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['employee']->value->id, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
				</dd>
				
				<dt><label><?php echo smartyTranslate(array('s'=>'Password','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd class="required">
					<input type="password" name="pass_cfg" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['merchant_data']->value['pass'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" /><sup name="pass_cfg">*</sup>
				</dd>
				
				<dt><label><?php echo smartyTranslate(array('s'=>'User of www.seur.com','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd class="required">
					<input type="text" name="user_seurcom" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['user_seurcom']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" /><sup name="user_seurcom">*</sup>
					<input type="hidden" name="token_cfg" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"/>
				</dd>
				
			
				<dt><label><?php echo smartyTranslate(array('s'=>'Password of www.seur.com','mod'=>'seur'),$_smarty_tpl);?>
</label></dt>
				<dd class="required">
					<input type="password" name="pass_seurcom" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['pass_seurcom']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" /><sup name="pass_seurcom">*</sup>
				</dd>
				
				
				<dt class="submit required">
					<h3><?php echo smartyTranslate(array('s'=>'Privacy policy','mod'=>'seur'),$_smarty_tpl);?>
</h3>
				</dt>
				<dd>
					<span>
						<?php echo smartyTranslate(array('s'=>'In accordance with the Organic Law 15/1999, of December 13, Protection of Personal Data, we inform you that the personal data you provide will be treated confidentially.','mod'=>'seur'),$_smarty_tpl);?>
<br />
						<?php echo smartyTranslate(array('s'=>'By proceeding to be high, the system could send the information to a linked email SEUR SA.','mod'=>'seur'),$_smarty_tpl);?>
<br />
						<?php echo smartyTranslate(array('s'=>'SEUR SA undertakes to not sharing your personal data to third parties outside SEUR SA.','mod'=>'seur'),$_smarty_tpl);?>
<br />
						<?php echo smartyTranslate(array('s'=>'Save in those situations where in in accordance with the purpose for which the data were obtained, it becomes necessary to assign to any person acting for or on behalf of or in connection with the business of SEUR SA.','mod'=>'seur'),$_smarty_tpl);?>

					</span>
					
					<p class="checkbox">
						<input type="checkbox" name="lopd" id="lopd" />
						<?php echo smartyTranslate(array('s'=>'Accept the terms','mod'=>'seur'),$_smarty_tpl);?>
 <sup name="sup_lopd">*</sup>
					</p>
					
					<input type="submit" name="submitLogin" class="button" value="<?php echo smartyTranslate(array('s'=>'Send','mod'=>'seur'),$_smarty_tpl);?>
" />
				</dd>
		   </dl>
		</fieldset>
	</form>
</div>

<div id="seurJsTranslations" class="hidden">
	<input type="hidden" name="requiredField" value="<?php echo smartyTranslate(array('s'=>'Fill in the field.','mod'=>'seur'),$_smarty_tpl);?>
" />
	<input type="hidden" name="onlyNumbers" value="<?php echo smartyTranslate(array('s'=>'Please enter only numbers.','mod'=>'seur'),$_smarty_tpl);?>
" />
	<input type="hidden" name="onlyEmail" value="<?php echo smartyTranslate(array('s'=>'Malformed e-mail.','mod'=>'seur'),$_smarty_tpl);?>
" />
	<input type="hidden" name="onlyText" value="<?php echo smartyTranslate(array('s'=>'Enter only letters.','mod'=>'seur'),$_smarty_tpl);?>
" />
	<input type="hidden" name="requiredSelect" value="<?php echo smartyTranslate(array('s'=>'Select an option.','mod'=>'seur'),$_smarty_tpl);?>
" />
	<input type="hidden" name="acceptPrivacyPolicy" value="<?php echo smartyTranslate(array('s'=>'Accept the privacy policy.','mod'=>'seur'),$_smarty_tpl);?>
" />
</div>

<div id="outputData"></div><?php }} ?>