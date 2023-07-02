<div class="page-content">
	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-sm-flex align-items-center justify-content-between">
					<h4 class="mb-sm-0">Nueva barbero</h4>

					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li class="breadcrumb-item">Corte</li>
							<li class="breadcrumb-item active">Nueva barbero</li>
						</ol>
					</div>

				</div>
			</div>
		</div>
		<!-- end page title -->
		
		<form action="<?php echo base_url();?>admins/Barber/save" method="POST" enctype="multipart/form-data" class="custom-validation">
						
		<div class="row">
			<div class="col-xl-8">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title mb-4">Barbero</h4>
						<div class="row">
							<div class="col-md-6">
								<div class="mb-3">
									<label class="form-label">Nombre</label>
									<input class="form-control" type="text" name="nombre" required="" placeholder="ejem. Elias">
								</div>
							</div>

							<div class="col-md-12">
								<div class="mb-3">
									<label class="form-label">Biografía</label>
									<textarea required rows="6" name="descripcion" class="form-control" placeholder="ejem. profesional..." rows="5"></textarea>
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
			<div class="col-xl-4">
				<div class="card">
					<div class="card-body">

						<div class="file file-poster">
							<input type="file" id="my-file" name="imagen">
							<label for="my-file"></label>
						</div>

						<div class="content-file" id="contentFile"></div>

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
