<?php
class Persona{
	public $nombre= "juan camilo";
	public $apellido= "Padua Mayordomo";
	public $estatura=1.83;
	public $edad=20;
	public $genero="macho alfa";

	public function ajaja($nom){
		$this->nombre=$nom;
		echo $this->nombre;
		echo "<br>";
		echo "estoy autocorrectos";
	}
	public function ahablar($ape){
		$this->apellido=$ape;
		echo "<br>";
		echo $this->apellido;
		echo "<br>";
		echo "estoy soñando";
	}
	public function caminar($eda){
		$this->edad=$eda;
		echo "<br>";
		echo $this->edad;
		echo "<br>";
		echo "estoy caminars";

		
	}
}
	$aprendiz= new Persona();
	$aprendiz->ajaja("Camilos");
	$aprendiz->ahablar("Padua");
	$aprendiz->caminar("siuuuu");


?>