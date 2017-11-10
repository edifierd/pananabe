$(document).ready(function() {

  var input = $(".portada");

  var id_imagen = input.attr('id');

  input.fileinput({
    uploadUrl: _root_ + 'administrador/configuracion/uploadImagen', // server upload action
    uploadAsync: false,
    showUpload: false, // hide upload button
    showRemove: false, // hide remove button
    showClose: false,
    minFileCount: 1,
    maxFileCount: 1,
    uploadExtraData: {id: id_imagen},
    resizeImage: true,
    maxImageHeight: 500,
    resizePreference: 'height',
    allowedFileTypes: ['image']
  }).on("filebatchselected", function(event, files) {
    // trigger upload method immediately after files are selected
    input.fileinput("upload");
    var elem = input.fileinput('getFrames');
    console.log(elem[0]);
  }).on('filereset', function(event) {
    //alert("filecleared");
  }).on('filesorted', function(event, params) {
    console.log(params);
    //Obtengo las posiciones de las imagenes
    console.log('File sorted ', params.previewId, params.oldIndex, params.newIndex, params.stack);
  });

});


//
// id_prenda = $("#id_prenda").attr('value');
//
//
// $("#file-3").fileinput({
//   uploadUrl: _root_ + 'administrador/configuracion/uploadImagen',
//   deleteUrl: _root_ + 'administrador/configuracion/deleteImagen',
//   language: 'es',
//   uploadAsync: true,
//   uploadExtraData: {id: id_prenda},
//   maxFileCount: 3,
//   showCaption: false,
//   //showUpload: false,
//   showClose: false,
//   browseOnZoneClick: true,
//   removeFromPreviewOnError: true,
//   resizeImage: true,
//   maxImageHeight: 500,
//   resizePreference: 'height',
//   browseClass: "btn btn-primary btn-sm",
//   allowedFileTypes: ['image']
// }).on('fileclear', function(event, data, previewId, index) {
//     var abort = false;
//     if (confirm("Are you sure you want to delete this image?")) {
//         abort = true;
//     }
//     return abort;
// }).on('filebatchuploaderror', function(event, data, previewId, index) {
//
// }).on('filebatchuploadsuccess', function(event, data, previewId, index) { //En caso de que ya este todo subido
//   console.log(data);
// });
//
//
// $( ".kv-file-remove" ).on( "click", function() {
//   alert('Borrado');
// });
//
//
// });

// }).on('fileselect', function(event, numFiles, label) { //CUANDO SE AGREGA UNA IMAGEN
//     alert("Hola"+label);
// }).on('fileclear', function(event) { //CUANDO SE ELIMINA LA IMAGEN
//     console.log("fileclear");
// }).on('fileselectnone', function() {
//      alert('Huh! You selected no files.');
// });
