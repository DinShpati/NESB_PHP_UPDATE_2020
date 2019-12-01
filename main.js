// This is where the navbar JAVASCRIPT STARTS
            const nav = document.querySelector('#nav');
            const menu = document.querySelector('#menu');
            const menuToggle = document.querySelector('.nav__toggle');
            let isMenuOpen = false;


            // TOGGLE MENU ACTIVE STATE
            menuToggle.addEventListener('click', e => {
              e.preventDefault();
              isMenuOpen = !isMenuOpen;

              // toggle a11y attributes and active class
              menuToggle.setAttribute('aria-expanded', String(isMenuOpen));
              menu.hidden = !isMenuOpen;
              nav.classList.toggle('nav--open');
            });


            // TRAP TAB INSIDE NAV WHEN OPEN
            nav.addEventListener('keydown', e => {
              // abort if menu isn't open or modifier keys are pressed
              if (!isMenuOpen || e.ctrlKey || e.metaKey || e.altKey) {
                return;
              }

              // listen for tab press and move focus
              // if we're on either end of the navigation
              const menuLinks = menu.querySelectorAll('.nav__link');
              if (e.keyCode === 9) {
                if (e.shiftKey) {
                  if (document.activeElement === menuLinks[0]) {
                    menuToggle.focus();
                    e.preventDefault();
                  }
                } else if (document.activeElement === menuToggle) {
                  menuLinks[0].focus();
                  e.preventDefault();
                }
              }
            });

//THIS IS WHERE THE NAVBAR JAVASCRIPT ENDS

//For The Slide Shows
 // click or touchstart
        var clk =((document.ontouchstart!==null)?'click':'touchstart'),
        counter = 0, 
        // all figures
        figures = document.querySelectorAll('.slideshow figure'),
        // make slice
        items = Array.prototype.slice.call(figures);

        // add class show first element
        // good for php loop
        items[0].classList.add('show');

        // auto on click stop this
        var auto = setInterval(function(){
            counter++;
          _current(items);
        },5000);


        // add click events to prev & next buttons 
        _('.next').addEventListener(clk, function(){
          counter++;
          _current(items);
          clearInterval(auto);
        });
        _('.prev').addEventListener(clk, function(){
          counter--;
          _current(items);
          clearInterval(auto);
        });



        /*
         *  short queryselector function
         * -------------------------------------------------------*/
        function _(el){
          return document.querySelector(el);
        }
        /*
         *  current function
         * -------------------------------------------------------*/
        function _current(elem){
          var numItems = elem.length,
              itemToShow = Math.abs(counter%numItems);
          Array.prototype.forEach.call(elem,function(obj,index){
            obj.classList.remove('show');
          })
          elem[itemToShow].classList.add('show');  
        }
//End Slide Shows