<?php ?>
<!DOCTYPE html>
<html>
<head>
	<title>Flip-Cards</title>
	<link rel="stylesheet" type="text/css" href="dist/css/flipCards/styles.css">
</head>
<body>
	<div class="wrapper flex">


		<?php

		$data = array(

			array(
				'img'	=>	'responsible',
				'h3' => 'Work Atmosphere',
				'text' => 'At SenecaGlobal, you have the opportunity to work closely with senior leadership and domain leaders. Our agile development methodology encourages our associates to work closely with clients. And our diverse work environment is propelled by our strong teams, opportunities to enjoy ourselves, and an overall positive atmosphere.',
			),
			array(
				'img'	=>	'worklife',
				'h3' => 'Exciting Work Life',
				'text' => '"Continuous learning and its immediate application" is a central principle of SenecaGlobal. Our associates are free to experiment with new technologies relevant to our business. Professional learning opportunities are provided to associates throughout their careers. Overall, our associates are motivated to invest in their careers for all-round development across multiple competence areas',
			),
			array(
				'img'	=>	'learning',
				'h3' => 'Learning for Development',
				'text' => 'We emphasize the wellbeing of associates and guide them to adopt a healthy lifestyle. Our reading club helps associates find and read great books and stay mentally fit. We also provide a full suite of health-positive benefits such as health insurance, annual health checks, and stress counseling.',
			),
			array(
				'img'	=>	'healthy',
				'h3' => 'Life a Healthy Lifestyle',
				'text' => 'SenecaGlobal has always valued giving back to our communities. Opportunities are available for our associates to engage in various social responsibility initiatives for volunteering and other contributions',
			),

		);



		foreach($data as $k => $v):

			$svg = 'https://www.senecaglobal.com/wp-content/uploads/2017/10/' . $v['img'] . '.svg';

			echo '<div class="flip-container">
			<div class="flipper">';
			
			

			echo '<div class="front">
			<img class="lazy svg" src="'.$svg.'">
			<h3>'.$v['h3'].'</h3>
			</div>';

			echo '<div class="back">
			<div class="title">
			<img class="lazy svg" src="'.$svg.'">
			<p>'.$v['h3'].'</p>
			</div>'; // end title 
			echo '<div class="text"><p>'.$v['text'].'</p></div>
			
			</div>'; // end back
			
			echo '</div>
			</div>';


		endforeach;

		?>


	</div>
</body>
</html>