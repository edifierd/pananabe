<?php

class contactoModel extends Model
{
	
    public function __construct() {
        parent::__construct('');
    }
	
	public function insertarMensajeContacto($nombre, $apellido, $localidad, $correo, $telefono, $mensaje){
        $this->_db->query("INSERT INTO contacto VALUES (null, '".$nombre."','".$apellido."', '".$localidad."', '".$correo."','".$telefono."', '".$mensaje."')");
    }
	
	public function nuevo(array $var){}
	public function editar(array $var){}
	public function eliminar(array $var){}
	
	public function find(array $var){}
	
}

?>