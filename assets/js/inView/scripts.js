

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


      // (viewport, Element) // [fixed, Variable] //

      // 1

      var bottomTop = (elOffset - windowHt) * bufferHt;

      // 2 or 3 (depending on element height)

      var topTop = (elOffset - headerHt) * bufferHt;

      // 3 or 2 (depending on element height)

      var bottomBottom = bottomTop + elHt;

      // 4

      var topBottom = topTop + elHt;


      var second = (topTop < bottomBottom ? topTop : bottomBottom);

      var third = (topTop < bottomBottom ? bottomBottom : topTop);


      array.push([bottomTop, second, third, topBottom, item]);
      // console.log(topTop, bottomBottom);
      console.log(elOffset, windowHt, elHt);
      // array.push([bottomTop*.75, second*.75, third*.75, topBottom*.75, item]);


    }); // end forEach



    
    




    function setAttrs(st){

      console.log(st);

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

    console.log(array, windowHt);

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

    inView(document.querySelectorAll('section .wrapper'), false, false);

  });


