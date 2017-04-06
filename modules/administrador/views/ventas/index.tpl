<h3>Listado de ventas</h3>

<style>
	.
</style>

{if isset($ventas) && count($ventas)}
<div class="row">
	{foreach from=$ventas item=v}
    	<div class="col-xs-12 col-sm-6 col-md-4">
        	<div class="panel panel-default">
  				<div class="panel-heading"><b>Venta N°{$v.id_venta}</b> - ({$v.fecha|date_format:"%d-%m-%Y"})</div>
  				<div class="panel-body">
    				<div class="row">
                    	<div class="col-xs-6 col-md-6" style="text-align:center;">
                        	<img src="{$_layoutParams.root}public/img/prendas/thumb/thumb_{$v.foto_frente}" 
                                 style=" max-width:100px; max-height:185px; border: 1px solid #000; margin-top:15px;"/>
                        </div>
                        <div class="col-xs-6 col-md-6">
                        	<ul class="list-group" style="margin:0px;">
  								<li class="list-group-item">Nombre: {$v.nombre}</li>
                                <li class="list-group-item">Talle: {$v.talle}</li>
                                <li class="list-group-item">Unidades: {$v.cant}</li>
                                <li class="list-group-item">Precio: {$v.precio}</li>
                                <li class="list-group-item">Total: {math equation="x * y" x=$v.precio y=$v.cant }</li>
							</ul>
                        </div>
                        <div class="col-xs-12">
                        	<h4>Datos contacto:</h4>
                        	<ul class="list-group">
  								<li class="list-group-item">Nombre: {$v.name} {$v.surname}</li>
                                <li class="list-group-item">D.N.I: {$v.document_number}</li>
                                <li class="list-group-item">Correo: {$v.email}</li>
                                <li class="list-group-item">Tel: {$v.area_phone_code} - {$v.phone_number}</li>
							</ul>
                        </div>
                    </div>
  				</div>
			</div>
        </div>
    {/foreach}
</div>
{else}
	<h3>No se registran ventas a la fecha.</h3>
{/if}