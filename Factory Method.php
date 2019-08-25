<!DOCTYPE html>
<html>
<head>
	<title>Padrões de Projetos</title>
</head>
<body>
	<pre>
		<?php

		abstract class Animal{
			protected $tipo;

			public function setTipo($t){
				$this->tipo = $t;
			}

			public function getTipo(){
				return $this->tipo;
			}
		}

		class Gato extends Animal{
		}

		class Cachorro extends Animal{
		}

		class Peixe extends Animal{
		}

		class PetShop{
			public function createGato(){
				return new Gato;
			}

			public function createCachorro(){
				return new Cachorro();
			}

			public function createPeixe(){
				return new Peixe();
			}
		}

		/*   OU   */

		class CreateAnimal{

			public function create($animal){
				switch ($animal) {
				case 'Gato':
					return new Gato();
					break;

				case 'Cachorro':
					return new Cachorro();
					break;

				case 'Peixe':
					return new Peixe();
					break;
				}
			}
		}


		/*
		$pet = new PetShop();
		$dog = $pet->createCachorro();
		$dog->setTipo('Canino');
		$res = $dog->getTipo();
		*/

		/*   OU   */

		$novo = new CreateAnimal();
		$cat = $novo->create("Gato");
		$cat->setTipo('Felino');
		$res2 = $cat->getTipo();

		print_r($res2);


			
		?>
	
	</pre>
</body>
</html>