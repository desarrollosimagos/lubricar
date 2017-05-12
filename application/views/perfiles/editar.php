<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Perfiles</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Inicio</a>
            </li>
            <li>
                <a>Usuarios</a>
            </li>
            <li class="active">
                <strong>Editar Perfiles</strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
        <div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Editar Perfil <small></small></h5>
					
				</div>
				<div class="ibox-content">
					<form id="form_perfil" method="post" accept-charset="utf-8" class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-2 control-label" >Nombre</label>
							<div class="col-sm-10">
								<input type="text" class="form-control"  placeholder="Introduzca nombre" name="name" id="name" value="<?php echo $editar[0]->name ?>">
							</div>
						</div>
						<div class="form-group"><label class="col-sm-2 control-label" >Acciones</label>
							<div class="col-sm-10">
								<select id="actions_ids" class="form-control" multiple="multiple">
									<option value="0">Seleccione</option>
									<?php
									// Primero creamos un arreglo con la lista de ids de acciones proveniente del controlador
									$ids_actions = explode(",",$ids_actions);
									foreach ($acciones as $accion) {
										// Si el id de la acción está en el arreglo lo marcamos, si no, se imprime normalmente
										if(in_array($accion->id, $ids_actions)){
										?>
										<option selected="selected" value="<?php echo $accion->id; ?>"><?php echo $accion->name; ?></option>
										<?php
										}else{
										?>
										<option value="<?php echo $accion->id; ?>"><?php echo $accion->name; ?></option>
										<?php
										}
									}
									?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-4 col-sm-offset-2">
								<input class="form-control"  type='hidden' id="id" name="id" value="<?php echo $id ?>"/>
								<button class="btn btn-white" id="volver" type="button">Volver</button>
								<button class="btn btn-primary" id="edit" type="submit">Actualizar</button>
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

	$('select').on({
		change: function () {
			$(this).parent('div').removeClass('has-error');
		}
	});
    $('input').on({
        keypress: function () {
            $(this).parent('div').removeClass('has-error');
        }
    });

    $('#volver').click(function () {
        url = '<?php echo base_url() ?>profile/';
        window.location = url;
    });
	
	
	
	//~ $("#actions_ids").select2('val',(1));

    $("#edit").click(function (e) {

        e.preventDefault();  // Para evitar que se envíe por defecto

        if ($('#name').val().trim() === "") {

			swal("Disculpe,", "para continuar debe ingresar nombre");
			$('#name').parent('div').addClass('has-error');
			
        } else if ($('#actions_ids').val() == "") {
          
			swal("Disculpe,", "para continuar debe seleccionar los permisos");
			$('#actions_ids').parent('div').addClass('has-error');
			
        } else {
			alert(String($('#actions_ids').val()));
			
            $.post('<?php echo base_url(); ?>CPerfil/update', $('#form_perfil').serialize()+'&'+$.param({'actions_ids':$('#actions_ids').val()}), function (response) {
				//~ alert(response);
				if (response == 'existe') {
                    swal("Disculpe,", "este nombre de perfil se encuentra registrado");
                    $('#name').parent('div').addClass('has-error');
                }else{
					swal({
						title: "Actualizar",
						 text: "Registro actualizado con exito",
						  type: "success" 
						},
					function(){
						window.location.href = '<?php echo base_url(); ?>profile';
					});
				}
            });
        }
    });
});

</script>
