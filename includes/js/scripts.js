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


$.ajax({
    url: 'https://api.meetup.com/2/events',
    data: {
      key: 'a444a58837f134823a24432e337d',
      group_id: '12001542',
      sign: true
    },
    crossDomain: true,
    dataType: 'jsonp',
    type: "GET",
    success: function (data) {
    	//console.log(data.results);
      var classes = data.results;
    	if(classes.length > 0){
        var htmlToShow = '<section id="events_first_col">';
        var maxEvents = 4;
        for (var i = 0; i < maxEvents; i++){
          if(i === 2){
            htmlToShow += '</section><section id="events_second_col">';
          }
          var meetupDate =  new Date(classes[i].time);
          htmlToShow += '<article class="event"><span class="event_name"><a class="teal_link" href="' + classes[i].event_url + '" target="_blank">' + classes[i].name + '</a><br></span>';
          htmlToShow += '<span class="left_side"><span class="event_date">' + meetupDate.toLocaleDateString() + '</span><br>';
          htmlToShow += venue_info(classes[i]) + ' @ ' + prettyDate2(classes[i].time) + '</span>';
          htmlToShow += '<span class="rsvp_btn"><a href="' + classes[i].event_url + '" target="_blank">RSVP</a></span>';
          htmlToShow += '</article>';
        }
        htmlToShow += '</section>';
        $('#events_list').html(htmlToShow);
        //console.log(htmlToShow);
      }else{
        alert('There are no events to display at this time.');
      }
    },
    error: function(data) {
       // code with error returned
    }       
  });

function venue_info(course) {
  if (course.venue) {
    return course.venue.name;
  } else {
    return '<em>TBD</em>';
  }
}

function prettyDate2(time){
    var date = new Date(parseInt(time));
    var localeSpecificTime = date.toLocaleTimeString();
    return localeSpecificTime.replace(/:\d+ /, ' ');
}