<div class="page-content">
	<div class="container-fluid">
		
		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box d-sm-flex align-items-center justify-content-between">
					<h4 class="mb-sm-0">Dashboard</h4>

					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li class="breadcrumb-item">Admin</li>
							<li class="breadcrumb-item active">Dashboard</li>
						</ol>
					</div>

				</div>
			</div>
		</div>
		<!-- end page title -->

		<div class="row">
			<div class="col-xl-3 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="d-flex">
							<div class="flex-grow-1">
								<p class="text-truncate h6 mb-2">Todos los barberos</p>
								<h4 class="mb-2"><?= @$barber->data;?></h4>
								<p class="text-muted mb-0">Desde el periodo anterior</p>
							</div>
							<div class="avatar-sm">
								<span class="avatar-title btn-warning rounded-3">
								<i class="fa-solid fa-user-gear fs-4"></i>
								</span>
							</div>
						</div>                                            
					</div><!-- end cardbody -->
				</div><!-- end card -->
			</div><!-- end col -->
			<div class="col-xl-3 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="d-flex">
							<div class="flex-grow-1">
								<p class="text-truncate h6 mb-2">Todo los servicios</p>
								<h4 class="mb-2"><?= @$servicio->data;?></h4>
								<p class="text-muted mb-0">Desde el periodo anterior</p>
							</div>
							<div class="avatar-sm">
								<span class="avatar-title btn-danger rounded-3">
									<i class="fa-solid fa-box fs-4"></i>
								</span>
							</div>
						</div>                                              
					</div><!-- end cardbody -->
				</div><!-- end card -->
			</div><!-- end col -->
			<div class="col-xl-3 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="d-flex">
							<div class="flex-grow-1">
								<p class="text-truncate h6 mb-2">Toda las reserva</p>
								<h4 class="mb-2"><?= @$reserva->data;?></h4>
								<p class="text-muted mb-0">Desde el periodo anterior</p>
							</div>
							<div class="avatar-sm">
								<span class="avatar-title btn-primary rounded-3">
									<i class="fa-solid fa-envelope-open-text fs-4"></i>
								</span>
							</div>
						</div>                                              
					</div><!-- end cardbody -->
				</div><!-- end card -->
			</div><!-- end col -->
			<div class="col-xl-3 col-md-6">
				<div class="card">
					<div class="card-body">
						<div class="d-flex">
							<div class="flex-grow-1">
								<p class="text-truncate h6 mb-2">Todos los clientes</p>
								<h4 class="mb-2"><?= @$usuario->data;?></h4>
								<p class="text-muted mb-0">Desde el periodo anterior</p>
							</div>
							<div class="avatar-sm">
								<span class="avatar-title btn-success rounded-3">
									<i class="fa-solid fa-user-group fs-4"></i>
								</span>
							</div>
						</div>                                              
					</div><!-- end cardbody -->
				</div><!-- end card -->
			</div><!-- end col -->
		</div><!-- end row -->

		<div class="row">
			<div class="col-xl-8">
				<div class="card">
					<div class="card-body pb-0">
						<h4 class="card-title mb-2">Resumen de reservas</h4>
					</div>
					<div class="card-body py-0 px-2">
						<div id="chartarea" class="apex-charts" dir="ltr"></div>
					</div>
				</div><!-- end card -->
			</div>
			<!-- end col -->
		</div>
		<!-- end row -->
	</div>
	
</div>
<!-- End Page-content -->

<!-- apexcharts -->
<script src="<?= base_url('assets/administrador/libs/apexcharts/apexcharts.min.js');?>"></script>

<script>
	amounts = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
	response = <?php echo $añoreserva;?>;
	cant = 0

	response.forEach(element => {
		amounts[Number(element.mes)-1] = Number(element.data);
		cant += Number(element.data)
	});
	
	console.log(amounts)

	var options = {
		series: [
			{ name: "Esta semana", data: amounts}
		],
		chart: { toolbar: { show: !1 }, height: 360, type: "area" },
		dataLabels: { enabled: !1 },
		yaxis: {
			labels: {
				formatter: function (e) {
					return e;
				},
			},
			tickAmount: 5,
			min: 0,
			max: cant,
		},
		stroke: { curve: "smooth", width: 2 },
		grid: {
			show: !0,
			borderColor: "#90A4AE",
			strokeDashArray: 0,
			position: "back",
			xaxis: { lines: { show: !0 } },
			yaxis: { lines: { show: !0 } },
			row: { colors: void 0, opacity: 0.8 },
			column: { colors: void 0, opacity: 0.8 },
			padding: { top: 10, right: 0, bottom: 10, left: 10 },
		},
		legend: { show: !1 },
		colors: ["#85a0f9", "#c09af6"],
		labels: ['Ene', 'Feb','Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep','Oct',"Nov","Dec"],
	}

	chart = new ApexCharts(document.querySelector("#chartarea"), options);
	chart.render();
</script>