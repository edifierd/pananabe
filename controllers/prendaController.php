<?php

class prendaController extends Controller
{
    private $_prenda;

    public function __construct() 
    {
        parent::__construct();
        $this->_prenda = $this->loadModel('prenda');
    }
	
	public function todo(){	
		//echo "Session Index= ".Session::get("rubro");
		Session::set("rubro",0);
    	$paginador = new Paginador();
        $this->_view->assign('prendas', $paginador->paginar($this->_prenda->all(),false,8));
		$this->_view->assign('paginacion', $paginador->getView('paginacion_ajax'));
				
		$this->_view->assign('marcado', '');
		$this->_view->assign('description', 'Trajes de baño Panana Be.Vea mallas para Hombre, Mujer, Niños y Niñas. Todos los talles y modelos disponibles como Bikini o mallas enteras. Contamos con todas las formas de pago. Tarjeta de credito. ');
		$this->_view->assign('keywords', 'panana, panana be, pananabe, panana be argentina, argentina, traje de baño panana be, traje de baño argentina, malla, traje, traje de baño, hombre, mujer, niño, niña, malla hombre, malla mujer, bikini, bikini mujer, entera, malla entera, malla entera mujer, formas de pago, talles, tarjeta, cuotas, modelo, modelos, short, short hombre, temporada, año');
        $this->_view->assign('titulo', 'Todos los modelos - Panana Be Argentina');
		$this->_view->assign('tituloAuxiliar','');
		$this->_view->setJs(array('paginadorIndex'));
        $this->_view->renderizar('index', 'todo');
    }
	
	public function hombre(){
		Session::set("rubro",1);
		//echo "Session  hombre = ".$_SESSION["rubro"];
    	$paginador = new Paginador();
        $this->_view->assign('prendas', $paginador->paginar($this->_prenda->all(1),false,8));
		$this->_view->assign('paginacion', $paginador->getView('paginacion_ajax'));
				
		$this->_view->assign('marcado', '');
		$this->_view->assign('description', 'Trajes de baño Panana Be.Vea mallas para Hombre todos los talles y modelos disponibles. Contamos con todas las formas de pago. Tarjeta de credito. Todos los talles. ');
		$this->_view->assign('keywords', 'panana, panana be, pananabe, panana be argentina, argentina, traje de baño panana be, traje de baño argentina, malla, traje, traje de baño, hombre, mujer, niño, niña, malla hombre, malla mujer, bikini, bikini mujer, entera, malla entera, malla entera mujer, formas de pago, talles, tarjeta, cuotas, modelo, modelos, short, short hombre, temporada, año');
        $this->_view->assign('titulo', 'Hombre trajes de baño - Panana Be Argentina');
		$this->_view->assign('tituloAuxiliar','para Hombre');
		$this->_view->setJs(array('paginadorIndex'));
        $this->_view->renderizar('index', 'hombre');
    }
	
	public function mujer(){	
		Session::set("rubro",2);
		//echo "Session  hombre = ".Session::get("rubro");
    	$paginador = new Paginador();
        $this->_view->assign('prendas', $paginador->paginar($this->_prenda->all(2),false,8));
		$this->_view->assign('paginacion', $paginador->getView('paginacion_ajax'));
				
		$this->_view->assign('marcado', '');
		$this->_view->assign('description', 'Trajes de baño Panana Be.Vea mallas para Mujer todos los talles y modelos disponibles como bikini o malla enteras. Contamos con todas las formas de pago. Tarjeta de credito. Todos los talles. ');
		$this->_view->assign('keywords', 'panana, panana be, pananabe, panana be argentina, argentina, traje de baño panana be, traje de baño argentina, malla, traje, traje de baño, hombre, mujer, niño, niña, malla hombre, malla mujer, bikini, bikini mujer, entera, malla entera, malla entera mujer, formas de pago, talles, tarjeta, cuotas, modelo, modelos, short, short hombre, temporada, año');
        $this->_view->assign('titulo', 'Mujer trajes de baño - Panana Be Argentina');
		$this->_view->assign('tituloAuxiliar','para Mujer');
		$this->_view->setJs(array('paginadorIndex'));
        $this->_view->renderizar('index', 'mujer');
    }

