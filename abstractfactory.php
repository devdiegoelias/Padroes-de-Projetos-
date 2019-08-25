<!DOCTYPE html>
<html>
<head>
	<title>Padrões de Projetos</title>
</head>
<body>
	<pre>
		<?php

		abstract class Animal{
			abstract function grupo();
		}	

		class Cachorro extends Animal{
			public function grupo(){
				return new Terrestre();
			}
		}
		class Gato extends Animal{
			public function grupo(){
				return new Terrestre();
			}
		}
		class Papagaio extends Animal{
			public function grupo(){
				return new Voador();
			}
		}
		class Peixe extends Animal{
			public function grupo(){
				return new Aquatico();
			}
		}

		class Terrestre{

		}
		class Voador{

		}
		class Aquatico{

		}


		$ani = new Peixe();
		$ret = $ani->grupo();
		print_r($ret);
		?>
	</pre>
</body>
</html>