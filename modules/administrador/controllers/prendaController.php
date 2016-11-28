<?php

class prendaController extends administradorController
{    
	private $_prenda;

    public function __construct() 
    {
        parent::__construct();
		$this->_prenda = $this->loadModel('prenda');
		ini_set('memory_limit', '500M');
    }
    
    public function index()
    {
		$this->_view->assign('titulo', 'Guardar Prenda 1 de 4');
		$this->_view->assign('marcado', '');
		
	 	$this->_view->renderizar('index', 'usuarios');
	}
	
	public function paso1(){
		$this->_view->assign('titulo', 'Guardar Prenda 2 de 4');
		$this->_view->assign('marcado', '');
        
        $this->_view->assign('producto', $_POST);
		$this->_view->renderizar('paso2', 'usuarios');
	}
	
	public function paso2(){
		$this->_view->assign('titulo', 'Guardar Prenda 3 de 4');
		$this->_view->assign('marcado', '');
		
		$this->_view->assign('fotoFrente',$this->guardarFoto($_FILES));
        $this->_view->assign('producto', $_POST);
		
		$this->_view->renderizar('paso3', 'usuarios');
	}
	
	public function paso3(){
		$this->_view->assign('titulo', 'Guardar Prenda 4 de 4');
		$this->_view->assign('marcado', '');
		
		$this->_view->assign('fotoPerfil',$this->guardarFoto($_FILES));
        $this->_view->assign('producto', $_POST);
		
		$this->_view->renderizar('paso4', 'usuarios');
	}
	
	public function paso4(){
		$this->_view->assign('titulo', 'Guardar -Admin');
		$this->_view->assign('marcado', '');
		
		$fotoAtras = $this->guardarFoto($_FILES);
        
        if ($this->_prenda->insertarPrenda(
							$this->getTexto('nombre'), 
							$this->getTexto('descripcion'),
							$this->getInt('precio'),
							$this->getInt('s'),
							$this->getInt('m'),
							$this->getInt('l'),
							$this->getInt('xl'),
							$this->getTexto('fotoFrente'), 
							$this->getTexto('fotoPerfil'),
							$fotoAtras)
							)
		{ $this->_view->assign('_mensaje', 'TODO CORRECTO'); } else {$this->_view->assign('_error', 'no se guardo');}
		
		$this->index();
	}
	
	public function guardarFoto($img){
		$imagen = false;
		if($img['imagen']['name']){
        	$ruta = ROOT . 'public' . DS . 'img' . DS . 'prendas' . DS;
            $upload = new upload($img['imagen']);
            //$upload->image_resize = true;
            //$upload->image_y = 700;
            //$upload->image_x = 390;
            $upload->allowed = array('image/*');
            $upload->file_new_name_body = 'upl_' . uniqid();
            $upload->process($ruta);
                
            if($upload->processed){
            	$imagen = $upload->file_dst_name;
                //$thumb = new upload($upload->file_dst_pathname);
                //$thumb->image_resize = true;
                //$thumb->image_y = 350;
                //$thumb->image_x = 195;
               // $thumb->file_name_body_pre = 'thumb_';
               // $thumb->process($ruta . 'thumb' . DS);
            }else{
                $this->_view->assign('_error', $upload->error);
                echo $upload->error;
                //exit;
            }
        }
		return $imagen;
	}
}

?>
