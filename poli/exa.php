<?php
class Vehiculo{
protected $combustible = 0; //Comienza el vehiculo vacio de combustible cero litros
protected $marcaymodelo='';
   public function cargacombustible($combustible){
        $this->combustible = $combustible;
    }
       public function mostrarcombustible(){
return $this->combustible;
    }
  public function asignarvehiculo($marca,$modelo){
  $this->marcaymodelo=$marca.' '.$modelo;
  }
 
   
public function mostrarmarcaymodelo(){
  return $this->marcaymodelo;
  }



   }


/////////////////
   class Autos extends Vehiculo{
public function avanzar(){
//cada 10 kilometros consume un litro
        $this->combustible -= 1;
    }
} //Fin Clase
	     /*function __construct($objeto_parametro){
$this->miobjeto=$objeto_parametro
}*/




 class Conductor {
     private $vehiculo;
     function __construct($objeto){
$this->vehiculo = $objeto;
    }   
    public function cargacombustible($combustible){
        $this->vehiculo->cargacombustible($combustible);
    }
public function asignarvehiculo($marca,$modelo){
        $this->vehiculo->asignarvehiculo($marca,$modelo);
    }
     public function marcaymodelo(){
       return $this->vehiculo->mostrarmarcaymodelo();
    } 
    public function avanzarvehiculo(){
$this->vehiculo->avanzar();
    }
     public function combustiblerestante(){
return $this->vehiculo->mostrarcombustible();
    }
} 
//Creamos una variable que instancia a Conductor y le pasamos como parámetro la clase Autos
$ferrari = new Conductor (new Autos);
//Asignamos el vehiculo y la marca
echo $ferrari->asignarvehiculo('Ferrari ','550 MARANELLO ').'<br>';
//Mostramos el vehiculo asignado
echo $ferrari->marcaymodelo().'<br>';
//Cargamos combustible en el vehiculo indicando la cantidad en litros
echo 'Carga combustible '.$ferrari->cargacombustible(50).'<br>';
//Mostrmos la cantidad de combustible actual
/*echo 'Combustible actual '.$ferrari->combustiblerestante().' litros<br><br>';
echo 'Avanza vehiculo<br>';
$ferrari->avanzarVehiculo();
echo $ferrari->marcaymodelo().' le quedan '.$ferrari->combustiblerestante().' litros de combustible<br><br>';*/

//Creamos otra instancia con otro vehículo podemos por ejemplo crear una variable que sea la marca y patente
$hondaHB0071 = new Conductor (new Autos);
echo $hondaHB0071->asignarvehiculo('Honda ','ACCORD').'<br>';
echo $hondaHB0071->marcaymodelo().'<br>';
echo 'Carga combustible '.$hondaHB0071->cargacombustible(50).'<br>';
echo 'Combustible actual '.$hondaHB0071->combustiblerestante().' litros<br><br>';
echo 'Avanza vehiculo Honda<br>';
$hondaHB0071->avanzarVehiculo();
echo $hondaHB0071->marcaymodelo().' le quedan '.$hondaHB0071->combustiblerestante().' litros de combustible<br><br>'; 


class Motos extends Vehiculo{
  public function avanzar(){
  //cada 10 kilometros consume un litro
        $this->combustible -= 1;
    }
}


$moto = new Conductor (new Motos);
echo $moto->asignarvehiculo('Yamaha ','YBR 125').'<br>';
echo $moto->marcaymodelo().'<br>';
echo 'Carga combustible '.$moto->cargacombustible(10).'<br>';

echo 'Combustible actual '.$moto->combustiblerestante().' litros<br><br>';

echo 'Avanza vehiculo moto<br>';
$moto->avanzarVehiculo();
echo $moto->marcaymodelo().' le quedan '.$moto->combustiblerestante().' litros de combustible<br><br>';  ?>

