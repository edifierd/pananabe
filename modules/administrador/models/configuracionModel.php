<?php

class configuracionModel extends Model{
	private $rubro;

    public function __construct() {
        parent::__construct('');
    }

	public function find($var){
		$configuracion = $this->_db->query("
				SELECT *
				FROM configuracion
				WHERE id = ".$var['id']
		);
    return $configuracion->fetch();
	}

	public function editar(array $var){
		$this->_db->prepare("
			UPDATE configuracion
			SET direccion = :direccion,
			SET telefono = :telefono,
			SET email = :email,
			SET dir_facebook = :dir_facebook,
			SET dir_instagram = :dir_instagram,
			SET portada_hombre = :portada_hombre,
			SET portada_mujer = :portada_mujer
			WHERE id = :id
		")->execute($var);
	}

	public function nuevo(array $var){}
	public function eliminar(array $var){}


}

?>
