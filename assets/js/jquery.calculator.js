jQuery(document).ready(function(){

	$('#calcForm').submit(function(){

		var action = $(this).attr('action');

		$("#message").slideUp(250,function() {
			$('#message').hide();

	 		$('#submit')
			.after('<img src="assets/images/nivo-preloader.gif" class="contact-loader" />')
			.attr('disabled','disabled');

			ga('send', 'event', 'Formulario', 'Enviar', 'Calculadora');

			$.post(action, {
				weekday: $('#weekday').val(),
				guests: $('#guests').val(),
				tipo: $('#tipo').val()
			}, function completedRequest(data) {

					var responseMsg = '',
						responseMsgClass = '';

					if (data) {
						responseMsg = 'Estimativa de orçamento para o dia e número de pessoas especificado é de <strong>R$ ' + VMasker.toMoney(data, {
                            precision: 2,
                            delimiter: '.',
                            separator: ','
                        }) + '</strong>';
						responseMsgClass = 'box-success';
					} else {
						responseMsg = data;
						responseMsgClass = 'box-error';
					}

					document.getElementById('message').innerHTML = responseMsg;
					$('#message').removeClass('box-error box-success').addClass(responseMsgClass).slideDown('slow');
					$('#calcForm img.contact-loader').fadeOut('slow',function(){$(this).remove();});
					$('#submit').removeAttr('disabled');
			});
		});

		return false;

	});

});
