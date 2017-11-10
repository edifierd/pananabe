$(document).ready(function() {

  $.ajax({
    type:"POST",
    url: _root_ + 'administrador/configuracion/get_portada',
    data:({ id: 'portada_hombre'}),
    dataType: "json",
    success:function(img){
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
        allowedFileTypes: ['image'],
        initialPreview: [ img.url ]
      }).on("filebatchselected", function(event, files) {
        // trigger upload method immediately after files are selected
        $("#portada_hombre").fileinput("upload");
        //var elem = $("#portada_hombre").fileinput('getFrames');
      });
    },
    error:function(xhr,err,e){
      alert("Error: " + err + xhr + e);
    }
  });

  $.ajax({
    type:"POST",
    url: _root_ + 'administrador/configuracion/get_portada',
    data:({ id: 'portada_mujer'}),
    dataType: "json",
    success:function(img){
      $("#portada_mujer").fileinput({
        uploadUrl: _root_ + 'administrador/configuracion/uploadPortada', // server upload action
        uploadAsync: false,
        showUpload: false, // hide upload button
        showRemove: false, // hide remove button
        showClose: false,
        minFileCount: 1,
        maxFileCount: 1,
        uploadExtraData: {id: 'portada_mujer'},
        resizeImage: true,
        maxImageHeight: 800,
        resizePreference: 'height',
        allowedFileTypes: ['image'],
        initialPreview: [ img.url ]
      }).on("filebatchselected", function(event, files) {
        // trigger upload method immediately after files are selected
        $("#portada_mujer").fileinput("upload");
        //var elem = $("#portada_mujer").fileinput('getFrames');
      });
    },
    error:function(xhr,err,e){
      alert("Error: " + err + xhr + e);
    }
  });




});
