<?php

class categoriasModel extends Model{
	
    public function __construct() {
        parent::__construct('');
    }
	
	public function nuevo(array $var){
		$rta = $this->_db->query("INSERT INTO categorias VALUES(null,'".$var['genero']."','".$var['identificador']."','".$var['nombre']."')");
		return $rta;
	}
	
	public function editar(array $var){}
	
	public function eliminar(array $var){}
	
	public function find(array $var){}
	
	public function all($genero = false){
		if(!$genero){
			$categorias = $this->_db->query(" SELECT * FROM categorias ");
		} else {
			$categorias = $this->_db->query("
				SELECT * 
				FROM categorias  
				WHERE genero = '".$genero."'
		 	");

		}
		return $categorias->fetchall();
	}
	
	
	
}


?>