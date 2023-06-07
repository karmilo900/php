<?php
$Nota1= $_POST['txtn1'];
$Nota2= $_POST['txtn2'];
$Nota3= $_POST['txtn3'];
$Examen= $_POST['txtparcial'];
$Trabajo= $_POST['txtfinal'];

$Promedionotas =(($Nota1+$Nota2+$Nota3)/3)+0.35;
echo "el promedio de las notas es de: ".$Promedionotas;
echo "<br>";

$PromedioExamen =($Examen*0.35);
echo "el promedio del examen es de: ".$PromedioExamen;
echo "<br>";

$PromedioTrabajo =($Trabajo*0.35);
echo "el promedio del trabajo final es de: ".$PromedioTrabajo;
echo "<br>";
$totaltodo=$Promedionotas+$PromedioExamen+$PromedioTrabajo;

echo "el total de sus notas es de: ".$totaltodo;

if
?>