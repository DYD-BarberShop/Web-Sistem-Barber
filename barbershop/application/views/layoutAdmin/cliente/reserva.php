<div class="page-content">
	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-sm-flex align-items-center justify-content-between">
					<h4 class="mb-sm-0">Lista</h4>

					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li class="breadcrumb-item">Reserva</li>
							<li class="breadcrumb-item active">Lista</li>
						</ol>
					</div>

				</div>
			</div>
		</div>
		<!-- end page title -->
		
		<div class="row">
			<?php foreach ($reservacs as $reserva): ?>
			<div class="col-lg-4 col-md-6">
				<div class="card">
					<div class="card-body">
						<h4 class="text-center"><?php echo $reserva->nombre;?></h4>
						<hr>
						<div class="price">
							<img src="<?php echo base_url();?>assets/cliente/img/cortesMes/<?php echo $reserva->imagen;?>">
							<span class="bg-success"><i>$ <?php echo $reserva->precio;?></i></span>
						</div>
						<div class="text-center mt-3">
							<p class="mb-2"><?php echo date("g:i a",strtotime("$reserva->inicio"));?> - <?php echo date("g:i a",strtotime("$reserva->fin"));?></p>
							<h5 class="mt-0"><?php setlocale(LC_ALL,"es_ES@euro","es_ES","esp"); $fecha = strftime("%d de %B de %Y", strtotime("$reserva->fecha")); echo $fecha;?></h5>
						</div>
						<p class="text-muted mt-4">Barbero: <?php echo $reserva->barber; ?></p>
					</div>
				</div>
			</div> <!-- end col -->
			<?php endforeach; ?>
		</div> <!-- end row -->
		
	</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->