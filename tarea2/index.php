



<?php 
/**
 * 
 */

class persona{
public $nombre;
public $edad;
public $apellido;
public $direccion;
public $pais;


		public function __construct($nombre,$edad,$pais,$direccion,$apellido){

		$this->nombre =$nombre;
		$this->edad =$edad;
		$this->pais =$pais;
		$this->direccion = $direccion; 
		$this->apellido =$apellido;
		
		


		}
		public function infodepersona(){
				return " <div class='form-control text-center'><input class='form-control' type='text' disabled value='$this->nombre'> </div>";
		}
		
		
}


class  estudiante extends persona{
	//propiedades
	public $carrera;
	public $cursos;
	//metodos

	public function __construct($nombre,$edad,$direccion,$apellido,$pais,$carrera){
		parent::__construct($nombre,$edad,$pais,$direccion,$apellido);

	$this->carrera =$carrera;


	}
	/*public function informacionEstudiante(){
		return 
	}
	$infoEstudiantes = new estudiante()*/
}
class  trabajo extends estudiante{
			//propiedades
		public $trabajo;
		//metodos

		public function __construct($nombre,$edad,$direccion,$apellido,$pais,$carrera,$trabajo){
			parent::__construct($nombre,$edad,$direccion,$apellido,$pais,$carrera);

		$this->trabajo =$trabajo;


		}

		public function informacion(){
			return "<div class='form-floating mt-3 mb-3'> 
        <textarea class='form-control' name='comentarios' placeholder='comentarios'  style='height: 200px'>
        	Estudiante:  $this->nombre Su edad:$this->edad pais:  $this->pais   Trabaja de : $this->trabajo Estudia:  $this->carrera 
        </textarea>
        <label for='comentarios'>Deje aquí sus comentarios</label>        
      </div>";
		/*return "Estudiante:  $this->nombre <br> Su edad:$this->edad  <br> pais:  $this->pais  <br>  Trabaja de : $this->trabajo <br> Estudia:  $this->carrera ";
			*/
		}

}
/**
 * 
 */
class Padre 
{
	
	function __construct($nombre)
	{
		$this->nombre =$nombre;
	}
	public function paderT(){
		return "nombre $this->nombre";
	}
}
$inforpadre = new padre('daniel');

$infoperson1 = new persona('daniel',12,'peru','av.los','poma' );

$estudiante1 = new trabajo('Denis',23,'peru','desarrollador','administrador','pepe','pepe'); 
#$infoEstudiantes = new estudiante()

#echo $estudiante1->informacion();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Prueba de Bootstrap 5</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>

  <div class="container">

    <form>
      
        
        	<?php echo $estudiante1->informacion(); ?>
        
      <button type="submit" class="btn btn-primary">Enviar</button>      
    </form>  
    <?php echo $estudiante1->infodepersona(); ?> 
    <?php echo $inforpadre->paderT(); ?> 
  </div> 
</body>
</html>