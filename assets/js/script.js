var main = function() {

	var description = $('.description');

description.hide();
	var active = $('.list-group').find('.active');

	function showDesc( active ) {

		if ( active.length ) {
			var id = active.attr('href');
			activeDesc = $(id);
		} 

		var newDesc = activeDesc.length ?  activeDesc : description.eq(0);

		description.not( newDesc ).hide();
		
		newDesc.fadeIn(500);
	}

	showDesc( active );


	$('.list-group a').on('click', function(event) {

		$(this).addClass('active')
			.siblings().removeClass('active');

		showDesc( $(this) );
		event.preventDefault();
	});

	

};


$(document).ready(main);