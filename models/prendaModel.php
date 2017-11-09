<?php

class prendaModel extends Model{
	private $rubro;

    public function __construct() {
        parent::__construct('');
    }


	public function all($categoria=false){
		if(!$categoria){
			//$prenda = $this->_db->query("SELECT * FROM prenda ORDER BY prenda.id DESC");
			$prenda = $this->_db->query("
				SELECT p.id, p.nombre, p.descripcion, p.precio, p.descuento, IFNULL(p.foto_frente,'sin_imagen.png') as foto_frente,
					   c.nombre AS categoria, c.genero
				FROM prendas p INNER JOIN prenda_a_categoria pc ON pc.id_prenda = p.id
						      INNER JOIN categorias c ON pc.id_categoria = c.id
				WHERE estado = 'act'
				ORDER BY p.id DESC
		 	");
		} else {
			if (is_int($categoria)){
				$sql = " c.id = ".$categoria;
			} else {
				$sql = " c.identificador = '".$categoria."'";
			}
			$prenda = $this->_db->query("
				SELECT p.id, p.nombre, p.descripcion, p.precio, p.descuento, IFNULL(p.foto_frente,'sin_imagen.png') as foto_frente, c.nombre AS categoria, c.genero
				FROM prendas p INNER JOIN prenda_a_categoria pc ON pc.id_prenda = p.id
						      INNER JOIN categorias c ON pc.id_categoria = c.id
				WHERE ".$sql." AND estado = 'act'
				ORDER BY p.id DESC
		 	");
		}
		return $prenda->fetchall();
	}

	public function allByGenero($genero){
		$prenda = $this->_db->query("
				SELECT p.id, p.nombre, p.descripcion, p.precio, p.descuento, p.foto_frente, c.nombre AS categoria, c.genero
				FROM prendas p INNER JOIN prenda_a_categoria pc ON pc.id_prenda = p.id
						      INNER JOIN categorias c ON pc.id_categoria = c.id
				WHERE c.genero = '".$genero."' OR c.genero = 'unisex' AND estado = 'act'
				ORDER BY p.id DESC
		 	");
		return $prenda->fetchall();
	}

	public function find(array $var){
		$id = (int) $var['id'];
        //$prenda = $this->_db->query("select * from prenda where id = $id");
		$prenda = $this->_db->query("
				SELECT p.id, p.nombre, p.descripcion,p.temporada, p.precio, p.descuento, p.S, p.M ,p.L ,p.XL,p.XXL, IFNULL(p.foto_frente,'sin_imagen.png') as foto_frente,
					   IFNULL(p.foto_atras,'sin_imagen.png') as foto_atras, IFNULL(p.foto_perfil,'sin_imagen.png') as foto_perfil , c.nombre AS categoria, c.genero
				FROM prendas p INNER JOIN prenda_a_categoria pc ON pc.id_prenda = p.id
						      INNER JOIN categorias c ON pc.id_categoria = c.id
				WHERE p.id = ".$id." AND estado = 'act'
		 	");
        return $prenda->fetch();
	}

	public function decrementarStock($id, $talle, $cantidad){
        $id = (int) $id;

		$prenda = $this->find(array('id'=>$id));

		if($prenda[$talle] >= $cantidad){
			$nuevoStock = (int) $prenda[$talle] - (int) $cantidad;
			$this->_db->prepare("UPDATE prendas SET ".$talle." = :cantidad WHERE id = :id")
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
