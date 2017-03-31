<h3>Para reactivar esta prenda debe indicar al menos una categoria</h3>

<div class="row">
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
                    <div class="col-sm-1" style="text-align:center;">{$p.temporada}</div>
                    <div class="col-sm-1" style="text-align:center;">$ {$p.precio}</div>
                    <div class="col-sm-2" style="text-align:center;">
                        {if $p.descuento == 0}
                            Sin Descuento
                        {else}
                            % {$p.descuento}
                        {/if}
                    </div>
                    <div class="col-sm-3" style="text-align:center;">
                    	<form enctype="multipart/form-data" method="post" action="">
							<p><label> Categorias</label>
							<select id="categorias[]" name="categorias[]" class="selectpicker" title="Seleccione multiples categorias..." multiple>
    							{foreach from=$categorias item=curr_c}
        							<option value="{$curr_c.id}" >{$curr_c.nombre} - {$curr_c.genero}</option>
								{/foreach}
							</select>
                            </p>
	                </div><div class="col-sm-3" style="text-align:center;">
                    		<input type="hidden" name="guardar" value="1">
    						<button class="btn btn-primary" id="btnvalidar"><i class="icon-ok icon-white"></i>Guardar</button>
    						<a href="{$_layoutParams.root}administrador/prendas" style="margin-left:5%;" class="btn btn-warning">Cancelar</a>
						</form>    
                    </div>
                </div>
			</div>
        </div>
</div>

