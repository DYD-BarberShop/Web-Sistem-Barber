<body data-topbar="dark" data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

	<header id="page-topbar">
		<div class="navbar-header">
			<div class="d-flex">
				<!-- LOGO -->
				<div class="navbar-brand-box">
					<a href="index.html" class="logo logo-dark">
						<span class="logo-sm">
							<img src="<?= base_url('assets/administrador/images/logo-sm.svg');?>" alt="logo-sm" height="40">
						</span>
						<span class="logo-lg">
							<img src="<?= base_url('assets/administrador/images/logo-dark.svg');?>" alt="logo-dark" height="25">
						</span>
					</a>

					<a href="index.html" class="logo logo-light">
						<span class="logo-sm">
							<img src="<?= base_url('assets/administrador/images/logo-sm.svg');?>" alt="logo-sm-light" height="40">
						</span>
						<span class="logo-lg">
							<img src="<?= base_url('assets/administrador/images/logo-light.svg');?>" alt="logo-light" height="25">
						</span>
					</a>
				</div>

				<button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
					<i class="ri-menu-2-line align-middle"></i>
				</button>

				<!-- App Search 
				<form class="app-search d-none d-lg-block">
					<div class="position-relative">
						<input type="text" class="form-control" placeholder="Buscar...">
						<span class="ri-search-line"></span>
					</div>
				</form> -->

				
			</div>

			<div class="d-flex">

				<div class="dropdown d-inline-block d-lg-none ms-2">
					<button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
						data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="ri-search-line"></i>
					</button>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
						aria-labelledby="page-header-search-dropdown">
			
						<form class="p-3">
							<div class="mb-3 m-0">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search ...">
									<div class="input-group-append">
										<button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>

				<div class="dropdown d-none d-lg-inline-block ms-1">
					<button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
						<i class="ri-fullscreen-line"></i>
					</button>
				</div>

				<div class="dropdown d-inline-block user-dropdown">
					<button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
						data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img class="rounded-circle header-profile-user" src="<?php echo base_url(); ?>assets/cliente/img/usuario/<?php echo $this->session->userdata("imagen") ?>" alt="Header Avatar">
						<span class="d-none d-xl-inline-block ms-1"><?php echo $this->session->userdata("nombres")?></span>
						<i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
					</button>
					<div class="dropdown-menu dropdown-menu-end">
						<!-- item-->
						<a class="dropdown-item" href="<?= base_url('admins/Usuario/perfil');?>"><i class="ri-user-line align-middle me-1"></i> Perfil</a>
						<div class="dropdown-divider"></div>
						<a href="<?php echo base_url(); ?>admins/Login/logout" class="dropdown-item text-dark fw-6"><i class="ri-shut-down-line align-middle me-1"></i> Cerrar sesión</a>
					</div>
				</div>

				<div class="dropdown d-inline-block">
					<button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
						<i class="ri-settings-2-line"></i>
					</button>
				</div>
	
			</div>
		</div>
	</header>