	public function bikini(){	
		Session::set("rubro",3);
    	$paginador = new Paginador();
        $this->_view->assign('prendas', $paginador->paginar($this->_prenda->all(3),false,8));
		$this->_view->assign('paginacion', $paginador->getView('paginacion_ajax'));
				
		$this->_view->assign('marcado', '');
		$this->_view->assign('description', 'Trajes de baño Panana Be.Vea mallas para Mujer todos los modelos disponibles en Bikinis. Contamos con todas las formas de pago. Tarjeta de credito. Todos los talles. ');
		$this->_view->assign('keywords', 'panana, panana be, pananabe, panana be argentina, argentina, traje de baño panana be, traje de baño argentina, malla, traje, traje de baño, hombre, mujer, niño, niña, malla hombre, malla mujer, bikini, bikini mujer, entera, malla entera, malla entera mujer, formas de pago, talles, tarjeta, cuotas, modelo, modelos, short, short hombre, temporada, año');
        $this->_view->assign('titulo', 'Bikini Mujer trajes de baño - Panana Be Argentina');
		$this->_view->assign('tituloAuxiliar','en bikini para Mujer');
		$this->_view->setJs(array('paginadorIndex'));
        $this->_view->renderizar('index', 'mujer');
    }
	
	public function entera(){	
		Session::set("rubro",4);
    	$paginador = new Paginador();
        $this->_view->assign('prendas', $paginador->paginar($this->_prenda->all(4),false,8));
		$this->_view->assign('paginacion', $paginador->getView('paginacion_ajax'));
				
		$this->_view->assign('marcado', '');
		$this->_view->assign('description', 'Trajes de baño Panana Be.Vea mallas para Mujer todos los modelos disponibles en Bikinis. Contamos con todas las formas de pago. Tarjeta de credito. Todos los talles.');
		$this->_view->assign('keywords', 'panana, panana be, pananabe, panana be argentina, argentina, traje de baño panana be, traje de baño argentina, malla, traje, traje de baño, hombre, mujer, niño, niña, malla hombre, malla mujer, bikini, bikini mujer, entera, malla entera, malla entera mujer, formas de pago, talles, tarjeta, cuotas, modelo, modelos, short, short hombre, temporada, año');
        $this->_view->assign('titulo', 'entera Mujer trajes de baño - Panana Be Argentina');
		$this->_view->assign('tituloAuxiliar','en Entera para Mujer');
		$this->_view->setJs(array('paginadorIndex'));
        $this->_view->renderizar('index', 'mujer');
    }
	
	public function paginador(){
		$rubro = Session::get("rubro");
		//echo "Session Paginador = ".$_SESSION["rubro"];
		
		$pagina = $this->getInt('pagina'); //Recibe el numero de la pagina por POST
		
		$paginador = new Paginador();
		$this->_view->assign('prendas', $paginador->paginar($this->_prenda->all($rubro), $pagina,8));
		$this->_view->assign('paginacion', $paginador->getView('paginacion_ajax'));
		
		$_params = array(
			'root' => BASE_URL,
		);
		
		$this->_view->assign('_layoutParams', $_params);	
		$this->_view->renderizar('ajax/listaPrendas', false, true);
	}
	
	public function show($id)
    {
        if(!$this->filtrarInt($id)){
            $this->redireccionar('prenda');
        }
        
        if(!$this->_prenda->find($this->filtrarInt($id))){
            $this->redireccionar('prenda');
        }
		
		$prenda =  $this->_prenda->find($this->filtrarInt($id));
		
        $this->_view->assign('marcado', '');
		$this->_view->assign('description', 'Traje de baño modelo '.$prenda['nombre'].' Panana Be Argentina para '.$prenda['genero'].'. Temporada '.$prenda['temporada'].' '.$prenda['descripcion']);
		$this->_view->assign('keywords', $prenda['nombre'].','.$prenda['nombre'].' Panana Be,'.$prenda['nombre'].' temporada '.$prenda['temporada'].', panana, panana be, pananabe, panana be argentina, argentina, traje de baño panana be, traje de baño argentina, malla, traje, traje de baño, hombre, mujer, niño, niña, malla hombre, malla mujer, bikini, bikini mujer, entera, malla entera, malla entera mujer, formas de pago, talles, tarjeta, cuotas, modelo, modelos, short, short hombre, temporada, año');
        $this->_view->assign('titulo', $prenda['nombre']."- Panana Be Argentina");
        $this->_view->setCss(array('estilos'));
		$this->_view->setJs(array('validacionTalleCantidad'));
		$this->_view->assign('datos',$prenda);
        $this->_view->renderizar('show', '');
    }
	
