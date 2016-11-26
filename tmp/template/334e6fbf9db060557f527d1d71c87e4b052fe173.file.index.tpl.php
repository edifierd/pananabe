<?php /* Smarty version Smarty-3.1.8, created on 2016-11-26 15:55:30
         compiled from "C:\xampp\htdocs\pananabe\modules\administrador\views\index\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3191758375a122a1ba0-35243951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '334e6fbf9db060557f527d1d71c87e4b052fe173' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pananabe\\modules\\administrador\\views\\index\\index.tpl',
      1 => 1480172116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3191758375a122a1ba0-35243951',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_58375a122d82e0_31299155',
  'variables' => 
  array (
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58375a122d82e0_31299155')) {function content_58375a122d82e0_31299155($_smarty_tpl) {?><script>
var files = document.getElementById('fbBrowseBtn').files;
 
function resizeAndUpload(file, callback, progress)
{
	
	var reader = new FileReader();
	reader.onloadend = function() {
		var tempImg = new Image();
		tempImg.onload = function() {
			alert('ac');
			// Comprobamos con el aspect cómo será la reducción
			// MAX_IMAGE_SIZE_PROCESS es la N que definimos como máxima
			var MAX_WIDTH = 500;
			var MAX_HEIGHT = 500;
			var tempW = tempImg.width;
			var tempH = tempImg.height;
			if (tempW > tempH) {
				if (tempW > MAX_WIDTH) {
					tempH *= MAX_WIDTH / tempW;
					tempW = MAX_WIDTH;
				}
			} else {
				if (tempH > MAX_HEIGHT) {
					tempW *= MAX_HEIGHT / tempH;
					tempH = MAX_HEIGHT;
				}
			}
			// Creamos un canvas para la imagen reducida y la dibujamos
			var resizedCanvas = document.createElement('canvas');
			resizedCanvas.width = tempW;
			resizedCanvas.height = tempH;
			var ctx = resizedCanvas.getContext("2d");
			ctx.drawImage(this, 0, 0, tempW, tempH);
			var dataURL = resizedCanvas.toDataURL("image/jpeg");
 
			// Pasamos la dataURL que nos devuelve Canvas a objeto Blob
			// Envíamos por Ajax el objeto Blob
			// Cogiendo el valor de photo (nombre del input file)
			var file = dataURLtoBlob(dataURL);
			var fd = new FormData();
			fd.append("photo", file);
 
			$.ajax({
				url: "<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/index/cargarFoto",
				type: "POST",
				data: fd,
				processData: false,
				contentType: false,
				dataType: 'json',
				xhr: function() {
					var xhr = new window.XMLHttpRequest();
					xhr.upload.addEventListener("progress", function(evt) {
						if (evt.lengthComputable) {
							// Calculando el porcentaje de todo el proceso 
							var percentComplete = evt.loaded / evt.total;
							progress(percentComplete * PERCENT_UPLOAD * 0.01);
						}
					}, false);
					return xhr;
				}
			}).done(function(respond) {
				// Una vez ha acabado la subida
				callback(respond);
			});
		};
		tempImg.src = reader.result;
	}
	reader.readAsDataURL(file);
}
 
function dataURLtoBlob(dataURL)
{
	// Decodifica dataURL
	var binary = atob(dataURL.split(',')[1]);
	// Se transfiere a un array de 8-bit unsigned
	var array = [];
	var length = binary.length;
	for(var i = 0; i < length; i++) {
		array.push(binary.charCodeAt(i));
	}
	// Retorna el objeto Blob
	return new Blob([new Uint8Array(array)], 'image/jpeg');
}
 
function uploaded(response)
{
	// Código siguiente a la subida
}
 
function progressBar(percent)
{
	// Código durante la subida
}
</script>



Form demo:
<form enctype="multipart/form-data" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/index/cargarFoto">
  Foto Frente:
  <input id="fbBrowseBtn" type="file" name="imagen0"  multiple>
  Foto Atras:
  <input id="fbBrowseBtn" type="file" name="imagen1"  multiple>
  Foto Perfil:
  <input id="fbBrowseBtn" type="file" name="imagen2"  multiple>
  <input type="submit" name="Submit" value="upload" onclick="resizeAndUpload(files[0], uploaded, progressBar)">
</form>

<!--<input type="file" id="pic" name="pic" />
<canvas id="preview"></canvas>
<div id="actions">
    <form action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
administrador/index/cargarFoto" method="post">
        <input type="text" id="imageName" name="imageName" />
        <input type="hidden" id="contentType" name="contentType" />
        <input type="hidden" id="imageData" name="imageData" />
        <input id="btnSave" type="submit" value="Save" />
    </form>
 
</div>
<div id="result"></div>--><?php }} ?>