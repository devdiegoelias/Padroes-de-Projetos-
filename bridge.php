 <!DOCTYPE html>
<html>
<head>
	<title>Padrões de Projetos</title>
</head>
<body>
	<pre>
		<?php
			interface WebSite{
				public function acesso();
			}

			class google implements WebSite{
				public function acesso(){
					echo "Buscando conteudo no Google";
				}
			}
			class uol implements WebSite{
				public function acesso(){
					echo "Noticias de Esporte";
				}
			}
			class g1 implements WebSite{
				public function acesso(){
					echo "Noticias de Economia";
				}
			}


			abstract class Navegador{
				protected $site;

				public function __construct(WebSite $wb){
					$this->site = $wb;
				}
			}

			class Chrome extends Navegador{

				public function __construct(WebSite $wb){
					parent::__construct($wb);
				}

				public function abrirNavegador(){
					$this->site->acesso();
				}
			}
			class Firefox extends Navegador{
				public function __construct(WebSite $wb){
					parent::__construct($wb);
				}

				public function abrirNavegador(){
					$this->site->acesso();
				}
			}
			class Edge extends Navegador{
				public function __construct(WebSite $wb){
					parent::__construct($wb);
				}

				public function abrirNavegador(){
					$this->site->acesso();
				}
			}

			$nav = new Chrome(new uol());
			$nav->abrirNavegador();

			echo "<br/>";

			$nav = new Firefox(new google());
			$nav->abrirNavegador();

			echo "<br/>";

			$nav = new Edge(new g1());
			$nav->abrirNavegador();


		?>
	</pre>
</body>
</html>