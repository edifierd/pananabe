<?php

class mensajesModel extends Model{
	
    public function __construct() {
        parent::__construct('');
    }
	
	public function all(){ 	
		$ventas = $this->_db->query(" 
			SELECT v.id_venta,v.fecha,v.talle,v.cant,v.precio,
				   p.nombre,IFNULL(p.foto_frente,'sin_imagen.png') AS foto_frente,
				   u.name,u.surname,u.email,u.area_phone_code, u.phone_number, u.document_number
			FROM ventas v INNER JOIN prendas p ON  p.id = v.id_prenda 
						  INNER JOIN users u ON u.id = v.id_user
			ORDER BY v.id_venta DESC");
		return $ventas->fetchall();
	}
	
	public function nuevo(array $var){}
	
	public function editar(array $var){}
	
	public function eliminar(array $var){}
	
	public function find(array $var){}
	
	


}


?>