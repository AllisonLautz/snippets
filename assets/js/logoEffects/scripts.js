/* === NOTE:

this file is not minified b/c at the moment ES6 is not accepted by uglifyjs.


=== */

document.addEventListener("DOMContentLoaded", function(){
	console.log('sup');

	console.log(document.querySelectorAll('section'));

	var x = parseInt(document.querySelector('.logoboard').dataset.x);
	var loops = document.querySelectorAll('.logoboard .board').length;
	var logos = document.querySelectorAll('.logoboard .img');

	var arr = [];


	var master = [];
	var rArr = [];
	
	var board = 0;	

	var low = 0;

	var iter = 0;




	
	for(var i = 0; i < logos.length; i++){
		arr.push(i);
	}

	for(var i = 0; i < loops; i++){
		master.push(arr.splice(low, x));
	}


	if(document.querySelectorAll('.nologo').length){
		var a = master.length - 1;
		var e = document.querySelectorAll('.nologo').length;
		master[a].splice(-e, e);
		if(master[a - 1]){
			master[a - 1].splice(-e, e);
		}

	}


	function shuffle(a) {
		for (var i = a.length - 1; i > 0; i--) {
			var j = Math.floor(Math.random() * (i + 1));
			[a[i], a[j]] = [a[j], a[i]];
		}
		return a;
	}




	function animatefadeInVanilla(){
		var speed = 2000;



		var array = master[board];

		shuffle(array);
		var seanSplicer = parseInt(array.splice(0, 1));

		rArr.push(seanSplicer)

		var current = document.querySelector('.board.loop-'+board);
		current.classList.add('current');

		document.querySelector('.board:not(.loop-'+board+')').classList.remove('current');


		var n = rArr.length - 1;
		var EQ = rArr[n];

		// console.log(array, rArr)

		if(iter == 0){ // start with board #1 visible, loop through and add fade

			for(var i = 0; i < current.querySelectorAll('.img').length; i++){
				if(current.querySelectorAll('.img')[i].dataset.count == EQ){
					current.querySelectorAll('.img')[i].classList.contains('fade') ? current.querySelectorAll('.img')[i].classList.remove('fade') : current.querySelectorAll('.img')[i].classList.add('fade');
				}
			}





			if(array.length > 0){
				setTimeout(animatefadeInVanilla, speed);
			}

			else{
				array.push(...rArr);  // reset array 
				rArr = [];
				board += 1;


				if(board < loops - 1){ // (only applies if boards > 2). looping through a middle board #
					setTimeout(animatefadeInVanilla, speed);
				}


				else{ // last board of even iteration

					iter = 1;
					board = 0;


					setTimeout(animatefadeInVanilla, speed);
				}



			}



		}


		else{ // return to board #1 and remove fade class (reset)

			if(board == 0){

				for(var i = 0; i < document.querySelectorAll('.loop-0 .img').length; i++){
					if(document.querySelectorAll('.loop-0 .img')[i].dataset.count == EQ){
						document.querySelectorAll('.loop-0 .img')[i].classList.remove('fade');
					}
				}




				if(array.length > 0){
					setTimeout(animatefadeInVanilla, speed);
				}
				else{
					for(var i = 0; i < document.querySelectorAll('.board .img.fade').length; i++){
						document.querySelectorAll('.board .img.fade').classList.remove('fade');
					}




					array.push(...rArr);  // reset array 
					rArr = [];

					iter = 0;
					board = 0;

					setTimeout(animatefadeInVanilla, speed);

				}


			}

		}


	}




	if(loops > 1){
		animatefadeInVanilla();
	}




});


