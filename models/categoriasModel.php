<?php


class categoriasModel extends Model{
	
    public function __construct() {
        parent::__construct('');
    }
	
	public function get($genero){
		$datos = $this->_db->query("SELECT * FROM categorias c WHERE c.genero = '".$genero."' OR c.genero = 'unisex'  ");
		return $datos->fetchall();
	}
	
	public function nuevo(array $var){}
	public function editar(array $var){}
	public function eliminar(array $var){}
	
	public function find(array $var){}
}

?>