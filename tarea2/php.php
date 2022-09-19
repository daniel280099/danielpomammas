<?php

/**
 * 
 * 
 */

$frutas = array("Gaseosa Inka" => 120,
						"Agua con gas" => 10);
class frutas 
{
	public $frutas;	
	function __construct($frutas)
	{
		// code...
		$this ->frutas = $frutas;
	}
	public function listaFrutas(){
		

		 $frutasT= array("Gaseosa Inka" => 120,
						"Agua con gas" => 10,
						"agita de mango" => 10);
		foreach ($frutasT as $valor => $val) {

		// code...
		#echo "<select value='{$valor}'><option> {$valor }</option> </select>" ;
		echo  "<input type='hidden' name='{$val}'> <br>
		<input type='checkbox' value='{$valor}[]' name='{$valor}'> {$valor} <br>";
		}
		#return $imprimeValor;
	}
}
	$lista1 = new frutas($frutas)

#$lista->listaFrutas();


	


	/*$bebidas  = array("Gaseosa Inka" => 120,
						"Agua con gas" => 10);

	foreach ($bebidas as $valor => $val) {

		// code...
		#echo "<select value='{$valor}'><option> {$valor }</option> </select>" ;
		echo "<input type='hidden' name='{$val}'>";
		echo "<input type='checkbox' value='{$valor}' name='{$valor}'> {$valor} <br>";
	}

	foreach ($frutas as $key => $value) {
		// code...
		echo "{$key} cuesta {$value} <br>";
	}*/

  ?>


  <!DOCTYPE html>
  <html>
  <head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Index</title>
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  </head>
  <body>
  	<div class="container">
  		<div class="row">
  			<div class="col-12">
  				<div class="form-control">
  					<form method="POST" action="vale.php">
  						<?php echo $lista1-> listaFrutas(); ?>
  						<input type="submit" name="submit" value="enviar">
  					</form>


  					<?php
if(isset($_POST['submit'])){//Validacion de envio de formulario
if(!empty($_POST['genero'])){
// Ciclo para mostrar las casillas checked checkbox.
foreach($_POST['genero'] as $selected){
echo $selected."</br>";// Imprime resultados
}
}
}
?>
  				</div>
  			</div>
  		</div>
  	</div>
  
  </body>
  </html>