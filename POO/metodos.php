<?php
class Empleado{
	//atributos globales
	private $Nombre;
	private $Apellido;
	private $Edad;

	//constructor

	public function inicializar($nom,$ape,$edad){
		echo "<br>";
		echo $this->Nombre=$nom;
		echo "<br>";
		echo $this->Apellido=$ape;
		echo "<br>";
		echo $this->Edad=$edad;
		
	}
	public function setNombre($Nombre){
		$this->Nombre=$Nombre;
	}
	public function getNombre(){
		return $this->Nombre;
	}
	public function setApellido($Apellido){
		$this->Apellido=$Apellido;
	}
	public function getApellido(){
		return $this->Apellido;
	}

	public function setEdad($Edad){
		$this->Edad=$Edad;
	}
	public function getEdad(){
		return $this->Edad;
	}

}
class Supervision extends Empleado{

	protected $Sueldo;
	public function cargarSueldo($sue){
		$this->Sueldo=$sue;
	}
	public function impuesto(){
		if($this->Sueldo > 500000){
			echo "eres gay";
		}else{
			echo "eres menos gay";
		}
	}
}
$empleado=new Empleado();
$empleado->setNombre("jelipe");
echo $empleado->getNombre();
echo "<br>";
$empleado->setApellido("gomez");
echo $empleado->getApellido();
echo "<br>";
$empleado->setEdad("torva");
echo $empleado->getEdad();

$empleado2 =new Empleado();
echo $empleado2->inicializar("Camilo","padiua",20);

echo "<br>";
echo "creacion de otro objeto con herencia";
echo "<br>";
$empleado3 =new Supervision();
$empleado3->inicializar("Olasdelmar","gotas",45);
echo "<br>";
$empleado3->cargarSueldo(456000);
$empleado3->impuesto();
echo "<br>";
$empleado4 =new Supervision();
$empleado4->inicializar("Carlos Albert","gotas",45);
echo "<br>";
$empleado4->cargarSueldo(900000);
$empleado4->impuesto();

?>