<!DOCTYPE html>
<html>
<head>
	<title>Padrões de Projetos</title>
</head>
<body>
	<pre>
		<?php

		interface QualityInterface{
			public function procedimento();
		}
		interface LogiInterface{
			public function procedimento();
		}
		interface Transporteinterface{
			public function procedimento();
		}
		interface EntregaInterface{
			public function procedimento();
		}

		class Qualidade implements QualityInterface{
			public function procedimento(){
				//Procedimento
				echo "Qualidade OK <br/>";
			}
		}

		class Logistica implements LogiInterface{
			public function procedimento(){
				//Procedimento
				echo "Traçando rota <br/>";
			}
		}

		class Transportadora implements Transporteinterface{
			public function procedimento(){
				//Procedimento
				echo "Transportando <br/>";
			}
		}

		class Entrega implements EntregaInterface{
			public function procedimento(){
				//Procedimento
				echo "Preparand Entrega <br/>";
			}
		}


		class Contabilidade{
			private $qualidade;
			private $logistica;
			private $transportadora;
			private $entrega;

			public function __construct(QualityInterface $quality,
										LogiInterface $logi,
										Transporteinterface $transportadora,
										EntregaInterface $entrega){

				$this->qualidade = $quality;
				$this->logistica = $logi;
				$this->transportadora = $transportadora;
				$this->entrega = $entrega;

			}

			public function comprar(){
				$this->qualidade->procedimento();
				$this->logistica->procedimento();
				$this->transportadora->procedimento();
				$this->entrega->procedimento();

				
			}
		}

		$compra  = new Contabilidade(new Qualidade, new Logistica, new Transportadora, new Entrega);
		$compra->comprar();
		?>
	</pre>
</body>
</html>