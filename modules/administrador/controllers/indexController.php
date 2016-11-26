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
		$this->_view->setJs(array('archivo'));
		
	 	$this->_view->renderizar('index', 'usuarios');
	}
	
	public function cargarFoto(){
		$this->_view->assign('titulo', 'Admin Panel');
		$this->_view->assign('marcado', '');
        
        //$this->_view->assign('datos', $_POST);
		
		ini_set ( "upload_max_filesize" , "20M" );
		ini_set ( "post_max_size" , "20M" );
		ini_set ( "max_execution_time" , "300" );
		ini_set ( "max_input_time" , "300" );
		
 
        $imagen = '';
            
		
        if($_FILES['imagen']['name']){
        	$ruta = ROOT . 'public' . DS . 'img' . DS . 'prendas' . DS;
        	$upload = new upload($_FILES['imagen']);
			$upload->image_resize = true;
            $upload->image_x = 1000;
            $upload->image_y = 1000;
            $upload->allowed = array('image/*');
            $upload->file_new_name_body = 'upl_' . uniqid();
            $upload->process($ruta);
                
            if($upload->processed){
            	$imagen = $upload->file_dst_name;
            	$thumb = new upload($upload->file_dst_pathname);
            	$thumb->image_resize = true;
            	$thumb->image_x = 500;
            	$thumb->image_y = 500;
            	$thumb->file_name_body_pre = 'thumb_';
            	$thumb->process($ruta . 'thumb' . DS);
				$this->_view->assign('imagen', $imagen);
            }else{
            	$this->_view->assign('_error', $upload->error);
				echo $upload->error;
                //$this->_view->renderizar('nuevo', 'post');
            	exit;
            }
     	}
		
        $this->_view->renderizar('cargarFoto', 'usuarios');
	}
}

?>
