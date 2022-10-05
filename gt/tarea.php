<?php #se desea contruir un mini sitema en donde nos permita inscribir a un alumno del intituto tec
#tomando en cuneta los siguientes requeriminetos se tiene 3 carreras y 6 periodos de estudios
#se sabe que holteleria solo tien 4 periodos desarrollo tiene 3 y negocio tiene 6 si es un alumno nuevo se solicitara todos sus datos 
# y si ya es antiguo se cargaran las notas y si se puede matricular o no

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tec</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container p-0">
		<div class="row">
			<div class="col-8" style="position: relative; padding-top: 100px;font-family: raleway;">
				<span style="position:absolute;right: 0; top:  0;left: 132px; font-size: 70px;color: skyblue;">INSTITUTO TEC</span>
				<img class="text-center" src="https://intec.edu.pe/wp-content/uploads/2022/08/chica-home3.webp"width="700" height="500" style="background-image: cover;"style="position:absolute;">
				
			</div>
			<div class="col-4 pt-5">
				<h2 class="text-center border-bottom border-3">Ingrese sus datos </h2>
				<form method="GET" action="result.php" class="form-control pt-4 pb-4">
					<div class="pt-4">
						<label>Nonmbre</label>
						<input type="text" class="form-control" name="nombre" placeholder="nombre alumno..">
					</div>
					<div class="pt-4">
						<label>Eres estudiante del TEC</label>
						<select class="form-select" name="estudianteTipo">
							<option selected>--selecciona--</option>
							<option value="nuevo">NUEVO</option>
							<option value="estudiante">Estutiante TEC</option>
						</select>
					</div>
					<div class="pt-4">
						
					<input type="submit" class="form-control btn btn-primary" name="">
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>