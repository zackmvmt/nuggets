var quiz = [];

quiz[0] = {
	question: 'It\'s time to leave for school! You:',
	right: 0,
	answers: [
		'Hop in your sedan and arrive 20-minutes early so you can check in with the principal on upcoming fundraisers you\'re planning!',
		'Get in your electric car and quiz your kids on their algebra on the drive to school!',
		'Pick up all of your carpool kids in your minivan. The more the merrier!',
		'Put on your sneakers and race your kids to school. Might as well get a workout in!'
	]
};

quiz[1] = {
	question: 'The volunteer sign-up sheet is out! You sign up to:',
	right: 0,
	answers: [
		'Be room mom, lunch monitor, fundraising committee chair, book fair liaison - you name it, you\'re doing it!',
		'Judge the science fair!',
		'Plan the dinner auction. You love a night out with your school mom BFFs!',
		'Coach the soccer, b-ball and soft ball teams. Truth be told, you\'d be the PE teacher, if you could!'
	]
};

quiz[2] = {
	question: 'When packing your kid\'s lunch, you:',
	right: 0,
	answers: [
		'Remind your kids they have hot lunch. You didn\'t lobby the school board to carry quinoa pilaf for nothing!',
		'Pack a perfectly balanced meal with lots of brain foods high in OMEGA 3s!',
		'Put enough into your kids\' lunch boxes so they can share with all their friends!',
		'Make sure to pack a power bars and sports drinks. Your kids are gonna need the extra energy for practice!'
	]
};

quiz[3] = {
	question: 'Your school drop-off uniform is:',
	right: 0,
	answers: [
		'A professional, pulled together blouse and skirt!',
		'Slacks, a cardigan and your glasses!',
		'A cute pair of pants and top from this fabulous designer one of the 4th grade moms told you about!',
		'Sweat pants and a zip up hoodie!'
	]
};

quiz[4] = {
	question: 'It\'s summer break. No school for 3 months straight. You:',
	right: 0,
	answers: [
		'Hold meetings to get things going for next year. So many committees, so little time!',
		'Sign your kids up for classes at a learning center. Do you know how much learning loss happens over the summer?!',
		'Host 10,000 playdates for your kids so they don\'t forget their friends over break. Plus you need to catch up with your mom friends!',
		'Coach the soccer, b-ball and soft ball camps. Go team!'
	]
};

var results = [];

results[0] = {
	title: 'PTA Mom',
	description: 'You\'ve been PTA president 5 years running and you love it! You jump at the chance to chip in for anything and everything - from book fairs to fundraising to room parent duties. You\'re super cozy with the principal and teachers and everyone always says you should run for the school board some day.'
};

results[1] = {
	title: 'Book Worm Mom',
	description: 'You\'re all about your kids hitting the books...and hard. You expect A\'s and your brilliant kids deliver. You love helping them with their homework and can\'t wait until they\'re studying organic chemistry so you guys can really have fun!'
};

results[2] = {
	title: 'Social Butterfly Mom',
	description: 'You\'re a people person and it shows! You know the names of all of the kids in your kids\' classes. And the names of their parents. And their siblings. And their grandparents ... You love hosting playdates and showing up for all the social events at school. Extrovert is your middle name!'
};

results[3] = {
	title: 'Coach Mom',
	description: 'You\'re the sporty mom who shows up for every game, even those you aren\'t coaching. You\'re super fit and like a good competition. You expect your kids to do well in school, but it\'s equally important to you that they do well on the field. Go team!'
};


loadQuestion = function(num) {
		
	$('#quiz_count').html((num + 1) + ' of 5');
	$('#quiz_q').html(quiz[num].question);
	$('#quiz ul li').eq(0).find('label').html(quiz[num].answers[0]);
	$('#quiz ul li').eq(1).find('label').html(quiz[num].answers[1]);
	$('#quiz ul li').eq(2).find('label').html(quiz[num].answers[2]);
	$('#quiz ul li').eq(3).find('label').html(quiz[num].answers[3]);
	
	// clear out the selection
	$('input[name=quiz]:checked').prop('checked', false);
	
}

$(function() {
	
	$.qnum = 0;
	$.style = [0, 0, 0, 0];
	
	loadQuestion($.qnum);
	
	$('#next_q').live('click', function() {
	
		var answer = $('input[name=quiz]:checked').attr('rel');
		
		// if they have not entered anything
		if (!answer) {
		
			// alert something
			alert('Please select an anser!');
			
		// else if they are done with the quiz
		} else if ($.qnum == 4) {
			
			var maxValue = Math.max.apply(this, $.style);
			var index = $.inArray(maxValue, $.style);
			
			$('#quiz_q').html('You are the ' + results[index].title);
			$('#quiz ul').html('<li>' + results[index].description + '</li>');
			
		// else
		} else {
			
			$.style[answer]++;
			
			// show the next step
			loadQuestion(++$.qnum);
			
		}
		
	});
	
});








