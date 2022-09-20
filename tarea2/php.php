<?php

/**
 * 
 * 
 */

$nombre = $_POST['nombre'];
$frutas = array("Gaseosa Inka" => 120,
						"Agua con gas" => 10);
class frutas 
{
	public $frutas;	

	function __construct($frutas)
	{
		// code...
		$this -> frutas = $frutas;
	}
	public function listaFrutas(){
		

		 $frutasT= array("Gaseosa Inka" => 120,
						"Agua con gas" => 10,
						"agita de mango" => 10);
		foreach ($frutasT as $valor => $val) {

		// code...
		#echo "<select value='{$valor}'><option> {$valor }</option> </select>" ;
			#<input type='checkbox'  name='precio[{$val},{$valor}]' value='{$val}'> {$val}<br>
		echo  "<input type='checkbox' name='valor[$valor]' value='{$val}'> {$valor} <br>";
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
  				<div class="container-fluid">
  					<div class="section-title">
  						<label class="fw-bold">Nombre de la persona</label>
  						<input type="" class="form-control" disabled name="" value="<?php echo $nombre; ?>">
  					</div>
  				</div>
  			</div>
  			<div class="col-12">
  				<span>Lista de productos </span>
  				<div class="form-control">
  					<form method="POST" action="vale.php">
  						<?php echo $lista1-> listaFrutas(); ?>
  						<input type="submit" name="submit" value="enviar">
  					</form>


  				</div>
  			</div>
  		</div>
  	</div>
  
  </body>
  </html>