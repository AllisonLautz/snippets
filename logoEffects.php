<!DOCTYPE html>
<html>
<head>
	<title>Logo Effects</title>
	<link rel="stylesheet" type="text/css" href="dist/css/styles.css">
</head>
<body class="logoEffects">


	<?php

	function logoEffects($repeat){


		$logos = ['https://picsum.photos/id/237/320/180'];

		for($r = 1041; $r < 1045; $r++){
			array_push($logos, 'https://picsum.photos/id/'.$r.'/320/180');
		}
		/* seriously, there is no #1046?!?!? */
		for($r = 1047; $r < 1056; $r++){
			array_push($logos, 'https://picsum.photos/id/'.$r.'/320/180');
		}

		shuffle($logos);

		


		if($logos){

			$n = count($logos);
			$x = 6;

			$output = '';

			$loops = ceil($n/$x);
			$arr = [];

			$extra = $x - $n % $x; // how many other random logos needed to complete the row

			$output .= '<section class="logoboard" data-count="'.$n.'" data-x="'.$x.'">';

			

			if($extra > 1){ // choose random logos shown previously if some are needed to complete the row

				if($repeat){
					$range = array_slice($logos,0, $n - $extra); // slice "extra" amount off the end so it doesn't repeat the one right next to it
					$rand = array_rand($range, $extra); // of the range, pick "n" (aka "extra") at random to fill in
					foreach($rand as $k =>	$v){
						$y = $logos[$v];
						array_push($logos, $y); // add to end of logos array
					}
				}

				else{
					for($l = 0; $l < $extra; $l ++){
						array_push($logos, 'empty');
						array_push($arr, ($n - $x) + $l);
					}
				}
			}

			// print_r($logos);



			for($i = $loops - 1; $i >= 0; $i--):
				$output .= '<div class="board loop-'.$i.'">';
				$ceil = (($i + 1) * $x) - $x;
				$floor = ($i + 1) * $x;

				for($j = $ceil; $j < $floor; $j++):

					if($repeat){
						if(!empty($logos[$j])){
							$class = in_array($j, $arr) ? ' nofade' : (strpos($logos[$j], 'empty') !== false ? ' nologo' : false);
							$output .= '<div class="img img-'.$j.$class.'" data-count="'.$j.'"><img src="'.$logos[$j].'"></div>';
						}
						elseif(empty($logos[$j]) && $j >= $x){
							$output .= '<div class="img img-'.$j.'" data-count="'.$j.'"><img src="'.$logos[$arr[$j - $x]].'"></div>';
						}
					}

					else{
						$class = in_array($j, $arr) ? ' nofade' : (strpos($logos[$j], 'empty') !== false ? ' nologo' : '');
						$output .= '<div class="img img-'.$j.$class.'" data-count="'.$j.'">'.(strpos($logos[$j], 'empty') === 0 ? '' : '<img src="'.$logos[$j].'">').'</div>';
					}

				endfor;
				$output .= '</div>';
			endfor;

			$output .= '</section>';

		}
		return $output;
	}


	echo logoEffects(false);



	?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="dist/js/logoEffects/scripts.min.js"></script>
</body>
</html>