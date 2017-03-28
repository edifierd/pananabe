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
			$this->redireccionar('administrador/prendas/listado');
		} else {
			if(!Session::get("id_prenda")){
				Session::set("id_prenda",$this->_prendas->nuevo(array()));
				$this->_view->assign('id_prenda',Session::get("id_prenda"));
			}
			$this->_view->assign('datos', array('foto_frente' => ''));
		}
		
		$this->_view->renderizar('nuevo', '');
	}
	
	public function editar($id){
		$this->_acl->acceso('editar_prenda');
		
		$id = (int) $id;
		$prenda = $this->_prendas->find(array('id' => $id));
		if(!$prenda){
			$this->redireccionar('administrador/prendas/listado');
		}
		$this->_view->assign('id_prenda',$id);
		$this->_view->assign('datos', $prenda);
		$this->_view->assign('categoriasModel',$this->_categorias);
		$this->_view->assign('categorias', $this->_categorias->all());
		
		$this->_view->setJsPlugin(array('canvas-to-blob.min','resize','process','validaciones'),'imgUploader');
		$this->_view->assign('titulo', 'Editar Prenda');
		
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
							'id' => $id,
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
				$this->_view->assign('_mensaje', 'Se modifico correctamente la informacion de la prenda.'); 
				Session::destroy("id_prenda");
			} else {
				print_r($parametros);exit;
				$this->_view->assign('_error', 'Algo salio mal. Intente cargar la prenda nuevamente.');
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
		
		$this->_prendas->modificarEstado($id,'act');
		$this->redireccionar('administrador/prendas/listado');
	}
	
	
}

?>
