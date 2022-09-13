<?php 


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Formulario</title>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
 </head>
 <body>

 	<div class="container border border-2 p-2 mt-4 bg-primary">
 		<div class="bg-white border-2">
 			<div class="row">
 				<div class="col-4">
 					<div class=" p-4 text-center">
 						<div>
 							<img class="text-center" height="300" width="300" src="https://i.pinimg.com/736x/8c/90/d8/8c90d8880e44c1132e7f744fb6a86b18.jpg">
 						</div>
 					</div>
 				</div>
 				<div class="col-8">
 					<div class="container-fluid">
 						<div class="p-4">
 							<form method="POST" action="resultado.php">
 								<p class="border-bottom">Datos del alumno</p>
 								<div>
 									<label>Nombre alumno</label>
 									<input type="text" class="form-control" name="nombre">
 								</div>
 								<div>
 									<label>Nota 1</label>
 									<input type="text" class="form-control" name="nota1">
 								</div>
 								<div>
 									<label>Nota 2</label>
 									<input type="text" class="form-control" name="nota2">
 								</div>
 								<div>
 									<label>Operacion a realizar</label>
 									<select class="form-select" name="operacion">
 										<option selected>Todos</option>
 										<option value="Suma">Suma</option>
 										<option value="Resta">Resta</option>
 										<option value="Multiplicacion">Multiplicacion</option>
 										<option value="Division">Division</option>

 									</select>
 								</div>
 					<div class="d-flex justify-content-center p-3">
 						<input type="submit" class=" form-control fs-4 p-2 btn btn-success" na> 						
 					</div>
 							</form>
 						</div>
 					</div>
 				</div> 			
 			</div>
 		</div>
 	</div>
 <script type="text/javascript">
 	
 </script>
 </body>
 </html>