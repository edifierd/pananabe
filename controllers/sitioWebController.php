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
									'id' => $item['identificador'],
                					'titulo' => mb_strtoupper($item['nombre']),
               						'enlace' => BASE_URL.'prenda/categoria/'.$item['identificador'].'/'.$item['id'],
                					'imagen' => '',
									'dropdown' => ''
							);
		}
		$mujer[9999] = array(
									'id' => 'mujer',
                					'titulo' => 'TODO MUJER',
               						'enlace' => BASE_URL.'prenda/categoria/mujer',
                					'imagen' => '',
									'dropdown' => ''
							);
		//-----------------------------------------
		$hombre = array();
		foreach ($this->_categorias->get('hombre') as $item){
			$hombre[$item['id']] = array(
									'id' => $item['identificador'],
                					'titulo' => mb_strtoupper($item['nombre']),
               						'enlace' => BASE_URL.'prenda/categoria/'.$item['identificador'].'/'.$item['id'],
                					'imagen' => '',
									'dropdown' => ''
								);
		}
		$hombre[9999] = array(
									'id' => 'hombre',
                					'titulo' => 'TODO HOMBRE',
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
                'enlace' => BASE_URL . 'prenda/categoria/todo',
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
