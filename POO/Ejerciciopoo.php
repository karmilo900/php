<?php

 
 
class operaciones{
	
	private $valor1;
	 private$valor2;
	


	public function __construct($val1,$val2){
		$this->valor1=$val1;
		$this->valor2=$val2;
		
	}
	public function suma(){
		$total = $this->valor2 + $this->valor1 ;
		echo "el total de la suma es: ".$total;
	}
	public function resta(){
		$total = $this->valor2 - $this->valor1 ;
		echo "el total de la resta es: ".$total;
	}
	public function multiplicacion(){
		$total = $this->valor2 * $this->valor1 ;
		echo "el total de la multiplicacion es: ".$total;
	}
	public function division(){
		$total = $this->valor2 / $this->valor1 ;
		echo "el total de la division es: ".$total;
	}
	public function raiz(){
		$total =sqrt($this->valor2);
		$total2=sqrt($this->valor1);
		echo "la raiz cuadrada de los numeros es: ".$total. " y ".$total2;
	}
}
 $valores1=$_POST['valor1'];
 $valores2=$_POST['valor2'];
$suma1 =new operaciones($valores1,$valores2);
echo "<br>";
$suma1->suma();
echo "<br>";
$suma1->resta();
echo "<br>";
$suma1->multiplicacion();
echo "<br>";
$suma1->division();
echo "<br>";
$suma1->raiz();


?>