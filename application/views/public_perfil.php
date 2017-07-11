<section class="page-header page-header-color page-header-primary page-header-float-breadcrumb">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="mt-xs">Mi Perfil (<?php echo $this->session->userdata['logged_in_public']['name']; ?> <?php echo $this->session->userdata['logged_in_public']['lastname']; ?>)<span>Navegue por los datos de su cuenta</span></h1>
				<ul class="breadcrumb breadcrumb-valign-mid">
					<li><a href="#">Inicio</a></li>
					<li class="active">Perfil público</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="tabs tabs-bottom tabs-center tabs-simple">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#tabsNavigationSimpleIcons1" data-toggle="tab">
							<span class="featured-boxes featured-boxes-style-6 p-none m-none">
								<span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
									<span class="box-content p-none m-none">
										<i class="icon-featured fa fa-user"></i>
									</span>
								</span>
							</span>									
							<p class="mb-none pb-none">Datos Personales</p>
						</a>
					</li>
					<li>
						<a href="#tabsNavigationSimpleIcons2" data-toggle="tab">
							<span class="featured-boxes featured-boxes-style-6 p-none m-none">
								<span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
									<span class="box-content p-none m-none">
										<i class="icon-featured fa fa-file"></i>
									</span>
								</span>
							</span>									
							<p class="mb-none pb-none">Historial de Pedidos</p>
						</a>
					</li>
					<li>
						<a href="#tabsNavigationSimpleIcons3" data-toggle="tab">
							<span class="featured-boxes featured-boxes-style-6 p-none m-none">
								<span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
									<span class="box-content p-none m-none">
										<i class="icon-featured fa fa-address-card"></i>
									</span>
								</span>
							</span>									
							<p class="mb-none pb-none">Mis Direcciones</p>
						</a>
					</li>
					<li>
						<a href="#tabsNavigationSimpleIcons4" data-toggle="tab">
							<span class="featured-boxes featured-boxes-style-6 p-none m-none">
								<span class="featured-box featured-box-primary featured-box-effect-6 p-none m-none">
									<span class="box-content p-none m-none">
										<i class="icon-featured fa fa-car"></i>
									</span>
								</span>
							</span>									
							<p class="mb-none pb-none">Mis Vehículos</p>
						</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tabsNavigationSimpleIcons1">
						<div class="justify">
							<div class="col-md-2">
							</div>
							<div class="col-md-8">
								<h4>Datos Personales</h4>
								<ul class="list list-icons list-icons-style-3 mt-xlg">
									<li><i class="fa fa-id-card"></i> <strong>Nombre:</strong> <?php echo $this->session->userdata['logged_in_public']['name']; ?> <?php echo $this->session->userdata['logged_in_public']['lastname']; ?></li>
									<li>
										<i class="fa fa-phone"></i>
										<strong>Télefono:</strong> 
										<span id="span_phone"><?php echo $this->session->userdata['logged_in_public']['phone']; ?></span>
										&nbsp;<i class="fa fa-edit editar_telefonos" style="cursor:pointer;" title="Editar"></i>
									</li>
									<li>
										<i class="fa fa-mobile"></i> 
										<strong>Móvil:</strong> 
										<span id="span_cellphone"><?php echo $this->session->userdata['logged_in_public']['cell_phone']; ?></span>
										&nbsp;<i class="fa fa-edit editar_telefonos" style="cursor:pointer;" title="Editar"></i>
									</li>
									<li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com"><?php echo $this->session->userdata['logged_in_public']['username']; ?></a></li>
								</ul>
								<input type="hidden" id="customer_id" value="<?php echo $this->session->userdata['logged_in_public']['id']; ?>">
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tabsNavigationSimpleIcons2">
						<div class="justify">
							<div class="col-md-2">
							</div>
							<div class="col-md-8">
								<h4>Historial de Pedidos</h4>
								<div class="table-responsive">
									<table style="width: 100%" id="tab_order" class="table table-striped table-bordered dt-responsive table-hover">
										<thead>
											<tr>
												<th class="text-center">#</th>
												<th class="text-center">Orden N°</th>
												<th class="text-center">Franquicia</th>
												<th class="text-center">Cliente</th>
												<th class="text-center">Fecha</th>
												<th class="text-center">Monto</th>
												<th class="text-center">Servicios</th>
												<th class="text-center">Productos</th>
												<th class="text-center">Estatus</th>

											</tr>
										</thead>
										<tbody>
											<?php $i = 1; ?>
											<?php foreach ($ordenes as $list) { ?>
												<tr style="text-align: center">
													<td>
														<?php echo $i; ?>
													</td>
													<td>
														<?php printf("%08d", $list->id) ?> 
													</td>
													<td>
														<?php
														foreach ($list_franq as $listar) {
															if ($listar->id == $list->franchise_id) {
																echo $listar->name;
															}
														};
														?>
													</td>
													<td>
														<?php
														foreach ($list_client as $listar) {
															if ($listar->id == $list->customer_id) {
																echo $listar->name . ' ' . $listar->lastname;
															}
														};
														?>
													</td>
													<td>
														<?php echo $list->date_order; ?>
													</td>
													<td>
														<?php echo $list->total; ?>
													</td>
													<td>
														<?php
														foreach ($list_orders_services as $order_service) {
															if ($order_service->order_id == $list->id) {
																foreach ($list_serv as $servicio) {
																	if ($servicio->id == $order_service->service_id) {
																		echo $servicio->name . ", ";
																	}
																}
															}
														}
														?>
													</td>
													<td>
														<?php
														foreach ($list_orders_products as $order_product) {
															if ($order_product->order_id == $list->id) {
																foreach ($list_prod as $producto) {
																	if ($producto->id == $order_product->product_id) {
																		echo $producto->name . ", ";
																	}
																}
															}
														}
														?>
													</td>
													<td>
														<?php foreach ($status as $listar) { ?>
															<?php if ($listar->id == $list->status){ ?>
																<span <?php if($listar->name != 'ABIERTO'){echo "class='".$listar->labels."'";} ?>><?php echo $listar->name; ?></span>
															<?php } ?>
														<?php } ?>
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
					<div class="tab-pane" id="tabsNavigationSimpleIcons3">
						<div class="justify">
							<div class="col-md-2">
							</div>
							<div class="col-md-8">
								<h4>Mis Direcciones</h4>
								<button  class="btn btn-w-m btn-primary" id="i_new_line">
									<i class="fa fa-plus"></i>&nbsp;Agregar Dirección
								</button>
								<div class="table-responsive">
									<table style="width: 100%" class="table table-striped table-bordered dt-responsive table-hover" id="tab_direccion">
										<thead>
											<tr>
												<th>Ciudad</th>
												<th>Código Postal</th>
												<th>Descripción</th>
												<th>Dirección 1</th>
												<th>Dirección 2</th>
												<th>Teléfono</th>
												<th>Teléfono 2</th>
												<th>Editar</th>
												<th>Eliminar</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($direcciones as $direcc) { ?>
												<tr id="<?php echo $direcc->id; ?>">
													<td style='text-align: center' id="<?php echo $direcc->id; ?>"><?php echo $direcc->city; ?></td>
													<td style='text-align: center'><?php echo $direcc->zip; ?></td>
													<td style='text-align: center'><?php echo $direcc->description; ?></td>
													<td style='text-align: center'><?php echo $direcc->address_1; ?></td>
													<td style='text-align: center'><?php echo $direcc->address_2; ?></td>
													<td style='text-align: center'><?php echo $direcc->phone; ?></td>
													<td style='text-align: center'><?php echo $direcc->cell_phone; ?></td>
													<td style='text-align: center'>
														<a class='editar_direccion' id="<?php echo $direcc->id; ?>">
														<i class='fa fa-edit fa-2x'></i>
														<input id="editar_direccion_<?php echo $direcc->id;?>" type="hidden" value="<?php echo $direcc->id.";".$direcc->city.";".$direcc->zip.";".$direcc->description.";".$direcc->address_1.";".$direcc->address_2.";".$direcc->phone.";".$direcc->cell_phone; ?>">
														</a>
													</td>
													<td style='text-align: center'>
														<a class='quitar_direccion' id="<?php echo $direcc->id; ?>">
														<i class='fa fa-trash fa-2x'></i>
														</a>
													</td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane" id="tabsNavigationSimpleIcons4">
						<div class="justify">
							<div class="col-md-2">
							</div>
							<div class="col-md-8">
								<h4>Mis Vehículos</h4>
								<button  class="btn btn-w-m btn-primary" id="i_new_line2">
									<i class="fa fa-plus"></i>&nbsp;Agregar Vehículo
								</button>
								<div class="table-responsive">
									<table style="width: 100%" class="table table-striped table-bordered dt-responsive table-hover" id="tab_vehiculo">
										<thead>
											<tr>
												<th>Marca</th>
												<th>Modelo</th>
												<th>Color</th>
												<th>Año</th>
												<th>Placa</th>
												<th>Editar</th>
												<th>Eliminar</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($vehiculos as $vehi) { ?>
												<tr id="<?php echo $vehi->id; ?>">
													<td style='text-align: center' id="<?php echo $vehi->id; ?>"><?php echo $vehi->trademark; ?></td>
													<td style='text-align: center'><?php echo $vehi->model; ?></td>
													<td style='text-align: center'><?php echo $vehi->color; ?></td>
													<td style='text-align: center'><?php echo $vehi->year; ?></td>
													<td style='text-align: center'><?php echo $vehi->license_plate; ?></td>
													<td style='text-align: center'>
														<a class='editar_vehiculo' id="<?php echo $vehi->id; ?>">
														<i class='fa fa-edit fa-2x'></i>
														<input id="editar_vehiculo_<?php echo $vehi->id;?>" type="hidden" value="<?php echo $vehi->id.";".$vehi->trademark.";".$vehi->model.";".$vehi->color.";".$vehi->year.";".$vehi->license_plate; ?>">
														</a>
													</td>
													<td style='text-align: center'>
														<a class='quitar_vehiculo' id="<?php echo $vehi->id; ?>">
														<i class='fa fa-trash fa-2x'></i>
														</a>
													</td>
												</tr>
											<?php } ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
