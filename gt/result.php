<?php  

$nombreAlumno = $_GET['nombre'];
$tipoAlumno = $_GET['estudianteTipo'];
#$tipo =0;

/**
 * 
 */
abstract class persona 
{
	abstract public function obteneralumno($nombreAlumno);
	abstract public function obtenertipoAlumno($tipoAlumno); 
	
}
/**
 * 
 */
class alumno extends persona
{
	
	#private $tipo;
	public function obteneralumno($nombreAlumno){
		print $nombreAlumno;
	}
	public function obtenertipoAlumno($tipoAlumno){
		print $tipoAlumno;
	}

}
	$obj = new alumno();
	$obj->obteneralumno($nombreAlumno);
	$obj->obtenertipoAlumno($tipoAlumno);


switch ($tipoAlumno) {
	case 'nuevo':
		// code...
	$tipo= 'nuevo';
	#echo $tipo;

		break;
	case 'estudiante':
		// code...
	$tipo='estudiante';
	#echo $tipo;
		break;
	
	default:
		// code...
		break;
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php 
if( $tipo == 'nuevo'){
	?>
	<div class="container">
		<div class="row">
			<h2>Registro de nuevo estudiante</h2>
			<div class="col-6">
				<form>
					<label>Nuevo Estudiante</label>
					<input type="text" class="form-control" name="" placeholder="ingresar nombre">
				</form>
			</div>
		</div>
	</div>
<?php 
}
if( $tipo == 'estudiante'){
	?>
	<div class="container">
		<div class="row">
			<h2>Validar las notas</h2>
			<div class="col-6">
				<form>
					<label>Nuevo Estudiante</label>
					<input type="text" class="form-control" name="" placeholder="ingresar nombre">
				</form>
			</div>
		</div>
	</div>
<?php  
}

 ?>
	

</body>
</html>