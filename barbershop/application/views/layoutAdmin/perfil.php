<div class="page-content" id="profile">
	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-sm-flex align-items-center justify-content-between">
					<h4 class="mb-sm-0">PERFIL</h4>

					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li class="breadcrumb-item">Admin</li>
							<li class="breadcrumb-item active">PERFIL</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		<!-- end page title -->
		
		<div class="row">
			<div class="col-lg-7 col-md-9">
				<div class="card mt-5">
					<form action="<?php echo base_url();?>admins/Usuario/update" method="POST" enctype="multipart/form-data" class="custom-validation">
					<div class="card-body">
						<div class="d-flex avatar">
							<input class="picture" type="file" id="my-file-perfil" name="imagen">
							<label for="my-file-perfil" id="contentFile">
								<img src="<?php echo base_url(); ?>assets/cliente/img/usuario/<?php echo $this->session->userdata("imagen") ?>" class="ms-auto me-auto rounded-circle img-fluid avatar-xxl">
							</label>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Nombre completo</label>
									<input type="text" class="form-control" name="nombres" placeholder="ejem Admin" value="<?php echo $usuario->nombre;?>" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Email</label>
									<input type="email" class="form-control" name="email" placeholder="ejem. admin@gmail.com" value="<?php echo $usuario->email;?>" required parsley-type="email">
								</div>
							</div>
						</div>
						<div class="text-end mt-4">
							<button type="submit" class="btn btn-success waves-effect waves-light">Actualizar</button>
						</div>
					</div>
					</form>
				</div>
			</div> <!-- end col -->
		</div> <!-- end row -->
	</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->