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
		 foreach ($array as $key => $value) {

		 	$suma = ($suma + $value);
		 	$resta = ($suma - $value);
		 	$multi = $multi * $value;
		 	$divi = ($divi / $value);
		 	// code...
		 }
		 echo "valores de la suma es: ".$suma.'<br>';
		 echo 'valores de la operacion resta es: '. $resta.'<br>'; 
		 echo 'valores de la  multiplicacion es: '. $multi.'<br>';
		 echo 'valores de la division es: '. $divi;



	  ?>
