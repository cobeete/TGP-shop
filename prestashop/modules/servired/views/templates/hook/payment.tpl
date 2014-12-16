<p class="payment_module">
	<a href="javascript:$('#servired_form').submit();" title="{l s='Conectar con el TPV' mod='servired'}">
		<img src="{$module_dir}/views/img/tarjetas.png" alt="{l s='Conectar con el TPV' mod='servired'}"/>
		{l s='Pago con tarjeta.(Conexión segura con Servired)' mod='servired'}
        {if number_format($fee_servired,2)!='0.00'}
		<br/><br/>
		{l s='Este método de pago lleva asociado un recargo de %s' sprintf={convertPrice price=$fee_servired} mod='servired'}.{l s='El recargo se sumará a los gastos de envío' mod='servired'}
	{/if}
	</a>
</p>
<form action="{$urltpv}" method="post" id="servired_form" class="hidden" accept-charset = "ISO-8859-15">
	<input type="hidden" name="Ds_Merchant_Amount" value="{$cantidad}" />
  <input type="hidden" name="Ds_Merchant_Currency" value="{$moneda}" />
	<input type="hidden" name="Ds_Merchant_Order" value="{$pedido}" />
	<input type="hidden" name="Ds_Merchant_MerchantCode" value="{$codigo}" />
	<input type="hidden" name="Ds_Merchant_Terminal" value="{$terminal}" />
	<input type="hidden" name="Ds_Merchant_TransactionType" value="{$trans}" />
	<input type="hidden" name="Ds_Merchant_Titular" value="{$titular}" />
	<input type="hidden" name="Ds_Merchant_MerchantName" value="{$nombre}" />
  {if $notificacion>0}
	<input type="hidden" name="Ds_Merchant_MerchantURL" value="{$urltienda}" />
  {/if}
	<input type="hidden" name="Ds_Merchant_ProductDescription" value="{$productos}" />
	<input type="hidden" name="Ds_Merchant_UrlOK" value="{$UrlOk}" />
	<input type="hidden" name="Ds_Merchant_UrlKO" value="{$UrlKO}" />
	<input type="hidden" name="Ds_Merchant_MerchantSignature" value="{$firma}" />
	<input type="hidden" name="Ds_Merchant_ConsumerLanguage" value="{$idioma_tpv}" />
    <input type="hidden" name="Ds_Merchant_PayMethods" value="T" />
</form>
