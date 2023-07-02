<div class="page-content">
	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-sm-flex align-items-center justify-content-between">
					<h4 class="mb-sm-0">Promociones</h4>

					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li class="breadcrumb-item">Corte</li>
							<li class="breadcrumb-item active">Promociones</li>
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
							<h4 class="card-title mb-0">Todas los promociones</h4>
							<div class="ms-auto my-auto">
								<a class="btn btn-primary waves-effect waves-light"  href="<?php echo base_url();?>admins/Promocion/new"> Nuevo</a>
							</div>
						</div>
			
						<div class="table-responsive-sm">
							<table class="table table-striped mb-0" id="promocion-list">
								<thead>
									<tr>
										<th>Nombre</th>
										<th>Descuento</th>
										<th>Descripcion</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($promociones as $promocion):?>
									<tr>
										<td><img class="ps-3 s-20 me-3" src="<?php echo base_url(); ?>assets/cliente/img/promocion/<?php echo $promocion->imagen;?>"><span class="fw-6 font-weight-bold font-family-roboto"><?php echo $promocion->nombre;?></span></td>
										<td width="10%">% <?php echo $promocion->descuento;?></td>
										<td><?php echo $promocion->descripcion;?></td>
										<td>
											<div class="btn-group dropdown">
												<span type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-list"></i></span>
												<div class="dropdown-menu dropdown-menu-end">
													<form action="<?php echo base_url();?>admins/Promocion/changeState" method="POST">
														<input type="hidden" name="estado" value="<?php echo $promocion->estado?>">
														<input type="hidden" name="id" value="<?php echo $promocion->id?>">
														<button class="dropdown-item me-2" type="submit"><i class="fa-solid fa-wand-magic-sparkles me-2"></i> <?php echo $promocion->estado?></button>
													</form>
													<form action="<?php echo base_url();?>admins/Promocion/edit" method="POST">
														<input type="hidden" name="id" value="<?php echo $promocion->id?>">
														<button class="dropdown-item" type="submit"><i class="fa-solid fa-file-pen me-2"></i> Editar</button>
													</form>
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