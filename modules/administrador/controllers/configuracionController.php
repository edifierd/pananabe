<?php

class configuracionController extends administradorController{
  private $_config;
  private $_slider;

  public function __construct(){
    parent::__construct();
    $this->_config = $this->loadModel('configuracion');
    $this->_slider = $this->loadModel('slider');
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

  public function uploadPortada(){
		if(!(isset($_FILES['imagen'])) || (empty($_FILES['imagen'])) ){
			echo json_encode(array('msj'=>'No se indico una imagen.'));exit;
		}
    $id = $this->getTexto('id');
    $config = $this->_config->find(array('id' => 1));
    $foto = $config[$id];
    if(!empty($foto)){
      unlink(ROOT.'public/img/portada/'.$foto);
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
			$rta = $this->_config->uploadImagenPortada($id,$img->file_dst_name,1);
			$initialPreview[] = "<img src='".BASE_URL."public/img/portada/".$img->file_dst_name."' class='file-preview-image' style='height:160px;'>";
			$initialPreviewConfig[] = [
				'caption' => $img->file_dst_name
			];
			unset($img);
		}
		echo (
      json_encode([
  			'initialPreview' => $initialPreview,
  			'initialPreviewConfig' => $initialPreviewConfig,
  			'append' => true
		  ])
    );
    exit;
	}

  public function get_portada(){
    $config = $this->_config->find(array('id' => 1));
    $foto = $config[$this->getTexto('id')];
    $enlace = "<img src='".BASE_URL."public/img/portada/".$foto."' class='file-preview-image' style='height:160px;'>";
		echo json_encode(array("url"=>$enlace));exit;
	}


  public function uploadSlider(){
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
		$ruta = ROOT . "public/img/slider/";
		foreach ($files as $file) {
			$nombre = 'upl_'.uniqid();
			$img = new upload($file);
			$img->file_new_name_body = $nombre;
			$img->process($ruta);
			$foto_id = $this->_slider->uploadImagenSlider($img->file_dst_name);

      $sliders = json_decode($this->get_slider());
      $sliders['initialPreview'][] = "<img src='".BASE_URL."public/img/slider/".$img->file_dst_name."' class='file-preview-image' style='width:100%;'> ";
      $sliders['initialPreviewConfig'][] = array(
        'type' => 'image',
        'caption' => $img->file_dst_name,
        'width' => '160px',
        'url' => BASE_URL."administrador\configuracion\deleteSliderImagen",
        'extra' => ['id' => $foto_id]
      );
      $sliders['append'] = true;
			unset($img);
		}
		echo json_encode($sliders);exit;
	}

  public function get_slider(){
    $sliders = $this->_slider->all();
    $enlaces = array();
    foreach ($sliders as $value) {
      $enlaces['initialPreview'][] = "<img src='".BASE_URL."public/img/slider/".$value['nombre']."' class='file-preview-image' style='width:100%;'> ";
      $enlaces['initialPreviewConfig'][] = array(
        'type' => 'image',
        'caption' => $value['nombre'],
        'width' => '160px',
        'url' => BASE_URL."administrador\configuracion\deleteSliderImagen",
        'extra' => ['id' => $value['id']]
      );
    }
    echo json_encode($enlaces);exit;
	}

  public function deleteSliderImagen(){
		$foto = $this->_slider->getSlider( (int) $this->getTexto('id'));
    if(!empty($foto)){
      unlink(ROOT.'public/img/slider/'.$foto['nombre']);
      $rta = $this->_slider->eliminar(['id' => $this->getTexto('id')]);
    }
		echo json_encode(array());exit;
	}

  public function deleteImagen(){
		$foto = $this->_config->getPortada($this->getTexto('id'),1);
    if(!empty($foto)){
      unlink(ROOT.'public/img/portada/'.$foto);
      $rta = $this->_config->uploadImagenPortada($this->getTexto('id'),null,1);
    }
		echo json_encode(array());exit;
	}





}
?>
