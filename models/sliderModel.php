<?php

class sliderModel extends Model {

    public function __construct() {
        parent::__construct('');
    }

	public function editar(array $var){}
	public function find(array $var){}
	public function nuevo(array $var){}
	public function eliminar(array $var){}

  public function all(){
		$slider = $this->_db->query("
				SELECT *
				FROM slider"
		);
    return $slider->fetchall();
	}


}

?>
