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
						<input id="service_id" name="service_id" class="form-control" type="text" maxlength="100">
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
									<input type="text" placeholder="Buscar Cliente..." class="typeahead_2 form-control" />
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
						<div class="col-lg-2"></div>
						
						</div>
						<div class="col-lg-12">
						<div class="col-lg-4">
							<div class="form-group">
								<label>Vehiculo *</label>
								<div class="input-group mar-btm">
									<span class="input-group-addon"><i class="fa fa-car fa-lg"></i></span>
									<select style="width: 100%" class="span12" name="vehiculo" id="vehiculo" value=""  class="form-control">
                                       <option selected="" value="0">Seleccione</option>  
                                    </select>
								</div>
							</div>

						
						</div>
						<div class="col-lg-1"></div>
						<div class="col-lg-2">
							<div class="form-group">
								<label>Estatus *</label>
								<div class="input-group mar-btm">
									
									<select class="span12" name="status" id="status" value=""  class="form-control">
                                        <option selected="" value="Abierto">Abierto</option>
                                        <option value="Presupuesto">Presupuestado</option>
										<option value="En Curso">En Curso</option>
										<option value="Facturado">Facturado</option>
										<option value="Finalizado">Finalizado</option>
										<option value="Cancelado">Cancelado</option>
										<option value="Contactar Al Cliente">Contactar Al Cliente</option>
										<option value="Presup. No Aceptado">Presup. No Aceptado</option>
										<option value="Presup. Aceptado">Presup. Aceptado</option>
                                    </select>
								</div>
							</div>

						</div>
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
        url = '<?php echo base_url() ?>services/';
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
				
				$.get('<?php echo base_url(); ?>CClient/ajax_car/' + cliente_id + '', function (data) {
					var option = "";
					$.each(data, function (i) {
						option += "<option value=" + data[i]['id'] + ">" + data[i]['license_plate'] + ' - ' + data[i]['trademark'] +"</option>";
		
					});
		
					$('#vehiculo').append(option);
		
		
		
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
