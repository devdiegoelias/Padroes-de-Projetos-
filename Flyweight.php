<!DOCTYPE html>
<html>
<head>
	<title>Padrões de Projetos</title>
</head>
<body>
	<pre>
		<?php

		class Arquivos{
			public $position;

			public function __construct($x, $y){
				$this->position['x'] = $x;
				$this->position['y'] = $y;
			}

			public function render(){
				return $this->position;
			}
		}

		$p = new Arquivos(200, 400);
		$setposi = $p->render();

		?>
	</pre>

	<style type="text/css">
		.posicao{
			position: absolute;
			left: <?php echo $setposi['x'].'px';?>;
			top:  <?php echo $setposi['y'].'px';?>;;
		}
	</style>
	<img src="mario.jpg" width="100" class="posicao">
</body>
</html>