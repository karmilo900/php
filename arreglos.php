<?php
$dia[0]="monda";
$dia[1]="tuesday";
$dia[2]="wednesday";
$dia[3]="thursday";
$dia[4]="friday";
$dia[5]="fsaturday";
$dia[6]="sunday";

/*
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

//arreglos asociativos
$registros = array('Docu'=> 1000349464,'Nombre'=> "Camilo", 'Direccion'=> "Mi Casa");
echo "<br>";
echo $registros['Docu'];
echo "<br>";

$articulos = array('Codigo'=> 100,'Nombrep'=> "camiseta tipo polo importada desde berlin alemania con hilos de ceda fina de la india.",'Precio'=> 8000);

foreach ($articulos as $key => $value) {
	echo " para la llave: ".$key." su valor es:".$value;
	echo "<br>";
}

$aprendices= array('Docu'=>28540, 'NombreA'=>"Edan",'programa'=> "Analisis y Desarrollo de Software e inteligencia artificial especializado en php nivel superior con especializacion",'trimestre'=>5);

foreach($aprendices as $fi=> $valor){
	echo "para los datos: ".$fi." su valor es: ".$valor;
	echo "<br>";
}
*/
$totaless=0;
$numeros= array('n1' => 2,'n2' => 5,'n3' => 2,'n4' => 2,'n5' => 2, );
foreach($numeros as $a=> $valores){

	
	$totaless+=$valores;

}
echo "el total de la suma es de: ".$totaless;

?>