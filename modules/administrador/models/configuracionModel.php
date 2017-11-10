<?php

class configuracionModel extends Model {
	private $rubro;

    public function __construct() {
        parent::__construct('');
    }

	public function find(array $var){
		$configuracion = $this->_db->query("
				SELECT *
				FROM configuracion
				WHERE id = ".$var['id']
		);
    return $configuracion->fetch();
	}

	public function editar(array $var){
		return $this->_db->prepare("
			UPDATE configuracion
			SET direccion = :direccion,
					telefono = :telefono,
					email = :email,
					dir_facebook = :dir_facebook,
					dir_instagram = :dir_instagram
			WHERE id = :id
		")->execute($var);
	}

	public function nuevo(array $var){}
	public function eliminar(array $var){}

	public function uploadImagenPortada($id_imagen,$nombre,$id){
		 $this->_db->prepare("
		 UPDATE configuracion
		 SET ".$id_imagen." = :nombre
		 WHERE id = :id
	 ")->execute([
		 "nombre" => $nombre,
		 "id" => $id
	 ]);
	}


}

?>
