<?php

class contactoModel extends Model
{
	
    public function __construct() {
        parent::__construct('');
    }
	
	public function insertarMensajeContacto($nombre, $apellido, $localidad, $correo, $telefono, $mensaje){
        $this->_db->prepare("INSERT INTO contacto VALUES (null, :apellido, :nombre, :localidad, :correo, :telefono, :mensaje)") ->execute(
                        array(
						   ':apellido' => $apellido,
						   ':nombre' => $nombre,
						   ':localidad' => $localidad,
						   ':correo' => $correo,
						   ':telefono' => $telefono,
						   ':mensaje' => $mensaje
                        ));
    }
	
	public function nuevo(array $var){}
	public function editar(array $var){}
	public function eliminar(array $var){}
	
	public function find(array $var){}
	
}

?>