
	cantImagenesCargadas = 0;
	
	rutas = [];
	
	for (i = 0; i < 6; i++) { 
    	$('#imagen'+i+'Carga').hide();
	}

	function mostrarFoto(fotoNombre,numFoto,controlador){
		if( fotoNombre != ''){
			
			$('#imagen'+numFoto+'Foto').hide();
			$('#imagen'+numFoto+'Carga').show();
			
			rutas.push(_root_+'public/img/'+controlador+'/upl_'+fotoNombre+'.jpg');	
			
			cantImagenesCargadas+=1;
			setTimeout(function() {
				ruta = rutas.shift();
				var ajax = $.ajax({
                  type: "GET",
                  url : ruta,
                  success : function(data){
                  	$('#imagen'+numFoto+'Foto').attr('src',ruta);
                  },
                  error: function(){
                    alert("No se ha podido cargar el archivo");
                  }
                });
				$('#imagen'+numFoto+'Foto').show();
				$('#imagen'+numFoto+'Carga').hide();
       	   	}, 10000);
        }
	}
	