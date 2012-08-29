$(function() {
	
	var minMonth= 1, maxMonth = 12, options = '';
	for (var i = minMonth; i <= maxMonth; i++) {
		options += '<option value="' + i + '">' + i + '</option>';
	}
	$('#enter #month').html(options);
	
	var minDay = 1, maxDay = 31, options = '';
	for (var i = minDay; i <= maxDay; i++) {
		options += '<option value="' + i + '">' + i + '</option>';
	}
	$('#enter #day').html(options);
	
	var maxYear = 2012, minYear = 1920, options = '';
	for (var i = maxYear; i >= minYear; i--) {
		options += '<option value="' + i + '">' + i + '</option>';
	}
	$('#enter #year').html(options);
	
	
	$('#signup').live('click', function() {
		
		var month = $('#enter #month').val();
		var day = $('#enter #day').val();
		var year = $('#enter #year').val();
		var email = $('#enter #email').val();
		
		var date = Date.parse(month + '/' + day + '/' + year);
		var then = Date.today().add(-18).years();
		var dif = date.compareTo(then); // 1 = too young
		var email_reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		
		// if ther are not of age
		if (dif == 1) {
		
			// alert a message
			alert('Sorry we cannot process your submission.');
			
		// else if they have entered an incorrect email
		} else if (email_reg.test(email) === false) {
		
			// alert a message
			alert('Please enter a valid email address.');
			
		// else
		} else {
		
			// get the current date and time (sql)
			var now = Date.today().toString('yyyy-MM-dd hh:mm:ss');
			var dob = date.toString('yyyy-MM-dd');
		
			// send the information to the server
			$.post('api/signup', {
				email: email,
				dob: dob,
				now: now
			}, function(data) {
			
				// if it was a success
				if (data == 'success') {
				
					alert('Thank you, you have been entered');
					
				} else {
					
					alert('Sorry we cannot process your submission.');
					
				}
					
			});
					
		}
		
	});
	
});