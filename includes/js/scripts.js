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
    	//console.log(data);
    	for(data.results as event){
    		console.log(event.name);
    	}
    },
    error: function(data) {
       // code with error returned
    }       
  });