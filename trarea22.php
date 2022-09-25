<?php

/**
 * 
 */
	$nombreUsuario = $_POST['nombre'];
	$operacion = $_POST['operacion'];
	$edad = $_POST['edad'];
	
class Vehiculo 
{
	protected $velocidad;
	protected $numeroRuedas;
	protected $modelo;

	function __construct($velocidades, $numerosRuedas, $modelos)
	{
		$this->velocidad = $velocidades;
		$this->numeroRuedas =$numerosRuedas;
		$this->modelo = $modelos;
	}
	function setVelocidades($velocidades){
		$this->velocidad =$velocidades;
	}
	function getVelocidades(){
		return $this->velocidad;
	}
	function setNumRuedas($numeroRuedas){
		$this->numeroRuedas =$numerosRuedas;
	}
	function getNumeroRuedas(){
		return $this->numeroRuedas;
	}
	function setModelos($modelos){
		$this->modelo =$modelos;
	}
	function getModelos(){
		return $this->modelo;
	}

}
/**
 * 
 */
class motorizado extends Vehiculo
{
	protected $kilometraje;
	protected $numPasajero;
	protected $operacion;

	function __construct($velocidades,$numerosRuedas,$modelos,$kilometrajes, $numpasajeros, $operaciones)
	{
		parent::__construct($velocidades,$numerosRuedas,$modelos);

		// code...
		$this->kilometraje = $kilometrajes;
		$this->numPasajero = $numpasajeros;
		$this->operacion = $operaciones;
	}
	function setKilometraje($kilometrajes){
		$this->kilometraje =$velocidades;
	}
	function getKilometraje(){
		return $this->kilometraje;
	}
	function setNumPasajero($numpasajeros){
		$this->numPasajero =$numpasajeros;
	}
	function getNumPasajero(){
		return $this->numPasajero;
	}

	function setOperacion($operaciones){
		$this->operacion =$operaciones;
	}
	function getOperacion(){
		return $this->operacion;
	}
	public function ElegirVehiculo(){
		
			switch ($this->operacion){
			    case 'Motorizado':
			        echo '<p>valores obtenidos Motoizado: '
			        .'<div class="col-4"><input class="form-control" placeholder="'.$this->getVelocidades().'" disabled></div>'." + "
			        .'<div class="col-4"><input class="form-control" placeholder="'.$this->getNumPasajero().'" disabled></div>'." = "
			        . '<div class="col-3"><input class="form-control" placeholder="'.$this->getModelos().'" disabled></div>'.'</p>';
			        break;
					case 'Transporte':
			        echo '<p>valores obtenidos transporte: '
			        .'<div class="col-4"><input class="form-control" placeholder="'.$this->getVelocidades().'" disabled></div>'." + "
			        .'<div class="col-4"><input class="form-control" placeholder="'.$this->getNumPasajero().'" disabled></div>'." = "
			        . '<div class="col-3"><input class="form-control" placeholder="'.$this->getModelos().'" disabled></div>'.'</p>';
			        break;
				default:
					# code...
					break;
			
		}
	}
}
/**
 * 
 
class transporte extends motorizado
{
	
	function __construct(argument)
	{
		// code...
	}
}
/**
 * 
 
class carrera extends transporte
{
	protected $tipoMotor;

	function __construct(argument)
	{
		// code...
	}
}
*/
 
 
class Usuario extends motorizado
{
	protected $nombreUsuario;
	protected $edad;
	function __construct($velocidades,$numerosRuedas,$modelos,$kilometrajes, $numpasajeros, $operaciones,$nombreUsuarios,$edades)
	{
		parent::__construct($velocidades,$numerosRuedas,$modelos,$kilometrajes, $numpasajeros, $operaciones);

		// code...
		
		$this->nombreUsuario = $nombreUsuarios;
		$this->edad =$edades;
	}
	function setNombre($nombreUsuarios){
		$this->nombreUsuario = $nombreUsuarios;
	}
	function getNombre(){
		return $this->nombreUsuario;
	}
	function setEdad($edades){
		$this->edad = $edades;
	}function getEdades(){
		return $this->edad;
	}


	public function ElegirVehiculo(){
		
			switch ($this->operacion){
			    case 'Motorizado':
			        echo '<p>valores obtenidos Motorizado: '
			        .'<div class="col-4"><input class="form-control" placeholder="'.$this->getVelocidades().'" disabled></div>'." + "
			        .'<div class="col-4"><input class="form-control" placeholder="'.$this->getNumPasajero().'" disabled></div>'." = "
			        . '<div class="col-3"><input class="form-control" placeholder="'.$this->getModelos().'" disabled></div>'.'</p>';
			        break;
					case 'Transporte':
			        echo '<p>valores obtenidos Transporte: '
			        .'<div class="col-4"><input class="form-control" placeholder="'.$this->getVelocidades().'" disabled></div>'." + "
			        .'<div class="col-4"><input class="form-control" placeholder="'.$this->getNumPasajero().'" disabled></div>'." = "
			        . '<div class="col-3"><input class="form-control" placeholder="'.$this->getModelos().'" disabled></div>'.'</p>';
			        break;
				default:
					# code...
					break;
			
		}
	}
	
}
$persona = new Usuario(20,'contiene hast 10','maka',30,100,$operacion,$nombreUsuario, $edad);
#echo $persona->getKilometraje();
echo "el  nombre del cliente es ".$persona->getNombre(). ' tiene '.$persona->getEdades().' años  mi Vehiculo es de servicio '.$persona->getOperacion();
echo $persona->ElegirVehiculo();

  ?>
