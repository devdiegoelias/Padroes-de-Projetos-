<!DOCTYPE html>
<html>
<head>
	<title>Padrões de Projetos</title>
</head>
<body>
	<pre>
		<?php
			interface Percorrer{
				public function percorrerVetor();
			}
			class FormaAnalizeOne implements Percorrer{
				public function percorrerVetor(){

				}
			}

			class FormaAnalizeTue implements Percorrer{
				public function percorrerVetor(){
					
				}
			}

			class Strategy{
				public $forma;
				public $obj;

				public function __construct($forma, $obj){
					$this->forma = $forma;
					$this->obj =$obj;
				}

				public function Analizar(){

					switch ($this->forma) {
						case 'forma1':
							$an = new FormaAnalizeOne();
							return $an->percorrerVetor();
							break;
						case 'forma2':
							$an = new FormaAnalizeTue();
							return $an->percorrerVetor();
							break;
					}
				}
			}

			$array = array(10, 20, 30, 40, 50, 60, 70, 80, 90 ,100);
			$strategy = new Strategy('forma1', $array);
			$x = $strategy->Analizar();

		?>
	</pre>
</body>
</html>