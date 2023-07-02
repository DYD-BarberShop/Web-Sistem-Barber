<div class="page-content">
	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-sm-flex align-items-center justify-content-between">
					<h4 class="mb-sm-0">Barbero</h4>

					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li class="breadcrumb-item">Corte</li>
							<li class="breadcrumb-item active">Barbero</li>
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
							<h4 class="card-title mb-0">Todas los barberos</h4>
							<div class="ms-auto my-auto">
								<a class="btn btn-primary waves-effect waves-light"  href="<?php echo base_url();?>admins/Barber/new"> Nuevo</a>
							</div>
						</div>
			
						<div class="table-responsive-sm">
							<table class="table table-striped mb-0" id="barber-list">
								<thead>
									<tr>
										<th>Nombre</th>
										<th>Descripcion</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($barbers as $barber):?>
									<tr>
										<td><?php echo $barber->nombre;?></td>
                                        <td><?php echo $barber->descripcion;?></td>
										<td>
											<div class="btn-group dropdown">
												<span type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-list"></i></span>
												<div class="dropdown-menu dropdown-menu-end">
														<a href="<?php echo base_url();?>admins/Barber/edit/<?php echo $barber->id;?>" class="dropdown-item"><i class="fa-solid fa-file-pen me-2"></i> Editar</span></a>
                                                        <a href="<?php echo base_url();?>admins/Barber/delete/<?php echo $barber->id;?>" class="dropdown-item"><i class="fa-solid fa-user-slash me-2"></i> Eliminar</a>
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