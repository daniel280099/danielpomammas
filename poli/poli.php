<?php
	
/**
 * 
 */
class Persona 
{
	//informacion de la persona
	protected $inforDescripcion='';
	protected $edad= 0;
	
	public function dondeVive($edad){
		
		$this->edad = $edad;
	}
	public function mostrarLugar(){
		return $this->lugar;
	}
	public function tusDatos($nombre,$lugar){
		$this->inforDescripcion = $nombre. ' '. $lugar;
	}
	public function mostarDatos(){
		return $this->inforDescripcion;
	}
	
	
}
class Curso extends Persona
{
	public function cuantosCiclo(){
		$this->edad= 12;
	} 
	
	
}
class Estudiante 
{
	private $persona;



	function __construct($personas)
	{
		$this->persona= $personas;
	}

	public function dondeVives($lugar){
		$this->persona->dondeVive($lugar);
	}
	public function tusDatos($nombre, $datos){
		$this->persona->tusDatos($nombre,$edad);
	}
	public function mostarDatoss(){
		return $this->persona->mostarDatos();
	}
	public function cuantosCiclos(){
		$this->persona-> cuantosCiclo();
	} 
}
$persona1= new Estudiante(new Curso);
echo $persona1->tusDatos('Los nogales').'<br>';
echo $persona1->mostarDatoss().'<br>';
echo $persona1->cuantosCiclos().'<br>';
$persona1->cuantosCiclos();

  ?>