<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Clientes</h2>
        <ol class="breadcrumb">
            <li>
                <a href="">Inicio</a>
            </li>
            <li class="active">
                <strong>Clientes</strong>
            </li>
        </ol>
       
    </div>

</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <a href="<?php echo base_url() ?>clients/register">
            <button class="btn btn-outline btn-primary dim" type="button"><i class="fa fa-plus"></i> Agregar</button></a>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Listado de Clientes </h5>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table id="tab_client" class="table table-striped table-bordered table-hover dataTables-example" >
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
                                <?php foreach ($listar as $list) { ?>
                                    <tr style="text-align: center">
                                        <td>
                                            <?php echo $i; ?>
                                        </td>
                                        <td>
                                            <?php echo $list->name; ?>
                                        </td>
                                        <td>
                                            <?php echo $list->lastname; ?>
                                        </td>
                                        <td>
                                            <?php echo $list->username; ?>
                                        </td>
                                      
                                        <td style='text-align: center'>
                                            <a href="<?php echo base_url() ?>clients/edit/<?= $list->id; ?>" title="Editar"><i class="fa fa-pencil"></i></a>
                                        </td>
                                        <td style='text-align: center'>
                                            
                                            <a class='borrar' id='<?php echo $list->id; ?>'><i class="fa fa-trash-o"></i></a>
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
</div>
 <script src="<?php echo assets_url('script/client.js'); ?>" type="text/javascript" charset="utf-8" ></script>

