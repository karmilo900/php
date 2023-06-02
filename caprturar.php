<?php
$Nom = $_POST['txtnom'];
$Ed =$_POST['txtedad'];
$Esta =$_POST['txtesta'];
$Estado=$_POST['txtestado'];
$fecha = $_POST['txtfecha'];
$fechaEntero=strtotime($fecha);
$anio = date("y", $fechaEntero);
$anio2 = date("Y", $fechaEntero);
$mes = date("m", $fechaEntero);
$dia = date("d", $fechaEntero);
$anoitoa = date("Y");
$totales = $anoitoa - $anio2; 

/*
echo $Nom;
echo "<br>";
echo $Ed;
echo "<br>";
echo $Esta;
echo "<br>";
echo $Estado;
*/
echo $fecha;
echo "<br>";
echo $mes;
echo "<br>";
echo $dia;
echo "<br>";


if ( $Estado=="Soltero") {
	echo ": ".$Nom." :".$Ed;
	echo "<br>";

}
else if($Estado=="Casado"){
	echo ": ".$Nom.": ".$Esta;
	echo "<br>";

}
else if($Estado=="Cachos"){
	echo "<br>";
	echo "eres un cachon  ajajajajajajaj: ".$Nom.": ".$Esta;
}

switch ($mes) {
	case 1:
	if ($dia <= 20) {
		echo "su signo es capricornio";
	}
	else
	{
		echo "Su signo es Acuario";
	}
		break;
	case 2:
	if ($dia <=18) {
		echo "su signo es acuarius";
	}
	else{
		echo "su signo es Piscis";
	}
	break;

	case 3:
	if ($dia <=20) {
		echo "su signo es Piscis";
	}
	else{
		echo "su signo es Ara";
	}
	break;
	
	case 4:
	if ($dia <=20) {
		echo "su signo es Aries";
	}
	else{
		echo "su signo es Taurus";
	}
	break;
	
	case 5:
	if ($dia <=20) {
		echo "su signo es Tauri";
	}
	else{
		echo "su signo es Geminis";
	}
	break;
	
	case 6:
	if ($dia <=21) {
		echo "su signo es Geminis";
	}
	break;

	default:
	echo "pero seleccione algo prro";
		
		
}
echo "<br>";


echo "la edad que cumplira este año es de: ".$totales;
?>