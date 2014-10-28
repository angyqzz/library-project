$(document).ready(function() {
    console.log("HIII");
	// process the form
	$('#add-book-manual').on('submit', function(event) {
		var formData = {
			'Title'  : $('input[name=Title]').val(),
			'Author' : $('input[name=Author]').val(),
			'ISBN' 	 : $('input[name=ISBN]').val()
		};

		$.ajax({
			type 		: 'POST',
			url 		: 'process.php',
			data 		: formData,
           // dataType 	: 'json',
            encode      : true
		})
        .done(function() {
            $('#manual').prepend('<div class="alert alert-success" style="margin-top:10px; margin-bottom:-5px;" role="alert">Book Added</div>');
            $('.alert').delay('500').fadeOut();
          })
        .fail(function(event) {
            console.log(event);
          })
        .always(function() {});
        
		event.preventDefault();
	});

});