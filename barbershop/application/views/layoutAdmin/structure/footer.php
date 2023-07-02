		<footer class="footer">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6">
						Creado por el team Barbershop D&D
					</div>
					<div class="col-sm-6">
						<div class="text-sm-end d-none d-sm-block">
							<script>document.write(new Date().getFullYear())</script> © Upcube.
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<div class="right-bar">
	<div data-simplebar class="h-100">
		<div class="rightbar-title d-flex align-items-center px-3 py-4">
	
			<h5 class="m-0 me-2">Settings</h5>

			<a href="javascript:void(0);" class="right-bar-toggle ms-auto">
				<i class="mdi mdi-close noti-icon"></i>
			</a>
		</div>

		<!-- Settings -->
		<hr class="mt-0" />
		<h6 class="text-center mb-0">Choose Layouts</h6>

		<div class="p-4">
			<div class="mb-2">
				<img src="<?= base_url('assets/administrador/images/layouts/layout-1.jpg');?>" class="img-fluid img-thumbnail" alt="layout-1">
			</div>

			<div class="form-check form-switch mb-3">
				<input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
				<label class="form-check-label" for="light-mode-switch">Light Mode</label>
			</div>

			<div class="mb-2">
				<img src="<?= base_url('assets/administrador/images/layouts/layout-2.jpg');?>" class="img-fluid img-thumbnail" alt="layout-2">
			</div>
			<div class="form-check form-switch mb-3">
				<input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="<?= base_url('assets/css/bootstrap-dark.min.css');?>" data-appStyle="<?= base_url('assets/css/app-dark.min.css');?>">
				<label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
			</div>
		</div>

	</div> 
	<!-- end slimscroll-menu-->
</div>
<!-- Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JavaScript -->
<script src="<?= base_url('assets/administrador/libs/jquery/jquery.min.js');?>"></script>
<script src="<?= base_url('assets/administrador/libs/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<script src="<?= base_url('assets/administrador/libs/metismenu/metisMenu.min.js');?>"></script>
<script src="<?= base_url('assets/administrador/libs/simplebar/simplebar.min.js');?>"></script>
<script src="<?= base_url('assets/administrador/libs/node-waves/waves.min.js');?>"></script>
<!-- Sweet Alerts js -->
<script src="<?= base_url('assets/administrador/libs/sweetalert2/sweetalert2.min.js');?>"></script>
<script src="<?= base_url('assets/administrador/js/app.js');?>"></script>
<script src="<?= base_url('assets/administrador/js/vue.global.js');?>"></script>
<script src="<?= base_url('assets/administrador/js/axios.min.js');?>"></script>

<script src="<?= base_url('assets/administrador/libs/parsleyjs/parsley.min.js');?>"></script>
<script src="<?= base_url('assets/administrador/libs/parsleyjs/i18n/es.js');?>"></script>
<script src="<?= base_url('assets/administrador/js/pages/form-validation.init.js');?>"></script>

<script src="<?= base_url('assets/administrador/libs/datatables/jquery.dataTables.js');?>"></script>
<script src="<?= base_url('assets/administrador/libs/datatables/dataTables.buttons.js');?>"></script>
<script src="<?= base_url('assets/administrador/libs/datatables/jszip.js');?>"></script>
<script src="<?= base_url('assets/administrador/libs/datatables/pdfmake.js');?>"></script>
<script src="<?= base_url('assets/administrador/libs/datatables/vfs_fonts.js');?>"></script>
<script src="<?= base_url('assets/administrador/libs/datatables/buttons.html5.js');?>"></script>
</body>

</html>