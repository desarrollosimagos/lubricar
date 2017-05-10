<!DOCTYPE html>
<body>
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Clientes</h2>
		<ol class="breadcrumb">
			<li>
				<a href="index.html">Inicio</a>
			</li>
			<li>
				<a>Clientes</a>
			</li>
			<li class="active">
				<strong>Registrar</strong>
			</li>
		</ol>
	</div>
</div>
<div class="modal inmodal fade" id="modal_vehiculo" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">Registrar Vehiculo</h4>
				
			</div>
			<div class="modal-body">
				<form name="nuevo_vehiculo" action="" method="post" class="form">

                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-6 ">
                            <label for="decision_tribunal">Marca</label>
                            <input id="trademark" name="trademark" class="form-control" type="text" >
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-6 ">

                            <label for="delito_id">Modelo </label>
                            <input id="model" name="model" class="form-control" type="text" >
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-6 ">
                            <label for="estado_id">Color *</label>
                             <input id="color" name="color" class="form-control" type="text" >
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-6 ">
                            <label for="abogado_defensor">Año</label>
                             <input id="year" name="year" class="form-control" type="text" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-6 ">
                            <label for="causa">Placa</label>
                            <input id="license_plate" name="license_plate" class="form-control" type="text" >
                        </div>
                       
                    </div>
                  
                    <div class="input-group" style="margin-left: 40%;">
                        <br/>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button" id="agregar2">
                                    Aceptar
                                </button>
                            </span>
                        </div>
                    </div>
                </form>
			</div>

			
		</div>
	</div>
</div>

<div class="modal inmodal fade" id="modal_direccion" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content animated fadeIn">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title">Registrar Dirección</h4>
			
			</div>
			<div class="modal-body">
				<p> <form name="nuevo_direccion" action="" method="post" class="form">

                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-6 ">
                            <label for="decision_tribunal">Ciudad</label>
                            <input id="city" name="city" class="form-control" type="text" >
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-6 ">

                            <label for="delito_id">Código Postal </label>
                            <input id="zip" name="zip" class="form-control" type="text" >
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-6 ">
                            <label for="estado_id">Dirección 1 *</label>
                             <input id="address_1" name="address_1" class="form-control" type="text" >
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-6 ">
                            <label for="abogado_defensor">Dirección 2</label>
                             <input id="address_2" name="address_2" class="form-control" type="text" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-6 ">
                            <label for="causa">Teléfono 1 *</label>
                            <input id="phone_1" name="phone_1" class="form-control" type="text" >
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-6 ">
                            <label for="fecha_de_presentacion">Teléfono 2</label>
                            
                                <input id="cell_phone_1" name="cell_phone" class="form-control" type="text" >
                           
                        </div>
                    </div>
                  
                    <div class="input-group" style="margin-left: 40%;">
                        <br/>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button" id="agregar">
                                    Aceptar
                                </button>
                            </span>
                        </div>
                    </div>
                </form></p>
			</div>
			
		</div>
	</div>
</div>



