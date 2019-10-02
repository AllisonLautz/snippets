<?php ?>
<!DOCTYPE html>
<html>
<head>
	<title>touchSwipe</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' type='text/css' href='dist/css/styles.min.css'>
</head>
<body class="touchSwipe">

	
	<?php
	

	$logos = ['https://picsum.photos/id/237/320/180'];

	for($r = 1041; $r < 1045; $r++){
		array_push($logos, 'https://picsum.photos/id/'.$r.'/320/180');
	}
	/* seriously, there is no #1046?!?!? */
	for($r = 1047; $r < 1056; $r++){
		array_push($logos, 'https://picsum.photos/id/'.$r.'/320/180');
	}


	$count1 = rand(3,8);

	$count2 = rand(3,8);



	for($section = 0; $section < 2; $section++):

		$count = rand(3,8);

		shuffle($logos);

		?>


		<section class="count-<?=$count;?>">
			<div class="wrapper">

				<?php for($i = 0; $i < $count; $i++): ?>

					<article>
						<img src="<?=$logos[$i];?>" />
						<h2>Lorem ipsum dolor sit amet</h2>
						<p>consectetur adipiscing elit. Nunc rutrum leo at dui placerat, id tincidunt libero sollicitudin. Nulla ultricies eleifend porta. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce venenatis diam odio, et auctor nibh aliquam eu. Proin ultrices molestie augue nec sollicitudin. Quisque vitae euismod justo. Ut viverra, ante eget efficitur sodales, purus ipsum sollicitudin dolor, non mollis est risus quis lectus. Duis sagittis pulvinar imperdiet.</p>
					</article>

				<?php endfor;?>

			</div>
		</section>

	<?php endfor;?>




	
	<script src='dist/js/touchSwipe/scripts.min.js'></script>
</body>
</html>
