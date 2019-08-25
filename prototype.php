<?php
abstract class DocumentosProtorype{
	public abstract function __clone();
}

class DocumentoPages extends DocumentosProtorype{

	public function __clone(){
		echo "Criando Documento Pages";
	}
}
class DocumentoPDF extends DocumentosProtorype{

	public function __clone(){
		echo "Criando Documento PDF";
	}
}
class DocumentoDocx extends DocumentosProtorype{

	public function __clone(){
		echo "Criando Documento Docs";
	}
}

$d = new DocumentoPDF();
?>