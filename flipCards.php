<?php ?>
<!DOCTYPE html>
<html>
<head>
	<title>Flip-Cards</title>
	<link rel="stylesheet" type="text/css" href="dist/css/styles.min.css">
</head>
<body class="flipCards">
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




		$ws_data = array(
			array(
				'img' => 'http://localhost/aml/wp-content/uploads/2019/07/walker-sands-communications-1024x488.png',
				'h3' => 'Walker Sands Communications',
				'text' => '<ul>
				<li>Highlights:
				<ul>
				<li>Full website redesign</li>
				<li>Migration from legacy CMS to WordPress</li>
				<li>Custom WordPress theme</li>
				<li>Built with all technical skill levels in mind</li>
				</ul>
				</li>
				<li>Results
				<ul>
				<li><strong>96%</strong> increase in web traffic</li>
				<li><strong>71%</strong> increase in leads</li>
				<li><strong>66%</strong> increase in conversions</li>
				</ul>
				</li>
				</ul>',
			),

			array(
				'img' => 'http://localhost/aml/wp-content/uploads/2019/07/exp-1024x488.png',
				'h3' => 'exp',
				'text' => '<p>exp.com was a full website redesign, though the locations page in particular is worth highlighting:</p>
				<ul>
				<li>Custom-built locations interface</li>
				<li>Integration with Google Maps API on both front-end and back-end</li>
				<li>Easily updated back-end interface for marketers to plug in/override location data</li>
				<li>Front-end displays location data on map, as well as in filterable lists and search widgets</li>
				<li>Multi-language capability (English and French)</li>
				</ul>',
			),

			array(
				'img' => 'http://localhost/aml/wp-content/uploads/2019/07/compTIA-1024x488.png',
				'h3' => 'CompTIA <small>#MakeTechHerStory</small> Campaign',
				'text' => '
				<ul>
				<li>Custom-coded Rosie the Riveter avatar builder
				<ul>
				<li>Allows users to create, download, share unique "Rosie" image</li>
				</ul>
				</li>
				<li>Integration with Twitter, Instagram APIs</li>
				<li>Results:
				<ul>
				<li><strong><span class="num" data-count="10000">10,000</span>+</strong> unique monthly web views</li>
				<li><strong>1,000+</strong> e-book downloads</li>
				</ul>
				</li>
				</ul>',
			),

			array(
				'img' => 'http://localhost/aml/wp-content/uploads/2019/07/cloudcraze-1024x488.png',
				'h3' => 'CloudCraze',
				'text' => '<ul>
				<li>Website Redesign Goals:
				<ul>
				<li>Match new branding</li>
				<li>Reposition CloudCraze</li>
				<li>Generate leads</li>
				</ul>
				</li>
				<li>Results:
				<ul>
				<li><strong>64%</strong> web traffic increase</li>
				<li><strong>$2.7 million +</strong> in new business</li>
				<li>Company <strong>acquisition</strong> by SalesForce</li>
				</ul>',
			),

			array(
				'img' => 'http://localhost/aml/wp-content/uploads/2019/07/case-stories_mattersight-top-1024x510.png',
				'h3' => 'Walker Sands Case Stories',
				'text' => '<ul>
				<li>Easily customizable template</li>
				<li>Variety of options to differentiate one from the other</li>
				<li>Enables quick turnaround to publish client success stories</li>
				</ul>',
			),

			array(
				'img' => 'http://localhost/aml/wp-content/uploads/2019/07/wsd_our-work-1024x509.png',
				'h3' => 'Walker Sands Digital',
				'text' => '
				<p>This was a full website redesign, though I am particularly proud of the page showcasing Our Work.</p>
				<ul>
				<li>Filter and flip through case study and design portfolio gallery</li>
				<li>Updating hash allows SEOs to track which gallery was viewed</li>
				</ul>',
			),

			array(
				'img' => 'http://localhost/aml/wp-content/uploads/2019/07/logicgate-1024x488.png',
				'h3' => 'Logicgate',
				'text' => '<p>Project highlights:</p>
				<ul>
				<li>Full website redesign</li>
				<li>Migration from legacy CMS to Wordpress</li>
				<li>Collaboration with client devOps team</li>
				</ul>',
			),


		);



		// foreach($ws_data as $k => $v):

		// 	// $svg = 'https://www.senecaglobal.com/wp-content/uploads/2017/10/' . $v['img'] . '.svg';
		// 	$svg = $v['img'];

		// 	// echo '<div class="flip-container">';
		// 	echo '<div class="flipper">';
		
		

		// 	echo '<div class="front">';
		// 	echo '<img class="lazy svg" src="'.$svg.'">';
		// 	echo '<h3>'.$v['h3'].'</h3>';
		// 	echo '</div>';

		// 	echo '<div class="back">';
		// 	echo '<div class="title">';
		// 	//<img class="lazy svg" src="'.$svg.'">
		// 	echo '<p>'.$v['h3'].'</p>';
		// 	echo '</div>'; // end title 
		// 	echo '<div class="text"><p>'.$v['text'].'</p></div>';
		
		// 	echo '</div>'; // end back
		
		// 	echo '</div>';
		// 	// echo '</div>';


		// endforeach;



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