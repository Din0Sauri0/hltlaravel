/*--------------------------------------------------------------
## PRELOADER
----------------------------------------------------------------*/

$(window).on('load', function (event) {
		$('#preloader').delay(500).fadeOut(500);
	});
/*--------------------------------------------------------------
## MENU
----------------------------------------------------------------*/
const body = document.body;

const scrollUp = "scroll-up";
const scrollDown = "scroll-down";
let lastScroll = 0;


window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll <= 0) {
    body.classList.remove(scrollUp);
    return;
  }

  if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
    // down
    body.classList.remove(scrollUp);
    body.classList.add(scrollDown);
  } else if (
    currentScroll < lastScroll &&
    body.classList.contains(scrollDown)
  ) {
    // up
    body.classList.remove(scrollDown);
    body.classList.add(scrollUp);
  }
  lastScroll = currentScroll;
});

    /*--------------------------------------------------------------
    2. ANIMACION CURSOR
  --------------------------------------------------------------*/
  jQuery(document).ready(function ($) {
    function Cursor(cursor, pointer) {
      cursor.css({
        opacity: 1
      });
      pointer.css({
        opacity: 1
      });
      $(document).bind('mousemove', function (e) {
        if ($(e.target).hasClass('link') || $(e.target).closest('.link').length > 0) {
          $(cursor).addClass('zoom');
        } else {
          $(cursor).removeClass('zoom');
        }
        cursor.css({
          left: e.pageX,
          top: e.pageY
        });
        pointer.css({
          left: e.pageX,
          top: e.pageY
        });
      });
    }
    function destroyCursor(cursor, pointer) {
      cursor.css('opacity', '0');
      pointer.css('opacity', '0');
      //$(document).unbind('mousemove');
    }
    $(document).mouseleave(function () {
      destroyCursor($('#cursor'), $('#pointer'));
    });
    $(document).mouseenter(function () {
      Cursor($('#cursor'), $('#pointer'));
    });
    $(document).on('click', function (e) {
      $('#cursor').css('animation', 'cursorClick 700ms');
      setTimeout(()=>{$('#cursor').css('animation', '')},700);
    });
  });


  /*--------------------------------------------------------------
    4. SWIPER HISTORIAS PORTADA
  --------------------------------------------------------------*/
  var swiper = new Swiper(".swiper-historias", {
    effect: "coverflow",
    spaceBetween:20,
    keyboard: {
        enabled: true,
      },

    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",

    slideToClickedSlide: true,
    loop: true,
    coverflowEffect: {
      rotate: 0,
      stretch: -86,
      depth: 300,
      modifier: 1,
      slideShadows: false,
       // Responsive breakpoints
  breakpoints: {
    640: {
  slidesPerView:1,
          spaceBetween: 40,
},
992: {
  slidesPerView: 3,
          spaceBetween: 40,
}
},


    }
  });


  /*--------------------------------------------------------------
    4. SWIPER TESTIMONIOS
  --------------------------------------------------------------*/

  const swipertestimonios = new Swiper(".swipertestimonios", {

	// Optional parameters
	grabCursor: true,
    keyboard: {
        enabled: true,
      },

      centeredSlides: false,

	slidesPerView: 1,
  // Responsive breakpoints
  breakpoints: {
		640: {
      slidesPerView:1,
			  spaceBetween: 40,
    },
    992: {
      slidesPerView: 3,
			  spaceBetween: 40,
    }
  },

	// If we need pagination
	pagination: {
		el: ".swiper-pagination"
	},

	// Navigation arrows
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev"
	}

	// And if we need scrollbar
	/*scrollbar: {
    el: '.swiper-scrollbar',
  },*/
});

  /*--------------------------------------------------------------
    4. TO TOP
  --------------------------------------------------------------*/
$(document).ready(function() {
    // Show or hide the sticky footer button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
            $('.go-top').fadeIn(200);
        } else {
            $('.go-top').fadeOut(200);
        }
    });

    // Animate the scroll to top
    $('.go-top').click(function(event) {
        event.preventDefault();

        $('html, body').animate({scrollTop: 0}, 300);
    })
});
