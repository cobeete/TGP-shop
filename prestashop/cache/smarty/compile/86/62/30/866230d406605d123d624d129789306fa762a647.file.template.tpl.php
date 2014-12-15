<?php /* Smarty version Smarty-3.1.14, created on 2014-10-14 13:28:52
         compiled from "/home2/topgourm/public_html/modules/seur/views/templates/admin/template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1862098724543d08f47be6e8-93876944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '866230d406605d123d624d129789306fa762a647' => 
    array (
      0 => '/home2/topgourm/public_html/modules/seur/views/templates/admin/template.tpl',
      1 => 1412074357,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1862098724543d08f47be6e8-93876944',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'email_warning_message' => 0,
    'ps_version' => 0,
    'img_path' => 0,
    'module_path' => 0,
    'module_local_path' => 0,
    'configured' => 0,
    'state_configured' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_543d08f4855088_46309707',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543d08f4855088_46309707')) {function content_543d08f4855088_46309707($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['email_warning_message']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate ((mb_convert_encoding(htmlspecialchars(@constant('_PS_MODULE_DIR_'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')).('seur/views/templates/admin/warning_message.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('seur_warning_message'=>mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['email_warning_message']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')), 0);?>

<?php }?>

<div id="seur_module" class="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['ps_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
	<fieldset>
		<legend>
			<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['img_path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
logonew.png" alt="<?php echo smartyTranslate(array('s'=>'SEUR','mod'=>'seur'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'SEUR','mod'=>'seur'),$_smarty_tpl);?>
" border="0" />
		</legend>
		
		<input type="hidden" name="module_dir" id="module_dir" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
		<input type="hidden" name="module_non_ssl_href" id="module_non_ssl_href" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_local_path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />

		<?php if ($_smarty_tpl->tpl_vars['configured']->value==0){?>
			<?php if ($_smarty_tpl->tpl_vars['state_configured']->value==0){?>
				<div id="is_customer" class="seurBlock <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['ps_version']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
">
					<fieldset>
						<div id="newclientsseur">
							<div id="leftnewuser">
							<h1><?php echo smartyTranslate(array('s'=>'Everything for your online business.','mod'=>'seur'),$_smarty_tpl);?>
</h1>
							<p><?php echo smartyTranslate(array('s'=>'In e-commerce, the experience of your customers is key. If your customers have a good shopping experience, repeated and will recommend to others. SEUR e-solutions is the option you need to get it.','mod'=>'seur'),$_smarty_tpl);?>
</p>
							<p><?php echo smartyTranslate(array('s'=>'By linking your online store with our transportation network, each time a customer makes a purchase will be automatically registered in our system. ','mod'=>'seur'),$_smarty_tpl);?>
</p>
							<p><?php echo smartyTranslate(array('s'=>'In this way you will have shuttle service that you need for each order.','mod'=>'seur'),$_smarty_tpl);?>
</p>
							<div id="manualnewuser">
								<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
manual/seur_manual.pdf" target="_blank" ><img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['img_path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
manualdownload.png" alt="<?php echo smartyTranslate(array('s'=>'Manual','mod'=>'seur'),$_smarty_tpl);?>
" /></a>
				
								<div id="downloadmanual">
									<a id="manual_download" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['module_path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
manual/seur_manual.pdf" target="_blank" >
										<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['img_path']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
ico_descargar.png" alt="<?php echo smartyTranslate(array('s'=>'Download manual','mod'=>'seur'),$_smarty_tpl);?>
" /> <?php echo smartyTranslate(array('s'=>'Download manuals','mod'=>'seur'),$_smarty_tpl);?>
</a>
									</div>
									<span class="textdownloadmanual"><?php echo smartyTranslate(array('s'=>'Find out how to configure this module.','mod'=>'seur'),$_smarty_tpl);?>
</span>
								</div>
							</div>
							
							<div id="rightuser">
								<div id="functionsnewuser">
									<h2><?php echo smartyTranslate(array('s'=>'Features','mod'=>'seur'),$_smarty_tpl);?>
</h2>
									<ul>
										<li><?php echo smartyTranslate(array('s'=>'Express installation: running in less than 1 minute!','mod'=>'seur'),$_smarty_tpl);?>
</li>
										<li><?php echo smartyTranslate(array('s'=>'Integration of shipments automatically','mod'=>'seur'),$_smarty_tpl);?>
</li>
										<li><?php echo smartyTranslate(array('s'=>'Pick-ups','mod'=>'seur'),$_smarty_tpl);?>
</li>
										<li><?php echo smartyTranslate(array('s'=>'National and International Shipping.','mod'=>'seur'),$_smarty_tpl);?>
</li>
										<li><?php echo smartyTranslate(array('s'=>'Home delivery or pick ups or drops off SEUR Shopping Network.','mod'=>'seur'),$_smarty_tpl);?>
</li>
										<li><?php echo smartyTranslate(array('s'=>'Includes COD Service.','mod'=>'seur'),$_smarty_tpl);?>
</li>
										<li><?php echo smartyTranslate(array('s'=>'Printing labels in pdf or thermal printer including your company logo.','mod'=>'seur'),$_smarty_tpl);?>
</li>
										<li><?php echo smartyTranslate(array('s'=>'Consultation and Setup fees ..','mod'=>'seur'),$_smarty_tpl);?>
</li>
										<li><?php echo smartyTranslate(array('s'=>'Delivery Check online for different search criteria: type of situation, date, by order number and issue number SEUR. Sending SMS and / or EMAIL delivery notice and notice delivery to recipients.','mod'=>'seur'),$_smarty_tpl);?>
</li>
										<li><?php echo smartyTranslate(array('s'=>'Downloading the Proof of Delivery in pdf format.','mod'=>'seur'),$_smarty_tpl);?>
</li>
										<li><?php echo smartyTranslate(array('s'=>'Compatible with other transportation options SEUR.','mod'=>'seur'),$_smarty_tpl);?>
</li>
										<li><?php echo smartyTranslate(array('s'=>'Compatible with Prestashop versions 1.4 and 1.5','mod'=>'seur'),$_smarty_tpl);?>
</li>
									</ul>
								</div>
								
								<div id="importantnewuser">
									<p><span><?php echo smartyTranslate(array('s'=>'Important:','mod'=>'seur'),$_smarty_tpl);?>
</span> <?php echo smartyTranslate(array('s'=>'To use this module is a must have with SEUR Account Code. If you need to open our account contact:','mod'=>'seur'),$_smarty_tpl);?>
</p>
									<p><a href="http://www.seur.com/seur-esolutions.do" target="_blank"><?php echo smartyTranslate(array('s'=>'http://www.seur.com/seur-esolutions.do','mod'=>'seur'),$_smarty_tpl);?>
</a></p>
				
									<p id="pnewuser">
										<input type="button" name="yes_button" value="<?php echo smartyTranslate(array('s'=>'I am a customer','mod'=>'seur'),$_smarty_tpl);?>
" class="yes_button" />
										<input type="button" name="btnNo" value="<?php echo smartyTranslate(array('s'=>'Become a customer','mod'=>'seur'),$_smarty_tpl);?>
" class="no_button" />
									</p>
								</div>
				
							</div>
						</div>
					</fieldset>
				</div>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_local_path']->value)."/views/templates/admin/account.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php }elseif($_smarty_tpl->tpl_vars['state_configured']->value==1){?>
				<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_local_path']->value)."/views/templates/admin/ranges.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php }?>
		<?php }elseif($_smarty_tpl->tpl_vars['configured']->value==1){?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['module_local_path']->value)."/views/templates/admin/configuration.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
	</fieldset>
</div><?php }} ?>