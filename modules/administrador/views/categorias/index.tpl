<h3>Listado de Categorias</h3>

<div class="btn-group" style="margin-bottom:20px;">
	<a href="javascript:history.back()" class="btn btn-default"> <i class="fa fa-arrow-left fa-lg"></i> Atras</a></li>
	<a href="{$_layoutParams.root}administrador/categorias/nuevo" class="btn btn-default"> Nueva Categoria </a>
</div>

<table class="table">
	<tr>
    	<th>Genero</th>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>
    {foreach from=$categorias item=c}
    	<tr>
    		<td>{$c.genero}</td>
        	<td>{$c.nombre}</td>
        	<td>
            	<a href="{$_layoutParams.root}administrador/categorias/eliminar/{$c.id}" 
                onClick="javascript: return confirm('¿Estas seguro? Esto finalizara las prendas con esta categoria.');" 
                class="btn btn-danger btn-xs" style="margin-right:10px;"><i class="fa fa-trash fa-2x"></i></a>
            </td>
   		</tr>
    {/foreach}
</table>