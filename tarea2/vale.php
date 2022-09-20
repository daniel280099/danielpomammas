<?php
/**
 * }
 */
$sueldo=0;
$precios11 = $_POST['valor'];
$valor = $_POST['submit'];
class Registro 
{
	public $precios11;
	public $sueldo;
	
	function __construct($precios11)
	{
		// code...
		$this ->precios11= $precios11;
	}
	public function validacionArray(){
		if(isset($_POST['submit'])){
			if(!empty($_POST['valor'])) {
				// Contando el numero de input seleccionados "checked" checkboxes.
				$checked_contador = count($_POST['valor']);
				echo "<p>Has seleccionado ".$checked_contador." productos</p> <br/>";
				// Bucle para almacenar y visualizar valores activados checkbox.
				foreach($_POST['valor'] as $seleccion => $valuee) {
					$sueldo=0;
					$sueldo = $sueldo + $valuee;
	
					echo "<p>{$valuee} cuesta {$seleccion}
					<input type='hidden' id='{$seleccion}' ></p>";
					}
					echo "<label class='fw-bold'>el total a pagar es de: </label>
					<input class='form-control' disabled value='{$sueldo}''>";




			}
			else{
			echo "<p><b>Por favor seleccione al menos una opción.</b></p>";
				}
		
			}
		}

	}
	$lista1 = new Registro($precios11);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vista de Factura</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<p>Facturacion de un registro</p>
		<div class="row">
			<div class="col-5">
				<img src="https://img.freepik.com/foto-gratis/pared-azul-pastel-fondo-producto-piso-madera_53876-104708.jpg?w=2000">
			</div>
			<div class="col-7">
				<?php echo $lista1-> validacionArray(); ?>
			</div>
		</div>
	</div>
	<div>
		<div></div>
	</div>

</body>
</html>