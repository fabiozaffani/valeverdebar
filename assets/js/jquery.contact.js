jQuery(document).ready(function(){

	$('#cform').submit(function(){

		var action = $(this).attr('action');

		$("#message").slideUp(250,function() {
			$('#message').hide();

	 		$('#submit')
			.after('<img src="assets/images/nivo-preloader.gif" class="contact-loader" />')
			.attr('disabled','disabled');

			$('#cform').fadeTo(400, 0.5, function completedFade() {

				$.post(action, {
					name: $('#name').val(),
					email: $('#email').val(),
					subject: $('#subject').val(),
					comments: $('#comments').val()
				},
					function completedRequest(data){

						var responseMsg = '';
						if (data === 'ok') {
							responseMsg = 'Mensagem enviada com sucesso!';
						} else {
							responseMsg = data;
						}

						document.getElementById('message').innerHTML = responseMsg;
						$('#message').slideDown('slow');
						$('#cform img.contact-loader').fadeOut('slow',function(){$(this).remove()});
						$('#submit').removeAttr('disabled');

						if(data.match('ok') != null) {
							$('#cform').slideUp('slow');
						} else {
							$('#cform').fadeTo(500, 1);
						}
					}
				);
			});
		});

		return false;

	});

});
