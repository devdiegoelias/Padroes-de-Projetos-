<!DOCTYPE html>
<html>
<head>
	<title>Padrões de Projetos</title>
</head>
<body>

		<?php

		interface VideoService{
			public function EMBED();
		}

		class Youtube implements VideoService{
			private $url;

			public function __construct($u){
				$this->url = $u;
			}

			public function EMBED(){
				return '<video>'.$this->url.'</video>';
			}
		}

		class Vimeo implements VideoService{
			private $url;

			public function __construct($u){
				$this->url = $u;
			}

			public function EMBED(){
				return '<video>'.$this->url.'</video>';
			}
		}

		class Aula{
			private $video;

			public function __construct(VideoService $v){
				$this->video = $v;
			}

			public function render(){
				return $this->video->EMBED();
			}
		}

		$aula = new Aula(new Youtube('https://www.youtube.com/watch?v=Qo5cZOfFwpQ'));
		echo 'Video: '.$aula->render();
			
		?>

</body>
</html>