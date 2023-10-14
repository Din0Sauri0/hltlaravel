/*--------------------------------------------------------------
    1. ANIMACION CU
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
    Cursor($('#cursor'), $('#pointer'));
    $('#logo-ydevs').on('click', function(){
      $(this).toggleClass('scroll');
    });

  });
