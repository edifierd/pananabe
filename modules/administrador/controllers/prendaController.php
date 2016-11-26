<?php

class prendaController extends administradorController
{    
	private $_prenda;

    public function __construct() 
    {
        parent::__construct();
		$this->_prenda = $this->loadModel('prenda');
    }
    
    public function index()
    {
		$this->_view->assign('titulo', 'Inicio');
		$this->_view->assign('marcado', '');
		
	 	$this->_view->renderizar('index', 'usuarios');
	}
	
	public function guardar(){
		$this->_view->assign('titulo', 'Guardar -Admin');
		$this->_view->assign('marcado', '');
        
        $this->_view->assign('datos', $_POST);
		
		//Session::set("step",0);
		
		if ($this->_prenda->insertarPrenda(
							$this->getTexto('nombre'), 
							$this->getTexto('descripcion'),
							$this->getInt('precio'),
							$this->getInt('s'),
							$this->getInt('m'),
							$this->getInt('l'),
							$this->getInt('xl'),
							'', 
							'',
							'')
							){
			
		} else {$this->_view->assign('_error', 'no se guardo');}
		
		$this->_view->renderizar('index', 'usuarios');
		
	}
	
	public function guardarFoto(){
		$this->_view->assign('titulo', 'Cargar Foto -Admin');
		$this->_view->assign('marcado', '');
        
        $this->_view->assign('datos', $_POST);
		
 
        $imagen = array(); 

        for ($i = 1; $i <= 3; $i++) {
            if($_FILES['imagen'.$i]['name']){
                $ruta = ROOT . 'public' . DS . 'img' . DS . 'prendas' . DS;
                $upload = new upload($_FILES['imagen'.$i]);
                $upload->image_resize = true;
                $upload->image_y = 700;
                $upload->image_x = 390;
                $upload->allowed = array('image/*');
                $upload->file_new_name_body = 'upl_' . uniqid();
                $upload->process($ruta);
                
                if($upload->processed){
                    $imagen[$i] = $upload->file_dst_name;
                    $thumb = new upload($upload->file_dst_pathname);
                    $thumb->image_resize = true;
                    $thumb->image_y = 350;
                    $thumb->image_x = 195;
                    $thumb->file_name_body_pre = 'thumb_';
                    $thumb->process($ruta . 'thumb' . DS);
                }else{
                    $this->_view->assign('_error', $upload->error);
                    echo $upload->error;
                    //$this->_view->renderizar('nuevo', 'post');
                    exit;
                }
            }

        }
            
		$this->_view->assign('imagen', $imagen);

		
        $this->_view->renderizar('cargarFoto', 'usuarios');
	}
}

?>
