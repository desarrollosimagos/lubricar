<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Perfiles</h2>
        <ol class="breadcrumb">
            <li>
                <a href="">Inicio</a>
            </li>
            <li>
                <a>Usuarios</a>
            </li>
            <li class="active">
                <strong>Usuarios</strong>
            </li>
        </ol>
       
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <a href="<?php echo base_url() ?>users_register">
            <button class="btn btn-outline btn-primary dim" type="button"><i class="fa fa-plus"></i> Agregar</button></a>
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Listado de Usuarios </h5>
            </div>
            <div class="ibox-content">
                <div class="table-responsive">
                    <table id="tab_users" class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Usuario</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($listar as $usuario) { ?>
                            <tr style="text-align: center">
                                <td>
                                    <?php echo $i; ?>
                                </td>
                                <td>
                                    <?php echo $usuario->name; ?>
                                </td>
                                <td>
                                    <?php echo $usuario->lastname; ?>
                                </td>
                                <td>
                                    <?php echo $usuario->username; ?>
                                </td>
                              
                                <td style='text-align: center'>
                                    <a href="<?php echo base_url() ?>users_edit/<?= $usuario->id; ?>" title="Editar"><i class="fa fa-pencil"></i></a>
                                </td>
                                <td style='text-align: center'>
                                    
                                    <a class='borrar' id='<?php echo $usuario->id; ?>'><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <?php $i++ ?>
                        <?php } ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
 <script src="<?php echo assets_url('script/users.js'); ?>" type="text/javascript" charset="utf-8" ></script>

