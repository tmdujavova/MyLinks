var main = function() {

	var description = $('.description');

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
	inputText = $('#nazov');


	form.on('submit', function(event) {
		event.preventDefault();

		var inputKat = $('#kategoria').val(),
		inputClass = $('#desc-'+inputKat+' .list-group'),
		descAll = $('#desc-all .list-group');
		console.log(inputClass);
		console.log(descAll);

		var req = $.ajax({
			url: form.attr('action'),
			type: 'POST',
			data: form.serialize(),
			dataType: 'json'
		});

		req.done(function(data){

			if (data.status === 'success'){

				$.ajax({ url: baseURL}).done(function(html){
					var newItem = $(html).find('#desc'+ inputKat +'-' + data.id);
					var newItemAll = $(html).find('#desc-all-' + data.id);

					newItem.hide()
					.appendTo(inputClass)
					.fadeIn();

					newItemAll.hide()
					.appendTo(descAll)
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
};


$(document).ready(main);