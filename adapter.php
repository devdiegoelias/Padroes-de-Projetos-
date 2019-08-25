<?php

interface AdapterTomada{
	public function tomada();
}

class TomadaTresPinos{

	public function __construct(){

	}

	public function tomada(){
		echo 'Tomada 3 Pinos';
	}
}

class TomadaAdapter implements AdapterTomada{
	private $conector;

	public function __construct($conector){
		$this->conector = $conector;
	}

	public function tomada(){
		echo "Tomada 2 Pinos";
	}
}




$tomada = new TomadaAdapter(new TomadaTresPinos());
$tomada->tomada();


?>