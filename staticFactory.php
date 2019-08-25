<!DOCTYPE html>
<html>
<head>
	<title>Padrões de Projetos</title>
</head>
<body>
	<pre>
		<?php
	
		final class StaticFactoty{
			public function make($type){
				if($type == 'number'){
					return new FormatNumber();
				}
				if ($type == 'string') {
					return new FormatString();
				}
			}
		}

		interface FormatInterface{
			public function format();
		}

		class FormatNumber implements FormatInterface{
			public function format(){
				echo "Formatando number 1,2,3";
			}
		}
		class FormatString implements FormatInterface{
			public function format(){
				echo "Formatando String 1,2,3";
			}
		}

		$format = StaticFactoty::make('number');
		$format->format();

		?>
	</pre>
</body>
</html>