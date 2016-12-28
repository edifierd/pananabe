
	cant = 0;
	
	
	$("#btnvalidar").click(verificarFotos);

	
	function verificarFotos(){
		if ( cant == 3 ){
			return true;
		}
		alert("Debes cargar todas las fotos");
		return false;
	}
	
	function mostrarFoto(fotoNombre){
		if( fotoNombre != ''){
        	cant+=1;
			ruta = _root_+'public/img/prendas/upl_'+fotoNombre+'.jpg';
            //$('#imagen1Foto').show(); 
			alert('entro');
			setTimeout(function() {
				var ajax = $.ajax({
                  type: "GET",
                  url : ruta,
                  success : function(data){
                  	$('#imagen1Foto').attr('src',ruta);
                  },
                  error: function(){
                    alert("No se ha podido cargar el archivo");
                  }
                });
				alert('ya espere suficinte');
       	   	}, 5000);
			
			
			/*var img = $("<img />").attr('src',_root_+'public/img/prendas/upl_'+fotoNombre+'.jpg').on('load', function() {
							alert('llego aca');
        					if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) {
            						alert('broken image!');
       						} else {
            					$("#something").append(img);
        					}
   					 });*/
        }
	}
	
	