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
		$this->redireccionar('administrador/prendas/listado/act');
	}

    public function listado($estado = 'act'){
		$this->_view->assign('titulo', 'Administracion de Prendas');
		$this->_view->assign('prendas',$this->_prendas->all(false,$estado));
		$this->_view->assign('categoriasModel',$this->_categorias);

		$this->_view->renderizar('listado', '');
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

			if(!$this->getTexto('nombre')){
				$this->_view->assign('_error', 'No se ha ingresado un Nombre valido.');
                $this->_view->renderizar('nuevo', '');
                exit;
			}

			$cantCaracteres = strlen($this->getTexto('nombre'));
			if($cantCaracteres > 20 ){
				$this->_view->assign('_error', 'El nombre no puede superar los <b>20</b> caracteres. [ contiene = '.$cantCaracteres.' ]');
                $this->_view->renderizar('nuevo', '');
                exit;
			}

			if(!$this->getTexto('descripcion')){
				$this->_view->assign('_error', 'No se ha ingresado una descripcion.');
                $this->_view->renderizar('nuevo', '');
                exit;
			}

			$cantCaracteres = strlen($this->getTexto('descripcion'));
			if($cantCaracteres > 200 ){
				$this->_view->assign('_error', 'El descripcion no puede superar los <b>200</b> caracteres. [ contiene = '.$cantCaracteres.' ]');
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
							'descuento' => 0,
							'categorias' => $this->getPostParam('categorias')
			);
			//PROCEDO A CARGAR LA PRENDA
			if ($this->_prendas->editar($parametros)){
				$this->_view->assign('_mensaje', 'Se cargo correctamente la informacion de la prenda');
				Session::destroy("id_prenda");
			} else {
				$this->_view->assign('_error', 'Algo salio mal. Intente cargar la prenda nuevamente.');
			}
			$this->redireccionar('administrador/prendas/listado');
		} else {
			if(!Session::get("id_prenda")){
				Session::set("id_prenda",$this->_prendas->nuevo(array()));
			}
			$this->_view->assign('datos', array('foto_frente' => ''));
		}
		$this->_view->assign('id_prenda',Session::get("id_prenda"));
    $this->_view->setJs(array('plugins/piexif.min','fileinput.min','locales/es','uploader'));
    $this->_view->setCss(array('fileinput.min','fileinput-rtl.min'));
		$this->_view->renderizar('nuevo', '');
	}

	public function editar($id){
		$this->_acl->acceso('editar_prenda');

		$id = (int) $id;
		$prenda = $this->_prendas->find(array('id' => $id));
		if(!$prenda){
			$this->redireccionar('administrador/prendas/listado');
		}

		if($prenda['estado'] != 'act' ){
			$this->redireccionar('administrador/prendas/listado');
		}

		$this->_view->assign('id_prenda',$id);
		$this->_view->assign('datos', $prenda);
		$this->_view->assign('imgs', $prenda);
		$this->_view->assign('categoriasModel',$this->_categorias);
		$this->_view->assign('categorias', $this->_categorias->all());

		$this->_view->setJsPlugin(array('canvas-to-blob.min','resize','process','validaciones'),'imgUploader');
		$this->_view->assign('titulo', 'Editar Prenda');

		if ($this->getInt('guardar') == 1){
			$this->_view->assign('datos', $_POST);

			if (!is_array($this->getPostParam('categorias'))){
				$this->_view->assign('_error', 'Debe seleccionar una categoria');
				$this->_view->renderizar('editar', '');
				exit;
		    }

			if(!$this->getTexto('nombre')){
				$this->_view->assign('_error', 'No se ha ingresado un Nombre valido.');
                $this->_view->renderizar('editar', '');
                exit;
			}

			$cantCaracteres = strlen($this->getTexto('nombre'));
			if($cantCaracteres > 20 ){
				$this->_view->assign('_error', 'El nombre no puede superar los <b>20</b> caracteres. [ contiene = '.$cantCaracteres.' ]');
                $this->_view->renderizar('editar', '');
                exit;
			}

			if(!$this->getTexto('descripcion')){
				$this->_view->assign('_error', 'No se ha ingresado una descripcion.');
                $this->_view->renderizar('editar', '');
                exit;
			}

			$cantCaracteres = strlen($this->getTexto('descripcion'));
			if($cantCaracteres > 200 ){
				$this->_view->assign('_error', 'El descripcion no puede superar los <b>200</b> caracteres. [ contiene = '.$cantCaracteres.' ]');
                $this->_view->renderizar('editar', '');
                exit;
			}

			if(!$this->getInt('temporada')){
				$this->_view->assign('_error', 'No se ha ingresado una temporada.');
                $this->_view->renderizar('editar', '');
                exit;
			}

			if(!$this->getInt('precio')){
				$this->_view->assign('_error', 'No se ha indicado un precio. O no es valido.');
                $this->_view->renderizar('editar', '');
                exit;
			}

			if(($this->getInt('descuento') < 0) or ($this->getInt('descuento') > 99) ){
				$this->_view->assign('_error', 'El valor indicado como descuento no parece ser correcto.');
                $this->_view->renderizar('editar', '');
                exit;
			}

			if(!$this->getInt('S') and ($this->getInt('S') != 0)){
				$this->_view->assign('_error', 'No se ha indicado el stock en talle S. O no es valido.');
                $this->_view->renderizar('editar', '');
                exit;
			}

			if(!$this->getInt('M') and ($this->getInt('M') != 0)){
				$this->_view->assign('_error', 'No se ha indicado indicado el stock en talle M. O no es valido.');
                $this->_view->renderizar('editar', '');
                exit;
			}

			if(!$this->getInt('L') and ($this->getInt('L') != 0)){
				$this->_view->assign('_error', 'No se ha indicado indicado el stock en talle L. O no es valido.');
                $this->_view->renderizar('editar', '');
                exit;
			}

			if(!$this->getInt('XL') and ($this->getInt('XL') != 0)){
				$this->_view->assign('_error', 'No se ha indicado indicado el stock en talle XL. O no es valido.');
                $this->_view->renderizar('editar', '');
                exit;
			}

			if(!$this->getInt('XXL') and ($this->getInt('XXL') != 0)){
				$this->_view->assign('_error', 'No se ha indicado indicado el stock en talle XXL. O no es valido.');
                $this->_view->renderizar('editar', '');
                exit;
			}

			$parametros = array(
							'id' => $id,
							'nombre' => $this->getTexto('nombre'),
							'descripcion' => $this->getTexto('descripcion'),
							'temporada' => $this->getTexto('temporada'),
							'precio' => $this->getInt('precio'),
							's' => $this->getInt('S'),
							'm' => $this->getInt('M'),
							'l' => $this->getInt('L'),
							'xl' => $this->getInt('XL'),
							'xxl' => $this->getInt('XXL'),
							'descuento' => $this->getInt('descuento'),
							'categorias' => $this->getPostParam('categorias')
			);
			//PROCEDO A CARGAR LA PRENDA
			if ($this->_prendas->editar($parametros)){
				$this->_view->assign('_mensaje', 'Se modifico correctamente la informacion de la prenda.');
			} else {
				$this->_view->assign('_error', 'Algo salio mal. Intente modificar la prenda nuevamente.');
			}
		}

		$this->_view->renderizar('editar', '');
	}

	public function eliminar($id){
		$this->_acl->acceso('eliminar_prenda');

		$id = (int) $id;

		$prenda = $this->_prendas->find(array('id' => $id));
		if(!$prenda){
			$this->redireccionar('administrador/prendas/listado');
		}

		$this->_prendas->eliminar(array('id' => $id));
		$this->redireccionar('administrador/prendas/listado');
	}

	public function reactivar($id){
		$this->_acl->acceso('editar_prenda');
		$id = (int) $id;

		$prenda = $this->_prendas->find(array('id' => $id));
		if(!$prenda){
			$this->redireccionar('administrador/prendas/listado');
		}

		$categorias = $this->_categorias->getCategoriasPrenda($id);

		if(count($categorias) == 0){
			$this->_view->assign('titulo', "Reactivar Prenda");
			$this->_view->assign('p', $prenda);
			$this->_view->assign('categorias', $this->_categorias->all());

			if ($this->getInt('guardar') == 1){
				if (!is_array($this->getPostParam('categorias'))){
					$this->_view->assign('_error', 'Debe seleccionar una categoria');
					$this->_view->renderizar('reactivar', '');
					exit;
		    	}

				$parametros = array(
							'id' => $id,
							'categorias' => $this->getPostParam('categorias')
				);
				$this->_prendas->insertarCategorias($parametros);
				$this->_prendas->modificarEstado($id,'act');
				$this->redireccionar('administrador/prendas/listado');
			}

			$this->_view->renderizar('reactivar', '');
			exit;
		}

		$this->_prendas->modificarEstado($id,'act');
		$this->redireccionar('administrador/prendas/listado');
	}

	public function uploadImagen(){

		$ruta = ROOT . 'public' . DS . 'img' . DS . 'prendas' . DS;
		$nombre = 'upl_'.uniqid();

		$img = new upload($_FILES['imagen']);
		$img->file_new_name_body = $nombre;
		$img->process($ruta);

		$thumb = new upload($img->file_dst_pathname);
		$thumb->file_name_body_pre = 'thumb_';
		$thumb->image_resize = true;
		$thumb->image_ratio = true;
		$thumb->image_y = $img->image_dst_y / 2;
		$thumb->image_x = $img->image_dst_x / 2;
		$thumb->process($ruta . 'thumb' . DS);

		$this->_prendas->modificarFoto($this->getInt('id'), 'foto_atras', $img->file_dst_name);
		echo json_encode(array());exit;
	}


}

?>
