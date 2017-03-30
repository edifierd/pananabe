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
	
	public function eliminar(array $var){
		$categoria = $this->_db->query("
				DELETE
				FROM categorias  
				WHERE id = ".$var['id']."
		 	");
			
		$prenda_a_categoria = $this->_db->query("
				DELETE
				FROM prenda_a_categoria 
				WHERE id_categoria = ".$var['id']."
		 	");
		if($categoria and $prenda_a_categoria){
			return true;
		}
		return false;
	}
	
	public function find(array $var){
		$categoria = $this->_db->query("
				SELECT * 
				FROM categorias  
				WHERE id = ".$var['id']."
		 	");
		return $categoria->fetch();
	}
	
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
	
	public function getCategoriasPrenda($id){
		$id = (int) $id;
		$cat = $this->_db->query("SELECT c.nombre 
								 FROM categorias c INNER JOIN prenda_a_categoria pc ON pc.id_categoria = c.id
						      	 WHERE pc.id_prenda = ".$id
							    );
		return $cat->fetchall();
	}

}


?>