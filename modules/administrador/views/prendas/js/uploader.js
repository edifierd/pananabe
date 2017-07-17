id_prenda = $("#id_prenda").attr('value');

$("#file-3").fileinput({
  uploadUrl: _root_ + 'administrador/prendas/uploadImagen',
  language: 'es',
  uploadAsync: true,
  uploadExtraData: {id: id_prenda},
  maxFileCount: 3,
  showCaption: false,
  //showUpload: false,
  showClose: false,
  browseOnZoneClick: true,
  removeFromPreviewOnError: true,
  resizeImage: true,
  maxImageHeight: 500,
  resizePreference: 'height',
  browseClass: "btn btn-primary btn-sm",
  allowedFileTypes: ['image']
}).on('fileclear',function(jqXHR) {
    var abort = false;
    if (confirm("Are you sure you want to delete this image?")) {
        abort = true;
    }
    return abort;
}).on('filebatchuploaderror', function(event, data, previewId, index) {
var form = data.form, files = data.files, extra = data.extra,
   response = data.response, reader = data.reader;
}).on('filebatchuploadsuccess', function(event, data, previewId, index) {
  var form = data.form, files = data.files, extra = data.extra,
   response = data.response, reader = data.reader;
   alert (extra.bdInteli + " " +  response.uploaded);
}).on("filedelete", function(jqXHR) {
    var abort = true;
    if (confirm("Are you sure you want to delete this imagesdgsgvssdgsgsdgssd?")) {
        abort = false;
    }
    return abort; // you can also send any data/object that you can receive on `filecustomerror` event
});

// }).on('fileselect', function(event, numFiles, label) { //CUANDO SE AGREGA UNA IMAGEN
//     alert("Hola"+label);
// }).on('fileclear', function(event) { //CUANDO SE ELIMINA LA IMAGEN
//     console.log("fileclear");
// }).on('fileselectnone', function() {
//      alert('Huh! You selected no files.');
// });
