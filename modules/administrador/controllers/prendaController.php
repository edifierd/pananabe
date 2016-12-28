<?php

class prendaController extends administradorController
{    
	private $_prenda;

    public function __construct() 
    {
        parent::__construct();
		$this->_prenda = $this->loadModel('prenda');
		ini_set('memory_limit', '500M');
		ini_set('upload_max_filesize', '10M');
		ini_set('post_max_size', '10M');
		ini_set('max_execution_time', 300);
    }
    
    public function index(){
		$this->_view->assign('titulo', 'Cargar informacion Prenda ');
		$this->_view->assign('marcado', '');
		if ($this->getInt('enviado') == 1){
			if ($this->_prenda->insertarPrenda(
							$this->getTexto('nombre'), 
							$this->getTexto('descripcion'),
							$this->getInt('precio'),
							$this->getInt('s'),
							$this->getInt('m'),
							$this->getInt('l'),
							$this->getInt('xl'),
							'', 
							'',
							'')
				 ) 
			{	
				$this->cargarFotos($this->_prenda->last());
				$this->_view->assign('_mensaje', 'Se cargaron correctamente los datos'); 
				exit;
			} else {
				$this->_view->assign('campos', $_POST);
				$this->_view->assign('_error', 'Algo salio mal. Intente cargar la prenda nuevamente.');
			}
		} 

	 	$this->_view->renderizar('index', 'usuarios');
	}
	
	public function cargarFotos($prenda = false){
		$this->_view->assign('titulo', 'Cargar Fotos de la Prenda');
		$this->_view->assign('prenda', $prenda);
		$this->_view->assign('marcado', '');
		$this->_view->setJs(array('canvas-to-blob.min','resize','process','validaciones'));

		$this->_view->renderizar('cargarFotos', '');
	}
	
	public function finalizarPublicacion(){
		if($this->getInt('enviado') == 1){
			$this->_view->assign('titulo', 'Publicacion Finalizada');
			$this->_view->assign('prenda', $this->_prenda->find($this->getInt('idPrenda')));
			$this->_view->assign('marcado', '');
			$this->_view->assign('_mensaje', 'Se finalizo exitosamente la publicacion');
			$this->_view->renderizar('finalizarPublicacion', '');
		} else {
			$this->_view->assign('_error', 'Algo salio mal. Intente cargar la prenda nuevamente.');
			$this->_view->renderizar('index', '');
		}
	}
	
	public function uploader(){
		// Recuperando imagem em base64
		// Exemplo: data:image/png;base64,AAAFBfj42Pj4
		$imagen = $_POST['imagen'];
		
		// Separando tipo dos datos da imagen
		// $tipo: data:image/png
		// $datos: base64,AAAFBfj42Pj4
		list($tipo, $datos) = explode(';', $imagen);

		// Isolando apenas o tipo da imagen
		// $tipo: image/png
		list(, $tipo) = explode(':', $tipo);
		

		// Isolando apenas os datos da imagen
		// $datos: AAAFBfj42Pj4
		list(, $datos) = explode(',', $datos);

		//Convertendo base64 para imagen
	    $datos = base64_decode($datos);

		// Gerando nombre aleatório para a imagen
		$nombre = 'upl_' . $_POST['nombre'];
		
		//Ruta
		$ruta = ROOT . 'public' . DS . 'img' . DS . 'prendas' . DS;

		
		// Salvando imagen em disco
		if (file_put_contents($ruta."{$nombre}.jpg", $datos)){
		
			$data = json_decode(stripslashes($_POST['datos']),true);

			$this->_prenda->modificarFoto($data[0],$data[1],"{$nombre}.jpg");
			
			$thumb = new upload($ruta."{$nombre}.jpg");
            $thumb->image_resize = true;
            $thumb->image_y = $thumb->image_dst_y / 2;
            $thumb->image_x = $thumb->image_dst_x / 2;
            $thumb->file_name_body_pre = 'thumb_';
            $thumb->process($ruta . 'thumb' . DS);
				
		}
	}
	
	
	
	
	/*
	public function guardarFoto($img){
		$imagen = false;
		if($img['imagen']['name']){
        	$ruta = ROOT . 'public' . DS . 'img' . DS . 'prendas' . DS;
            $upload = new upload($img['imagen']);
            //$upload->image_resize = true;
            //$upload->image_y = $upload->image_src_y / 2;
            //$upload->image_x = $upload->image_src_x / 2;
            $upload->allowed = array('image/*');
            $upload->file_new_name_body = 'upl_' . uniqid();
            $upload->process($ruta);
                
            if($upload->processed){
            	$imagen = $upload->file_dst_name;
                $thumb = new upload($upload->file_dst_pathname);
                //$thumb->image_resize = true;
                //$thumb->image_y = $upload->image_dst_y / 2;
            	//$thumb->image_x = $upload->image_dst_x / 2;
                $thumb->file_name_body_pre = 'thumb_';
                $thumb->process($ruta . 'thumb' . DS);
            }else{
                $this->_view->assign('_error', $upload->error);
                echo $upload->error;
                //exit;
            }
        }
		return $imagen;
	}*/
}

?>
