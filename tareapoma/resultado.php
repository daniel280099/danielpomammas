<?php
	
		$suma = 0;
		$multi = 1;
		$divi = 1;
		$resta = 0;

		 $array = $_GET['number'];



		/* for ($i=0; $i < 5 ; $i++) { 
		 	// code...
		 	echo "array[{$i}]";
		 }*/
		 	$key=1;
		 foreach ($array as $key => $value) {

		 	/*$suma =  $suma + $value;
		 	echo "namber +{$key}namber{$suma}<br>";*/
		 	$resta =  $resta -  $value;
		 	echo $resta;
		 	echo "namber +{$key}namber{$suma}<br>";
		 	/*$multi = ( $multi * $value);
		 	echo "namber -{$key}resta{$suma}<br>";
		 	echo $multi;
		 	$divi = ( $divi / $value);
		 	echo $divi;*/
		 	var_dump($array);
		 	// code...
		 }
		 echo "<br>valores de la suma es: ".$suma.'<br>';
		 echo 'valores de la operacion resta es: '. $resta.'<br>'; 
		 echo 'valores de la  multiplicacion es: '. $multi.'<br>';
		 echo 'valores de la division es: '. $divi;



	  ?>
