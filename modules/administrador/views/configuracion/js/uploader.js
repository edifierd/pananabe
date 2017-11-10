$(document).ready(function() {

  $("#portada_hombre").fileinput({
    uploadUrl: _root_ + 'administrador/configuracion/uploadPortada', // server upload action
    uploadAsync: false,
    showUpload: false, // hide upload button
    showRemove: false, // hide remove button
    showClose: false,
    minFileCount: 1,
    maxFileCount: 1,
    uploadExtraData: {id: 'portada_hombre'},
    resizeImage: true,
    maxImageHeight: 800,
    resizePreference: 'height',
    allowedFileTypes: ['image']
  }).on("filebatchselected", function(event, files) {
    // trigger upload method immediately after files are selected
    $("#portada_hombre").fileinput("upload");
    var elem = $("#portada_hombre").fileinput('getFrames');
    //console.log(elem[0]);
  });

});
