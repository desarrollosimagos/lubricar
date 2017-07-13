$(document).ready(function() {
	// Capturamos la base_url
    var base_url = $("#base_url").val();
    
	//Envío de mensaje
	$("#send_message").click(function (e) {
		//~ alert($('#g-recaptcha-response').val()); // El campo g-recaptcha-response es añadido automáticamente por el plugin de google
		e.preventDefault();  // Para evitar que se envíe por defecto
		// Expresion regular para validar el correo
		var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

        if ($('#name').val().trim() == "") {
          
		   swal("Disculpe,", "para continuar debe ingresar su nombre");
	       $('#name').parent('div').addClass('has-error');
	       $('#name').focus();
		   
        }  else if ($('#email').val().trim() === "") {
          
		   swal("Disculpe,", "para continuar debe ingresar una dirección de correo electrónico");
	       $('#email').parent('div').addClass('has-error');
	       $('#email').focus();
		   
        } else if (!(regex.test($('#email').val().trim()))){
			
			swal("Disculpe,", "debe indicar una dirección de correo electrónico válida");
			$('#email').parent('div').addClass('has-error');
			$('#email').focus();
			
		} else if ($('#subject').val().trim() === "") {
          
		   swal("Disculpe,", "debe colocar un asunto");
	       $('#subject').parent('div').addClass('has-error');
	       $('#subject').focus();
		   
        } else if ($('#message').val().trim() === "") {
          
		   swal("Disculpe,", "para continuar debe escribir un mensaje");
	       $('#message').parent('div').addClass('has-error');
	       $('#message').focus();
	       
        } else {
			$.post(base_url+'send_message', $('#contactForm').serialize(), function (response) {
				//~ alert(response);
				if (response != 'PasóPasó') {
					swal("Disculpe,", "ha ocurrido algo inesperado, consulte con el administrador del sistema");
					$('#contactError').removeClass('hidden');
					$('#name').focus();
				} else {
					swal({
						title: "Mensaje",
						text: "Enviado con exito. Le agrademos por tomarse el tiempo para escribirnos.",
						type: "success"
					},
					function () {
						//~ $("#modal_cliente").modal('hide');
						//~ window.location.href = base_url+'public_perfil';
						$('#name').val('');
						$('#email').val('');
						$('#subject').val('');
						$('#message').val('');
						$('#contactSuccess').removeClass('hidden');
						$('#name').focus();
					});
				}
			});
		}
	});
});