	public function tabla_de_talles(){
		$this->_view->assign('marcado', '');
		$this->_view->assign('description', 'Tabla de talles Panana Be Argentina. Encuentre todos nuestros modelos en el listada de hombre y mujer. ');
		$this->_view->assign('keywords', 'panana, panana be, pananabe, panana be argentina, argentina, traje de baño panana be, traje de baño argentina, malla, traje, traje de baño, hombre, mujer, niño, niña, malla hombre, malla mujer, bikini, bikini mujer, entera, malla entera, malla entera mujer, formas de pago, talles, tarjeta, cuotas, modelo, modelos, short, short hombre, temporada, año');
        $this->_view->assign('titulo', "Tabla de Talles - Panana Be Argentina");
        $this->_view->renderizar('tablaTalles', '');
	}
	
	
	public function nuevo()
    {
        $this->_acl->acceso('nuevo_post');
        
        $this->_view->assign('titulo', 'Nuevo Post');
        $this->_view->setJsPlugin(array('jquery.validate'));
        $this->_view->setJs(array('nuevo'));
        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getTexto('titulo')){
                $this->_view->assign('_error', 'Debe introducir el titulo del post');
                $this->_view->renderizar('nuevo', 'post');
                exit;
            }
            
            if(!$this->getTexto('cuerpo')){
                $this->_view->assign('_error', 'Debe introducir el cuerpo del post');
                $this->_view->renderizar('nuevo', 'post');
                exit;
            }
            
            $imagen = '';
            
            if($_FILES['imagen']['name']){
                $ruta = ROOT . 'public' . DS . 'img' . DS . 'post' . DS;
                $upload = new upload($_FILES['imagen'], 'es_Es');
                $upload->allowed = array('image/*');
                $upload->file_new_name_body = 'upl_' . uniqid();
                $upload->process($ruta);
                
                if($upload->processed){
                    $imagen = $upload->file_dst_name;
                    $thumb = new upload($upload->file_dst_pathname);
                    $thumb->image_resize = true;
                    $thumb->image_x = 100;
                    $thumb->image_y = 70;
                    $thumb->file_name_body_pre = 'thumb_';
                    $thumb->process($ruta . 'thumb' . DS);
                }
                else{
                    $this->_view->assign('_error', $upload->error);
                    $this->_view->renderizar('nuevo', 'post');
                    exit;
                }
            }
            
            $this->_post->insertarPost(
                    $this->getPostParam('titulo'),
                    $this->getPostParam('cuerpo'),
                    $imagen
                    );
            
