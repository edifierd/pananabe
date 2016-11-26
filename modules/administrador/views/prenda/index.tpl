<h2> Cargar Producto </h2>

<form enctype="multipart/form-data" method="post" action="{$_layoutParams.root}administrador/prenda/guardar">
	Nombre:<br>
	<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el titulo" value="{$campos.apellido|default:""}" style="border-radius: 0px;">
    Descripcion:<br>
    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Ingrese la descripcion" value="{$campos.apellido|default:""}" style="border-radius: 0px;">
    Precio:<br>
    <input type="number" class="form-control" name="precio" id="precio" placeholder="Ingrese el precio" value="{$campos.apellido|default:""}" style="border-radius: 0px;">
    S:<br>
    <input type="number" class="form-control" name="s" id="s" placeholder="Stock talle S" value="{$campos.apellido|default:""}" style="border-radius: 0px;">
    M:<br>
    <input type="number" class="form-control" name="m" id="m" placeholder="Stock talle M" value="{$campos.apellido|default:""}" style="border-radius: 0px;">
    L:<br>
    <input type="number" class="form-control" name="l" id="l" placeholder="Stock talle L" value="{$campos.apellido|default:""}" style="border-radius: 0px;">
    XL:<br>
    <input type="number" class="form-control" name="xl" id="xl" placeholder="Stock talle XL" value="{$campos.apellido|default:""}" style="border-radius: 0px;">
    
    <button class="btn btn-primary" id="btnvalidar"><i class="icon-ok icon-white"></i>Guardar</button>
</form>

<!--
Form demo:
<form enctype="multipart/form-data" method="post" action="{$_layoutParams.root}administrador/index/cargarFoto">
  Foto Frente:
  <input id="fbBrowseBtn" type="file" name="imagen1"  multiple>
  Foto Atras:
  <input id="fbBrowseBtn" type="file" name="imagen2"  multiple>
  Foto Perfil:
  <input id="fbBrowseBtn" type="file" name="imagen3"  multiple>
  <input type="submit" name="Submit" value="upload" >
</form>-->