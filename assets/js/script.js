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
		
		newDesc.show().addClass('fadeInRight');
	}

	showDesc( active );


	$('.list-group a').on('click', function(event) {

		$(this).addClass('active')
			.siblings().removeClass('active');

		showDesc( $(this) );
		event.preventDefault();
	});




	var backToTop = $('<a>', { 
			href: '#domov', 
			class: 'back-to-top',
			html: '<i class="fa fa-caret-up fa-5x"></i>'
		});

	backToTop
		.hide()
		.appendTo('body')
		.on('click', function() {
			$('html,body').animate({ scrollTop: 0 }, 2000);
		});

	var win = $(window);
	win.scroll(function() {
		if ( win.scrollTop() >= 300 ) backToTop.fadeIn();
		else backToTop.hide();
	});

	

};


$(document).ready(main);