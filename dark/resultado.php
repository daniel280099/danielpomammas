<?php 

$ejecutarFuncion = new operador();

	$nombre = $_POST['nombre'];
	$nota1 = $_POST['nota1'];
	$nota2 = $_POST['nota2'];
	$operaciones = $_POST['operacion'];
	$dataSuma = 0;


	#echo $ejecutarFuncion->Operadores($nota1,$nota2,$operaciones);

class operador{

	

	#public $nombre = $_POST['nombre'];
	#public $nota1 = $_POST['nota1'];
	#public $nota2 = $_POST['nota2'];
	#public $operaciones = $_POST['operacion'];

	#public $dataNombre = $nombre;
	#public $dataNumber1 = $nota1;
	#public $dataNumber2 = $nota2;
	#public $dataOperaciones = $operaciones;



		public function Operadores($nota1,$nota2,$operaciones){
			switch ($operaciones){
			    case 'Suma':
			        $dataSuma = $nota1 + $nota2;
			        echo '<p>la suma entre estos numeros : '
			        .'<div class="col-4"><input class="form-control" placeholder="'.$nota1.'" disabled></div>'." + "
			        .'<div class="col-4"><input class="form-control" placeholder="'.$nota2.'" disabled></div>'." = "
			        . '<div class="col-3"><input class="form-control" placeholder="'.$dataSuma.'" disabled></div>'.'</p>';
			        break;
			    case 'Resta':
			    	$dataSuma = $nota1 - $nota2;
			    	echo '<p>la resta entre estos numeros : '
			        .'<div class="col-4"><input class="form-control" placeholder="'.$nota1.'"disabled></div>'." - "
			        .'<div class="col-4"><input class="form-control" placeholder="'.$nota2.'"disabled></div>'." = "
			        . '<div class="col-3"><input class="form-control" placeholder="'.$dataSuma.'"disabled></div>'.'</p>';
			        break;
			    case 'Division':
			        $dataSuma = $nota1 / $nota2;
			        echo '<p>la Division entre estos numeros : '
			        .'<div class="col-4"><input class="form-control" placeholder="'.$nota1.'"disabled></div>'." / "
			        .'<div class="col-4"><input class="form-control" placeholder="'.$nota2.'"disabled></div>'." = "
			        . '<div class="col-3"><input class="form-control" placeholder="'.$dataSuma.'"disabled></div>'.'</p>';
			        break;
			    case 'Multiplicacion':
			        $dataSuma = $nota1 * $nota2;
			        echo '<p>la Multiplicacion entre estos numeros : '
			        .'<div class="col-4"><input class="form-control" placeholder="'.$nota1.'"disabled></div>'." * "
			        .'<div class="col-4"><input class="form-control" placeholder="'.$nota2.'"disabled></div>'." = "
			        . '<div class="col-3"><input class="form-control" placeholder="'.$dataSuma.'"disabled></div>'.'</p>';
			        break;
				
				default:
					# code...
					break;
			
		}
	}
}
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Resultado del envio de datos</title>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
 </head>
 <body>
 	<div class="container-fluid">
 		<div class="section-padding">
 			<div class="row">
 				<h2 class="border-bottom">Resultados enviado son:</h2>
 			</div>
 			<?php 
 			if($operaciones == 'Suma'){

 				?>
 				<div class="row text-center">
 					<?php
 					echo $ejecutarFuncion->Operadores($nota1,$nota2,$operaciones);
 					  ?>
 				</div>
 				<?php
 			}

 			 ?>
 			 <?php 
 			if($operaciones == 'Resta'){

 				?>
 				<div class="row text-center">
 					<?php
 					echo $ejecutarFuncion->Operadores($nota1,$nota2,$operaciones);
 					  ?>
 				</div>
 				<?php
 			}

 			 ?>
 			 <?php 
 			if($operaciones == 'Division'){

 				?>
 				<div class="row text-center">
 					
 					<?php
 					echo $ejecutarFuncion->Operadores($nota1,$nota2,$operaciones);
 					  ?>
 				</div>
 				<?php
 			}

 			 ?>
 			 <?php 
 			if($operaciones == 'Multiplicacion'){

 				?>
 				<div class="row text-center">
 					<?php
 					echo $ejecutarFuncion->Operadores($nota1,$nota2,$operaciones);
 					  ?>
 				</div>
 				<?php
 			}

 			 ?>
 			 <?php 
 			if($operaciones == ''){

 				?>
 				<div class="row text-center">
 					<p>no hay data</p>
 				</div>
 				<?php
 			}

 			 ?>
 		</div>
 	</div>
 
 </body>
 </html>