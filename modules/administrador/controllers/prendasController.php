<?php

class prendasController extends administradorController{   
 
	private $_prendas;
	private $_categorias;

    public function __construct(){
        parent::__construct();
		$this->_acl->acceso('control_prendas');
		$this->_prendas = $this->loadModel('prendas');
		$this->_categorias = $this->loadModel('categorias');
		ini_set('memory_limit', '500M');
		ini_set('upload_max_filesize', '10M');
		ini_set('post_max_size', '10M');
		ini_set('max_execution_time', 300);
    }
	
	public function getModel($nombre){
		if($nombre == 'prendas'){
			return $this->_prendas;
		}
		return false;
	}
    
    public function index(){
		$this->_view->assign('titulo', 'Administracion de Prendas');
		$this->_view->renderizar('index', '');
	}
	
	public function nuevo(){
		$this->_acl->acceso('nuevo_prenda');
		$this->_view->setJsPlugin(array('canvas-to-blob.min','resize','process','validaciones'),'imgUploader');
		$this->_view->assign('categorias', $this->_categorias->all());
		$this->_view->assign('id_prenda',Session::get("id_prenda"));
		$this->_view->assign('titulo', 'Cargar Prenda');
		
		if ($this->getInt('guardar') == 1){
			$this->_view->assign('datos', $_POST);
			$id_prenda = Session::get("id_prenda");
			if (!is_array($this->getPostParam('categorias'))){
				$this->_view->assign('_error', 'Debe seleccionar una categoria');
				$this->_view->renderizar('nuevo', '');
				exit;
		    } 	

			if(!$this->getTexto('nombre')){
				$this->_view->assign('_error', 'No se ha ingresado un Nombre valido.');
                $this->_view->renderizar('nuevo', '');
                exit;
			}
			
			if(!$this->getTexto('descripcion')){
				$this->_view->assign('_error', 'No se ha ingresado una descripcion.');
                $this->_view->renderizar('nuevo', '');
                exit;
			}
			
			if(!$this->getInt('temporada')){
				$this->_view->assign('_error', 'No se ha ingresado una temporada.');
                $this->_view->renderizar('nuevo', '');
                exit;
			}
			
			if(!$this->getInt('precio')){
				$this->_view->assign('_error', 'No se ha indicado un precio. O no es valido.');
                $this->_view->renderizar('nuevo', '');
                exit;
			}
			
			if(!$this->getInt('s') and ($this->getInt('s') != 0)){
				$this->_view->assign('_error', 'No se ha indicado el stock en talle S. O no es valido.');
                $this->_view->renderizar('nuevo', '');
                exit;
			}
			
			if(!$this->getInt('m') and ($this->getInt('m') != 0)){
				$this->_view->assign('_error', 'No se ha indicado indicado el stock en talle M. O no es valido.');
                $this->_view->renderizar('nuevo', '');
                exit;
			}
			
			if(!$this->getInt('l') and ($this->getInt('l') != 0)){
				$this->_view->assign('_error', 'No se ha indicado indicado el stock en talle L. O no es valido.');
                $this->_view->renderizar('nuevo', '');
                exit;
			}
			
			if(!$this->getInt('xl') and ($this->getInt('xl') != 0)){
				$this->_view->assign('_error', 'No se ha indicado indicado el stock en talle XL. O no es valido.');
                $this->_view->renderizar('nuevo', '');
                exit;
			}
			
			if(!$this->getInt('xxl') and ($this->getInt('xxl') != 0)){
				$this->_view->assign('_error', 'No se ha indicado indicado el stock en talle XXL. O no es valido.');
                $this->_view->renderizar('nuevo', '');
                exit;
			}
			
			$parametros = array(
							'id' => $id_prenda,
							'nombre' => $this->getTexto('nombre'), 
							'descripcion' => $this->getTexto('descripcion'),
							'temporada' => $this->getTexto('temporada'),
							'precio' => $this->getInt('precio'),
							's' => $this->getInt('s'),
							'm' => $this->getInt('m'),
							'l' => $this->getInt('l'),
							'xl' => $this->getInt('xl'),
							'xxl' => $this->getInt('xxl'),
							'categorias' => $this->getPostParam('categorias')
			);
			//PROCEDO A CARGAR LA PRENDA
			if ($this->_prendas->editar($parametros)){	
				$this->_view->assign('_mensaje', 'Se cargo correctamente la informacion de la prenda'); 
				Session::destroy("id_prenda");
			} else {
				$this->_view->assign('_error', 'Algo salio mal. Intente cargar la prenda nuevamente.');
			}
			$this->redireccionar('administrador');
		} else {
			if(!Session::get("id_prenda")){
				Session::set("id_prenda",$this->_prendas->nuevo(array()));
				$this->_view->assign('id_prenda',Session::get("id_prenda"));
			}
			$this->_view->assign('datos', array('foto_frente' => ''));
		}
		
		$this->_view->renderizar('nuevo', '');
	}
	
	
	/*
	public function cargarGenero(){
		$this->_view->assign('titulo', 'Genero - Cargar Prenda');
		$this->_view->renderizar('cargarGenero', '');
	}
	
	public function cargarDatos(){
		if ($this->getInt('enviado') == 2){
			//ADMINISTRO LAS CATEGORIAS
			if ($this->getTexto('genero') == 'hombre'){ $genero = 1; }else{ $genero = 2; }
			if (is_array($this->getPostParam('categorias'))){
				$categorias = $this->getPostParam('categorias'); 
		    } else {
				$categorias = array();
			}	
			array_push($categorias, $genero);
			//PROCEDO A CARGAR LA PRENDA
			if ($this->_prendas->insertarPrenda(
							$this->getTexto('nombre'), 
							$this->getTexto('descripcion'),
							$this->filtrarInt($this->getTexto('temporada')),
							$this->getInt('precio'),
							$this->getInt('s'),
							$this->getInt('m'),
							$this->getInt('l'),
							$this->getInt('xl'),
							$categorias
							)
				 ) 
			{	
				$this->_view->assign('_mensaje', 'Se cargo correctamente la informacion de la prenda'); 
				$this->cargarFotos($this->_prendas->last());	
				exit;
			} else {
				$this->_view->assign('campos', $_POST);
				$this->_view->assign('_error', 'Algo salio mal. Intente cargar la prenda nuevamente.');
			}
		} 
		if ($this->getInt('enviado') == 1){
			$this->_view->assign('genero',$this->getTexto('genero'));
			$categorias = $this->_categorias->all($this->getTexto('genero'));
			if (empty($categorias)){
				$this->redireccionar('administrador');
			}
			$this->_view->assign('categoria', $categorias);
		}
		$this->_view->assign('titulo', 'Información - Cargar Prenda');
		$this->_view->setJs(array('validaciones'));
	 	$this->_view->renderizar('cargarDatos', '');
	}
	
	public function cargarFotos($prenda = false){
		$this->_view->assign('titulo', 'Fotos - Cargar Prenda');
		$this->_view->assign('prenda', $prenda);
		$this->_view->setJs(array('canvas-to-blob.min','resize','process','validaciones'));
		$this->_view->renderizar('cargarFotos', '');
	}
	
	public function finalizarPublicacion(){
		if($this->getInt('enviado') == 1){
			$prenda = $this->_prendas->find($this->getInt('idPrenda'));
			$this->_prendas->modificarEstado($prenda['id'],1);
			$this->_view->assign('titulo', 'Publicacion Finalizada');
			$this->_view->assign('prenda', $prenda);
			$this->_view->assign('_mensaje', 'Se finalizo exitosamente la publicacion');
			$this->_view->renderizar('cargarGenero', '');
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

			$this->_prendas->modificarFoto($data[0],$data[1],"{$nombre}.jpg");
			
			$thumb = new upload($ruta."{$nombre}.jpg");
            $thumb->image_resize = true;
            $thumb->image_y = $thumb->image_dst_y / 2;
            $thumb->image_x = $thumb->image_dst_x / 2;
            $thumb->file_name_body_pre = 'thumb_';
            $thumb->process($ruta . 'thumb' . DS);
				
		}
	}
	*/
}

?>
