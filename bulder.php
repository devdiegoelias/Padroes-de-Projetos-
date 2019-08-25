<!DOCTYPE html>
<html>
<head>
	<title>Padrões de Projetos</title>
</head>
<body>
	<pre>
		<?php
			/*Receber Propriedades*/
			class Casa{
				private $propriedades;

				public function setProperty($pname, $pvalue){
					$this->propriedades[$pname] = $pvalue;
				}
				public function getAllProperties(){
					return $this->propriedades;
				}
			}
			/*Defininfo uma Padrão*/
			interface BuilderInterface{
				public function createCasa();
				public function qtQuartos();
				public function qtCozinhas();
				public function qtBanheiro();
				public function garagem();
				public function elevador();
				public function getCasa();
			}
			/*Objeto Casa 1*/
			class Casa01Builder implements BuilderInterface{
				private $casa;

				public function createCasa(){
					$this->casa = new Casa();
				}
				public function qtQuartos(){
					$this->casa->setProperty('qtQuartos', 2);
				}
				public function qtCozinhas(){
					$this->casa->setProperty('qtCozinhas', 1);
				}
				public function qtBanheiro(){	
					$this->casa->setProperty('qtBanheiro', 1);
				}
				public function garagem(){
					$this->casa->setProperty('garagem', true);
				}
				public function elevador(){
					$this->casa->setProperty('elevador', false);
				}
				public function getCasa(){
					return $this->casa;
				}
			}
			/*Objeto Casa 2*/
			class Casa02Builder implements BuilderInterface{
				private $casa;

				public function createCasa(){
					$this->casa = new Casa();
				}
				public function qtQuartos(){
					$this->casa->setProperty('qtQuartos', 8);
				}
				public function qtCozinhas(){
					$this->casa->setProperty('qtCozinhas', 2);
				}
				public function qtBanheiro(){	
					$this->casa->setProperty('qtBanheiro', 9);
				}
				public function garagem(){
					$this->casa->setProperty('garagem', true);
				}
				public function elevador(){
					$this->casa->setProperty('elevador', true);
				}
				public function getCasa(){
					return $this->casa;
				}
			}

			/*Class conhecida como DIRETOR*/
			class Imobiliaria{
				public function builder(BuilderInterface $builder){
					/*instancio a casa*/
					$builder->createCasa();
					/*Defino as propriedades*/
					$builder->qtQuartos();
					$builder->qtCozinhas();
					$builder->qtBanheiro();
					$builder->garagem();
					/*Retorno a casa*/
					$builder->elevador();
					return $builder->getCasa();
				}
			}

			/*INDEX*/
			$c[0] = (new Imobiliaria())->builder(new Casa01Builder);

			$c[1] = (new Imobiliaria())->builder(new Casa02Builder);

			print_r($c[0]->getAllProperties());


		?>
	</pre>
</body>
</html>