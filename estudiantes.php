<?php
$grupo1[0]=7;
$grupo1[1]=3;
$grupo1[2]=4;
$grupo1[3]=7;
$grupo1[4]=2;
$grupo1[5]=8;
$grupo1[6]=8;
$grupo1[7]=8;
$grupo1[8]=8;
$grupo1[9]=8;

$grupo2[0]=6;
$grupo2[1]=4;
$grupo2[2]=2;
$grupo2[3]=7;
$grupo2[4]=5;
$grupo2[5]=3;
$grupo2[6]=5;
$grupo2[7]=3;
$grupo2[8]=2;
$grupo2[9]=7;
$contador1=0;
$contador2=0;

for ($i=0; $i <count($grupo1) ; $i++) { 
	$contador1+=$grupo1[$i];
}
for ($i=0; $i <count($grupo2) ; $i++) { 
	$contador2+=$grupo2[$i];
}


$promedio1=$contador1/10;
$promedio2=$contador2/10;
$sumatotal=($contador1+$contador2)/20;

echo "el promedio general del grupo 1 es de: ".$promedio1;
echo "<br>";
echo "el promedio general del grupo 2 es de: ".$promedio2;
echo "<br>";
echo "el promedio general es de: ".$sumatotal;
echo "<br>";
if ($promedio1>$promedio2) {
	echo "el grupo con mejor promedio es el 1";
}else{
	echo "el grupo con mejor promedio es el 2";
}
?>