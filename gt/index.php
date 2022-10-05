<?php  
	

	abstract class molde{
		abstract public function ingresarNombre($nombre);
		abstract public function obtenerNombre();
		abstract public function hola();

	}
	/**
	 * 
	 */
	class Persona extends molde
	{
	
		private $mensaje ="hola facilita";

		public function ingresarNombre($nombre){
			print $nombre;
		}
		public function hola(){
			print 'holaa bb';
		}
		public function obtenerNombre(){
			return ;
		}
		public function mostar()
		{
			print $this->mensaje;
			
		}
	}
	$obj = new Persona();
	$obj->mostar();
	$obj->ingresarNombre('daniel');
	$obj->hola();
?>