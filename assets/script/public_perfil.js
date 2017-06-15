$(document).ready(function () {
	// Capturamos la base_url
    var base_url = $("#base_url").val();
			
	$('#year').datepicker({

		format: " yyyy",
		viewMode: "years",
		minViewMode: "years",
		endDate: 'today'
		
	});
	
	//Propiedades para la lista de direcciones
	$('#tab_direccion').DataTable({
		"paging": true,
		"lengthChange": false,
		"autoWidth": false,
		"searching": true,
		"info": true,
		"order": [[0, "asc"]],
		"iDisplayLength": 5,
		"iDisplayStart": 0,
		"sPaginationType": "full_numbers",
		"aLengthMenu": [5, 10, 15],
		"oLanguage": {"sUrl": base_url+"assets/js/es.txt"},
		"aoColumns": [
			{"sWidth": "15%"},
			{"sWidth": "15%"},
			{"sWidth": "20%"},
			{"sClass": "none", "sWidth": "8%"},
			{"sClass": "none", "sWidth": "8%"},
			{"sClass": "none", "sWidth": "8%"},
			{"sClass": "none", "sWidth": "8%"},
			{"sWidth": "4%", "bSortable": false, "sClass": "center sorting_false", "bSearchable": false},
			{"sWidth": "4%", "bSortable": false, "sClass": "center sorting_false", "bSearchable": false}
		]
	});
	
	//Propiedades para la lista de vehículos
	$('#tab_vehiculo').DataTable({
		"paging": true,
		"lengthChange": false,
		"autoWidth": false,
		"searching": true,
		"info": true,
		"order": [[0, "asc"]],
		"iDisplayLength": 5,
		"iDisplayStart": 0,
		"sPaginationType": "full_numbers",
		"aLengthMenu": [5, 10, 15],
		"oLanguage": {"sUrl": base_url+"assets/js/es.txt"},
		"aoColumns": [
			{"sWidth": "15%"},
			{"sWidth": "15%"},
			{"sWidth": "15%"},
			{"sWidth": "15%"},
			{"sWidth": "15%"},
			{"sWidth": "4%", "bSortable": false, "sClass": "center sorting_false", "bSearchable": false},
			{"sWidth": "4%", "bSortable": false, "sClass": "center sorting_false", "bSearchable": false}
		]
	});
	
	//Propiedades para la lista de pedidos (ordenes)
	$('#tab_order').DataTable({
		"paging": true,
		"lengthChange": false,
		"autoWidth": false,
		"searching": true,
		"info": true,
		dom: '<"html5buttons"B>lTfgitp',

		buttons: [
			{extend: 'copy'},
			{extend: 'csv'},
			{extend: 'excel', title: 'ExampleFile'},
			{extend: 'pdf', title: 'ExampleFile'},

			{extend: 'print',
				customize: function (win) {
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
		"oLanguage": {"sUrl": base_url+"assets/js/es.txt"},
		"aoColumns": [
			{"sClass": "registro center", "sWidth": "5%"},
			{"sClass": "registro center", "sWidth": "10%"},
			{"sClass": "registro center", "sWidth": "10%"},
			{"sClass": "registro center", "sWidth": "8%"},
			{"sClass": "registro center", "sWidth": "5%"},
			{"sClass": "registro center", "sWidth": "5%"},
			{"sClass": "none", "sWidth": "8%"},
			{"sClass": "none", "sWidth": "8%"},
			{"sClass": "registro center", "sWidth": "5%"},
		]
	});
	
	// Acciones sobre direcciones y vehículos
	
	$("#phone, #cell_phone, #zip, #phone_1, #cell_phone_1").numeric(); // Sólo permite valores numéricos
	
	$("#i_new_line").click(function (e) {
		e.preventDefault();  // Para evitar que se envíe por defecto
		$("#modal_direccion").modal('show');
		$("span#titulo").text('Registrar');
		$("#accion").val('Registrar');
	});
	
	$("#i_new_line2").click(function (e) {
		e.preventDefault();  // Para evitar que se envíe por defecto
		$("#modal_vehiculo").modal('show');
		$("span#titulo").text('Registrar');
		$("#accion2").val('Registrar');
	});
	
	$(".editar_direccion").click(function (e) {
		e.preventDefault();  // Para evitar que se envíe por defecto
		$("#modal_direccion").modal('show');
		$("span#titulo").text('Editar');
		$("#accion").val('Editar');
		// Construimos el id del campo oculto que contiene los datos de la línea  a partir de la clase y el id del link clickeado
		var id_values_line = "#"+$(this).attr('class')+"_"+$(this).attr('id')
		// Ahora separamos los valores y los ubicamos en los campos correspondientes
		var values_line = $(id_values_line).val();
		values_line = values_line.split(';');
		$("#id_direccion").val(values_line[0]);
		$("#city").val(values_line[1]);
		$("#zip").val(values_line[2]);
		$("#description").val(values_line[3]);
		$("#address_1").val(values_line[4]);
		$("#address_2").val(values_line[5]);
		$("#phone_1").val(values_line[6]);
		$("#cell_phone_1").val(values_line[7]);				
	});
	
	$(".editar_vehiculo").click(function (e) {
		e.preventDefault();  // Para evitar que se envíe por defecto
		$("#modal_vehiculo").modal('show');
		$("span#titulo").text('Editar');
		$("#accion2").val('Editar');
		// Construimos el id del campo oculto que contiene los datos de la línea  a partir de la clase y el id del link clickeado
		var id_values_line = "#"+$(this).attr('class')+"_"+$(this).attr('id')
		// Ahora separamos los valores y los ubicamos en los campos correspondientes
		var values_line = $(id_values_line).val();
		values_line = values_line.split(';');
		$("#id_vehiculo").val(values_line[0]);
		$("#trademark").val(values_line[1]);
		$("#model").val(values_line[2]);
		$("#color").val(values_line[3]);
		$("#year").val(values_line[4]);
		$("#license_plate").val(values_line[5]);
	});
	
	//Registar dirección nueva
	$("#add_address").click(function (e) {
		e.preventDefault();  // Para evitar que se envíe por defecto

		if ($('#city').val().trim() == "") {
		  
		   swal("Disculpe,", "para continuar debe ingresar el nombre de la ciudad");
		   $('#zip').removeClass('error');
		   $('#address_1').removeClass('error');
		   $('#phone_1').removeClass('error');
		   $('#city').addClass('error');
		   $('#city').focus();
		   
		} else if ($('#zip').val().trim() === "") {
		  
		   swal("Disculpe,", "para continuar debe ingresar el código postal");
		   $('#city').removeClass('error');
		   $('#address_1').removeClass('error');
		   $('#phone_1').removeClass('error');
		   $('#zip').addClass('error');
		   $('#zip').focus();
		   
		} else if ($('#address_1').val().trim() === "") {
		  
		   swal("Disculpe,", "para continuar debe ingresar la dirección");
		   $('#zip').removeClass('error');
		   $('#city').removeClass('error');
		   $('#phone_1').removeClass('error');
		   $('#address_1').addClass('error');
		   $('#address_1').focus();
		   
		} else if ($('#phone_1').val().trim() === "") {
		  
		   swal("Disculpe,", "para continuar debe ingresar el teléfono");
		   $('#zip').removeClass('error');
		   $('#address_1').removeClass('error');
		   $('#city').removeClass('error');
		   $('#phone_1').removeClass('error');
		   $('#phone_1').addClass('error');
		   
		   
		} else {
			if($("#accion").val() == 'Registrar'){
				$.post(base_url+'CClient/addAddressPublic', $('#form_direccion').serialize()+'&'+$.param({'customer_id':$('#customer_id').val()}), function (response) {
					//~ alert(response);
					if (response == 'existe direccion') {
						swal("Disculpe,", "esta dirección se encuentra registrada");
					} else {
						swal({
							title: "Registro",
							text: "Guardado con exito.",
							type: "success"
						},
						function () {
							$("#modal_direccion").modal('hide');
							window.location.href = base_url+'public_perfil';
						});
					}
				});
			}else if($("#accion").val() == 'Editar'){
				$.post(base_url+'CClient/updateAddressPublic', $('#form_direccion').serialize()+'&'+$.param({'customer_id':$('#customer_id').val()}), function (response) {
					//~ alert(response);
					if (response == 'existe direccion') {
						swal("Disculpe,", "esta dirección se encuentra registrada");
					} else {
						swal({
							title: "Registro",
							text: "Actualizado con exito.",
							type: "success"
						},
						function () {
							$("#modal_direccion").modal('hide');
							window.location.href = base_url+'public_perfil';
						});
					}
				});
			}
		}
	});
	
	//Registar vehículo nuevo
	$("#add_vehicle").click(function (e) {
		e.preventDefault();  // Para evitar que se envíe por defecto

		if ($('#trademark').val().trim() == "") {
		  
		   swal("Disculpe,", "para continuar debe ingresar la marca");
		   $('#model').removeClass('error');
		   $('#color').removeClass('error');
		   $('#year').removeClass('error');
		   $('#license_plate').removeClass('error');
		   $('#trademark').addClass('error');
		   $('#trademark').focus();
		   
		} else if ($('#model').val().trim() === "") {
		  
		   swal("Disculpe,", "para continuar debe ingresar el modelo");
		   $('#trademark').removeClass('error');
		   $('#color').removeClass('error');
		   $('#year').removeClass('error');
		   $('#license_plate').removeClass('error');
		   $('#model').addClass('error');
		   $('#model').focus();
		   
		} else if ($('#color').val().trim() === "") {
		  
		   swal("Disculpe,", "para continuar debe ingresar el color");
		   $('#trademark').removeClass('error');
		   $('#model').removeClass('error');
		   $('#year').removeClass('error');
		   $('#license_plate').removeClass('error');
		   $('#color').addClass('error');
		   $('#color').focus();
		   
		} else if ($('#year').val().trim() === "") {
		  
		   swal("Disculpe,", "para continuar debe ingresar el año");
		   $('#trademark').removeClass('error');
		   $('#color').removeClass('error');
		   $('#model').removeClass('error');
		   $('#license_plate').removeClass('error');
		   $('#year').addClass('error');
		   $('#year').focus();
		   
		} else if ($('#license_plate').val().trim() === "") {
		  
		   swal("Disculpe,", "para continuar debe ingresar la placa");
		   $('#trademark').removeClass('error');
		   $('#color').removeClass('error');
		   $('#year').removeClass('error');
		   $('#model').removeClass('error');
		   $('#license_plate').addClass('error');
		   $('#license_plate').focus();
		   
		} else {
			if($("#accion2").val() == 'Registrar'){
				$.post(base_url+'CClient/addCar', $('#form_vehiculo').serialize()+'&'+$.param({'customer_id2':$('#customer_id').val()}), function (response) {
					//~ alert(response);
					if (response == 'existe vehiculo') {
						swal("Disculpe,", "este vehículo se encuentra registrado");
					} else {
						swal({
							title: "Registro",
							text: "Guardado con exito.",
							type: "success"
						},
						function () {
							$("#modal_vehiculo").modal('hide');
							window.location.href = base_url+'public_perfil';
						});
					}
				});
			}else if($("#accion2").val() == 'Editar'){
				$.post(base_url+'CClient/updateCarPublic', $('#form_vehiculo').serialize()+'&'+$.param({'customer_id2':$('#customer_id').val()}), function (response) {
					//~ alert(response);
					if (response == 'existe vehiculo') {
						swal("Disculpe,", "este vehículo se encuentra registrado");
					} else {
						swal({
							title: "Registro",
							text: "Actualizado con exito.",
							type: "success"
						},
						function () {
							$("#modal_vehiculo").modal('hide');
							window.location.href = base_url+'public_perfil';
						});
					}
				});
			}
		}
	});
	
})
