<div class="page-content">
	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-sm-flex align-items-center justify-content-between">
					<h4 class="mb-sm-0">Reservas</h4>

					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li class="breadcrumb-item">Corte</li>
							<li class="breadcrumb-item active">Reservas</li>
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
							<h4 class="card-title mb-0">Todas las reservas</h4>
						</div>
			
						<div class="table-responsive-sm">
							<table class="table table-striped mb-0" id="reserva-list">
								<thead>
									<tr>
										<th>N°</th>
										<th>Fecha</th>
                                   	 	<th>Cliente</th>
										<th>Servicio</th>
										<th>Barbero</th>
										<th>Hora</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach($reservas as $reserva):?>
									<tr>
										<td><?php echo str_pad($reserva->id, 6, '0', STR_PAD_LEFT);?></td>
                                        <td><?php echo $reserva->fecha;?></td>
										<td><?php echo $reserva->cliente;?></td>
										<td><?php echo $reserva->servicio;?></td>
                                        <td><?php echo $reserva->barbero;?></td>
										<td><?php echo $reserva->inicio;?> - <?php echo $reserva->fin;?></td>
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