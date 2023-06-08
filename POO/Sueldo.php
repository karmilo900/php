<?php
class Empleado{
	private $nombresem;
	private $sueldosem;

	public function __construct($nomem,$suee){
		$this->nombresem=$nomem;
		$this->sueldosem=$suee;
	}

	public function impuestos(){

		echo "<br>";
		echo $this->nombresem;
		echo "<br>";
		if($this->sueldosem>2000000){
			echo "a pagar impuesto bro.";
		}else{
			echo "eso no te alcanza ni para ti, menos para un impuesto por eso no lo pagas.";
		}
	}
}
$empleado1=new Empleado("camilo",3500000);

$empleado1->impuestos();

$empleado2=new Empleado("juan",1500000);

$empleado2->impuestos();
?>
