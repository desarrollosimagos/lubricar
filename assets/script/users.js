$(document).ready(function() {

    $('#tab_users').DataTable({
       "paging": true,
       "lengthChange": false,
       "autoWidth": false,
       "searching": true,
       "ordering": true,
       "info": true,
       dom: '<"html5buttons"B>lTfgitp',
       buttons: [
           { extend: 'copy'},
           {extend: 'csv'},
           {extend: 'excel', title: 'ExampleFile'},
           {extend: 'pdf', title: 'ExampleFile'},

           {extend: 'print',
            customize: function (win){
                   $(win.document.body).addClass('white-bg');
                   $(win.document.body).css('font-size', '10px');

                   $(win.document.body).find('table')
                           .addClass('compact')
                           .css('font-size', 'inherit');
           }
           }
       ],
       "iDisplayLength": 5,
       "iDisplayStart": 0,
       "sPaginationType": "full_numbers",
       "aLengthMenu": [5, 10, 15],
       "oLanguage": {"sUrl": "assets/js/es.txt"},
       "aoColumns": [
           {"sClass": "registro center", "sWidth": "5%"},
           {"sClass": "registro center", "sWidth": "10%"},
           {"sClass": "registro center", "sWidth": "10%"},
           {"sClass": "registro center", "sWidth": "10%"},
           {"sClass": "none", "sWidth": "8%"},
           {"sClass": "none", "sWidth": "8%"},
           {"sWidth": "3%", "bSortable": false, "sClass": "center sorting_false", "bSearchable": false},
           {"sWidth": "3%", "bSortable": false, "sClass": "center sorting_false", "bSearchable": false}
       ]
   });
             
         // Validacion para borrar
        $("table#tab_users").on('click', 'a.borrar', function (e) {
            e.preventDefault();
            var id = this.getAttribute('id');
    
            swal({
                title: "Borrar registro",
                text: "¿Está seguro de borrarlo?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Eliminar",
                cancelButtonText: "Cancelar",
                closeOnConfirm: false,
                closeOnCancel: true
              },
              function(isConfirm){
                if (isConfirm) {

                  $.post('CUser/delete/' + id + '', function () {
    
                  swal({ 
                    title: "Eliminar",
                     text: "Registro eliminado con exito",
                      type: "success" 
                    },
                    function(){
                      window.location.href = 'users';
                  });
       
                 });
                } 
              });
            
        });
        
  
    });
        
    $('input').on({
        keypress: function () {
            $(this).parent('div').removeClass('has-error');
        }
    });

    $('#volver2').click(function () {
        url = '../users/';
        window.location = url;
    });
    $('#volver').click(function () {
        url = 'users/';
        window.location = url;
    });

	$("#profile").val($("#id_profile").val());
    $("#status").val($("#id_status").val());

	
	$('#status').change(function (){
		
		$('#status').parent('div').removeClass("has-error");
	
	});
	
	
	// Al cargar la página validamos si debe mostrar las franquicias
	//~ var perfil = $("#profile").find('option').filter(':selected').text();
	//~ 
	//~ if(perfil == "FRANQUICIA" || perfil == "franquicia"){
		//~ $("#franquicias").css("display","block");
	//~ }else{
		//~ $("#franquicias").css("display","none");
		//~ $("#franchise").val("0");
	//~ }
	
	// Al cambiar el perfil validamos si debe mostrar las franquicias
	//~ $('#profile').change(function (){
		//~ 
		//~ $('#profile').parent('div').removeClass("has-error");
		//~ 
		//~ var perfil = $("#profile").find('option').filter(':selected').text();
		//~ 
		//~ if(perfil == "FRANQUICIA" || perfil == "franquicia"){
			//~ $("#franquicias").css("display","block");
		//~ }else{
			//~ $("#franquicias").css("display","none");
			//~ $("#franchise").val("0");
		//~ }
	//~ 
	//~ });

    $("#edit").click(function (e) {

        e.preventDefault();  // Para evitar que se envíe por defecto
        // Expresion regular para validar el correo
		var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

        if ($('#name').val().trim() === "") {

          
		   swal("Disculpe,", "para continuar debe ingresar nombre");
	       $('#name').parent('div').addClass('has-error');
        } else if ($('#lastname').val().trim() === "") {
          
		   swal("Disculpe,", "para continuar debe ingresar el apellido");
	       $('#lastname').parent('div').addClass('has-error');
		   
        } else if ($('#username').val().trim() === "") {
          
		   swal("Disculpe,", "para continuar debe ingresar el nombre de usuario");
	       $('#username').parent('div').addClass('has-error');
		   
        } else if (!(regex.test($('#username').val().trim()))){
			
			swal("Disculpe,", "el usuario debe ser una dirección de correo electrónico válida");
			$('#username').parent('div').addClass('has-error');
			
		}  /*else if ($('#password').val().trim() === "") {
          
		   swal("Disculpe,", "para continuar debe ingresar la contraseña");
	       $('#password').parent('div').addClass('has-error');
		   
        } else if ($('#passw1').val().trim() === "") {
          
		   swal("Disculpe,", "debe confirmar la contraseña");
	       $('#passw1').parent('div').addClass('has-error');
		   
        } else if ($('#passw1').val().trim() != $('#password').val().trim()) {
          
		   swal("Disculpe,", "las contraseñas deben ser iguales");
	       $('#password').parent('div').addClass('has-error');
		   $('#passw1').parent('div').addClass('has-error');
		   
        } */ else if ($('#profile').val() == '0') {
			
		  swal("Disculpe,", "para continuar debe seleccionar el perfil");
	       $('#profile').parent('div').addClass('has-error');
		   
		} /*else if (($("#profile").find('option').filter(':selected').text() == "FRANQUICIA" || $("#profile").find('option').filter(':selected').text() == "franquicia") && $('#franchise').val() == '0') {
			
		  swal("Disculpe,", "para continuar debe seleccionar la franquicia");
	       $('#franchise').parent('div').addClass('has-error');
		   
		}*/ else {
			//~ alert($('#franchises').val());

            $.post('../CUser/update', $('#form_users').serialize()+'&'+$.param({'franquicias_ids':$('#franchises').val(),'actions_ids':$('#actions_ids').val()}), function (response) {

				if (response == 'existe') {
                    swal("Disculpe,", "este nombre de usuario se encuentra registrado");
                }else{
					swal({ 
						title: "Actualizar",
						 text: "Guardado con exito",
						  type: "success" 
						},
					function(){
					  window.location.href = '../users';
					});
				

				}

            });
        }

    });

    $("#registrar").click(function (e) {

        e.preventDefault();  // Para evitar que se envíe por defecto
        // Expresion regular para validar el correo
		var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

        if ($('#name').val().trim() === "") {

          
		   swal("Disculpe,", "para continuar debe ingresar nombre");
	       $('#name').parent('div').addClass('has-error');
        } else if ($('#lastname').val().trim() === "") {
          
		   swal("Disculpe,", "para continuar debe ingresar el apellido");
	       $('#lastname').parent('div').addClass('has-error');
		   
        } else if ($('#username').val().trim() === "") {
          
		   swal("Disculpe,", "para continuar debe ingresar el nombre de usuario");
	       $('#username').parent('div').addClass('has-error');
		   
        } else if (!(regex.test($('#username').val().trim()))){
			
			swal("Disculpe,", "el usuario debe ser una dirección de correo electrónico válida");
			$('#username').parent('div').addClass('has-error');
			
		}  else if ($('#password').val().trim() === "") {
          
		   swal("Disculpe,", "para continuar debe ingresar el nombre de usuario");
	       $('#password').parent('div').addClass('has-error');
		   
        } else if ($('#passw1').val().trim() === "") {
          
		   swal("Disculpe,", "debe confirmar la contraseña");
	       $('#passw1').parent('div').addClass('has-error');
		   
        }else if ($('#passw1').val().trim() != $('#password').val().trim()) {
          
		   swal("Disculpe,", "las contraseñas deben ser iguales");
	       $('#password').parent('div').addClass('has-error');
		   $('#passw1').parent('div').addClass('has-error');
		   
        } else if ($('#profile').val() == '0') {
			
		  swal("Disculpe,", "para continuar debe seleccionar el perfil");
	       $('#profile').parent('div').addClass('has-error');
		   
		} /*else if (($("#profile").find('option').filter(':selected').text() == "FRANQUICIA" || $("#profile").find('option').filter(':selected').text() == "franquicia") && $('#franchise').val() == '0') {
			
		  swal("Disculpe,", "para continuar debe seleccionar la franquicia");
	       $('#franchise').parent('div').addClass('has-error');
		   
		}*/ else {
			//~ alert($('#franchises').val());

            $.post('CUser/add', $('#form_users').serialize()+'&'+$.param({'franquicias_ids':$('#franchises').val(),'actions_ids':$('#actions_ids').val()}), function (response) {

				if (response == 'existe') {
                    swal("Disculpe,", "este nombre de usuario se encuentra registrado");
                }else{
					swal({ 
						title: "Registro",
						 text: "Guardado con exito",
						  type: "success"
						},
					function(){
					  window.location.href = 'users';
					});
				

				}

            });
        }

    });
