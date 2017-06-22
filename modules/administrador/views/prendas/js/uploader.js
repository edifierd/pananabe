$("#file-3").fileinput({
  uploadUrl: _root_ + 'administrador/prendas/uploadImagen',
  language: 'es',
  uploadExtraData: {id: '5'},
  maxFileCount: 4,
  showCaption: false,
  //showUpload: false,
  showClose: false,
  resizeImage: true,
  maxImageHeight: 500,
  resizePreference: 'height',
  browseClass: "btn btn-primary btn-sm",
  allowedFileTypes: ['image']
}).on('fileselect', function(event, numFiles, label) { //CUANDO SE AGREGA UNA IMAGEN
    alert("Hola"+label);
}).on('fileclear', function(event) { //CUANDO SE ELIMINA LA IMAGEN
    console.log("fileclear");
}).on('fileselectnone', function() {
     alert('Huh! You selected no files.');
});
