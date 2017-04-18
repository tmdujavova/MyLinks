var main = function() {

	var description = $('.description');

/*description.hide();
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
		//event.preventDefault();
	});

*/


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

	var form = $('#add-form'),
		inputLink = $('#link'),
		inputText = $('#text');


	form.on('submit', function(event) {
		event.preventDefault();

		var inputKat = $('#kategoria').val(),
		inputClass = '#'+inputKat+' .list-group';

		var req = $.ajax({
			url: form.attr('action'),
			type: 'POST',
			data: form.serialize(),
			dataType: 'json'
		});




		req.done(function(data){


			if (data.status === 'success'){

				/*var li = $('<li class="list-group-item"><a href="'+ inputLink.val() +'">'+ inputText.val() +'</a></li>');

				li.hide()
				  .appendTo(inputClass)
				  .fadeIn();*/


				$.ajax({ url: baseURL}).done(function(html){
						var newItem = $(html).find('#'+ inputKat +'-' + data.id);

					newItem.hide()
				  .appendTo(inputClass)
				  .fadeIn();

				inputLink.val('');
				inputText.val('');

				});


			}
		});
	});

	inputText.on('keypress', function(event) {
		if ( event.which === 13 ) {
			form.submit();
			return false;
		}
	});

	inputLink.on('keypress', function(event) {
		if ( event.which === 13 ) {
			form.submit();
			return false;
		}
	});

/*var descList = $('.descr'),
    descLi = descList.find('li'),
    controls = $('.controls'),
    editLink = controls.find('.edit-link'),
    deleteLink = controls.find('.delete-link');

	 controls.on('click', function(event) {
	event.preventDefault();

    });

	 deleteLink.on('click', function(event) {
	event.preventDefault();
	 $(this).css("color", "red");

    });

	listli.on('keypress', function(event) {
		   if ( event.which === 13 ) {
            $.ajax({
                url: 'edit-item.php',
                type: 'POST'
            });
        }
    });*/


};


$(document).ready(main);