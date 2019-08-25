<!DOCTYPE html>
<html>
<head>
	<title>Padrões de Projetos</title>
</head>
<body>
	<pre>
		<?php
			class ReceitaFederal{

				public function pagarFisico($doc, $valor, $cpf){
					echo "Pagando fisico: ".$doc." ".$valor." ".$cpf;
				}
				public function pagarJuridico($doc, $valor, $cpf){
					echo "Pagando juridico: ".$doc." ".$valor." ".$cpf;
				}
			}

			class ProxyReceita{

				public function pagarFisico($doc, $valor, $cpf){
					$c = new ReceitaFederal();
					return $c->pagarFisico($doc, $valor, $cpf);
				}
				public function pagarJuridico($doc, $valor, $cpf){
					$c = new ReceitaFederal();
					return $c->pagarJuridico($doc, $valor, $cpf);
				} 
			}

			$rf = new ProxyReceita();
			$rf->pagarJuridico('CNH', 100, '409.395.484.95');
		?>
	</pre>
</body>
</html>