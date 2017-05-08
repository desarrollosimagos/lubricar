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
<div class="modal" id="modal_direccion">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">
                   
                    &nbsp;  Registrar Dirección
                </h4>
            </div>
            <div class="modal-body">
                <form name="nuevo_delito" action="" method="post" class="form">

                    <div class="form-group">
                        <div class="col-md-12 col-sm-12 col-xs-6 ">
                            <label for="decision_tribunal">Ciudad</label>
                            <input id="city" name="city" class="form-control" type="text" >
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-6 ">

                            <label for="delito_id">Cod Postal </label>
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
                            <input id="phone" name="phone" class="form-control" type="text" >
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-6 ">
                            <label for="fecha_de_presentacion">Teléfono 2</label>
                            
                                <input id="cell_phone" name="cell_phone" class="form-control" type="text" >
                           
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
                </form>
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
						<h1>Datos basicos</h1>
						<fieldset>
							<h2>Informacion Personal</h2>
							<div class="row">
								<div class="form-group">
									<label class="col-sm-2 control-label" >Nombre *</label>
									<div class="col-sm-10">
										<input id="name" name="name" type="text" class="form-control required">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Apellido *</label>
									<div class="col-sm-10">
										<input id="lastname" name="lastname" type="text" class="form-control required">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Telefono 1 *</label>
									<div class="col-sm-10">
										<input id="phone" name="phone" type="text" class="form-control required">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Telefono 2 </label>
									<div class="col-sm-10">
										<input id="cell_phone" name="cell_phone" type="text" class="form-control ">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">Username *</label>
									<div class="col-sm-10">
										<input id="username" name="username" type="text" class="form-control required">
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
						<h1>Direcciones</h1>
						<fieldset>
							<h2>Direcciones</h2>
							<div class="row">
								<button  class="btn btn-w-m btn-primary" id="i_new_line"><i class="fa fa-plus"></i>&nbsp;Agregar Dirección</button>
								<div class="table-responsive">
									<table id="tab_direccion" class="table table-striped table-bordered table-hover dataTables-example able-striped table-bordered dt-responsive nowrap" >
										<thead>
											<tr>
											   <th>Ciudad</th>
												<th>Código Postal</th>
												<th>Dirección 1</th>
												<th>Dirección 2</th>
												<th>Teléfono</th>
												<th>Teléfono 2</th>
												<th>Eliminar</th>
											</tr>
										</thead>
										<tbody>
											
										</tbody>
									</table>
								</div>
							</div>
						</fieldset>
						<h1>Vehiculos</h1>
						<fieldset>
							<div class="text-center" style="margin-top: 120px">
								<h2>You did it Man :-)</h2>
							</div>
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
		onStepChanging: function (event, currentIndex, newIndex){
			// Always allow going backward even if the current step contains invalid fields!
			if (currentIndex > newIndex){
				return true;
			}

			// Forbid suppressing "Warning" step if the user is to young
			if (newIndex === 6 && Number($("#age").val()) < 18){
				return false;
			}
			
			var form = $(this);

			// Clean up if user went backward before
			if (currentIndex < newIndex){
				// To remove error styles
				$(".body:eq(" + newIndex + ") label.error", form).remove();
				$(".body:eq(" + newIndex + ") .error", form).removeClass("error");
			}

			// Disable validation on fields that are disabled or hidden.
			form.validate().settings.ignore = ":disabled,:hidden";

			// Start validation; Prevent going forward if false
			return form.valid();
		},
		onStepChanged: function (event, currentIndex, priorIndex){
			
			$("#i_new_line").click(function (event) {
				event.preventDefault();  // Para evitar que se envíe por defecto
				$("#modal_direccion").modal('show');
			});
			
			var Tpro = $('#tab_direccion').dataTable({
				"bLengthChange": false,
				"iDisplayLength": 10,
				"iDisplayStart": 0,
				"order": [[0, "asc"]],
				"language": {"url": ('../assets/js/es.txt')},
				"aoColumns": [
					{"sWidth": "10%"},
					{"sWidth": "10%"},
					{"sWidth": "20%"},
					{"sClass": "none", "sWidth": "8%"},
					{"sClass": "none", "sWidth": "8%"},
					{"sClass": "none", "sWidth": "8%"},
					{"sWidth": "4%", "bSortable": false, "sClass": "center sorting_false", "bSearchable": false}
				]
			});
	
	$("#agregar").click(function (event) {
		event.preventDefault(); 
		//var isStepValid = true;

        //var nombreAnimate = 'animated shake';
        //var finanimated = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

		var city = $("#city").val();
		var zip = $("#zip").val();
		var phone = $("#phone").val();
		var cell_phone = $("#cell_phone").val();
		var address_1 = $("#address_1").val();
		var address_2 = $("#address_2").val();

		
		
		if (city != '' & zip != '' & phone != '' & address_1 != '') {
		
            var botonQuitar = "<a class='quitar'><i class='fa fa-trash'></i></a>";

            Tpro.dataTable().fnAddData([city, zip,  address_1,address_2  ,phone, cell_phone, botonQuitar]);
            // var newRow = Tpro.row.add([city, zip, phone, address_1, botonQuitar]).draw().node();


		} else {
			console.log("No se admite campos vacios");
		}
		
		
        
    });
	
	 $("table#tab_direccion").on('click', 'a.quitar', function () {

        var aPos = $("table#tab_direccion").dataTable().fnGetPosition(this.parentNode.parentNode);
        $("table#tab_direccion").dataTable().fnDeleteRow(aPos);


    });
	 
			
			
			// Suppress (skip) "Warning" step if the user is old enough.
			if (currentIndex === 2 && Number($("#age").val()) >= 18){
				$(this).steps("next");
			}

			// Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
			if (currentIndex === 2 && priorIndex === 3){
				$(this).steps("previous");
			}
		},
		onFinishing: function (event, currentIndex){
			var form = $(this);

			// Disable validation on fields that are disabled.
			// At this point it's recommended to do an overall check (mean ignoring only disabled fields)
			form.validate().settings.ignore = ":disabled";

			// Start validation; Prevent form submission if false
			return form.valid();
		},
		onFinished: function (event, currentIndex){
			var form = $(this);

			// Submit form input
			form.submit();
		}
	}).validate({
		
		errorPlacement: function (error, element){
			
			element.before(error);
			},
			rules: {
				confirm: {
					equalTo: "#password"
					}
					}
	});
	
	 
	


});

</script>

