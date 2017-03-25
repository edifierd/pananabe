<?php

abstract class Model{
	
    private $_registry;
    protected $_db;
	private $_model_name;
    
    public function __construct($modelName) {
        $this->_registry = Registry::getInstancia();
        $this->_db = $this->_registry->_db;
		$this->_model_name = $modelName;
    }
	
	/*
		CLASES ABSTRACTAS PARA GENERALIZAR 
	*/
	abstract public function nuevo(array $var);
	abstract public function editar(array $var);
	abstract public function eliminar(array $var);
	
	abstract public function find(array $var);
	//abstract public function all(array $var);
	
	
	/*
		METODOS 
	*/
	
	public function modificarImagen($nombreImagen, $datosAuxiliares){
		//SE DEBE IMPLEMENTAR EL METODO
	}
	
	private function setModelName($name){
		$this->_model_name = $name;
	}
	
	public function model_name(){
		return $this->_model_name;
	}
	
	public function last(){
		$elemento = $this->_db->query(
						"select * from ". $_model_name ."
						 ORDER BY id DESC
						 LIMIT 1
						 "
					);
					
		return $usuario->fetch();
	}
	
	public function error(){
		print_r($this->_db->errorInfo());
	}
	
	// ---------- FUNCIONES AUXILIARES ---------- //
	
	protected function esDni($dni){
		if (!filter_var($dni, FILTER_VALIDATE_INT) === false) {
    		$dni = filter_var($dni, FILTER_VALIDATE_INT);
			if (strlen($dni) > 6 && strlen($dni) < 9){
           		return $dni;
			} 
		}
		return false;
    }
	
	public function fecha(){
		return date(DATE_ATOM);
	}
	
}

?>
