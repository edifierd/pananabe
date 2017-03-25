<?php

class indexController extends administradorController{
	
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
		if(!Session::get('autenticado')){
			$this->redireccionar('administrador/usuarios');
		}
		
        $this->_view->assign('titulo', 'Inicio');
        $this->_view->renderizar('index');
    }
    
}

?>