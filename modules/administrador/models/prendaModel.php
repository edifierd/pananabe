<?php

class prendaModel extends Model
{
	private $rubro;
	
    public function __construct() {
        parent::__construct();
    }
	
	
	public function all($rubro=false){
		
		if(!$rubro){
			//$prenda = $this->_db->query("SELECT * FROM prenda ORDER BY prenda.id DESC");	
			$prenda = $this->_db->query("
				SELECT p.id, p.nombre, p.descripcion,p.temporada, p.precio, p.S, p.M ,p. L ,p.XL, p.foto_frente, p.foto_atras, p.foto_perfil, c.nombre AS categoria, c.genero
				FROM prenda p INNER JOIN prenda_a_categoria pc ON pc.id_prenda = p.id
						      INNER JOIN categoria c ON pc.id_categoria = c.id
				ORDER BY P.id DESC
		 	");
		} else {
			$rubro = (int) $rubro;
			$prenda = $this->_db->query("
				SELECT p.id, p.nombre, p.descripcion, p.precio, p.foto_frente, c.nombre AS categoria, c.genero
				FROM prenda p INNER JOIN prenda_a_categoria pc ON pc.id_prenda = p.id
						      INNER JOIN categoria c ON pc.id_categoria = c.id
				WHERE pc.id_categoria = ".$rubro."
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
	
	public function decrementarStock($id, $talle, $cantidad)
    {
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
	

    public function insertarPrenda($nombre, $descripcion, $precio, $s, $m, $l, $xl, $foto_frente, $foto_atras, $foto_perfil)
    {
        if ($this->insertarPrendaModelo($nombre, $descripcion, $precio, $s, $m, $l, $xl, $foto_frente, $foto_atras, $foto_perfil)){
			$prenda = $this->last();
			return $this->insertarCategoria($prenda['id']);
		} 
		return false;
    }
	
	private function insertarPrendaModelo($nombre, $descripcion, $precio, $s, $m, $l, $xl, $foto_frente, $foto_atras, $foto_perfil){
		return $this->_db->prepare("INSERT INTO prenda VALUES" . 
		"(null, :nombre, :descripcion, 2016 , :precio, :S, :M, :L, :XL, 1 , :foto_frente, :foto_atras, :foto_perfil)"
		)->execute(
        	array(
            	':nombre' => $nombre,
            	':descripcion' => $descripcion,
				':precio' => $precio,
				':S' => $s,
				':M' => $m,
				':L' => $l,
				':XL' => $xl,
				':foto_frente' => $foto_frente,
				':foto_atras' => $foto_atras,
				':foto_perfil' => $foto_perfil
			));
	}
	
	private function insertarCategoria($id){
		return $this->_db->prepare("INSERT INTO prenda_a_categoria VALUES (null, :id_prenda, 1 )")->execute(
            	array(
                	 ':id_prenda' => $id
                ));
	}
	
	public function last(){
		$venta = $this->_db->query("SELECT * FROM prenda ORDER BY prenda.id DESC LIMIT 1");	
		
		return $venta->fetch();
	}
    
    public function eliminarPost($id)
    {
        $id = (int) $id;
        $this->_db->query("DELETE FROM posts WHERE id = $id");
    }
    
    public function insertarPrueba($nombre)
    {
        $this->_db->prepare("INSERT INTO prueba VALUES (null, :nombre)")
                ->execute(
                        array(
                           ':nombre' => $nombre
                        ));
    }
	
    public function getPrueba($condicion = "")
    {
        $post = $this->_db->query(
                "select `r`.*, `p`.`pais`, `c`.`ciudad` from `prueba` `r`, `paises` `p`, `ciudades` `c`" .
                "where `r`.`id_pais` = `p`.`id` and `r`.`id_ciudad` = `c`.`id` $condicion order by id asc");
        return $post->fetchAll();
    }
    
}

?>
