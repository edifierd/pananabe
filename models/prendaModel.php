<?php

class prendaModel extends Model{
	private $rubro;
	
    public function __construct() {
        parent::__construct('');
    }
	
	
	public function all($rubro=false){
		if(!$rubro){
			//$prenda = $this->_db->query("SELECT * FROM prenda ORDER BY prenda.id DESC");	
			$prenda = $this->_db->query("
				SELECT p.id, p.nombre, p.descripcion,p.temporada, p.precio, p.S, p.M ,p. L ,p.XL, p.foto_frente, p.foto_atras, p.foto_perfil, c.nombre AS categoria, c.genero
				FROM prenda p INNER JOIN prenda_a_categoria pc ON pc.id_prenda = p.id
						      INNER JOIN categoria c ON pc.id_categoria = c.id
				WHERE estado = 1
				ORDER BY p.id DESC
		 	");
		} else {
			$rubro = (int) $rubro;
			$prenda = $this->_db->query("
				SELECT p.id, p.nombre, p.descripcion, p.precio, p.foto_frente, c.nombre AS categoria, c.genero
				FROM prenda p INNER JOIN prenda_a_categoria pc ON pc.id_prenda = p.id
						      INNER JOIN categoria c ON pc.id_categoria = c.id
				WHERE pc.id_categoria = ".$rubro." AND estado = 1
				ORDER BY p.id DESC
		 	");

		}
		return $prenda->fetchall();
	}

	public function find($id){
		$id = (int) $id;
        //$prenda = $this->_db->query("select * from prenda where id = $id");
		$prenda = $this->_db->query("
				SELECT p.id, p.nombre, p.descripcion,p.temporada, p.precio, p.S, p.M ,p. L ,p.XL, p.foto_frente, p.foto_atras, p.foto_perfil, c.nombre AS categoria, c.genero
				FROM prenda p INNER JOIN prenda_a_categoria pc ON pc.id_prenda = p.id
						      INNER JOIN categoria c ON pc.id_categoria = c.id
				WHERE p.id = ".$id."
		 	");
        return $prenda->fetch();
	}
	
	public function decrementarStock($id, $talle, $cantidad){
        $id = (int) $id;
		
		$prenda = $this->find($id);
		
		if($prenda[$talle] >= $cantidad){
			$nuevoStock = (int) $prenda[$talle] - (int) $cantidad;
			$this->_db->prepare("UPDATE prenda SET ".$talle." = :cantidad WHERE id = :id")
                ->execute(
                        array(
                           ':id' => $id,
                           ':cantidad' => $nuevoStock
                        ));
						
			return true;
		} 
		return false;
    }
	
	public function nuevo(array $var){}
	public function editar(array $var){}
	public function eliminar(array $var){}
    
    
}

?>
