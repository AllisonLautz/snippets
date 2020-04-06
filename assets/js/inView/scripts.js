

document.addEventListener("DOMContentLoaded", function(){

  function inView(el, header=true, buffer=false){

    var windowHt = window.innerHeight;
    const headerHt = header ? (document.querySelector('header').offsetHeight) : 0;
    var adminbarHt = document.getElementById('wpadminbar') ? document.getElementById('wpadminbar').offsetHeight : 0;

    windowHt = windowHt - adminbarHt;

    var bufferHt = buffer ? buffer : 1;



    var elHt;
    var elOffset;

    var array = [];


    


    // --- begin forEach --- //

    el.forEach(item => {
      elHt = item.offsetHeight;
      elOffset = item.offsetTop;


      // 0

      var entering = (elOffset - windowHt);

      // === some formulas === //

      // ===== which comes first: top element hits top window (element > viewport) or bottom element hits bottom window (element < viewport)? ===== //

      var topTop = (elOffset - headerHt); // top of element hits top of window
      var bottomBottom = entering + elHt; // bottom of element hits bottom of window

      // 1 

      var inView = topTop < bottomBottom ? topTop : bottomBottom;

      // 2 

      var exiting = topTop < bottomBottom ? bottomBottom : topTop; 

      // === back to your regularly scheduled programming === //

      // 3

      var exited = (elOffset - headerHt) + elHt;




    // === revise inView & exiting if bufferHt === //



    var inViewHt = (exiting - inView);
    var newInViewHt = Math.ceil(inViewHt * bufferHt);
    var diff = inViewHt - newInViewHt;
    var margin = Math.ceil(diff/2);

    inView = inView + margin;
    exiting = exiting - margin;



      // array push

      array.push([entering, inView, exiting, exited, item]);





    }); // end forEach



    
    




    function setAttrs(st){

      // console.log(st);

      array.forEach(item => {
        if(st < item[0]){
          item[4].setAttribute('data-view', 'inQueue');
        }
        else if(st >= item[0] && st < item[1]){
          item[4].setAttribute('data-view', 'entering');
        }
        else if(st >= item[1] && st < item[2]){
          item[4].setAttribute('data-view', 'inView');
        }
        else if(st >= item[2] && st < item[3]){
          item[4].setAttribute('data-view', 'exiting');
        }
        else{
          item[4].setAttribute('data-view', 'exited');
        }

      });

    }


    setAttrs(window.pageYOffset);



    // console.log(array, windowHt);

    var lastScrollTop = 0;

    // --- begin scroll --- //

    window.addEventListener("scroll", function(){ 
      var st = window.pageYOffset;


      if(st == 0){
        document.querySelector('body').classList.remove('scrollDown');
        document.querySelector('body').classList.remove('scrollUp');
      }

      else if (st > lastScrollTop){
        document.querySelector('body').classList.remove('scrollUp');
        document.querySelector('body').classList.add('scrollDown');
      } 
      else {
        document.querySelector('body').classList.remove('scrollDown');
        document.querySelector('body').classList.add('scrollUp');
      }



      lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling


      setAttrs(st);
      


    }, false); // end scroll

    }; // end inView fn

    inView(document.querySelectorAll('section .wrapper'), false, .5);

  });


