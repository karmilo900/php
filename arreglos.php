<?php
$dia[0]="monda";
$dia[1]="tuesday";
$dia[2]="wednesday";
$dia[3]="thursday";
$dia[4]="friday";
$dia[5]="fsaturday";
$dia[6]="sunday";


echo "<br>";


$autos = array("Marza","Tesla","Lamborgini","Chevrolet","Corvette");
$total= count($autos);

echo "las marcas de carros son: ";
for ($i=0; $i < $total; $i++) { 
	
	if ($i == $total-1) {
		echo $autos[$i].". ";
	}else if($i < $total){
		echo $autos[$i].", ";
	}
}


?>