<div class="page-content">
	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-sm-flex align-items-center justify-content-between">
					<h4 class="mb-sm-0">usuario</h4>

					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li class="breadcrumb-item">Admin</li>
							<li class="breadcrumb-item active">usuario</li>
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
							<h4 class="card-title mb-0">Todas los usuarios</h4>
							<div class="ms-auto my-auto">
								<a class="btn btn-primary waves-effect waves-light"  href="<?php echo base_url();?>admins/Usuario/new"> Nuevo</a>
							</div>
						</div>
			
						<div class="table-responsive-sm">
							<table class="table table-striped mb-0" id="usuario-list">
								<thead>
									<tr>
										<th>Nombre</th>
										<th>Email</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($usuarios as $usuario):?>
									<tr>
										<td><?php echo $usuario->nombre;?></td>
                                        <td><?php echo $usuario->email;?></td>
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