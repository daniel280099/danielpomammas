<?php

$val = $_GET['tipo'];
$name=5;

for ($i=1; $i <= $val ; $i++) { 
	echo '<br>'.$val."vrrrr{$i} <br> ";
	
		for ($f=1; $f <= $name ; $f++) { 
		// code...
		echo $name." vrrr{$f} <br>";
	}
	// code...
	 /*for ($f; $f < $name ; $f++) { 
		// code...
		echo $name.' vrrr <br>';
	};*/
	
};

  ?>