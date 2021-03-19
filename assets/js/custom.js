var rupiah = document.getElementById('txtHarga');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, 'Rp. ');
		});
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}

		var loadFile = function(event) {
			var reader = new FileReader();
			reader.onload = function(){
			  var output = document.getElementById('output');
			  output.src = reader.result;
			};
			reader.readAsDataURL(event.target.files[0]);
		  };

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
		placeholder: "Pilih Role",
		allowClear: true,
		theme: 'bootstrap4'
	});

});

$("#plus").click(function() {
	// let plus = $("#plus");
	let value = $("#value").val();

	value = value + 1;

});