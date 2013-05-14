<?php

function extremeGoHorseKanois(){
	for($i=1; $i<=100;$i++){
		
		if($i%5 == 0)				echo "Ka";	
		if($i%7 == 0) 				echo "Nois";
		if($i%5 != 0 && $i%7 != 0) 		echo $i;

		echo "\n";
	}
}

extremeGoHorseKanois();

	// http://www.guj.com.br/java/243635-extreme-go-horse-programming- :p
