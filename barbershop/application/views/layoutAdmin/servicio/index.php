<div class="page-content">
	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-sm-flex align-items-center justify-content-between">
					<h4 class="mb-sm-0">Servicios</h4>

					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li class="breadcrumb-item">Corte</li>
							<li class="breadcrumb-item active">Servicios</li>
						</ol>
					</div>

				</div>
			</div>
		</div>
		<!-- end page title -->
		
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">

						<div class="d-flex mb-4 align-items-center">
							<h4 class="card-title mb-0">Todas los servicios</h4>
							<div class="ms-auto my-auto">
								<a class="btn btn-primary waves-effect waves-light"  href="<?php echo base_url();?>admins/Servicio/new"> Nuevo</a>
							</div>
						</div>
			
						<div class="table-responsive-sm">
							<table class="table table-striped mb-0" id="servicio-list">
								<thead>
									<tr>
										<th>Nombre</th>
										<th>Stilo</th>
										<th>Precio</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($servicios as $servicio):?>
									<tr>
										<td><?php echo $servicio->nombre;?></td>
										<td><?php echo $servicio->stilo;?></td>
										<td>$ <?php echo $servicio->precio;?></td>
										<td>
											<div class="btn-group dropdown">
												<span type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-list"></i></span>
												<div class="dropdown-menu dropdown-menu-end">
														<a href="<?php echo base_url();?>admins/Servicio/edit/<?php echo $servicio->id;?>" class="dropdown-item"><i class="fa-solid fa-file-pen me-2"></i> Editar</span></a>
                                                        <a href="<?php echo base_url();?>admins/Servicio/delete/<?php echo $servicio->id;?>" class="dropdown-item"><i class="fa-solid fa-user-slash me-2"></i> Eliminar</a>
												</div>
											</div>
										</td>
									</tr>
									<?php endforeach;?>
								</tbody>
							</table>
						</div>

					</div>
				</div>
			</div> <!-- end col -->
		</div> <!-- end row -->
		
	</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->