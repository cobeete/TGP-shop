{capture name=path}{l s='Pago no completado' mod='servired'}{/capture}
{include file="$tpl_dir./breadcrumb.tpl"}

<h2>{l s='Pago no completado' mod='servired'}</h2>

<table width="100%" border="0">
	<tr><td><img src="{$this_path}views/img/error.gif" width="301" height="197" alt="Pago pago no completado" longdesc="Pago no completado" /></td>
    <td>{l s='Lo sentimos. Su pago no se ha completado. Puede intentarlo de nuevo o escoger otro medio de pago. Recuerde que puede usar tarjetas adheridas al sistema de pago seguro de Visa, denominado "Verified by Visa", o de MasterCard, denominado "MasterCard SecureCode".'  mod='servired'}</td></tr>
</table>
<ul class="footer_links">
	<li><a href="{$base_dir_ssl}my-account.php"><img src="{$img_dir}icon/my-account.gif" alt="" class="icon" /></a><a href="{$base_dir_ssl}my-account.php">{l s='Volver a su cuenta'  mod='servired'}</a></li>
	<li><a href="{$base_dir_ssl}order.php?step=3" title="{l s='Pagos'  mod='servired'}"><img src="{$img_dir}icon/cart.gif" alt="{l s='Pagos'  mod='servired'}" class="icon" /></a><a href="{$base_dir_ssl}order.php?step=3" title="{l s='Pagos'  mod='servired'}">{l s='Volver a elegir medio de pago'  mod='servired'}</a></li>
	<li><a href="{$base_dir}"><img src="{$img_dir}icon/home.gif" alt="" class="icon" /></a><a href="{$base_dir}">{l s='Inicio'  mod='servired'}</a></li>
</ul>