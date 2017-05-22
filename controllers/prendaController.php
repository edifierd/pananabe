<?php

class prendaController extends sitioWebController{
	
    private $_prenda;
	private $_categorias;

    public function __construct(){
        parent::__construct();
        $this->_prenda = $this->loadModel('prenda');
		$this->_categorias = $this->loadModel('categorias');
    }
	
	public function index(){	
		$this->categoria('todo');
    }
	
	public function categoria($categoriaIdentificador,$id_categoria=false){
		$this->_view->assign('description', 'Trajes de baño Panana Be.Vea mallas para Hombre, Mujer, Niños y Niñas. Todos los talles y modelos disponibles como Bikini o mallas 
		enteras. Contamos con todas las formas de pago. Tarjeta de credito. ');
		$this->_view->assign('keywords', 'panana, panana be, pananabe, panana be argentina, argentina, traje de baño panana be, traje de baño argentina, malla, traje, traje de 
		baño, hombre, mujer, niño, niña, malla hombre, malla mujer, bikini, bikini mujer, entera, malla entera, malla entera mujer, formas de pago, talles, tarjeta, cuotas, modelo,
		modelos, short, short hombre, temporada, año');
		$this->_view->assign('tituloAuxiliar',$categoriaIdentificador);
        $this->_view->assign('titulo', 'Todos los modelos - Panana Be Argentina');
		$this->_view->setJs(array('paginadorIndex'));
		
		if (($categoriaIdentificador == 'hombre') or ($categoriaIdentificador == 'mujer')){			
			$prendas = $this->_prenda->allByGenero($categoriaIdentificador);
			$this->_id_categoria = $categoriaIdentificador;
		} elseif ($categoriaIdentificador == 'todo'){
			$prendas = $this->_prenda->all();
			$this->_id_categoria = $categoriaIdentificador;
		} else {
			$prendas = $this->_prenda->all((int)$id_categoria);
		}
		
		$paginador = new Paginador();
		if ($this->getInt('pagina')){
			$pagina = $this->getInt('pagina');
			$this->_view->assign('prendas', $paginador->paginar($prendas,$pagina,8));
			$this->_view->assign('paginacion', $paginador->getView('paginacion_ajax'));
			$_params = array(
				'root' => BASE_URL,
			);
			$this->_view->assign('_layoutParams', $_params);
			$this->_view->renderizar('ajax/listaPrendas', false, true);
		} else {
			$this->_view->assign('prendas', $paginador->paginar($prendas,false,8));
			$this->_view->assign('paginacion', $paginador->getView('paginacion_ajax'));
			$this->_view->renderizar('categoria', $categoriaIdentificador);
		}
	}
		
	public function show($id){
        if(!$this->filtrarInt($id)){
            $this->redireccionar('prenda');
        }
		
		$prenda = $this->_prenda->find(array('id' => $this->filtrarInt($id))); 
        if(!$prenda){
            $this->redireccionar('prenda');
        }
		
        $this->_view->assign('marcado', '
		<script type="application/ld+json">
			{
  			"@context": "http://schema.org",
  			"@type": "Product",
  			"description": "'.$prenda['descripcion'].'",
  			"name": "'.$prenda['nombre'].'",
  			"image": "'.BASE_URL.'public/img/prendas/'.$prenda['foto_frente'].'",
  			"offers": {
    			"@type": "Offer",
    			"availability": "'.BASE_URL.'prenda/show/'.$prenda['id'].'",
    			"price": "'.$prenda['precio'].'",
    			"priceCurrency": "Peso ARG"
  			},
  			"url": "'.BASE_URL.'prenda/show/'.$prenda['id'].'"
			}
		</script>
		');
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
	

	
	public function getModel($nombre){}
   
}

?>
