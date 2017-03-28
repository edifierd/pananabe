<?php

class categoriasController extends administradorController {
	
	private $_categorias;
	
    public function __construct() {
        parent::__construct();
		$this->_categorias = $this->loadModel('categorias');
    }
    
    public function index(){
        $this->_view->assign('titulo', 'Categorias');
        $this->_view->renderizar('index');
    }
    
	
	public function nuevo(){
		$this->_acl->acceso('nuevo_categoria');
        
		$this->_view->assign('titulo', 'Nueva Categoria');
        
        if($this->getInt('enviar') == 1){ //Si recibo los datos
            $this->_view->assign('datos', $_POST);
			
			
			if ($this->getTexto('genero') == ''){
				$this->_view->assign('_error', 'No se ha ingresado un genero.');
                $this->_view->renderizar('nuevo', '');
                exit;
			}

			if (!$this->getTexto('nombre')){
				$this->_view->assign('_error', 'No se ha ingresado un nombre.');
                $this->_view->renderizar('nuevo', '');
                exit;
			}
			//echo $this->getSqlName('nombre');exit;
			if(!$this->_categorias->nuevo(array(genero => $this->getTexto('genero'),nombre => $this->getTexto('nombre'), identificador => $this->getSqlName('nombre')))){
				$this->_view->assign('_error', 'No se ha podigo crear la categoria.');
                $this->_view->renderizar('nuevo', '');
                exit;
			} 
			$this->redireccionar('administrador');
		}
		
		$this->_view->renderizar('nuevo');
	}

}

?>