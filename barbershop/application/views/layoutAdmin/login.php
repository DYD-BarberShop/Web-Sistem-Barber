<!doctype html >
	<html lang="es" style="background: url('<?php echo base_url();?>assets/fondo.jpg');background-repeat: no-repeat;background-size: cover;"
>

		<head>
			
			<meta charset="utf-8" />
			<title>Login | D&D barbershop</title>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
			<meta content="Themesdesign" name="author"/>
			<!-- App favicon -->
			<link href="<?php echo base_url(); ?>assets/cliente/img/favicon.png" rel="icon">

			<!-- Bootstrap Css -->
			<link href="<?= base_url('assets/administrador/css/bootstrap.min.css');?>" id="bootstrap-style" rel="stylesheet" type="text/css"/>
			<!-- App Css-->
			<link href="<?= base_url('assets/administrador/css/app.min.css');?>" id="app-style" rel="stylesheet" type="text/css"/>
			<!-- Sweet Alert -->
			<link href="<?= base_url('assets/administrador/libs/sweetalert2/sweetalert2.min.css');?>" rel="stylesheet" type="text/css"/>

		</head>

		<body style="background: none;">
			<div class="wrapper-page">
				<div class="container-fluid p-0">
					<div class="card mb-0">
						<div class="card-body">

							<div class="text-center mt-4">
								<div class="mb-3">
									<a href="index.html" class="auth-logo">
										<img src="<?= base_url('assets/administrador/images/logo-dark.svg');?>" height="48" class="logo-dark mx-auto" alt="">
										<img src="<?= base_url('assets/administrador/images/logo-dark.svg');?>" height="60" class="logo-light mx-auto" alt="">
									</a>
								</div>
							</div>

							<h4 class="text-muted text-center font-size-16 fw-4">Ingrese su correo electrónico y contraseña para iniciar sesión</h4>

							<div class="p-3">
								<form class="form-horizontal m-t-20" action="<?php echo base_url();?>admins/Login/login" method="post">
									<div class="form-group mb-3 row">
										<div class="col-12">
											<input name="email" class="form-control" type="text" placeholder="Email">
										</div>
									</div>

									<div class="form-group mb-3 row">
										<div class="col-12">
											<input name="password" class="form-control" type="password" placeholder="Password">
										</div>
									</div>

									<div class="form-group mb-3 text-center row mt-3 pt-1">
										<div class="col-12">
											<button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
										</div>
									</div>
								</form>
							</div>
							<!-- end -->
						</div>
						<!-- end cardbody -->
					</div>
					<!-- end card -->
				</div>
				<!-- end container -->
			</div>
			<!-- end -->

			<!-- JAVASCRIPT -->
			<script src="<?= base_url('assets/administrador/libs/sweetalert2/sweetalert2.min.js');?>"></script>
		</script>
	</body>
</html>