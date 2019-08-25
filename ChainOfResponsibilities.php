<?php
/*COMO JOGAR 21 EM ORIENTAÇÃO OBJETO COM PADRAO DE PROJETOS*/

class Jogada{
	private $peso;
	public function __construct($p){
		$this->peso = $p;
	}
	public function gatCarta(){
		return $this->peso;
	}
}

class Jogador1{
	private $proximoJogador;
	private $soma;

	public function proximo($s){
		$this->proximoJogador = $s;
	}
	public function totalCartas($t){
		$this->soma = $t;
	}
	public function jogar(Jogada $Jogada){
		if ($Jogada->gatCarta() == $this->soma) {
			echo "Jogador um Ganhouuu!!!";
		} else {
			$this->proximoJogador->jogar($Jogada);
		}
	}
}
class Jogador2{
	private $proximoJogador;
	private $soma;

	public function proximo($s){
		$this->proximoJogador = $s;
	}
	public function totalCartas($t){
		$this->soma = $t;
	}
	public function jogar(Jogada $Jogada){
		if ($Jogada->gatCarta() == $this->soma) {
			echo "Jogador dois Ganhouuu!!!";
		} else {
			$this->proximoJogador->jogar($Jogada);
		}
	}
}
class Jogador3{
	private $proximoJogador;
	private $soma;

	public function proximo($s){
		$this->proximoJogador = $s;
	}
	public function totalCartas($t){
		$this->soma = $t;
	}
	public function jogar(Jogada $Jogada){
		if ($Jogada->gatCarta() == $this->soma) {
			echo "Jogador tres Ganhouuu!!!";
		} else {
			echo "Nenhum jogador ganhouu";
		}
	}
}


$Jogada = new Jogada(21);

$Jogador1 = new Jogador1();
$Jogador2 = new Jogador2();
$Jogador3 = new Jogador3();

$Jogador1->totalCartas(14);
$Jogador2->totalCartas(18);
$Jogador3->totalCartas(21);

$Jogador1->proximo($Jogador2);
$Jogador2->proximo($Jogador3);

$Jogador1->jogar($Jogada);









?>