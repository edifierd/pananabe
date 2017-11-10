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
    $this->_view->setJs(array('plugins/sortable','plugins/purify','plugins/piexif.min','fileinput.min','locales/es','uploader'));
    $this->_view->setCss(array('fileinput.min','fileinput-rtl.min'));

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

  public function uploadImagen(){
		if(!(isset($_FILES['imagen'])) || (empty($_FILES['imagen'])) ){
			echo json_encode(array('msj'=>'No se indico una imagen.'));exit;
		}
		$initialPreview = array();
		$initialPreviewConfig = array();
		$files = array();
		foreach ($_FILES['imagen'] as $k => $l) {
			foreach ($l as $i => $v) {
				if (!array_key_exists($i, $files))
				$files[$i] = array();
				$files[$i][$k] = $v;
			}
		}
		$ruta = ROOT . "public/img/portada/";
		foreach ($files as $file) {
			$nombre = 'upl_'.uniqid();
			$img = new upload($file);
			$img->file_new_name_body = $nombre;
			$img->process($ruta);
			$thumb = new upload($img->file_dst_pathname);
			$thumb->file_name_body_pre = 'thumb_';
			$thumb->image_resize = true;
			$thumb->image_ratio = true;
			$thumb->image_y = $img->image_dst_y / 2;
			$thumb->image_x = $img->image_dst_x / 2;
			$thumb->process($ruta . 'thumb' . DS);
			//$foto_id = $this->_prendas->uploadImagen($this->getInt('id'),$img->file_dst_name);
			$initialPreview[] = "<img src='".BASE_URL."public/img/portada/".$img->file_dst_name."' class='file-preview-image' style='height:160px;'>";
			$initialPreviewConfig[] = [
				'caption' => $img->file_dst_name,
				'url' => BASE_URL."administrador\portada\deleteImagen",
				'extra' => ['id' => $foto_id]
			];
			unset($img);
			unset($thumb);
		}
		//var_dump($initialPreview);exit;
		//var_dump($initialPreviewConfig);exit;
		echo (json_encode([
			'initialPreview' => $initialPreview,
			'initialPreviewConfig' => $initialPreviewConfig,
			'append' => true
		]));exit;
		// echo json_encode([
		// 	'initialPreview' => [
		// 		"<img src='".$ruta.$img->file_dst_name."' class='file-preview-image'>",
		// 	],
		// 	'initialPreviewConfig' => [
		// 		['caption' => $img->file_dst_name,
		// 		'width' => '120px',
		// 		'url' => BASE_URL."administrador/prendas/deleteImagen",
		// 		//'key' => 10,
		// 		'extra' => ['id' => $foto_id]
		// 		]
		// 	],
		// 	'append' => true ]);exit;
	}

  public function deleteImagen(){
		$foto = $this->_prendas->getImagenById($this->getInt('id'));
		unlink(ROOT.'public/img/prendas/'.$foto['nombre']);
		unlink(ROOT.'public/img/prendas/thumb/thumb_'.$foto['nombre']);
		$this->_prendas->deleteImagen($this->getInt('id'));
		echo json_encode(array());exit;
	}


}
?>
