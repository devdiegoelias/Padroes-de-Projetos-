<!DOCTYPE html>
<html>
<head>
	<title>Padrões de Projetos</title>
</head>
<body>
	<pre>
		<?php

			class BancoDados{

				public static function conectar(){

					static $conect = null;

					if ($conect === null) {
						$conect = new PDO("mysql:dbname=comercio;", 'root', '');

						return $conect;
					}
				}
				//Segurança para nao instanciar diretamente
				private function __construct(){

				}
			}

			$db = BancoDados::conectar();
			$res = $db->query('SELECT * FROM anuncios');
			$res = $res->fetch();

			print_r($res);
		?>
	</pre>
</body>
</html>