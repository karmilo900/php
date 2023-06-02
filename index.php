<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>conteo</title>
</head>
<body>
<h1>CONTEO DE PUÑTOS</h1>
<?php
$Num = rand(1,10);
$Total = 0;
if ($Num == 1) {
	echo "<h2>$Num dado</h2>\n";
}else{
	echo "<h2>$Num dados</h2>\n";
}
$totalcincos=0;
$totalpares=0;
$totalimpares=0;
$holas =array();
echo "\n";
for($i=0;$i<$Num;$i++){
	$dado = rand(1,6);
	echo "<img src=\"img/cara$dado.png\" width=\"120\"height=\"120\"\n>";

	$Total += $dado;
	array_push($holas, $dado);

	if ($dado % 2) {
		$totalimpares+=1;
	}else{
		$totalpares+=1;
	}
	if ($dado==5) {
		$totalcincos+=1;
	}

}

$minimo = min($holas);
$maximo = max($holas);
echo "<br>";
echo "el total de sus points es de: ".$Total;
echo "<br>";
echo "el total de los pares es de: ".$totalpares;
echo "<br>";
echo "el total de los impares es de: ".$totalimpares;
echo "<br>";
echo  "el numero minimo que sacaste es: ".$minimo;
echo "<br>";
echo  "el numero maximo que sacaste es: ".$maximo;
echo "<br>";
echo  "el numero total de 5 que sacaste es: <strong>".$totalcincos;

?>

</body>
</html>