<script>
	$(document).ready( function () {
		$('#servicio-list').DataTable({
			paginate: true,
			order: [[0, 'desc']],
			pageLength: 5,
			dom: 'Bfrtip',
			buttons: [
					{
						extend: 'excel',
						title: 'Lista de servicios',
						messageTop: $(".timehead").html(),
						exportOptions: {
							columns: [ 0, 1, 2]
						}
					},
					{
						extend: 'pdf',
						title: 'Lista de servicios',
						messageTop: $(".timehead").html(),
						exportOptions: {
							columns: [ 0, 1, 2]
						}
					}
				]
		});
	});
</script>