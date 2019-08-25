 <!DOCTYPE html>
<html>
<head>
	<title>Padrões de Projetos</title>
</head>
<body>
	<pre>
		<?php

		class Comida{
			public $nome;

		}

		class Burguer  extends Comida{

			public function lanche(){
				return "Burguer";
			}

		}

		class Pizza extends Comida{

			public function lanche(){
				return "Pizza";
			}
		}

		class Massas extends Comida{

			public function lanche(){
				return "Massas";
			}
		}

		class Igredientes extends Comida{

			
		}

		class Bacon extends Igredientes{

			public function lanche(){
				return "Bacon";
			}

		}

		class Queijo extends Igredientes{

			public function lanche(){
				return "Queijo";
			}
		}

		class Catupiry extends Igredientes{

			public function lanche(){
				return "Catupiry";
			}
		}

		class ComidaDecorador{
			public $comida;
			public $igrediente;

			public function __construct($obj){
				$this->comida[] = $obj;
			}

			public function addIgredientes($i){
				$this->igrediente[] = $i;
			}

			public function montar(){
				$montar = '';

				foreach ($this->comida as $comi) {
					$montar .= "Pedido: ".$comi->lanche()."<br/>";

					if (!empty($this->igrediente)) {
						foreach ($this->igrediente as $igredi) {
							$montar .= "Acrecimo de ".$igredi->lanche()."<br/>";
						}
					}
					
				}

				return $montar;
			}
		}

		$c = new ComidaDecorador(new Pizza);
		$c->addIgredientes(new Catupiry);
		$c->addIgredientes(new Queijo);
		$c->addIgredientes(new Bacon);
		echo $c->montar();



		?>
	</pre>
</body>
</html>