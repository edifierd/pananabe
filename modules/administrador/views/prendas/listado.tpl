<h3>Listado de Prendas</h3>

<div class="btn-group" style="margin-bottom:20px;">
	<a href="javascript:history.back()" class="btn btn-default"> <i class="fa fa-arrow-left fa-lg"></i> Atras</a></li>
	<a href="{$_layoutParams.root}administrador/prendas/nuevo" class="btn btn-default"> Nueva Prenda </a>
    <a href="{$_layoutParams.root}administrador/prendas/listado/act" class="btn btn-default"> Activas </a>
    <a href="{$_layoutParams.root}administrador/prendas/listado/fin" class="btn btn-default"> Finalizadas </a>
</div>


{if isset($prendas) && count($prendas)}
<div class="col-sm-12 hidden-xs" style="margin-bottom:15px;">
	<div class="row panel">
         <div class="col-sm-2" style="text-align:center;">Foto</div>
         <div class="col-sm-2" style="text-align:center;">Temporada</div>
         <div class="col-sm-2" style="text-align:center;">Precio</div>
         <div class="col-sm-2" style="text-align:center;">Descuento</div>
         <div class="col-sm-2" style="text-align:center;">Categoria</div>
         <div class="col-sm-2" style="text-align:center;">Acciones</div>
	</div>
</div>

<div class="row">
	{foreach from=$prendas item=p}
    	<div class="col-sm-12">
        	<div class="panel panel-default">
  				<div class="panel-heading"><b>{$p.nombre}</b></div>
  				<div class="panel-body row">
    				<div class="col-sm-2" style="text-align:center;">
                	{if $p.foto_frente == ''}
                    	<img src="{$_layoutParams.root}public/img/sin_imagen.png" style="max-height:75px;"/>
                    {else}
                    	<img src="{$_layoutParams.root}public/img/prendas/thumb/thumb_{$p.foto_frente}" style="max-height:75px;"/>
                    {/if}
                    </div>
                    <div class="col-sm-2" style="text-align:center;">{$p.temporada}</div>
                    <div class="col-sm-2" style="text-align:center;">$ {$p.precio}</div>
                    <div class="col-sm-2" style="text-align:center;">
                        {if $p.descuento == 0}
                            Sin Descuento
                        {else}
                            % {$p.descuento}
                        {/if}
                    </div>
                    <div class="col-sm-2" style="text-align:center;">
                    	{foreach from=$categoriasModel->getCategoriasPrenda($p.id) item=c}
                        	{$c.nombre}<br />
                        {/foreach}
                    </div>
                    <div class="col-sm-2" style="text-align:center;">
                    	<a href="{$_layoutParams.root}administrador/prendas/editar/{$p.id}" class="btn btn-primary btn-xs" style="margin-right:10px;">
                        	<i class="fa fa-pencil fa-2x"></i>
                        </a>
                        {if $p.estado == 'act'}
                        	<a href="{$_layoutParams.root}administrador/prendas/eliminar/{$p.id}" 
                       		onClick="javascript: return confirm('¿Estas seguro?');" class="btn btn-danger btn-xs" style="margin-right:10px;"><i class="fa fa-trash fa-2x"></i></a>
                        {else}
                        	<a href="{$_layoutParams.root}administrador/prendas/reactivar/{$p.id}" 
                        	onClick="javascript: return confirm('¿Estas seguro?');" class="btn btn-warning btn-xs" style="margin-right:10px;">
                            	<i class="fa fa-check-square-o fa-2x"></i>
                            </a>
                        {/if}
                    </div>
                </div>
			</div>
        </div>
    {/foreach}
</div>
{else}
<h4 style="margin-top:25px;">No se han encontrado prendas.</h4>
{/if}