<?php
//promedio de peso de 5 personas por medio de un array

$promedio=0;
$bajo=0;
$alto=0;

$pesos[0]=62.5;
$pesos[1]=95.5;
$pesos[2]=70.2;
$pesos[3]=55.5;
$pesos[4]=92.6;

for($i=0;$i<count($pesos);$i++){

	$promedio +=$pesos[$i];

}
$pro = $promedio / 5;

for ($i=0;$i<count($pesos);$i++) { 

if($pesos[$i]<$pro){
	$alto++;
}else{

	$bajo++;
}
}


-
echo "<br>";
echo "el promedio registrado es: ".$pro;
echo "<br>";
echo "por encima del promedio es: ".$alto;
echo "<br>";
echo "por debajo del promedio es: ".$bajo;



?>