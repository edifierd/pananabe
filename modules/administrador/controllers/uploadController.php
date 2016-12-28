<?php

class uploadController extends administradorController
{    

    public function __construct() 
    {
        parent::__construct();
    }
    
    public function index(){
		$this->_view->assign('titulo', 'Upload');
		$this->_view->assign('marcado', '');
		$this->_view->setJs(array('canvas-to-blob.min','resize','process'));
	 	$this->_view->renderizar('index', '');
	}
	
	public function uploader(){
		// Recuperando imagem em base64
		// Exemplo: data:image/png;base64,AAAFBfj42Pj4
		$imagen = $_POST['imagen'];

		// Separando tipo dos dados da imagen
		// $tipo: data:image/png
		// $dados: base64,AAAFBfj42Pj4
		list($tipo, $dados) = explode(';', $imagen);

		// Isolando apenas o tipo da imagen
		// $tipo: image/png
		list(, $tipo) = explode(':', $tipo);
		

		// Isolando apenas os dados da imagen
		// $dados: AAAFBfj42Pj4
		list(, $dados) = explode(',', $dados);

		// Convertendo base64 para imagen
		$dados = base64_decode($dados);

		// Gerando nombre aleatório para a imagen
		$nombre = md5(uniqid(time()));
		
		//Ruta
		$ruta = ROOT . 'public' . DS . 'img' . DS . 'prendas' . DS;

		// Salvando imagen em disco
		file_put_contents($ruta."{$nombre}.jpg", $dados);
		
		
	}
	
	
	
}

?>
