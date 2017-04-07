<h3>Listado de Mensajes</h3>

{if isset($mensajes) && count($mensajes)}
	{foreach from=$mensajes item=m}
    	<div class="panel panel-default">
  			<div class="panel-heading"><b>N°{$m.id_contacto}</b> | {$m.nombre} {$m.apellido} - {$m.correo} - {$m.telefono} - {$m.localidad}</div>
  			<div class="panel-body" style="text-align:center;">
            	{if $m.mensaje != ''}
    				<b>{$m.mensaje}</b>
                {else}
                	<b>Este persona no indico ningun mensaje</b>
               	{/if}
  			</div>
		</div>
    {/foreach}
{else}
	<h4>No se recibió ningun mensaje</h4>
{/if}