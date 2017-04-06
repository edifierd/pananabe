<?php

class contactoModel extends Model{
	
    public function __construct() {
        parent::__construct('');
    }
	
	public function nuevo(array $var){}
	
	public function editar(array $var){}
	
	public function eliminar(array $var){}
	
	public function find(array $var){}
	
	public function all(){
		$mensajes = $this->_db->query(" SELECT * FROM contacto ORDER BY id_contacto DESC");
		return $mensajes->fetchall();
	}

}


?>