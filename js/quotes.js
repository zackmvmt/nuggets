Shuffle = function(o) {
	for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
	return o;
}

$(function() {
	
	// store the images in random order
	$.images = ['PC_tips_01.jpg','PC_tips_02.jpg','PC_tips_03.jpg',
		'PC_tips_04.jpg','PC_tips_05.jpg','PC_tips_06.jpg',
		'PC_tips_07.jpg','PC_tips_08.jpg','PC_tips_09.jpg','PC_tips_10.jpg'];
	Shuffle($.images);
	
	// draw out all the images but hide them
	for (var i = 0; i < $.images.length; i++) {
		var quote = '<div class="quotes" style="display: none; background-image: url(img/quotes/' + $.images[i] + ');"></div>';
		$('#quote_container').append(quote);
	}
	$.current_image = 0;
	$('#quote_container .quotes').eq($.current_image).show();
	
	// click the next button
	$('#next_quote').on('click', function() {
		$.current_image++;
		if ($.current_image == 9) { 
			$.current_image = 0;
		}
		$('#quote_container .quotes').hide();
		$('#quote_container .quotes').eq($.current_image).show();
	});
	
	// click the previous button
	$('#prev_quote').live('click', function() {
		$.current_image--;
		if ($.current_image == -1) {
			$.current_image = 9;
		}
		$('#quote_container .quotes').hide();
		$('#quote_container .quotes').eq($.current_image).show();
		
	});
	
});