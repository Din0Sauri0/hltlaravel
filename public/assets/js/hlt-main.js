/*--------------------------------------------------------------
    1. PREOADER
  --------------------------------------------------------------*/
  $(window).on('load', function (event) {
		$('#preloader').delay(500).fadeOut(500);
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
    3. NAVBAR
  --------------------------------------------------------------*/

  /*--------------------------------------------------------------
    4. SWIPER SLIDERS
  --------------------------------------------------------------*/
  var swiper = new Swiper(".swiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 100,
      modifier: 2,
      slideShadows: true
    },
    keyboard: {
      enabled: true
    },
    mousewheel: {
      thresholdDelta: 70
    },
    spaceBetween: 60,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    }
  });
