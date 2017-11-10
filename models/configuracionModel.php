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


	public function nuevo(array $var){}
	public function eliminar(array $var){}
	public function editar(array $var){}

}

?>
