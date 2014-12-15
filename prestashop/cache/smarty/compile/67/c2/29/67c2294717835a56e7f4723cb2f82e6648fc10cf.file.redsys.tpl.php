<?php /* Smarty version Smarty-3.1.14, created on 2014-09-23 20:26:22
         compiled from "/home2/topgourm/public_html/modules/redsys/redsys.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15780540975421bb4edee345-20653846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67c2294717835a56e7f4723cb2f82e6648fc10cf' => 
    array (
      0 => '/home2/topgourm/public_html/modules/redsys/redsys.tpl',
      1 => 1410431596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15780540975421bb4edee345-20653846',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'fee' => 0,
    'urltpv' => 0,
    'cantidad' => 0,
    'moneda' => 0,
    'pedido' => 0,
    'codigo' => 0,
    'terminal' => 0,
    'trans' => 0,
    'titular' => 0,
    'merchantdata' => 0,
    'nombre' => 0,
    'urltienda' => 0,
    'productos' => 0,
    'UrlOk' => 0,
    'UrlKO' => 0,
    'firma' => 0,
    'idioma_tpv' => 0,
    'tipopago' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5421bb4ee1ebb9_45841507',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5421bb4ee1ebb9_45841507')) {function content_5421bb4ee1ebb9_45841507($_smarty_tpl) {?><p class="payment_module">
	<a class="bankwire" href="javascript:$('#redsys_form').submit();" title="<?php echo smartyTranslate(array('s'=>'Conectar con el TPV','mod'=>'redsys'),$_smarty_tpl);?>
" style="float:left">
		
		<img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
redsys.png" alt="<?php echo smartyTranslate(array('s'=>'Conectar con el TPV','mod'=>'redsys'),$_smarty_tpl);?>
" style="float:left;margin:-15px 15px 15px -5px;"/>
		
		<?php echo smartyTranslate(array('s'=>'Pagar con tarjeta  - Pasarela de pago Redsys','mod'=>'redsys'),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['fee']->value>0){?>
		<br /><br />
		<?php echo smartyTranslate(array('s'=>'Esta forma de pago lleva asociada un recargo de ','mod'=>'redsys'),$_smarty_tpl);?>
 <font color="red"><b><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['fee']->value),$_smarty_tpl);?>
.</b></font> <?php echo smartyTranslate(array('s'=>'El recargo se suma a los gastos de env.','mod'=>'redsys'),$_smarty_tpl);?>

	<?php }?>
	</a><br /><br /><br /><br /><br /><br /><br />
</p>

<form action="<?php echo $_smarty_tpl->tpl_vars['urltpv']->value;?>
" method="post" id="redsys_form" class="hidden">	
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
	<input type="hidden" name="Ds_Merchant_MerchantData" value="<?php echo $_smarty_tpl->tpl_vars['merchantdata']->value;?>
" />
	<input type="hidden" name="Ds_Merchant_MerchantName" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
" />
	<input type="hidden" name="Ds_Merchant_MerchantURL" value="<?php echo $_smarty_tpl->tpl_vars['urltienda']->value;?>
" />
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
    <input type="hidden" name="Ds_Merchant_PayMethods" value="<?php echo $_smarty_tpl->tpl_vars['tipopago']->value;?>
" />
</form><?php }} ?>