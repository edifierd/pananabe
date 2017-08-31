<?php

class prendasModel extends Model{

	private $rubro;

    public function __construct() {
        parent::__construct('prendas');
    }

	public function nuevo(array $var){
		$this->_db->query("INSERT INTO prendas (id) VALUES (null)");
		return $this->_db->lastInsertId();
	}

	public function editar(array $var){
		$sql = $this->_db->query("UPDATE prendas SET nombre = '".$var['nombre']."',
											descripcion = '".$var['descripcion']."',
											temporada = ".$var['temporada'].",
											precio = ".$var['precio'].",
											S = ".$var['s'].",
											M = ".$var['m'].",
											L = ".$var['l'].",
											XL = ".$var['xl'].",
											XXL = ".$var['xxl'].",
											descuento = ".$var['descuento'].",
											estado = 'act'
						WHERE id = ".$var['id']);
		if($sql){
			$this->eliminarCategoria($var['id']);
			foreach ($var['categorias'] as &$id_categoria){
				$this->insertarCategoria($var['id'],$id_categoria);
			}
			return true;
		}
		return false;
	}

	public function eliminar(array $var){
        return $this->_db->query("UPDATE prendas SET `estado` = 'fin' WHERE `id` = ".$var['id']);
	}

	public function insertarCategorias(array $var){
		foreach ($var['categorias'] as &$id_categoria){
				$this->insertarCategoria($var['id'],$id_categoria);
		}
	}

	public function findByCategoria(array $var){
		$id_categoria = $var['id'];
        $sql = $this->_db->query("
			SELECT p.id,p.descripcion,p.temporada,p.precio,p.descuento,p.S,p.M,p.L,p.XL,p.XXL,p.estado,p.foto_frente,p.foto_perfil,p.foto_atras,pc.id_categoria
			FROM `prendas` p INNER JOIN prenda_a_categoria pc ON pc.id_prenda = p.id
			GROUP BY p.id
			HAVING COUNT(pc.id) = 1 AND pc.id_categoria = ".$id_categoria."
		");
		return $sql->fetchall();
	}

	private function insertarCategoria($id_prenda,$id_categoria){
		$this->_db->prepare("INSERT INTO prenda_a_categoria VALUES (null, :id_prenda, :id_categoria )")->execute(
            	array(
                	 ':id_prenda' => $id_prenda,
					 ':id_categoria' => $id_categoria
                ));
	}

	private function eliminarCategoria($id_prenda){
		$this->_db->query("DELETE FROM prenda_a_categoria WHERE id_prenda = ".$id_prenda);
	}

	public function modificarImagen($nombreImagen, $datosAuxiliares){
		$id_prenda = (int) $datosAuxiliares[0];
		$img = $datosAuxiliares[1];

		$prenda = $this->find(array('id' => $id_prenda));
		//Elimino las imagenes viejas
		if($prenda[$img] != ''){
			unlink(ROOT.'public/img/prendas/'.$prenda[$img]);
			unlink(ROOT.'public/img/prendas/thumb/thumb_'.$prenda[$img]);
			$valor = "entra";
		}

		$sql = "UPDATE prendas SET `".$img."` = '".$nombreImagen."' WHERE `id` = ".$id_prenda;
		$sql = $this->_db->query($sql);
		return $sql;
	}

	public function uploadImagen($id_prenda,$nombre){
		$this->_db->query("INSERT INTO fotos VALUES(null,".$id_prenda.",'".$nombre."','')");
		$img = $this->_db->query("SELECT * FROM fotos f WHERE f.nombre = '".$nombre."'");
		$foto = $img->fetch();
		return $foto['id'];
	}

	public function deleteImagen($id_foto){
		$this->_db->query("DELETE FROM fotos WHERE id = ".$id_foto);
	}

	public function getImagenById($id_foto){
		$img = $this->_db->query("SELECT *  FROM fotos WHERE id = ".$id_foto);
		return $img->fetch();
	}

	//----------- METODOS ANTIGUOS -----------

	public function all($rubro=false,$est=false){
		$estado = '';
		if(!$rubro){
			if($est){
				$estado = " WHERE p.estado = '".$est."'";
			}
			$prenda = $this->_db->query("
				SELECT p.id, p.nombre, p.descripcion, p.precio, p.temporada, p.descuento, p.estado, IFNULL(p.foto_frente,'sin_imagen.png') as foto_frente
				FROM prendas p ".$estado."
				ORDER BY p.id DESC
			");
		} else {
			$rubro = (int) $rubro;
			if($est){
				$estado = "AND p.estado = '".$est."'";
			}
			$prenda = $this->_db->query("SELECT * FROM prendas p  WHERE pc.id_categoria = ".$rubro." ".$estado." ORDER BY p.id DESC ");
		}
		return $prenda->fetchall();
	}

	public function find(array $var){
		$id = (int) $var['id'];
		if(isset($var['categoria'])){
			$prenda = $this->_db->query("
				SELECT p.id, p.nombre, p.descripcion,p.temporada, p.precio, p.S, p.M ,p.L ,p.XL, p.XXL,
					   p.foto_frente, p.foto_atras, p.foto_perfil, c.nombre AS categoria, c.genero
				FROM prendas p INNER JOIN prenda_a_categoria pc ON pc.id_prenda = p.id
						      INNER JOIN categorias c ON pc.id_categoria = c.id
				WHERE p.id = ".$id."
		 	");
		} else {
			$prenda = $this->_db->query("select * from prendas where id = ".$id);
		}
        return $prenda->fetch();
	}


	public function decrementarStock($id, $talle, $cantidad)
    {
        $id = (int) $id;

		$prenda = $this->find($id);

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


    public function insertarPrenda($nombre, $descripcion, $temporada, $precio, $s, $m, $l, $xl, $categorias, $foto_frente = '', $foto_atras = '', $foto_perfil = ''){
        if ($this->insertarPrendaModelo($nombre, $descripcion, $temporada, $precio, $s, $m, $l, $xl, $foto_frente, $foto_atras, $foto_perfil)){
			$prenda = $this->last();
			foreach ($categorias as &$id_categoria){
				$this->insertarCategoria($prenda['id'],$id_categoria);
			}
			return true;
		}
		return false;
    }


	public function last(){
		$prenda = $this->_db->query("SELECT * FROM prendas ORDER BY id DESC LIMIT 1");

		return $prenda->fetch();
	}

	public function modificarFoto($id, $tipoFoto, $nombreFoto){
        $id = (int) $id;

        $this->_db->prepare("UPDATE prendas SET ".$tipoFoto." = :nombre WHERE id = :id")
                ->execute(
                        array(
                           ':id' => $id,
                           ':nombre' => $nombreFoto
                        ));
    }

	public function modificarEstado($id, $nuevoEstado){
        $id = (int) $id;

        $this->_db->prepare("UPDATE prendas SET estado = :estado WHERE id = :id")
                ->execute(
                        array(
                           ':id' => $id,
                           ':estado' => $nuevoEstado
                        ));
    }

}

?>
