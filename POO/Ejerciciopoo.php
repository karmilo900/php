<?php
class operaciones{
	private $valor1;
	private $valor2;
	


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
}
$suma1 =new operaciones(2,5);
echo "<br>";
$suma1->suma();
echo "<br>";
$suma1->resta();
echo "<br>";
$suma1->multiplicacion();
echo "<br>";
$suma1->division();


?>