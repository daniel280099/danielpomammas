<?php  



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rgistro</title>
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="title fw-bold"> REGISTRO</div>
			</div>
			<div class="col-12">
				<div class="form-control">
					<form class="form-control" method="POST" action="php.php">
						<div class="form-control-input">
							<label class="form-control-label fw-bold">Nombre</label>
							<input type="text" class="form-control" type="text" name="nombre" placeholder="Escriba su nombre..">
						</div>
						<input class=" btn btn-success" type="submit" name="">
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>