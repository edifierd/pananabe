<?php

class indexController extends Controller
{
    public function __construct() {
        parent::__construct();
    }
    
    public function index()
    {
        //print_r($this->_view->getLayoutPositions());
		//$this->_view->assign('widget', $this->_view->widget('menu', 'getMenu'));
        $this->_view->assign('titulo', 'Inicio');
		$this->_view->assign('marcado', '
								<script type="application/ld+json">
								{
								"@context" : "http://schema.org",
								"@type" : "LocalBusiness",
								"name" : "Panana Be. Trajes de baño Argentina",
								"image" : "http://www.pananabe.com.ar/views/layout/pananabe/img/logo.png",
								"telephone" : "",
								"email" : "info@pananabe.com.ar",
								"address" : {
								"@type" : "PostalAddress",
								"addressLocality" : "Brandsen",
								"addressRegion" : "Buenos Aires",
								"addressCountry" : "Argentina",
								"postalCode" : "1980"
								},
								"url" : "http://www.pananabe.com.ar/"
								}
								</script>
							');
		$this->_view->assign('description', 'Panana Be trajes de baño. ');
		$this->_view->assign('keywords', 'Panana Be, pananabe, panana be trajes de baño, Argentina, contacto, telefono, correo, redes sociales, facebook, instagram, direccion, consultas, Panana Be., celular , ubicacion, formas de pago, financiacion, mecado pago, tarjetas de credito, mallas, malla, trajes de baño, baño, hombre, mujer, niños, niñas, mallas mujer, bikini,malla bikini, malla hombre, short, dama, caballero, malla dama, malla caballero, traje de baño dama');
		$this->_view->setCss(array('estilos'));
        $this->_view->renderizar('index', 'inicio');
    }
	
}

?>