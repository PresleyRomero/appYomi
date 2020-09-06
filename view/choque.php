<?php 

	$claves = array(
		"1"=>"b",
		"2"=>"c",
		"3"=>"a",
		"4"=>"d",
		"5"=>"e"
	);

	$rptas = array(
		array( "nombre"=>"Choque caradura",
			   "r"=> array(
			   		"1"=>"e",
			   		"2"=>"c",
			   		"3"=>"a",
			   		"4"=>"d",
			   		"5"=>"a"
			   )
		),
		array( "nombre"=>"AngiecitaDelPeru",
					   "r"=> array(
					   		"1"=>"c",
					   		"2"=>"c",
					   		"3"=>"a",
					   		"4"=>"e",
					   		"5"=>"e"
					   )
				),
		array( "nombre"=>"Palomino Vago",
					   "r"=> array(
					   		"1"=>"b",
					   		"2"=>" ",
					   		"3"=>" ",
					   		"4"=>"e",
					   		"5"=>"e"
					   )
				),
		array( "nombre"=>"Presley Romero",
			   "r"=> array(
			   		"1"=>"b",
			   		"2"=>"c",
			   		"3"=>"a",
			   		"4"=>"d",
			   		"5"=>"e"
			   )
		)
	);

	
	for ($i=1; $i <= count($claves) ; $i++) { 
		$buenas = 0;
		$malas = 0;
		$nulas = 0;		
		for ($j=0; $j < count($rptas); $j++) { 			
			if($rptas[$j]["r"]["".$i] == " "){
				$nulas++;
			}elseif ($rptas[$j]["r"]["".$i] == $claves["".$i]){
				$buenas++;
			}else{
				$malas++;
			}
		}	
		echo "Pregunta ".$i.": <br>";
		echo "Buenas = ".$buenas."<br>";
		echo "Malas = ".$malas."<br>";
		echo "Nulas = ".$nulas."<br>";
		echo "<br>";	
	}

?>