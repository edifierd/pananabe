<?php

class mensajesController extends administradorController {
	
	private $_ventas;
	
    public function __construct() {
        parent::__construct();
		$this->_ventas = $this->loadModel('ventas');
    }
    
    public function index(){
		$this->_acl->acceso('control_ventas');
        $this->_view->assign('titulo', 'Listado de ventas');
		$this->_view->assign('ventas', $this->_ventas->all());
        $this->_view->renderizar('index');
    }
	

}

?>