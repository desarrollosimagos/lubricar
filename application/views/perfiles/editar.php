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
                <strong>Perfiles</strong>
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
						<div class="form-group"><label class="col-sm-2 control-label" >Nombre</label>

							<div class="col-sm-10"><input type="text" class="form-control"  placeholder="Introduzca nombre" name="name" id="name" value="<?php echo $editar[0]->name ?>"></div>
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

    $('input').on({
        keypress: function () {
            $(this).parent('div').removeClass('has-error');
        }
    });

    $('#volver').click(function () {
        url = '<?php echo base_url() ?>profile/';
        window.location = url;
    });


    $("#edit").click(function (e) {

        e.preventDefault();  // Para evitar que se envíe por defecto

        if ($('#name').val().trim() === "") {

          
		   swal("Disculpe,", "para continuar debe ingresar nombre");

        } else {
			

            $.post('<?php echo base_url(); ?>CPerfil/update', $('#form_perfil').serialize(), function (response) {
				
				if (response[0] == '1') {
                    swal("Disculpe,", "este nombre ya existe");
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
