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
					window.location = baseURL;
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


var editlink = $('.descr .edit-link'),
	deletelink = $('.descr .delete-link');


  editlink.on('click', function(event) {
	event.preventDefault();
	var listli = $(this).parents('.list-group-item');

	listli.attr('contenteditable','true').css({"background-color": "#aaaaaa", "color": "#df691a"});

listli.on('keypress',function(event){
if ( event.which === 13 ) {
	$.ajax({
		type:'POST',
		url: baseURL+'/_inc/edit-item.php',
		data:{
			content: $(this).text(),
			id:      $(this).children('div').attr('id')
		},
		success:function(msg){
			if(!msg){
				alert('update failure');
			}
		}
	});
	$(this).attr('contenteditable','false').css( "background-color", "#4e5d6c" );
	//location.reload();
}
});

});

   deletelink.on('click', function(event) {
	event.preventDefault();

	var listli = $(this).parents('.list-group-item');

	listli.css("background-color", "#c9302c" );

	$.ajax({
		type:'POST',
		url: baseURL+'/_inc/delete-item.php',
		data:{id: $(this).parent('div').attr('id')},
		success:function(msg){
			if(!msg){
				alert('delete failure');
			}
		}
	});
	listli.hide();
	//return confirm('Ste si istý?');
});

var editlinkCat = $('.panel-heading .edit-link'),
	deletelinkCat = $('.panel-heading .delete-link');


  editlinkCat.on('click', function(event) {
	event.preventDefault();
	var h2Cat = $(this).parents('.panel-heading');

	h2Cat.attr('contenteditable','true').css({"background-color": "#aaaaaa", "color": "#df691a"});

h2Cat.on('keypress',function(event){
if ( event.which === 13 ) {
	$.ajax({
		type:'POST',
		url: baseURL+'/_inc/edit-cat.php',
		data:{
			content: $(this).text(),
			id:      $(this).children('span').attr('id')
		},
		success:function(msg){
			if(!msg){
				alert('update failure');
			}
		}
	});

	$(this).attr('contenteditable','false').css({"background-color": "#df691a", "color": "#ebebeb"});
	//location.reload();
}
});

});

   deletelinkCat.on('click', function(event) {
	event.preventDefault();

	var h2Cat = $(this).parents('.panel-heading');

	h2Cat.css("background-color", "#c9302c" );

	$.ajax({
		type:'POST',
		url: baseURL+'/_inc/delete-cat.php',
		data:{id: $(this).parent('span').attr('id')},
		success:function(msg){
			if(!msg){
				alert('delete failure');
			}
		}
	});
	description.hide();
	window.location = baseURL;
	//return confirm('Ste si istý?');
});



	inputLink.select();

};


$(document).ready(main);