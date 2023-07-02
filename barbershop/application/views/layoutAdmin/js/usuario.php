<script>
	$(document).ready( function () {
		$('#usuario-list').DataTable({
			paginate: true,
			order: [[0, 'desc']],
			pageLength: 5,
			dom: 'Bfrtip',
			buttons: [
					{
						extend: 'excel',
						title: 'Lista de usuarios',
						messageTop: $(".timehead").html(),
						exportOptions: {
							columns: [ 0, 1 ]
						}
					},
					{
						extend: 'pdf',
						title: 'Lista de usuarios',
						messageTop: $(".timehead").html(),
						exportOptions: {
							columns: [ 0, 1 ]
						}
					}
				]
		});
	});
</script>