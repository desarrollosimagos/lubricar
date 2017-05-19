<style>
	.modal{
		padding: 4px;
		border-radius: 4px;
		direction: ltr;
		/*.dow {
		  border-top: 1px solid #ddd !important;
		}*/
		z-index:2000;
	}
</style>
<div class="modal inmodal fade" id="modal_cliente" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close cerrar_modal" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h5 class="modal-title"><span id="titulo"></span> Cliente</h5>
			</div>
			<div class="modal-body" >
				<form id="form_client" action="" method="post" class="form">
					<div class="form-group">
						<label >Usuario *</label>
						<input id="username" name="username" class="form-control" type="text" maxlength="100">
						<label>Contraseña *</label>
						<input id="password" name="password" class="form-control" type="password" maxlength="20" >
						 <label>Repetir Contraseña *</label>
						<input id="confirm" name="confirm" class="form-control" type="password" maxlength="20" >
						 <label >Nombre *</label>
						 <input id="name" name="name" class="form-control" type="text" maxlength="150">
						<label>Apellido *</label>
						<input id="lastname" name="lastname" class="form-control" type="text" maxlength="20">
						<label>Telefono 1 *</label>
						<input id="phone" name="phone" class="form-control" type="text" maxlength="20">
						<label>Teléfono 2</label>
						<input id="cell_phone" name="cell_phone" class="form-control" type="text" maxlength="20">
						<input id="status" name="status" class="form-control" type="hidden" value="activo" maxlength="20">
					</div>
				</form>
			</div>
			<div class="modal-footer" >
				<button class="btn btn-primary" type="button" id="add_client">
					Registrar
				</button>
			</div>
		</div>
	</div>
</div>


<div class="modal inmodal fade" id="modal_direccion" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close cerrar_modal" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h5 class="modal-title"><span id="titulo"></span> Dirección</h5>
			</div>
			<div class="modal-body" >
				<form id="form_address" action="" method="post" class="form">
					<div class="form-group">
						<label >Descripción</label>
						<input id="description" name="description" class="form-control" type="text" maxlength="100">
						<label >Ciudad</label>
						<input id="city" name="city" class="form-control" type="text" maxlength="100">
						<label>Código Postal </label>
						<input id="zip" name="zip" class="form-control" type="text" maxlength="20" >
						 <label>Dirección 1 *</label>
						 <input id="address_1" name="address_1" class="form-control" type="text" maxlength="150" >
						 <label >Dirección 2</label>
						 <input id="address_2" name="address_2" class="form-control" type="text" maxlength="150">
						<label>Teléfono 1 *</label>
						<input id="phone_1" name="phone_1" class="form-control" type="text" maxlength="20">
						<label>Teléfono 2 *</label>
						<input id="cell_phone_1" name="cell_phone_1" class="form-control" type="text" maxlength="20">
						<input id="customer_id" name="customer_id" class="form-control" type="text" maxlength="50">

					</div>
				</form>
			</div>
			<div class="modal-footer" >
				<button class="btn btn-primary" type="button" id="add_direccion">
					Registrar
				</button>
			</div>
		</div>
	</div>
</div>
<div class="modal inmodal fade" id="modal_vehiculo" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close cerrar_modal" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title"><span id="titulo"></span> Vehiculo</h4>
			</div>
			<div class="modal-body">
				<form id="form_vehi" action="" method="post" class="form">
                    <div class="form-group">
                            <label >Marca</label>
                            <input id="trademark" name="trademark" class="form-control" type="text" maxlength="50">
                            <label>Modelo </label>
                            <input id="model" name="model" class="form-control" type="text" maxlength="50">
                            <label >Color *</label>
                            <input id="color" name="color" class="form-control" type="text" maxlength="50">
                            <label >Año</label>
							<input type="text" class="form-control"  id="year" name="year" maxlength="4">
                            <label >Placa</label>
                            <input id="license_plate" name="license_plate" class="form-control" type="text" maxlength="50">
							<input id="customer_id" name="customer_id" class="form-control" type="text" maxlength="50">

                    </div>
                </form>
			</div>
			<div class="modal-footer" >
				<button class="btn btn-primary" type="button" id="add_car">
					Registrar
				</button>
			</div>
		</div>
	</div>
