<div class="page-content">
	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-sm-flex align-items-center justify-content-between">
					<h4 class="mb-sm-0">Clientes</h4>

					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li class="breadcrumb-item">Reserva</li>
							<li class="breadcrumb-item active">Clientes</li>
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
							<h4 class="card-title mb-0">Todas los clientes</h4>
						</div>
			
						<div class="table-responsive-sm">
							<table class="table table-striped mb-0" id="cliente-list">
								<thead>
									<tr>
										<th>Nombres</th>
                                   	 	<th>Email</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($clientes as $cliente):?>
									<tr>
										<td><?php echo $cliente->nombre;?></td>
                                        <td><?php echo $cliente->email;?></td>
										<td>
											<form action="<?php echo base_url();?>admins/cliente/Reserva" method="POST">
												<input type="hidden" name="id" value="<?php echo $cliente->id?>">
												<button class="btn btn-success waves-effect waves-light" type="submit">Ver reservas <i class="fa-solid fa-list ms-2"></i></button>
											</form>
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