var main = function() {

	$('section').click(function() {
	    $('.section').removeClass('current');
	    $('.section').addClass('hover');    
	    $('.description').hide();

	    $(this).removeClass('hover'); 
	    $(this).addClass('current');
	    $(this).children('.description').show();

	    

	});





	$('.btn').click(function() {
	$('<li>').text('New item').appendTo('.items');
	});


};


$(document).ready(main);