</div>

<div class="modal inmodal fade" id="modal_servicio" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close cerrar_modal" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h5 class="modal-title"><span id="titulo"></span> Servicios</h5>
			</div>
			<div class="modal-body" >
				<form id="servicio" action="" method="post" class="form">
					<div class="form-group">
						<label >Servicio</label>
						<input id="service_id" name="service_id" class="form-control" type="text" maxlength="20" >
						<div class="col-sm-12"></div>
						<label>Sub total </label>
						<input id="sub_total" name="sub_total" class="form-control" type="text" maxlength="20" >
						 <label>Impuesto</label>
						 <input id="impuesto" name="impuesto" class="form-control" type="text" maxlength="150" >
						 <label >Total</label>
						 <input id="total" name="total" class="form-control" type="text" maxlength="150">
						
						<input id="accion"  class="form-control" type="hidden" >
						<input id="posicion"  class="form-control" type="hidden" >
					</div>
				</form>
			</div>
			<div class="modal-footer" >
				<button class="btn btn-primary" type="button" id="agregar">
					Aceptar
				</button>
			</div>
		</div>
	</div>
</div>
<div class="modal inmodal fade" id="modal_producto" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close cerrar_modal" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h5 class="modal-title"><span id="titulo"></span> Producto</h5>
			</div>
			<div class="modal-body" >
				<form id="servicio" action="" method="post" class="form">
					<div class="form-group">
						<label >Producto</label>
						<input id="product_id" name="product_id" class="form-control" type="text" maxlength="100">
						<label >Cantidad</label>
						<input id="quantity" name="quantity" class="form-control" type="text" maxlength="100">
						<label>Sub total </label>
						<input id="sub_total" name="sub_total" class="form-control" type="text" maxlength="20" >
						 <label>Impuesto</label>
						 <input id="impuesto" name="impuesto" class="form-control" type="text" maxlength="150" >
						 <label >Total</label>
						 <input id="total" name="total" class="form-control" type="text" maxlength="150">
						
						<input id="accion"  class="form-control" type="hidden" >
						<input id="posicion"  class="form-control" type="hidden" >
					</div>
				</form>
			</div>
			<div class="modal-footer" >
				<button class="btn btn-primary" type="button" id="agregar">
					Aceptar
				</button>
			</div>
		</div>
	</div>
</div>

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Orden de Servicio </h2>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo base_url() ?>home">Inicio</a>
            </li>
            
            <li>
                <a href="<?php echo base_url() ?>services">Orden de Servicio</a>
            </li>
            
            <li class="active">
                <strong>Registrar Orden de Servicio</strong>
            </li>
        </ol>
    </div>
</div>


