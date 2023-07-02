<script>
	$(document).ready( function () {
		$('#reserva-list').DataTable({
			paginate: true,
			order: [[1, 'desc']],
			pageLength: 5,
			dom: 'Bfrtip',
			buttons: [
					{
						extend: 'excel',
						title: 'Lista de reservas',
						messageTop: $(".timehead").html(),
						exportOptions: {
							columns: [ 0, 1, 2, 3, 4, 5 ]
						}
					},
					{
						extend: 'pdf',
						title: 'Lista de reservas',
						messageTop: $(".timehead").html(),
						exportOptions: {
							columns: [ 0, 1, 2, 3, 4, 5 ]
						}
					}
				]
		});
	});
</script>