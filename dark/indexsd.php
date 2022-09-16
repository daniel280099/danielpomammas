



<?php 

class persona{
public $nombre;
public $edad;
public $pais;


public function __construt($nombre,$edad,$pais){

$this->nombre =$nombre;

$this->edad =$edad;

$this->pais =$pais;


}
}


class  estudiante extends persona{
	//propiedades
public $carrera;
//metodos

public function __construct($nombre,$edad,$pais,$carrera){
	parent::__construt($nombre,$edad,$pais,);

$this->carrera =$carrera;


}
}
class  trabajo extends estudiante{
	//propiedades
public $trabajo;
//metodos

public function __construct($nombre,$edad,$pais,$carrera,$trabajo){
	parent::__construt($nombre,$edad,$pais,$carrera);

$this->trabajo =$trabajo;


}

public function informacion(){

return "Estudiante:  $this->nombre <br> Su edad:$this->edad  <br> pais:  $this->pais  <br>  Trabaja de : $this->trabajo <br> Estudia:  $this->carrera ";

}

}

$estudiante1 = new trabajo('beker',19,'peru','desarrollador','administrador'); 

echo $estudiante1->informacion();

?>
