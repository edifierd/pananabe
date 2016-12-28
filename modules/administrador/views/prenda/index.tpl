<h2> Cargar Datos de la prenda </h2>

<form enctype="multipart/form-data" method="post" action="{$_layoutParams.root}administrador/prenda">
	Nombre:<br>
	<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el titulo" value="{$campos.nombre|default:""}" style="border-radius: 0px;">
    Descripcion:<br>
    <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Ingrese la descripcion" value="{$campos.descripcion|default:""}" style="border-radius: 0px;">
    Precio:<br>
    <input type="number" class="form-control" name="precio" id="precio" placeholder="Ingrese el precio" value="{$campos.precio|default:""}" style="border-radius: 0px;">
    S:<br>
    <input type="number" class="form-control" name="s" id="s" placeholder="Stock talle S" value="{$campos.s|default:""}" style="border-radius: 0px;">
    M:<br>
    <input type="number" class="form-control" name="m" id="m" placeholder="Stock talle M" value="{$campos.m|default:""}" style="border-radius: 0px;">
    L:<br>
    <input type="number" class="form-control" name="l" id="l" placeholder="Stock talle L" value="{$campos.l|default:""}" style="border-radius: 0px;">
    XL:<br>
    <input type="number" class="form-control" name="xl" id="xl" placeholder="Stock talle XL" value="{$campos.xl|default:""}" style="border-radius: 0px;">
    <input type="hidden" name="enviado" value="1">
    <br /><br />
    <button class="btn btn-primary" id="btnvalidar"><i class="icon-ok icon-white"></i>Siguiente</button>
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