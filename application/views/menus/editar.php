<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Menús </h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Inicio</a>
            </li>
           
            <li class="active">
                <strong>Menús</strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
        <div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Editar Menú <small></small></h5>
					
				</div>
				<div class="ibox-content">
					<form id="form_menus" method="post" accept-charset="utf-8" class="form-horizontal">
						<div class="form-group"><label class="col-sm-2 control-label" >Nombre *</label>

							<div class="col-sm-10"><input type="text" class="form-control" name="name" id="name" maxlength="150" value="<?php echo $editar[0]->name ?>"></div>
						</div>
						<div class="form-group"><label class="col-sm-2 control-label" >Descripción *</label>
							<div class="col-sm-10">
								<textarea class="form-control" name="description" id="description">
									<?php echo $editar[0]->description ?>
								</textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-4 col-sm-offset-2">
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
        url = '<?php echo base_url() ?>menus/';
        window.location = url;
    });

    $("#edit").click(function (e) {

        e.preventDefault();  // Para evitar que se envíe por defecto

        if ($('#name').val().trim() === "") {

          
			swal("Disculpe,", "para continuar debe ingresar nombre");
			$('#name').parent('div').addClass('has-error');
			
        } else if ($('#description').val().trim() === "") {

          
			swal("Disculpe,", "para continuar debe ingresar la descripción");
			$('#description').parent('div').addClass('has-error');
			
        } else {

            $.post('<?php echo base_url(); ?>CMenus/update', $('#form_menus').serialize(), function (response) {

				if (response[0] == '1') {
                    swal("Disculpe,", "este nombre se encuentra registrado");
                }else{
					swal({ 
						title: "Actualizar",
						 text: "Guardado con exito",
						  type: "success" 
						},
					function(){
					  window.location.href = '<?php echo base_url(); ?>menus';
					});
				

				}

            });
        }

    });
});

</script>
