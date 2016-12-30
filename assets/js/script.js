var main = function() {

	var description = $('.description');

description.hide();
	var selected = $('.list').find('.selected');

	function showDesc( selected ) {

		if ( selected.length ) {
			var id = selected.find('a').attr('href');
			selectedDesc = $(id);
		} 

		var newDesc = selectedDesc.length ?  selectedDesc : description.eq(0);

		description.not( newDesc ).hide();
		
		newDesc.fadeIn(500);
	}

	showDesc( selected );


	$('.list li').on('click', function(event) {

		$(this).addClass('selected')
			.siblings().removeClass('selected');

		showDesc( $(this) );
		event.preventDefault();
	});

	

};


$(document).ready(main);