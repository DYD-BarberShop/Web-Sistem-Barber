<div class="page-content">
	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-sm-flex align-items-center justify-content-between">
					<h4 class="mb-sm-0">Nueva usuario</h4>

					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li class="breadcrumb-item">Admin</li>
							<li class="breadcrumb-item active">Nueva usuario</li>
						</ol>
					</div>

				</div>
			</div>
		</div>
		<!-- end page title -->
		
		<form action="<?php echo base_url();?>admins/Usuario/save" method="POST" enctype="multipart/form-data" class="custom-validation">
						
		<div class="row">
			<div class="col-xl-8">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title mb-4">Usuario</h4>
						<div class="row">
							<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label">Nombre</label>
									<input class="form-control" type="text" name="nombres" required placeholder="ejem. Admin">
								</div>
							</div>

							<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label">Email</label>
									<input type="email" class="form-control" name="email" required parsley-type="email" placeholder="ejem. admin@gmail.com"/>
								</div>
							</div>

							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Contraseña</label>
									<input type="password" id="pass2" name="password" class="form-control" required placeholder=""/>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Confirma contraseña</label>
									<input type="password" class="form-control" name="password" required data-parsley-equalto="#pass2" placeholder=""/>
								</div>
							</div>
						</div>
						
						<div class="text-end">
							<button class="btn btn-success mt-2">Guardar</button>
						</div>
					</div>
				</div>
				<!-- end card -->
			</div> <!-- end col -->
		</div>
		<!-- end row -->
		
		</form>

	</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->