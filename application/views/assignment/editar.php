<div class="row wrapper border-bottom white-bg page-heading">
     <div class="col-lg-10">
        <h2>Franquicias </h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Inicio</a>
            </li>
            <li>
                <a href="">Franquicias</a>
            </li>
            <li class="active">
                <strong>Editar Servicios</strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
        <div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Registrar Servicios <small></small></h5>
				</div>
				<div class="ibox-content">
					<form id="form_assignment" method="post" accept-charset="utf-8" class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-2 control-label" >Franquicia *</label>
							<div class="col-sm-10">
								<select class="form-control m-b" name="franchise_id" id="franchises">
									<option value="0" selected="">Seleccione</option>
									<?php foreach ($list_franq as $franq) { ?>
										<option value="<?php echo $franq->id ?>"><?php echo $franq->name ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" >Servicio *</label>
							<div class="col-sm-10">
								<select class="form-control m-b" name="service_id" id="services">
									<option value="0" selected="">Seleccione</option>
									<?php foreach ($list_serv as $serv) { ?>
										<option value="<?php echo $serv->id ?>"><?php echo $serv->name ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						
						
						<div class="form-group">
							<div class="col-sm-4 col-sm-offset-2">
								<input id="id_services" type="hidden" value="<?php echo $editar[0]->service_id ?>"/>
								 <input id="id_franchise" type="hidden" value="<?php echo $editar[0]->franchise_id ?>"/>
								 <input class="form-control"  type='hidden' id="id" name="id" value="<?php echo $id ?>"/>
								<button class="btn btn-white" id="volver" type="button">Volver</button>
								<button class="btn btn-primary" id="edit" type="submit">Guardar</button>
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

    $('input').on({
        keypress: function () {
            $(this).parent('div').removeClass('has-error');
        }
    });

    $('#volver').click(function () {
        url = '<?php echo base_url() ?>services/';
        window.location = url;
    });
	
	$("#franchises").val($("#id_franchise").val());
	$("#services").val($("#id_services").val());


    $("#edit").click(function (e) {

        e.preventDefault();  // Para evitar que se envíe por defecto

		if ($('#franchises').val() == '0') {
			
		  swal("Disculpe,", "para continuar debe seleccionas la franquicia");
	       $('#profile').parent('div').addClass('has-error');
		   
		}  else if ($('#franchises').val() == '0') {
			
		  swal("Disculpe,", "para continuar debe seleccionar el servicio");
	       $('#profile').parent('div').addClass('has-error');
		   
        }   else {

            $.post('<?php echo base_url(); ?>CAssignment/update', $('#form_assignment').serialize(), function (response) {

				if (response[0] == '1') {
                    swal("Disculpe,", "ya se encuentra registrado");
                }else{
					swal({ 
						title: "Actualizar",
						 text: "Guardado con exito",
						  type: "success" 
						},
					function(){
					  window.location.href = '<?php echo base_url(); ?>assignment';
					});
				}
            });
        }
    });
});

</script>