            $this->redireccionar('post');
        }       
        
        $this->_view->renderizar('nuevo', 'post');
    }
    
    public function editar($id)
    {
        $this->_acl->acceso('editar_post');
        
        if(!$this->filtrarInt($id)){
            $this->redireccionar('post');
        }
        
        if(!$this->_post->getPost($this->filtrarInt($id))){
            $this->redireccionar('post');
        }
        
        $this->_view->assign('titulo', 'Editar Post');
        $this->_view->setJs(array('nuevo'));
        
        if($this->getInt('guardar') == 1){
            $this->_view->assign('datos', $_POST);
            
            if(!$this->getTexto('titulo')){
                $this->_view->assign('_error', 'Debe introducir el titulo del post');
                $this->_view->renderizar('editar', 'post');
                exit;
            }
            
            if(!$this->getTexto('cuerpo')){
                $this->_view->assign('_error', 'Debe introducir el cuerpo del post');
                $this->_view->renderizar('editar', 'post');
                exit;
            }
            
            $this->_post->editarPost(
                    $this->filtrarInt($id),
                    $this->getPostParam('titulo'),
                    $this->getPostParam('cuerpo')
                    );
            
            $this->redireccionar('post');
        }
        
        $this->_view->assign('datos', $this->_post->getPost($this->filtrarInt($id)));
        $this->_view->renderizar('editar', 'post');
    }
    
    public function eliminar($id)
    {
        $this->_acl->acceso('eliminar_post');
        
        if(!$this->filtrarInt($id)){
            $this->redireccionar('post');
        }
        
        if(!$this->_post->getPost($this->filtrarInt($id))){
            $this->redireccionar('post');
        }
        
        $this->_post->eliminarPost($this->filtrarInt($id));
        $this->redireccionar('post');
    }
	
	public function index(){	
		//echo "Session Index= ".Session::get("rubro");
    	/*$paginador = new Paginador();
        $this->_view->assign('prendas', $paginador->paginar($this->_prenda->all(),false,8));
		$this->_view->assign('paginacion', $paginador->getView('paginacion_ajax'));
				
		$this->_view->assign('marcado', '');
		$this->_view->assign('description', '');
		$this->_view->assign('keywords', '');
        $this->_view->assign('titulo', 'Ver Todo');
		$this->_view->setJs(array('paginadorIndex'));
        $this->_view->renderizar('all', 'todo');*/
    }
   
   
   /*
   public function prueba($pagina = false){
		
	$paginador = new Paginador();
		
        //$ajaxModel = $this->loadModel('ajax');
        $this->_view->setJs(array('prueba'));
        $this->_view->assign('posts', $paginador->paginar($this->_prenda->getPrendas()),false,9,false);
		$this->_view->assign('paginacion', $paginador->getView('paginacion_ajax'));
		
        $this->_view->assign('marcado', '');
		$this->_view->assign('description', '');
		$this->_view->assign('keywords', '');
        $this->_view->assign('titulo', 'Ver Todo');
        $this->_view->renderizar('prueba', 'prueba');
   }
   
   
   public function index($pagina = false)
    {
        if(!$this->filtrarInt($pagina)){
           $pagina = false;
        }
        else{
           $pagina = (int) $pagina;
        }
		
    	$this->getLibrary('class.paginador');
		$paginador = new Paginador();
		
		
		$this->_view->setJs(array('prueba'));
        $this->_view->assign('posts', $paginador->paginar($this->_post->getPrendas(), $pagina));
		$this->_view->assign('paginacion', $paginador->getView('prueba','prenda/index'));
		
		$this->_view->assign('marcado', '');
		$this->_view->assign('description', '');
		$this->_view->assign('keywords', '');
        $this->_view->assign('titulo', 'Ver Todo');
		
        $this->_view->renderizar('index', 'todo');
    }*/
	
		/*public function paginadorEntera(){
		$pagina = $this->getInt('pagina'); //Recibe el numero de la pagina por POST
		
		$paginador = new Paginador();
		
		$this->_view->assign('prendas', $paginador->paginar($this->_prenda->all(3), $pagina,8));
		$this->_view->assign('paginacion', $paginador->getView('paginacion_ajax'));
		
		$_params = array(
			'root' => BASE_URL,
		);
		
		$this->_view->assign('_layoutParams', $_params);
		
		$this->_view->renderizar('ajax/listaPrendas', false, true);
	}*/
	
	
	/*public function paginadorBikini(){
		$pagina = $this->getInt('pagina'); //Recibe el numero de la pagina por POST
		
		$paginador = new Paginador();
		
		$this->_view->assign('prendas', $paginador->paginar($this->_prenda->all(2), $pagina,8));
		$this->_view->assign('paginacion', $paginador->getView('paginacion_ajax'));
		
		$_params = array(
			'root' => BASE_URL,
		);
		
		$this->_view->assign('_layoutParams', $_params);
		
		$this->_view->renderizar('ajax/listaPrendas', false, true);
	}*/
	
	
	/*public function paginadorMujer(){
		$pagina = $this->getInt('pagina'); //Recibe el numero de la pagina por POST
		
		$paginador = new Paginador();
		
		$this->_view->assign('prendas', $paginador->paginar($this->_prenda->all(4), $pagina,8));
		$this->_view->assign('paginacion', $paginador->getView('paginacion_ajax'));
		
		$_params = array(
			'root' => BASE_URL,
		);
		
		$this->_view->assign('_layoutParams', $_params);
		
		$this->_view->renderizar('ajax/listaPrendas', false, true);
	}*/
	
	/*public function paginadorHombre(){
		$pagina = $this->getInt('pagina'); //Recibe el numero de la pagina por POST
		
		$paginador = new Paginador();
		
		$this->_view->assign('prendas', $paginador->paginar($this->_prenda->all(1), $pagina,8));
		$this->_view->assign('paginacion', $paginador->getView('paginacion_ajax'));
		
		$_params = array(
			'root' => BASE_URL,
		);
		
		$this->_view->assign('_layoutParams', $_params);
		
		$this->_view->renderizar('ajax/listaPrendas', false, true);
	}*/
}

?>
