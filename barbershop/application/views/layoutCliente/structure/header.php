<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>D&D barbershop</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="Admin Dashboard" name="description"/>
        <meta content="LT" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="google-signin-scope" content="profile email">
        <meta name="google-signin-client_id" content="815790752895-46pn1717c19ttf8ivqdcm8g11gii4s95.apps.googleusercontent.com">
		<link href="<?php echo base_url(); ?>assets/administrador/images/favicon.svg" rel="icon">
		<!-- Css link -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/cliente/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/cliente/css/owl.carousel.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/cliente/css/owl.transitions.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/cliente/css/animate.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/cliente/css/lightbox.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/cliente/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/cliente/css/preloader.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/cliente/css/image.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/cliente/css/icon.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/cliente/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/cliente/css/responsive.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/cliente/css/calendar.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/cliente/css/inputfile.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/cliente/css/customselect.css">

	</head>
	<body id="top">
        <header id="navigation" class="navbar-fixed-top animated-header">
          <div class="container">
          <div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
          </button>

					<h1 class="navbar-brand">
						<a href="<?php echo base_url(); ?>Home"><img src="<?php echo base_url(); ?>assets/administrador/images/logo-dark.svg" height="32" alt=""></a>
					</h1>

          </div>
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav menu">
                        <li><a href="<?php echo base_url(); ?>Home">Inicio</a></li>
                        <li><a href="<?php echo base_url(); ?>clientes/Promocion">Promociones</a></li>
                        <li><a href="<?php echo base_url(); ?>clientes/Servicio">Cortes</a></li>
                        <li><a href="<?php echo base_url(); ?>clientes/Barber">Barbers</a></li>
                        <li><a href="<?php echo base_url(); ?>clientes/Contacto">Contactos</a></li>
                        <?php if (!empty($this->session->userdata("logincliente"))): ?>
                        <li><a href="<?php echo base_url(); ?>clientes/reserva">Tus reservas</a></li>
                        <li>
                          <div class="buttons">
                          <img class="imguser" src="<?php echo $this->session->userdata("imagen") ?>"  alt="">
                          <br>
                          <a href="#" onclick="signOut();">Cerrar Sesión</a>
                          </div>
                        </li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </header>
