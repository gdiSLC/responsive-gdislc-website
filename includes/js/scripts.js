$(document).ready(function(){
    /** Accordion Menu for phone size devices **/
    $('#cssmenu > ul > li:has(ul)').addClass("has-sub");

    $('#cssmenu > ul > li > a').click(function() {

        var checkElement = $(this).next();

        $('#cssmenu li').removeClass('active');
        $(this).closest('li').addClass('active');

        if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
          $(this).closest('li').removeClass('active');
          checkElement.slideUp('normal');
        }

        if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
          $('#cssmenu ul ul:visible').slideUp('normal').show();
          checkElement.slideDown('normal');
        }

        if (checkElement.is('ul')) {
          return false;
        } else {
          return true;
        }
    });

    $(window).resize(function(){
        //remove the display:none style each sub-menu that gets it attached after slideUp on phone sizes
        var w = $(window).width();
        if(w > 768 && $('#cssmenu ul li ul').is(':hidden')) {
            $('#cssmenu ul li ul').removeAttr('style');
        }
    });
});