<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
        <div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Orden # <?php echo '00000'.$listar ?></h5>
				</div>

				<div class="ibox-content">
					<form id="form_services" method="post" accept-charset="utf-8" class="form-horizontal">
						<div class="col-lg-12">
						<div class="col-lg-4">
							<div class="form-group">
								<label>Cliente * </label>
								<div class="input-group mar-btm">
									<span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
									<input type="hidden"  style="width: 30%;"  readonly="true" name="codcliente" id="codcliente" class="form-control">
									<input type="text" id="typeahead_2" placeholder="Buscar Cliente..." class="typeahead_2 form-control" />
									<span style="cursor: pointer" class="add_cliente input-group-addon"><span class="fa fa-plus" style="color: green"></span></span>
									
								</div>
							</div>

						</div>
						<div class="col-lg-1"></div>
						<div class="col-lg-2">
							<div class="form-group">
								<label>Fecha de emisión *</label>
								<div class="input-group mar-btm">
										<span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span>
										<input type="text" data-original-title="Fecha Emision" value="<?php echo date('d-m-Y'); ?>" data-toggle="tooltip" data-placement="bottom" readonly="true" name="fecha_emision" id="fecha_emision" placeholder="Fecha Emisión" class="form-control add-tooltip">
								</div>
							</div>

						</div>
						<div class="col-lg-1"></div>
						<div class="col-lg-4">
							<div class="form-group">
								<label>Estatus *</label>
								<div class="input-group mar-btm">
									<select class="span12" name="status" id="status" value=""  class="form-control">
                                        <option selected="" value="Abierto">Abierto</option>
                                        <option value="Presupuesto">Presupuestado</option>
										<option value="En Curso">Aprobado</option>
										<option value="En Curso">En Curso</option>
										<option value="Finalizado">Finalizado</option>
										
                                    </select>
								</div>
							</div>

						</div>
						
						<div class="col-lg-2"></div>
						
						</div>
						<div class="col-lg-12">
						<div class="col-lg-4">
							<div class="form-group">
								<label>Vehiculo *</label>
								<div class="input-group mar-btm">
									<span class="input-group-addon"><i class="fa fa-car fa-lg"></i></span>
									<select style="width: 100%" class="span12" name="vehiculo" id="vehiculo" class="form-control">
                                       <option selected="" value="0">Seleccione</option>  
                                    </select>
									<span style="cursor: pointer" class="add_vehiculo input-group-addon"><span class="fa fa-plus" style="color: green"></span></span>
								</div>
							</div>

						
						</div>
						<div class="col-lg-1"></div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>Dirección *</label>
								<div class="input-group mar-btm">
									<span class="input-group-addon"><i class="fa fa-building fa-lg"></i></span>
									<select style="width: 100%" class="span12" name="address" id="address" class="form-control">
                                       <option selected="" value="0">Seleccione</option>  
                                    </select>
									<span style="cursor: pointer" class="add_direccion input-group-addon"><span class="fa fa-plus" style="color: green"></span></span>
								</div>
							</div>

						
						</div>
						<div class="col-lg-12"></div>
						
						</div>
						<div class="col-lg-12">
							</br>
                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-1"> Servicios</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2">Productos</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                                <div class="panel-body">
                                  <button  class="btn btn-w-m btn-primary" id="i_new_line"><i class="fa fa-plus"></i>&nbsp;Agregar Servicio</button>
									 <div class="table-responsive">
										<table style="width: 100%" class="tab_servicio table dataTable table-striped table-bordered dt-responsive jambo_table bulk_action" id="tab_servicio">
											<thead>
											<tr>
												<th>Servicio</th>
												<th>Subtotal</th>
												<th>Impuesto</th>
												<th>Total</th>
												<th>Editar</th>
												<th>Eliminar</th>
											</tr>
											</thead>
											<tbody>
											
											</tbody>
										</table>
									</div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane">
                                <div class="panel-body">
                                     <button  class="btn btn-w-m btn-primary" id="i_new_line2"><i class="fa fa-plus"></i>&nbsp;Agregar Producto</button>
									 <div class="table-responsive">
										<table style="width: 100%" class="tab_producto table dataTable table-striped table-bordered dt-responsive jambo_table bulk_action" id="tab_producto">
											<thead>
											<tr>
												<th>Producto</th>
												<th>Cantidad</th>
												<th>Subtotal</th>
												<th>Impuesto</th>
												<th>Total</th>
												<th>Editar</th>
												<th>Eliminar</th>
											</tr>
											</thead>
											<tbody>
											
											</tbody>
										</table>
									</div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

						<div class="form-group" >
							<div class="col-sm-4 col-sm-offset-2" style="margin-top: 1%">
								<button class="btn btn-white" id="volver" type="button">Volver</button>
								<button class="btn btn-primary" id="registrar" type="submit">Guardar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
	
	$('#tab_servicio').DataTable({
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
			  {"sWidth": "20%"},
			  {"sWidth": "8%"},
			  {"sWidth": "8%"},
			  {"sClass": "none", "sWidth": "8%"},
			  {"sWidth": "4%", "bSortable": false, "sClass": "center sorting_false", "bSearchable": false},
			  {"sWidth": "4%", "bSortable": false, "sClass": "center sorting_false", "bSearchable": false}
		  ]
	});
	
	$('#tab_producto').DataTable({
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
			  {"sWidth": "20%"},
			  {"sWidth": "8%"},
			  {"sWidth": "8%"},
			  {"sWidth": "8%"},
			  {"sClass": "none", "sWidth": "8%"},
			  {"sWidth": "4%", "bSortable": false, "sClass": "center sorting_false", "bSearchable": false},
			  {"sWidth": "4%", "bSortable": false, "sClass": "center sorting_false", "bSearchable": false}
		  ]
	});
	
	//abrir modal
	$(".add_cliente").click(function (e) {
		e.preventDefault();  // Para evitar que se envíe por defecto
		$("#modal_cliente").modal('show');
		$("span#titulo").text('Registrar');
		$("#accion").val('Registrar');
	});
	
	//registar cliente nuevo
	$("#add_client").click(function (e) {
		e.preventDefault();  // Para evitar que se envíe por defecto
		$.post('<?php echo base_url(); ?>CClient/add2', $('#form_client').serialize(), function (response) {

			 if (response[0] == '1') {
				 swal("Disculpe,", "este nombre se encuentra registrado");
			 }else{
				 swal({ 
					 title: "Registro",
					  text: "Guardado con exito",
					   type: "success" 
					 },
				 function(){
				   window.location.href = '<?php echo base_url(); ?>order/register';
				 });
			 }
		 });
	});
	//abrir modal
	$(".add_direccion").click(function (e) {
		e.preventDefault();  // Para evitar que se envíe por defecto
		
		if ($("#typeahead_2").val() === ''){
			swal("Disculpe,", "debe seleccionar un cliente para registrar una dirección",'warning');
		}else{
			$("#customer_id").val($("#codcliente").val());
			$("#modal_direccion").modal('show');
			$("span#titulo").text('Registrar');

		}
	});
	
	
	$("#add_direccion").click(function (e) {
		e.preventDefault();  // Para evitar que se envíe por defecto
		$.post('<?php echo base_url(); ?>CClient/addAddress', $('#form_address').serialize(), function (response) {
		
				 swal({ 
					 title: "Registro",
					  text: "Guardado con exito",
					   type: "success" 
					 },
				 function(){
					$('#codcliente').val();
					var cliente_id = $('#codcliente').val();
					$('#address').find('option:gt(0)').remove().end().select2('val', '0');
					$.get('<?php echo base_url(); ?>CClient/ajax_address/' + cliente_id + '', function (data) {
						var option = "";
						$.each(data, function (i) {
							option += "<option value=" + data[i]['id'] + ">" + data[i]['city'] + ' - ' + data[i]['address_1'] +"</option>";
			
						});
			
						$('#address').append(option);
			
					}, 'json');
				 });
			 
		 });
	});
	
	
	
	$("#add_car").click(function (e) {
		e.preventDefault();  // Para evitar que se envíe por defecto
		$.post('<?php echo base_url(); ?>CClient/addCar', $('#form_vehi').serialize(), function (response) {
			 if (response[0] == 'e') {
				
				swal("Disculpe,", "este vehiculo se encuentra registrado");
				
			 }else{
				 swal({ 
					 title: "Registro",
					  text: "Guardado con exito",
					   type: "success" 
					 },
				 function(){
					$('#codcliente').val();
					var cliente_id = $('#codcliente').val();
					$('#vehiculo').find('option:gt(0)').remove().end().select2('val', '0');
					$.get('<?php echo base_url(); ?>CClient/ajax_car/' + cliente_id + '', function (data) {
					var option = "";
					$.each(data, function (i) {
						option += "<option value=" + data[i]['id'] + ">" + data[i]['license_plate'] + ' - ' + data[i]['trademark'] +"</option>";
					});
		
					$('#vehiculo').append(option);
		
		
		
				}, 'json');
				 });
			 }
		 });
	});
	
	$(".add_vehiculo").click(function (e) {
		e.preventDefault();  // Para evitar que se envíe por defecto
		
		if ($("#typeahead_2").val() === ''){
			swal("Disculpe,", "debe seleccionar un cliente para registrar un vehiculo",'warning');
		}else{
			$("#customer_id").val($("#codcliente").val());
			$("#modal_vehiculo").modal('show');
			$("span#titulo").text('Registrar');
		}
		
	});
	
	
	$("#i_new_line").click(function (e) {
		e.preventDefault();  // Para evitar que se envíe por defecto
		$("#modal_servicio").modal('show');
		$("span#titulo").text('Registrar');
		$("#accion").val('Registrar');
	});
	
	$("#i_new_line2").click(function (e) {
		e.preventDefault();  // Para evitar que se envíe por defecto
		$("#modal_producto").modal('show');
		$("span#titulo").text('Registrar');
		$("#accion").val('Registrar');
	});

    $('#volver').click(function () {
        url = '<?php echo base_url() ?>order/';
        window.location = url;
    });
	

	
	$.get('<?php echo base_url(); ?>clients/ajax_client', function(data){

		$(".typeahead_2").typeahead({
			source:data,
			autoSelect: true,
            updater: function (item) {
				return item;
			},
			afterSelect: function (item) {
				$('#codcliente').val(item.id);
				var cliente_id = $('#codcliente').val();
				$('#vehiculo').find('option:gt(0)').remove().end().select2('val', '0');
				$.get('<?php echo base_url(); ?>CClient/ajax_car/' + cliente_id + '', function (data) {
					var option = "";
					$.each(data, function (i) {
						option += "<option value=" + data[i]['id'] + ">" + data[i]['license_plate'] + ' - ' + data[i]['trademark'] +"</option>";
		
					});
		
					$('#vehiculo').append(option);
		
		
		
				}, 'json');
				
				$('#address').find('option:gt(0)').remove().end().select2('val', '0');
				$.get('<?php echo base_url(); ?>CClient/ajax_address/' + cliente_id + '', function (data) {
					var option = "";
					$.each(data, function (i) {
						option += "<option value=" + data[i]['id'] + ">" + data[i]['city'] + ' - ' + data[i]['address_1'] +"</option>";
		
					});
		
					$('#address').append(option);
		
		
		
				}, 'json');
			}
		});
		
		
        
    },'json');
	


	
	
    $("#registrar").click(function (e) {

        e.preventDefault();  // Para evitar que se envíe por defecto

        if ($('#name').val().trim() === "") {

          
			swal("Disculpe,", "para continuar debe ingresar nombre");
			$('#name').parent('div').addClass('has-error');
			
        } else if ($('#description').val().trim() === "") {

          
			swal("Disculpe,", "para continuar debe ingresar la descripción");
			$('#description').parent('div').addClass('has-error');
			
        }else if ($('#price').val().trim() === "") {

          
			swal("Disculpe,", "para continuar debe ingresar el precio");
			$('#price').parent('div').addClass('has-error');
			
        }  else {

            $.post('<?php echo base_url(); ?>CServices/add', $('#form_services').serialize(), function (response) {

				if (response[0] == '1') {
                    swal("Disculpe,", "este nombre se encuentra registrado");
                }else{
					swal({ 
						title: "Registro",
						 text: "Guardado con exito",
						  type: "success" 
						},
					function(){
					  window.location.href = '<?php echo base_url(); ?>services';
					});
				}
            });
        }
    });
});

</script>
