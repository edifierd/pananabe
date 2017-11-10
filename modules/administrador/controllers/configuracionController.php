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
      $config = $this->_config->editar(array(
        'direccion' => $this->getTexto('direccion'),
        'telefono' => $this->getTexto('telefono'),
        'email' => $this->getTexto('email'),
        'dir_facebook' => $this->getTexto('dir_facebook'),
        'dir_instagram' => $this->getTexto('dir_instagram'),
        'id' => 1
      ));
      if($config){
        $this->_view->assign('_mensaje', 'Se guardo correctamente la información'); 
      } else {
        $this->_view->assign('_error', 'Debe seleccionar una categoria');
      }
    }

    $config = $this->_config->find(array('id' => 1));
    $this->_view->assign('config', $config);
    $this->_view->renderizar('index','');
  }


}
?>
