$(document).ready(function() {

    // Data Tables
    $('#tabelAdmin').DataTable({
        "lengthChange": true,
		"searching": true,
		"ordering": false,
		"info": true,
		"autoWidth": true
    });

    // Select 2
	$('.role').select2({
		placeholder: "Pilih Role",
		allowClear: true,
		theme: 'bootstrap4'
	});
	$('.kategori').select2({
		placeholder: "Pilih Kategori",
		allowClear: true,
		theme: 'bootstrap4'
	});
	$('.editKategori').select2({
		placeholder: "Pilih Kategori",
		allowClear: true,
		theme: 'bootstrap4'
	});

});