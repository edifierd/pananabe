<?php

class ventasModel extends Model
{
	
    public function __construct() {
        parent::__construct('');
    }
	
	
	public function all(){
		$venta = $this->_db->query("SELECT * FROM ventas");	
		
		return $venta->fetchall();
	}
	
	public function find(array $var){
		$id = (int) $var['id'];
        $venta = $this->_db->query("select * from ventas where id_venta = $id");
        return $venta->fetch();
	}
	
	public function last(){
		$venta = $this->_db->query("SELECT * FROM ventas ORDER BY id_venta DESC LIMIT 1");	
		
		return $venta->fetch();
	}
	
	public function insertarVenta($fecha, $cant, $talle, $precio, $id_user, $id_prenda){
		
        $this->_db->prepare("INSERT INTO ventas VALUES (null, :id_user, :fecha, :cant, :talle, :precio, :id_prenda)")
                ->execute(
                        array(
                           ':id_user' => $id_user,
                           ':fecha' => $fecha,
                           ':cant' => $cant,
						   ':talle' => $talle,
						   ':precio' => (int) $precio,
						   ':id_prenda' => $id_prenda
                        ));
    }
	
	public function nuevo(array $var){}
	public function editar(array $var){}
	public function eliminar(array $var){}
	
}