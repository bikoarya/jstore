<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="<?= base_url('assets/vendors/base/vendor.bundle.base.js'); ?>"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="<?= base_url('assets/vendors/chart.js/Chart.min.js'); ?>"></script>
<!-- Data Tables -->
<script src="<?= base_url('assets/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/datatables/dataTables.bootstrap4.min.js'); ?>"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="<?= base_url('assets/js/off-canvas.js'); ?>"></script>
<script src="<?= base_url('assets/js/hoverable-collapse.js'); ?>"></script>
<script src="<?= base_url('assets/js/template.js'); ?>"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?= base_url('assets/js/dashboard.js'); ?>"></script>
<script src="<?= base_url('assets/js/data-table.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery.dataTables.js'); ?>"></script>
<script src="<?= base_url('assets/js/dataTables.bootstrap4.js'); ?>"></script>
<!-- End custom js for this page-->
<!-- JQuery Validate -->
<script src="<?= base_url('assets/jquery-validation/jquery.validate.min.js'); ?>"></script>
<!-- Select 2 -->
<script src="<?= base_url('assets/select2/js/select2.min.js') ?>"></script>
<!-- Toastr -->
<script src="<?= base_url('assets/toastr/toastr.min.js'); ?>"></script>
<!-- Sweet Alert 2 -->
<script src="<?= base_url('assets/sweetalert2/sweetalert2.all.min.js'); ?>"></script>
<!-- Date Picker -->
<script src="<?= base_url('assets/datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>
<!-- JQuery UI -->
<script src="<?= base_url('assets/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Main JS -->
<script src="<?= base_url('assets/js/custom.js'); ?>"></script>
<script src="<?= base_url('assets/js/script.js'); ?>"></script>

<script>
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
		  };var rupiah = document.getElementById('txtHarga');
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
</script>

</body>

</html>