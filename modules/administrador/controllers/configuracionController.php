<?php

class configuracionController extends administradorController{
  private $_config;

  public function __construct(){
    parent::__construct();
    $this->_config = $this->loadModel('configuracion');
  }

  public function index(){

    if(!Session::get('autenticado')){
			$this->redireccionar('administrador/usuarios');
		}

    $this->_view->assign('titulo', 'Configuración Sistema');

    if($this->getInt('enviar') == 1){

    }

    $config = $this->_usuarios->find(array());
    $this->_view->assign('config', $config);
    $this->_view->renderizar('index','');
  }


}
?>
