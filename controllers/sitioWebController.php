<?php

class sitioWebController extends Controller {    

	private $_categorias;
	
    public function __construct(){	
        parent::__construct();
		$this->_categorias = $this->loadModel('categorias');
		$this->_view->assign('menu', $this->generarMenu());
    }
    
    public function index(){
	}
	
	public function getModel($nombre){
	}

	private function generarMenu(){
		$mujer = array();
		foreach ($this->_categorias->get('mujer') as $item){
			$mujer[$item['id']] = array(
									'id' => strtolower($item['nombre']),
                					'titulo' => strtoupper($item['nombre']),
               						'enlace' => BASE_URL.'prenda/categoria/'.$item['identificador'],
                					'imagen' => '',
									'dropdown' => ''
							);
		}
		$mujer[9999] = array(
									'id' => 'todo',
                					'titulo' => 'TODO',
               						'enlace' => BASE_URL.'prenda/categoria/mujer',
                					'imagen' => '',
									'dropdown' => ''
							);
		//-----------------------------------------
		$hombre = array();
		foreach ($this->_categorias->get('hombre') as $item){
			$hombre[$item['id']] = array(
									'id' => strtolower($item['nombre']),
                					'titulo' => strtoupper($item['nombre']),
               						'enlace' => BASE_URL.'prenda/'.strtolower($item['nombre']),
                					'imagen' => '',
									'dropdown' => ''
								);
		}
		$hombre[9999] = array(
									'id' => 'todo',
                					'titulo' => 'TODO',
               						'enlace' => BASE_URL.'prenda/categoria/hombre',
                					'imagen' => '',
									'dropdown' => ''
								);

		$menu = array(
			array(
                'id' => 'inicio',
                'titulo' => 'INICIO',
                'enlace' => BASE_URL,
                'imagen' => '',
				'dropdown' => ''
                ),
				
            array(
                'id' => 'hombre',
                'titulo' => 'HOMBRE',
                'enlace' => BASE_URL.'prenda/hombre',
                'imagen' => '',
				'dropdown' => $hombre
                ),
				
			array(
                'id' => 'mujer',
                'titulo' => 'MUJER',
                'enlace' => BASE_URL,
                'imagen' => '',
                'dropdown' => $mujer
				),

			array(
                'id' => 'todo',
                'titulo' => 'VER TODO',
                'enlace' => BASE_URL . 'prenda/todo',
                'imagen' => '',
				'dropdown' => ''
                ),
				
			array(
                'id' => 'contacto',
                'titulo' => 'CONTACTO',
                'enlace' => BASE_URL.'contacto',
                'imagen' => '',
				'dropdown' => ''
                )
			
        );
		return $menu;
	}
}

?>
