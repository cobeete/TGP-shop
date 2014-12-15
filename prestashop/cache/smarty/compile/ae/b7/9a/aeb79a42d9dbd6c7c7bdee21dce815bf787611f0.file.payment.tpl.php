<?php /* Smarty version Smarty-3.1.14, created on 2014-09-23 20:26:22
         compiled from "/home2/topgourm/public_html/modules/servired/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19875318685421bb4ed95279-22481343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aeb79a42d9dbd6c7c7bdee21dce815bf787611f0' => 
    array (
      0 => '/home2/topgourm/public_html/modules/servired/views/templates/hook/payment.tpl',
      1 => 1400574918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19875318685421bb4ed95279-22481343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'fee_servired' => 0,
    'urltpv' => 0,
    'cantidad' => 0,
    'moneda' => 0,
    'pedido' => 0,
    'codigo' => 0,
    'terminal' => 0,
    'trans' => 0,
    'titular' => 0,
    'nombre' => 0,
    'notificacion' => 0,
    'urltienda' => 0,
    'productos' => 0,
    'UrlOk' => 0,
    'UrlKO' => 0,
    'firma' => 0,
    'idioma_tpv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5421bb4edc5dc7_87442733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5421bb4edc5dc7_87442733')) {function content_5421bb4edc5dc7_87442733($_smarty_tpl) {?><p class="payment_module">
	<a href="javascript:$('#servired_form').submit();" title="<?php echo smartyTranslate(array('s'=>'Conectar con el TPV','mod'=>'servired'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
/views/img/tarjetas.png" alt="<?php echo smartyTranslate(array('s'=>'Conectar con el TPV','mod'=>'servired'),$_smarty_tpl);?>
"/>
		<?php echo smartyTranslate(array('s'=>'Pago con tarjeta.(Conexión segura con Servired)','mod'=>'servired'),$_smarty_tpl);?>

        <?php if (number_format($_smarty_tpl->tpl_vars['fee_servired']->value,2)!='0.00'){?>
		<br/><br/>
		<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['fee_servired']->value),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo smartyTranslate(array('s'=>'Este método de pago lleva asociado un recargo de %s','sprintf'=>$_tmp1,'mod'=>'servired'),$_smarty_tpl);?>
.<?php echo smartyTranslate(array('s'=>'El recargo se sumará a los gastos de envío','mod'=>'servired'),$_smarty_tpl);?>

	<?php }?>
	</a>
</p>
<form action="<?php echo $_smarty_tpl->tpl_vars['urltpv']->value;?>
" method="post" id="servired_form" class="hidden" accept-charset = "ISO-8859-15">
	<input type="hidden" name="Ds_Merchant_Amount" value="<?php echo $_smarty_tpl->tpl_vars['cantidad']->value;?>
" />
  <input type="hidden" name="Ds_Merchant_Currency" value="<?php echo $_smarty_tpl->tpl_vars['moneda']->value;?>
" />
	<input type="hidden" name="Ds_Merchant_Order" value="<?php echo $_smarty_tpl->tpl_vars['pedido']->value;?>
" />
	<input type="hidden" name="Ds_Merchant_MerchantCode" value="<?php echo $_smarty_tpl->tpl_vars['codigo']->value;?>
" />
	<input type="hidden" name="Ds_Merchant_Terminal" value="<?php echo $_smarty_tpl->tpl_vars['terminal']->value;?>
" />
	<input type="hidden" name="Ds_Merchant_TransactionType" value="<?php echo $_smarty_tpl->tpl_vars['trans']->value;?>
" />
	<input type="hidden" name="Ds_Merchant_Titular" value="<?php echo $_smarty_tpl->tpl_vars['titular']->value;?>
" />
	<input type="hidden" name="Ds_Merchant_MerchantName" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
" />
  <?php if ($_smarty_tpl->tpl_vars['notificacion']->value>0){?>
	<input type="hidden" name="Ds_Merchant_MerchantURL" value="<?php echo $_smarty_tpl->tpl_vars['urltienda']->value;?>
" />
  <?php }?>
	<input type="hidden" name="Ds_Merchant_ProductDescription" value="<?php echo $_smarty_tpl->tpl_vars['productos']->value;?>
" />
	<input type="hidden" name="Ds_Merchant_UrlOK" value="<?php echo $_smarty_tpl->tpl_vars['UrlOk']->value;?>
" />
	<input type="hidden" name="Ds_Merchant_UrlKO" value="<?php echo $_smarty_tpl->tpl_vars['UrlKO']->value;?>
" />
	<input type="hidden" name="Ds_Merchant_MerchantSignature" value="<?php echo $_smarty_tpl->tpl_vars['firma']->value;?>
" />
	<input type="hidden" name="Ds_Merchant_ConsumerLanguage" value="<?php echo $_smarty_tpl->tpl_vars['idioma_tpv']->value;?>
" />
    <input type="hidden" name="Ds_Merchant_PayMethods" value="T" />
</form>
<?php }} ?>