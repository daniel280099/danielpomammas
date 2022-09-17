<?php

$nombre = $_POST['nombrecliente'];
$numprod = $_POST['numproductos'];


	/**
	 * 
	 */
class tipoPersona 
	{
		public $nombre;
		
		
		function __construct($nombre)
		{
			// code...
			$this->nombre = $nombre;
		}
		public function imprimeInfo(){
			return "el nombre es $this->nombre <br>";
		}
		
	}
	/**
	 * }
	 */
	class numproductos extends tipoPersona
	{
		public $numprod;
		
		function __construct($nombre,$numprod)
		{
			parent::__construct($nombre);

			$this->numprod =$numprod;
		}
		public function cuantosProductos(){
			for ($i=1; $i <= $this->numprod ; $i++) { 
			echo	"<select class='form-select'> <option>LECHE $this->numprod</option> <option>AZUKAR</option> <option>Arroz</option> <option>Aceite</option> <option>Fresas</option></select>";

			}
		}	
	}
	$persona1 = new numproductos($nombre,$numprod);

	#echo $persona1->imprimeInfo();
	#echo $persona1->cuantosProductos(); 

  ?>


  <!DOCTYPE html>
  <html>
  <head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>registrodeproductos</title>
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  </head>
  <body>
  	<div>
  		<h2><?php echo $persona1->imprimeInfo();?></h2>
  	</div>
  	<div>
  		<form method="POST" action="Boleta.php">
  			<h1>selecione os productos</h1>
  			<?php echo $persona1->cuantosProductos();  ?>
  		</form>
  	</div>
  
  </body>
  </html>