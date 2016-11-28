
<h2> Cargar Producto - Paso 3 / 4 </h2>

<form method="post" action="{$_layoutParams.root}administrador/prenda/paso3" enctype="multipart/form-data">  
	<input type="hidden" name="nombre" value="{$producto.nombre}">
    <input type="hidden" name="descripcion" value="{$producto.descripcion}">
    <input type="hidden" name="precio" value="{$producto.precio}">
    <input type="hidden" name="s" value="{$producto.s}">
    <input type="hidden" name="m" value="{$producto.m}">
    <input type="hidden" name="l" value="{$producto.l}">
    <input type="hidden" name="xl" value="{$producto.xl}">
    <input type="hidden" name="fotoFrente" value="{$fotoFrente}">
    
    Foto Perfil:
  	<input id="fbBrowseBtn" type="file" name="imagen"  multiple>
 	<input type="submit" name="Siguiente" value="Siguiente" >
</form>
