<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

	<div data-simplebar class="h-100">

		<!-- User details -->
		<div class="user-profile text-center mt-4">
			<div>
				<img src="<?php echo base_url(); ?>assets/cliente/img/usuario/<?php echo $this->session->userdata("imagen") ?>" class="avatar-lg rounded-circle" alt="">
			</div>
			<div class="mt-3">
				<h4 class="font-size-16 mb-1"><?php echo $this->session->userdata("nombres")?></h4>
				<span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
			</div>
		</div>

		<!--- Sidemenu -->
		<div id="sidebar-menu">
			<!-- Left Menu Start -->
			<ul class="metismenu list-unstyled" id="side-menu">
				<li>
					<a href="<?= base_url('admins/Dashboard');?>" class="waves-effect">
						<i class="fa-solid fa-gauge me-2"></i>
						<span>Dashboard</span>
					</a>
				</li>

				<li>
					<a href="<?= base_url('admins/Barber');?>" class="waves-effect">
						<i class="fa-solid fa-user-gear me-2"></i>
						<span>Barbero</span>
					</a>
				</li>

				<li>
					<a href="<?= base_url('admins/Cliente');?>" class="waves-effect">
						<i class="fa-solid fa-user-group me-2"></i>
						<span>Cliente</span>
					</a>
				</li>

				<li>
					<a href="<?= base_url('admins/Promocion');?>" class="waves-effect">
						<i class="fa-solid fa-gifts me-2"></i>
						<span>Promoción</span>
					</a>
				</li>

				<li>
					<a href="<?= base_url('admins/Servicio');?>" class="waves-effect">
						<i class="fa-solid fa-envelope-open-text me-2"></i>
						<span>Servicio</span>
					</a>
				</li>

				<li>
					<a href="<?= base_url('admins/Reserva');?>" class="waves-effect">
						<i class="fa-solid fa-clipboard-list me-2"></i>
						<span>Reserva</span>
					</a>
				</li>

				<li>
					<a href="<?= base_url('admins/Usuario');?>" class="waves-effect">
						<i class="fa-solid fa-users me-2"></i>
						<span>Usuarios</span>
					</a>
				</li>
			</ul>
		</div>
		<!-- Sidebar -->
	</div>
</div>
<!-- Left Sidebar End -->

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">