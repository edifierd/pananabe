<h3>Crear Nueva Categoria</h3>

<form name="form1" method="post" action="" class="form">
        <input type="hidden" value="1" name="enviar" />
        
        <p>
        <select id="genero" name="genero" class="selectpicker" title="Seleccione el genero" >
			<option value="hombre" >Hombre</option>
    		<option value="mujer" >Mujer</option>
            <option value="unisex" >Unisex</option>
		</select>
    	</p>

        <p>
            <label>Nombre: </label>
            <input type="text" name="nombre" value="{$datos.nombre|default:""}" />
        </p>

        <p>
            <button type="submit" class="btn btn-primary">Crear Categoria</button>
            <a href="{$_layoutParams.root}administrador" class="btn btn-danger" style="margin-left:25px;">Cancelar</a>
        </p>
    </form>