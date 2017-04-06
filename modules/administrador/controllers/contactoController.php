<?php

class contactoController extends administradorController {
	
	private $_mensajes;
	
    public function __construct() {
        parent::__construct();
		$this->_mensajes = $this->loadModel('contacto');
    }
    
    public function index(){
		$this->_acl->acceso('control_categorias');
        $this->_view->assign('titulo', 'Categorias');
		$this->_view->assign('mensajes',$this->_mensajes->all());
        $this->_view->renderizar('index');
    }
	
	
}

?>