<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox">
				<div class="ibox-title">
					<h5>Clientes</h5>
				</div>
				<div class="ibox-content">
					<form id="form" method="post" accept-charset="utf-8" class="form-horizontal">
						<h1><i class="fa fa-user"></i> Cuenta</h1>
						<fieldset>
							
							<div class="row">
								<div class="form-group">
									<label class="col-sm-2 control-label">Username *</label>
									<div class="col-sm-10">
										<input id="username" name="username" type="text" class="form-control required" value="<?php echo $editar[0]->username ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Password *</label>
									<div class="col-sm-10">
										<input id="password" name="password" type="password" class="form-control required">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Confirm Password *</label>
									<div class="col-sm-10">
										<input id="confirm" name="confirm" type="password" class="form-control required">
									</div>
								</div>
							</div>
						</fieldset>
						<h1><i class="fa fa-address-card"></i> Datos básicos</h1>
						<fieldset id="form-p-1" role="tabpanel" aria-labelledby="form-h-1" class="body current" style="" aria-hidden="false">
                                    
                                    <div class="row">
										<div class="col-lg-1"></div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label>Nombre *</label>
                                                <input id="name" name="name" type="text" class="form-control required" value="<?php echo $editar[0]->name ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Apellido *</label>
                                                <input id="lastname" name="lastname" type="text" class="form-control required" value="<?php echo $editar[0]->lastname ?>">
                                            </div>
                                        </div>
										<div class="col-lg-1"></div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label>Teléfono 1 *</label>
                                                <input id="phone" name="phone" type="text" class="form-control required" value="<?php echo $editar[0]->phone ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Teléfono 2 *</label>
                                                <input id="cell_phone" name="cell_phone" type="text" class="form-control " value="<?php echo $editar[0]->cell_phone ?>">
                                            </div>
                                        </div>
                                    </div>
									 <input class="form-control"  type='hidden' id="id" name="id" value="<?php echo $id ?>"/>
                                </fieldset>
						
						<h1><i class="fa fa-building"></i> Direcciones</h1>
						<fieldset>
								<button  class="btn btn-w-m btn-primary" id="i_new_line"><i class="fa fa-plus"></i>&nbsp;Agregar Dirección</button>
									 <div class="table-responsive">
										<table style="width: 100%" class="tab_direccion table dataTable table-striped table-bordered dt-responsive jambo_table bulk_action" id="tab_direccion">
											<thead>
											<tr>
												<th>Ciudad</th>
												<th>Código Postal</th>
												<th>Dirección 1</th>
												<th>Dirección 2</th>
												<th>Teléfono</th>
												<th>Teléfono 2</th>
												<th>Editar</th>
												<th>Eliminar</th>
											</tr>
											</thead>
											<tbody>
											<?php foreach ($listar_dire as $direcc) { ?>
									<tr>
										<td style='text-align: center' id="<?php echo $direcc->id;?>"><?php echo $direcc->city;?></td>
										<td style='text-align: center'><?php echo $direcc->zip;?></td>
										<td style='text-align: center'><?php echo $direcc->address_1;?></td>
										<td style='text-align: center'><?php echo $direcc->address_2;?></td>
										<td style='text-align: center'><?php echo $direcc->phone;?></td>
										<td style='text-align: center'><?php echo $direcc->cell_phone;?></td>
										<td style='text-align: center'><a style="color: #1ab394"class='quitar' id="<?php echo $direcc->id;?>"><i class='fa fa-edit fa-2x'></i></a></td>
										<td style='text-align: center'><a  style="color: #1ab394" class='quitar' id="<?php echo $direcc->id;?>"><i class='fa fa-trash fa-2x'></i></a></td>
									</tr>
									<?php }?>
											</tbody>
										</table>
									</div>
									<!--Campo para almacenar los códigos de los registros a desasociar-->
							<input type="text" id="codigos_des1" name="codigos_des1" placeholder="Códigos">
						</fieldset>
						<h1><i class="fa fa-car"></i> Vehiculos</h1>
						<fieldset>
						
								<button  class="btn btn-w-m btn-primary" id="i_new_line2"><i class="fa fa-plus"></i>&nbsp;Agregar Vehiculo</button>
									 <div class="table-responsive">
										<table style="width: 100%" class="tab_vehiculo table dataTable table-striped table-bordered dt-responsive jambo_table bulk_action" id="tab_vehiculo">
											<thead>
											<tr>
												<th>Marca</th>
												<th>Modelo</th>
												<th>Color</th>
												<th>Año</th>
												<th>Placa</th>
												<th>Editar</th>
												<th>Eliminar</th>
											</tr>
											</thead>
											<tbody>
											<?php foreach ($listar_vehi as $vehi) { ?>
									<tr>
										<td style='text-align: center' id="<?php echo $vehi->id;?>"><?php echo $vehi->trademark;?></td>
										<td style='text-align: center'><?php echo $vehi->model;?></td>
										<td style='text-align: center'><?php echo $vehi->color;?></td>
										<td style='text-align: center'><?php echo $vehi->year;?></td>
										<td style='text-align: center'><?php echo $vehi->license_plate;?></td>
										<td style='text-align: center'><a style="color: #1ab394" class='editar' id="<?php echo $vehi->id;?>"><i class='fa fa-edit fa-2x'></i></a></td>
										<td style='text-align: center'><a style="color: #1ab394" class='quitar' id="<?php echo $vehi->id;?>"><i class='fa fa-trash fa-2x'></i></a></td>
									</tr>
									<?php }?>
											</tbody>
										</table>
									</div>
									 <!--Campo para almacenar los códigos de los registros a desasociar-->
							<input type="text" id="codigos_des2" name="codigos_des2" placeholder="Códigos">
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	
	$("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
				labels: 
				{
					previous: "Anterior",
					next: "Siguiente",
					finish: "Guardar"
				},
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
					
					$("#i_new_line").click(function (e) {
						e.preventDefault();  // Para evitar que se envíe por defecto
						$("#modal_direccion").modal('show');
					});
					$("#i_new_line2").click(function (e) {
						e.preventDefault();  // Para evitar que se envíe por defecto
						$("#modal_vehiculo").modal('show');
					});
					
					var Tpro2 = $('#tab_vehiculo').DataTable({
					  "bLengthChange": false,
						"iDisplayLength": 10,
						"iDisplayStart": 0,
						destroy: true,
						paging: false,
						searching: false,
						"order": [[0, "asc"]],
						"pagingType": "full_numbers",
						"language": {"url": "<?= assets_url() ?>js/es.txt"},
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
					
					var Tpro = $('#tab_direccion').DataTable({
					  "bLengthChange": false,
						"iDisplayLength": 10,
						"iDisplayStart": 0,
						destroy: true,
						paging: false,
						searching: false,
						"order": [[0, "asc"]],
						"pagingType": "full_numbers",
						"language": {"url": "<?= assets_url() ?>js/es.txt"},
						"aoColumns": [
							{"sWidth": "15%"},
							{"sWidth": "15%"},
							{"sWidth": "20%"},
							{"sClass": "none", "sWidth": "8%"},
							{"sClass": "none", "sWidth": "8%"},
							{"sClass": "none", "sWidth": "8%"},
							{"sWidth": "4%", "bSortable": false, "sClass": "center sorting_false", "bSearchable": false},
							{"sWidth": "4%", "bSortable": false, "sClass": "center sorting_false", "bSearchable": false}
						]
					});
	
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 4)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
					var accion = 'update';
					var data_send;
					var vehiculos = "";
					var direcciones = "";
					data_send = new FormData($("#form")[0]);
                    var form = $(this);
					var cantidad = $('#tab_direccion tr').length;
					var cantidad_2 = $('#tab_vehiculo tr').length;
					var row = cantidad-1;
					var row_2= cantidad_2-1;
					
					if (row > 0 && row_2 >0) {
						
						
						$("#tab_direccion tbody tr").each(function () {
							var direccion0, direccion1, direccion2, direccion3, direccion4, direccion5, direccion6;
							direccion0 = $(this).attr('id');  // Código correlativo del registro en la tabla 
							direccion1 = $(this).find('td').eq(0).text();
							direccion2 = $(this).find('td').eq(1).text();
							direccion3 = $(this).find('td').eq(2).text();
							direccion4 = $(this).find('td').eq(3).text();
							direccion5 = $(this).find('td').eq(4).text();
							direccion6 = $(this).find('td').eq(5).text();
							
	
							direcciones = direccion0 + ';' + direccion1 + ';' + direccion2 + ';' + direccion3 + ';' + direccion4 + ';' + direccion5 + ';' + direccion6 + ';' ;
							
							direcciones = direcciones.substring(0, direcciones.length - 1);
							data_send.append("direcciones[]", direcciones);
						
		
						});
						
						$("#tab_vehiculo tbody tr").each(function () {
							var vehiculo0,vehiculo1, vehiculo2, vehiculo3, vehiculo4, vehiculo5;
							vehiculo0 = $(this).attr('id');  // Código correlativo del registro en la tabla 
							vehiculo1 = $(this).find('td').eq(0).text();
							vehiculo2 = $(this).find('td').eq(1).text();
							vehiculo3 = $(this).find('td').eq(2).text();
							vehiculo4 = $(this).find('td').eq(3).text();
							vehiculo5 = $(this).find('td').eq(4).text();
							
						
							
	
							vehiculos = vehiculo0 + ';' + vehiculo1 + ';' + vehiculo2 + ';' + vehiculo3 + ';' + vehiculo4 + ';' + vehiculo5 + ';' ;
							
							vehiculos = vehiculos.substring(0, vehiculos.length - 1);
							data_send.append("vehiculos[]", vehiculos);
						
		
						});
						
						
						var $url = '<?= base_url() ?>CClient/' + accion;
                $.ajax({
                    url: $url,
                    type: 'POST',
                    cache: false,
                    data: data_send,
                    processData: false,
                    contentType: false,
                    dataType: "json"
                }).done(function (data) {
                    if (data.success == 'ok') {
                        bootbox.alert({
                            size: 'small',
                            closeButton: false,
                            message: data.msg,
                            callback: function (result) {
                                location.reload();
                            }
                        });
                    } else {
                        bootbox.alert({
                            size: 'small',
                            closeButton: false,
                            message: data.msg,
                            callback: function (result) {
                                $('#wizard').smartWizard('setError', {stepnum: 1, iserror: true});
                            }

                        });
                      
                    }
                })
                     

					}else if (row_2 > 0) {
						
						
						$("#tab_vehiculo tbody tr").each(function () {
							var campo7, campo8, campo9, campo10, campo11;
							campo7 = $(this).find('td').eq(0).text();
							campo8 = $(this).find('td').eq(1).text();
							campo9 = $(this).find('td').eq(2).text();
							campo10 = $(this).find('td').eq(3).text();
							campo11 = $(this).find('td').eq(4).text();
						
							
	
							campos = campo7 + ';' + campo8 + ';' + campo9 + ';' + campo10 + ';' + campo11 + ';' ;
							
							campos = campos.substring(0, campos.length - 1);
							data_send.append("campos[]", campos);
							
							
							alert(data_send);
		
						});
					}


                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);
					
                    // Submit form input
                   // form.submit();
                }
            }).validate({
                        errorPlacement: function (error, element)
                        {
                            element.before(error);
                        },
                        rules: {
                            confirm: {
                                equalTo: "#password"
                            }
                        }
                    });

	$("#phone,#cell_phone,#zip").numeric(); //Valida solo permite valores numericos
	
	$("#agregar").click(function () {


		var city = $("#city").val();
		var zip = $("#zip").val();
		var phone = $("#phone_1").val();
		var cell_phone = $("#cell_phone_1").val();
		var address_1 = $("#address_1").val();
		var address_2 = $("#address_2").val();

		
		
		if (city !== '' & zip !== '' & phone !== '' & address_1 !== '') {
		
            var botonQuitar = "<a style='color: #1ab394' class='quitar'><i class='fa fa-trash fa-2x'></i></a>";

			var table = $('#tab_direccion').DataTable();
 
			var rowNode = table
				.row.add( [ city, zip, address_1, address_2,phone, cell_phone,botonQuitar ] )
				.draw()
				.node();
			 
			$( rowNode )
				.css( 'badground-color', 'green' )
				.animate( { color: 'black' } );



		} else {
			console.log("No se admite campos vacios");
		}
		$("#modal_direccion").modal('hide');
		$('#city').val('');
		$('#zip').val('');
		$('#phone_1').val('');
		$('#cell_phone_1').val('');
		$('#address_1').val('');
		$('#address_2').val('');
        
    });
	
	$("#agregar2").click(function () {


		var marca = $("#trademark").val();
		var modelo = $("#model").val();
		var color = $("#color").val();
		var year = $("#year").val();
		var placa = $("#license_plate").val();
		
		if (marca !== '' & modelo !== '' & color !== '' & year !== '' & placa !== '') {
		
            var botonQuitar = "<a style='color: #1ab394' class='quitar'><i class='fa fa-trash fa-2x'></i></a>";

			var table = $('#tab_vehiculo').DataTable();
 
			var rowNode = table
				.row.add( [ marca, modelo, color, year, placa,botonQuitar ] )
				.draw()
				.node();
			 
			$( rowNode )
				.css( 'badground-color', 'green' )
				.animate( { color: 'black' } );


		} else {
			console.log("No se admite campos vacios");
		}
		
		$("#modal_vehiculo").modal('hide');
		$('#trademark').val('');
		$('#model').val('');
		$('#color').val('');
		$('#year').val('');
		$('#license_plate').val('');
		
    });
	
	$("table#tab_direccion").on('click', 'a.quitar', function () {
		
		var cod_reg = '';
			
		if ($(this).attr('id') != undefined) {
			
			cod_reg = $(this).attr('id');
			alert(cod_reg);
			
			if($("#codigos_des1").val() == ''){
				$("#codigos_des1").val(cod_reg);
			}else{
				$("#codigos_des1").val($("#codigos_des1").val()+','+cod_reg);
			}
			
		}

        var aPos = $("table#tab_direccion").dataTable().fnGetPosition(this.parentNode.parentNode);
        $("table#tab_direccion").dataTable().fnDeleteRow(aPos);


    });
	
	$("table#tab_vehiculo").on('click', 'a.quitar', function () {
		
		if ($(this).attr('id') != undefined) {
			
			cod_reg = $(this).attr('id');
			alert(cod_reg);
			
			if($("#codigos_des2").val() == ''){
				$("#codigos_des2").val(cod_reg);
			}else{
				$("#codigos_des2").val($("#codigos_des2").val()+','+cod_reg);
			}
			
		}

        var aPos = $("table#tab_vehiculo").dataTable().fnGetPosition(this.parentNode.parentNode);
        $("table#tab_vehiculo").dataTable().fnDeleteRow(aPos);


    });
	 



});

</script>

