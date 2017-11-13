<?php

class sliderModel extends Model {

    public function __construct() {
        parent::__construct('');
    }

	public function all(){
		$slider = $this->_db->query("
				SELECT *
				FROM slider"
		);
    return $slider->fetchall();
	}

	public function editar(array $var){
		// return $this->_db->prepare("
		// 	UPDATE configuracion
		// 	SET direccion = :direccion,
		// 			telefono = :telefono,
		// 			email = :email,
		// 			dir_facebook = :dir_facebook,
		// 			dir_instagram = :dir_instagram
		// 	WHERE id = :id
		// ")->execute($var);
	}

	public function find(array $var){}
	public function nuevo(array $var){}
	public function eliminar(array $var){
		$this->_db->prepare("
		DELETE FROM slider WHERE id = :id;
	  ")->execute([
		 "id" => $var['id'],
	 ]);
	}

	public function uploadImagenSlider($nombre){
		$this->_db->prepare("
		 INSERT INTO slider (nombre) VALUE (:nombre)
	  ")->execute([
		 "nombre" => $nombre,
	 ]);
   $sth = $this->_db->prepare("SELECT * FROM slider WHERE nombre = :nombre");
   $sth->execute(["nombre" => $nombre]);
   return $sth->fetch();
	}

	public function getSlider($id_imagen){
    $sth = $this->_db->prepare("SELECT * FROM slider WHERE id = :id");
    $sth->execute(["id" => $id_imagen]);
    return $sth->fetch();
	}


}

?>
