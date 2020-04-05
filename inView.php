<?php ?>
<!DOCTYPE html>
<html>
<head>
	<title>inView</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' type='text/css' href='dist/css/styles.min.css'>
</head>
<body class="inView">

	
	<?php 

	$section_count = 10;
	$arr = [];
	$ht = [];

	for($i = 0; $i < $section_count; $i++){
		array_push($arr, $i);
		array_push($ht, rand(66,100));
	}

	shuffle($arr);
	$txt = array_slice($arr, 5);
	$vh = array_slice($arr, 5);
	

	for($i = 0; $i < $section_count; $i++):



		?>




		
		<section class="count-<?=($i+1);?>">
			<div class="wrapper">



				<h2>Section <?=($i+1);?></h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				<?php if(/*in_array($i, $txt)*/ $i == 1):?>
					<p>Pellentesque massa neque, luctus consequat diam eget, pharetra pellentesque velit. Donec quis felis semper, tincidunt dui a, mattis orci. Suspendisse vulputate sapien et est aliquam suscipit. Donec eleifend eget felis vel eleifend. Nulla facilisi. Aenean suscipit ex non nisl dictum, vel placerat massa finibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla suscipit urna lectus, quis molestie enim fringilla ac. Donec a sapien eget lacus elementum commodo a quis mauris. Phasellus euismod mattis urna, et pulvinar nisl malesuada a. Donec maximus ornare odio, at tincidunt est venenatis et. Aenean dapibus viverra dui at feugiat. Maecenas turpis est, vestibulum non luctus vel, aliquam ac elit. Nulla rhoncus magna ut scelerisque rhoncus. Suspendisse imperdiet pellentesque nulla at semper.</p>

				<?php endif;?>


			</div>
		</section>

	<?php endfor;?>





	<script src='dist/js/inView/scripts.min.js'></script>
</body>
</html>
