<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Perfiles </h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Inicio</a>
            </li>
            <li>
                <a>Usuarios</a>
            </li>
            <li class="active">
                <strong>Editar Usuarios</strong>
            </li>
        </ol>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
        <div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Editar Usuario <small></small></h5>
				</div>
				<div class="ibox-content">
					<form id="form_users" method="post" accept-charset="utf-8" class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-2 control-label" >Nombre *</label>
							<div class="col-sm-10">
								<input type="text" class="form-control"  placeholder="" name="name" id="name" value="<?php echo $editar[0]->name ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" >Apellido *</label>
							<div class="col-sm-10">
								<input type="text" class="form-control"  placeholder="" name="lastname" id="lastname" value="<?php echo $editar[0]->lastname ?>">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" >Usuario *</label>
							<div class="col-sm-10">
								<input type="text" class="form-control"  placeholder="ejemplo@xmail.com" name="username" id="username" value="<?php echo $editar[0]->username ?>">
							</div>
						</div>
						<!--<div class="form-group">
							<label class="col-sm-2 control-label" >Contraseña *</label>
							<div class="col-sm-10">
								<input type="password" class="form-control required"  placeholder="" name="password" id="password">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" >Confirme Contraseña *</label>
							<div class="col-sm-10">
								<input type="password" class="form-control "  placeholder="" name="passw1" id="passw1">
							</div>
						</div>-->
						<div class="form-group">
							<label class="col-sm-2 control-label" >Perfil *</label>
							<div class="col-sm-10">
								<select class="form-control m-b" name="profile_id" id="profile" >
									<option value="0" selected="">Seleccione</option>
									<?php foreach ($list_perfil as $perfil) { ?>
										<option value="<?php echo $perfil->id ?>"><?php echo $perfil->name ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group" id="franquicias">
							<label class="col-sm-2 control-label" >Franquicia *</label>
							<div class="col-sm-10">
								<select class="form-control m-b" id="franchises" multiple="multiple">
									<?php
									// Armamos un arreglo de ids de franquicias asignadas a otros usuarios diferentes al que se está editando
									//~ $franquicias_ids = array();
									//~ $franquicia_asoc_id = 0;  // Variable que almacenará el id de la franquicia que pertenece al usuario editado
									//~ foreach ($user_franquicias as $user_franquicia) {
										//~ if($user_franquicia->user_id != $id){
											//~ $franquicias_ids[] = $user_franquicia->franchise_id;
										//~ }else{
											//~ $franquicia_asoc_id = $user_franquicia->franchise_id;
										//~ }
									//~ }
									// Primero creamos un arreglo con la lista de ids de servicios proveniente del controlador
									$ids_franchises = explode(",",$ids_franchises);
									?>
									<?php foreach ($franquicias as $franquicia) { ?>
										<?php if(in_array($franquicia->id, $ids_franchises)) { ?>
										<option selected="selected" value="<?php echo $franquicia->id ?>"><?php echo $franquicia->name ?></option>
										<?php }else{ ?>
										<option value="<?php echo $franquicia->id ?>"><?php echo $franquicia->name ?></option>
										<?php } ?>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group"><label class="col-sm-2 control-label" >Acciones</label>
							<div class="col-sm-10">
								<select id="actions_ids" class="form-control" multiple="multiple">
									
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label" >Estatus *</label>
							<div class="col-sm-10">
								<select class="form-control m-b" name="status" id="status">
									<option value="1" selected="">Activo</option>
									<option value="0">Inactivo</option>

								</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-4 col-sm-offset-2">
								<input id="base_url" type="hidden" value="<?php echo base_url(); ?>"/>
								<input id="id_profile" type="hidden" value="<?php echo $editar[0]->profile_id ?>"/>
                                <input id="id_status" type="hidden" value="<?php echo $editar[0]->status ?>"/>
								<input class="form-control"  type='hidden' id="id" name="id" value="<?php echo $id ?>"/>
								<button class="btn btn-white" id="volver2" type="button">Volver</button>
								<button class="btn btn-primary" id="edit" type="submit">Actualizar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
        </div>
    </div>
</div>
 <script src="<?php echo assets_url('script/users.js'); ?>" type="text/javascript" charset="utf-8" ></script>
