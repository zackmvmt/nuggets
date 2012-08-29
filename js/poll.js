showResults = function(data) {
	
	// get the total number
	var total = 0;
	for (var i = 0; i < data.length; i++) {
		total += parseInt(data[i]);
	}
	
	// update all the li's
	for (var i = 0; i < data.length; i++) {
	
		var percent = Math.round((parseInt(data[i]) / total) * 100);
	
		$('#poll ul li').eq(i).find('input').hide();
		$('#poll').eq(i).find('#vote').hide();
		$('#poll').eq(i).find('#results').hide();
		$('#poll ul li').eq(i).append('<div class="amount">' + percent + '%</div>');
		
	}
	
}

$(function() {
	
	$('#results').live('click', function() {
		
		// get the information from the server
		$.get('api/poll', function(data) {
		
			showResults(data);
			
		}, 'json');
		
	});
	
	$('#vote').live('click', function() {
		
		var choice = $('input[name=poll]:checked').attr('rel');
		
		// if they have not selected a radio button
		if (!choice) {
		
			// alert
			alert('Please choose an option in the poll');
			
		// else
		} else {
		
			// send the post to the server
			$.post('api/poll/' + choice, function(data) {
			
				// use the results to show the dom
				showResults(data);
				
			}, 'json');
				
		}
		
	});
	
});