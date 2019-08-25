<!DOCTYPE html>
<html>
<head>
	<title>Padrões de Projetos</title>
</head>
<body>
	<pre>
		<?php

			interface Casamento{
				public function parto();
			}

			class Mulher implements Casamento{
				private $nome;

				public function __construct($n){
					$this->nome = $n;
				}

				public function parto(){
					return '<h2>'.$this->nome.'</h2><br/>';
				}
			}

			class Homem implements Casamento{
				private $nome;

				public function __construct($n){
					$this->nome = $n;
				}

				public function parto(){
					return '<h2>Homem, não tem filho</h2>';
				}
			}

			class Arvore{
				private $filhos;

				public function addFilhos($f){
					$this->filhos[] = $f;
				}

				public function render(){
					$html = '<div>';

					foreach ($this->filhos as $filho) {
						$html .= $filho->parto();
					}

					$html .= '</div>';

					return $html;
				}
			}

			$arvore = new Arvore();
			$arvore->addFilhos(new Mulher('Juliana'));
			$arvore->addFilhos(new Mulher('Ana'));
			$arvore->addFilhos(new Homem('Ana'));
			$arvore->addFilhos(new Mulher('Renata'));
			echo $arvore->render();
			
		?>
	</pre>
</body>
</html>