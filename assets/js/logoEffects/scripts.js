/* === NOTE:

this file is not minified b/c at the moment ES6 is not accepted by uglifyjs.


=== */

/* homepage animating logos */
jQuery(document).ready(function($){
	

	// console.log('stop!')	

	/* === Animating Logos === */



	var x = parseInt($('.logoboard').attr('data-x'));
	var loops = $('.logoboard .board').length;

	var logos = $('.logoboard .img');

	var arr = [];


	var master = [];
	var rArr = [];
	
	var board = 0;	

	var low = 0;

	var iter = 0;




	
	for(let i = 0; i < logos.length; i++){
		arr.push(i)
	}



	for(let i = 0; i < loops; i++){
		master.push(arr.splice(low, x));
	}

	


	if($('.nologo').length){
		var a = master.length - 1;
		var e = $('.nologo').length;
		master[a].splice(-e, e);
		if(master[a - 1]){
			master[a - 1].splice(-e, e);
		}

	}



	function shuffle(a) {
		for (let i = a.length - 1; i > 0; i--) {
			const j = Math.floor(Math.random() * (i + 1));
			[a[i], a[j]] = [a[j], a[i]];
		}
		return a;
	}




	


	function animatefadeIn(){
		var speed = 2000;



		var array = master[board];

		shuffle(array);
		var seanSplicer = parseInt(array.splice(0, 1));

		rArr.push(seanSplicer)

		var current = $('.board.loop-'+board);
		current.addClass('current');
		
		$('.board:not(.loop-'+board+')').removeClass('current');


		var n = rArr.length - 1;
		var EQ = rArr[n];

		// console.log(array, rArr)

		if(iter == 0){ // start with board #1 visible, loop through and add fade

			current.find('.img').each(function(){
				if($(this).data('count') == EQ){
					$(this).toggleClass('fade')
				}
			})


			if(array.length > 0){
				setTimeout(animatefadeIn, speed);
			}

			else{
				array.push(...rArr);  // reset array 
				rArr = [];
				board += 1;


				if(board < loops - 1){ // (only applies if boards > 2). looping through a middle board #
					setTimeout(animatefadeIn, speed);
				}


				else{ // last board of even iteration

					iter = 1;
					board = 0;


					setTimeout(animatefadeIn, speed);
				}



			}



		}


		else{ // return to board #1 and remove fade class (reset)

			if(board == 0){
				
				$('.loop-0').find('.img').each(function(){
					if($(this).data('count') == EQ){
						$(this).removeClass('fade')
					}
				})


				if(array.length > 0){
					setTimeout(animatefadeIn, speed);
				}
				else{
					

					$('.board .img.fade').each(function(){
						$(this).removeClass('fade')
					})


					array.push(...rArr);  // reset array 
					rArr = [];

					iter = 0;
					board = 0;

					setTimeout(animatefadeIn, speed);

				}


			}

		}


	}


	if(loops > 1){
		animatefadeIn();
	}

});