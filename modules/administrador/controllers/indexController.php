<?php

class indexController extends administradorController
{    
    public function __construct() 
    {
        parent::__construct();
    }
    
    public function index()
    {
		$this->_view->assign('titulo', 'Inicio');
		$this->_view->assign('marcado', '');
	 	$this->_view->renderizar('index', 'usuarios');
	}
}

?>
