// Set Timer Alert Login
window.setTimeout(function() {
	$("#alert").alert('close');
}, 1000);

// Tambah Admin
$("#showAdmin").load(site_url + "Master/Admin/showData");
$("#simpanAdmin").click(function () {
	$("#formAdmin").validate({
		rules: {
			txtUsername: {
				required: true
			},
            txtNamaLengkap: {
                required: true
            },
            txtPassword: {
                required: true,
                minlength: 4,
				maxlength: 16
            },
            txtConfirmPass: {
                required: true,
                equalTo: "#txtPassword"
            },
            txtRole: {
                required: true
            }
		},
		messages: {
			txtUsername: {
				required: "Masukkan username."
			},
            txtNamaLengkap: {
                required: "Masukkan nama lengkap."
            },
            txtPassword: {
                required: "Masukkan password.",
                minlength: "Masukkan minimal 4 karakter.",
                maxlength: "Masukkan maksimal 16 karakter."
            },
            txtConfirmPass: {
                required: "Masukkan konfirmasi password.",
                equalTo: "Password tidak sama."
            },
            txtRole: {
                required: "Masukkan pilihan role."
            }
		},
		errorElement: "span",
		errorPlacement: function (error, element) {
			error.addClass("invalid-feedback");
			element.closest(".form-group").append(error);
		},
		unhighlight: function (element, errorClass, validClass) {
			$(element).removeClass("is-invalid");
		},
		submitHandler: function (form) {
			let username = $("#txtUsername").val();
			let namaLengkap = $("#txtNamaLengkap").val();
			let password = $("#txtPassword").val();
			let role = $("#txtRole").val();

			$.ajax({
				url: site_url + "Master/Admin/insert",
				type: "POST",
				data: {
					username: username,
                    namaLengkap: namaLengkap,
                    password: password,
                    role: role
				},
				success: function (data) {
					$("#txtUsername").val("");
					$("#txtNamaLengkap").val("");
					$("#txtPassword").val("");
					$("#txtConfirmPass").val("");
					$("#txtRole").val("");
					$("#showAdmin").html(data);
					$("#addAdmin").modal("hide");

					Swal.fire(
						'Berhasil!',
						'Data berhasil ditambahkan.',
						'success'
					)
				}
			});
		}
	});
});

// Kirim Value Edit Admin
$(document).on('click', '.editAdmin', function () {
	var id_admin = $(this).attr('data-id_admin');
	var username = $(this).attr('data-username');
	var namaLengkap = $(this).attr('data-nama_lengkap');
	var password = $(this).attr('data-password');
	var role = $(this).attr('data-role');

	$("#id_admin").val(id_admin);
	$("#txtEditUsername").val(username);
	$("#txtEditNamaLengkap").val(namaLengkap);
	$("#oldPassword").val(password);
	$("#txtEditRole")
		.val(role)
		.trigger("change");
});

// Update Admin
$("#editAdmin").click(function () {
	$("#formEditAdmin").validate({
		rules: {
			txtEditUsername: {
				required: true
			},
			txtEditNamaLengkap: {
				required: true
			},
			txtEditConfirmPass: {
				equalTo: "#newPassword"
			},
			txtEditRole: {
				required: true
			}
		},
		messages: {
			txtEditUsername: {
				required: "Masukkan username."
			},
			txtEditNamaLengkap: {
				required: "Masukkan nama lengkap."
			},
			txtEditConfirmPass: {
				equalTo: "Password tidak sama."
			},
			txtEditRole: {
				required: "Masukkan pilihan role."
			}
		},
		errorElement: "span",
		errorPlacement: function (error, element) {
			error.addClass("invalid-feedback");
			element.closest(".form-group").append(error);
		},
		unhighlight: function (element, errorClass, validClass) {
			$(element).removeClass("is-invalid");
		},
		submitHandler: function (form) {
			let id_admin = $("#id_admin").val();
			let username = $("#txtEditUsername").val();
			let namaLengkap = $("#txtEditNamaLengkap").val();
			let newPassword = $("#newPassword").val();
			let oldPassword = $("#oldPassword").val();
			let role = $("#txtEditRole").val();

			const swalWithBootstrapButtons = Swal.mixin({
				customClass: {
					confirmButton: 'btn btn-primary',
					cancelButton: 'btn btn-light mr-3'
				},
				buttonsStyling: false
			})

			swalWithBootstrapButtons.fire({
				title: 'Apakah Anda Yakin?',
				text: "Mengubah Data",
				icon: 'question',
				showCancelButton: true,
				confirmButtonText: 'Ya, Ubah',
				cancelButtonText: 'Batal',
				reverseButtons: true
			}).then((result) => {
				if (result.value) {

					$.ajax({
						type: "POST",
						url: site_url + "Master/Admin/update",
						data: {
							id_admin: id_admin,
							username: username,
							namaLengkap: namaLengkap,
							newPassword: newPassword,
							oldPassword: oldPassword,
							role: role
						},
						success: function (data) {
							$("#txtEditUsername").val("");
							$("#txtEditNamaLengkap").val("");
							$("#newPassword").val("");
							$("#oldPassword").val("");
							$("#txtEditRole")
								.val("")
								.trigger("change");
							$("#showAdmin").load(site_url + "Master/Admin/showData");
							$("#editAdmin").modal("hide");

							Swal.fire(
								'Berhasil!',
								'Data berhasil diubah.',
								'success'
							)
						}
					});
				}
			});
		}
	});
});

// Hapus Admin
$("#showAdmin").on('click', '.hapusAdmin', function () {
	var id_admin = $(this).data("id_admin");
	const swalWithBootstrapButtons = Swal.mixin({
		customClass: {
			confirmButton: 'btn btn-primary',
			cancelButton: 'btn btn-light mr-3'
		},
		buttonsStyling: false
	})

	swalWithBootstrapButtons.fire({
		title: 'Apakah Anda Yakin?',
		text: "Menghapus Data",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Ya, Hapus',
		cancelButtonText: 'Batal',
		reverseButtons: true
	}).then((result) => {
		if (result.value) {

			$.ajax({
				type: "POST",
				url: site_url + "Master/Admin/delete",
				data: {
					id_admin: id_admin
				},
				success: function (data) {
					$("#showAdmin").load(site_url + "Master/Admin/showData");

					Swal.fire(
						'Berhasil!',
						'Data berhasil dihapus.',
						'success'
					)
				}
			});
		}
	});
});

// Tambah Role
$("#dataRole").load(site_url + "Master/Role/showData");
$("#simpanRole").click(function () {
	$("#formRole").validate({
		rules: {
			txtNamaRole: {
				required: true
			}
		},
		messages: {
			txtNamaRole: {
				required: "Masukkan nama role."
			}
		},
		errorElement: "span",
		errorPlacement: function (error, element) {
			error.addClass("invalid-feedback");
			element.closest(".form-group").append(error);
		},
		unhighlight: function (element, errorClass, validClass) {
			$(element).removeClass("is-invalid");
		},
		submitHandler: function (form) {
			let namaRole = $("#txtNamaRole").val();
			$.ajax({
				url: site_url + "Master/Role/insert",
				type: "POST",
				data: {
					namaRole: namaRole
				},
				success: function (data) {
					$("#txtNamaRole").val("");
					$("#dataRole").html(data);
					$("#addRole").modal("hide");

					Swal.fire(
						'Berhasil!',
						'Data berhasil ditambahkan.',
						'success'
					)
				}
			});
		}
	});
});

// Kirim Value Edit Role
$(document).on('click', '.editRole', function () {
	var id_role = $(this).attr('data-id_role');
	var role = $(this).attr('data-nama_role');

	$("#id_role").val(id_role);
	$("#txtEditRole").val(role);
});

// Update Role
$("#editRole").click(function () {
	$("#formEditRole").validate({
		rules: {
			txtEditRole: {
				required: true
			}
		},
		messages: {
			txtEditRole: {
				required: "Masukkan nama role."
			}
		},
		errorElement: "span",
		errorPlacement: function (error, element) {
			error.addClass("invalid-feedback");
			element.closest(".form-group").append(error);
		},
		unhighlight: function (element, errorClass, validClass) {
			$(element).removeClass("is-invalid");
		},
		submitHandler: function (form) {
			let id_role = $("#id_role").val();
			let role = $("#txtEditRole").val();

			const swalWithBootstrapButtons = Swal.mixin({
				customClass: {
					confirmButton: 'btn btn-primary',
					cancelButton: 'btn btn-light mr-3'
				},
				buttonsStyling: false
			})

			swalWithBootstrapButtons.fire({
				title: 'Apakah Anda Yakin?',
				text: "Mengubah Data",
				icon: 'question',
				showCancelButton: true,
				confirmButtonText: 'Ya, Ubah',
				cancelButtonText: 'Batal',
				reverseButtons: true
			}).then((result) => {
				if (result.value) {

					$.ajax({
						type: "POST",
						url: site_url + "Master/Role/update",
						data: {
							id_role: id_role,
							role: role
						},
						success: function (data) {
							$("#txtEditRole").val("");
							$("#dataRole").load(site_url + "Master/Role/showData");
							$("#editRole").modal("hide");

							Swal.fire(
								'Berhasil!',
								'Data berhasil diubah.',
								'success'
							)
						}
					});
				}
			});
		}
	});
});

// Hapus Admin
$("#dataRole").on('click', '.hapusRole', function () {
	var id_role = $(this).data("id_role");
	const swalWithBootstrapButtons = Swal.mixin({
		customClass: {
			confirmButton: 'btn btn-primary',
			cancelButton: 'btn btn-light mr-3'
		},
		buttonsStyling: false
	})

	swalWithBootstrapButtons.fire({
		title: 'Apakah Anda Yakin?',
		text: "Menghapus Data",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Ya, Hapus',
		cancelButtonText: 'Batal',
		reverseButtons: true
	}).then((result) => {
		if (result.value) {

			$.ajax({
				type: "POST",
				url: site_url + "Master/Role/delete",
				data: {
					id_role: id_role
				},
				success: function (data) {
					$("#dataRole").load(site_url + "Master/Role/showData");

					Swal.fire(
						'Berhasil!',
						'Data berhasil dihapus.',
						'success'
					)
				}
			});
		}
	});
});

// Tambah Kategori
$("#dataKategori").load(site_url + "Master/Kategori/showData");
$("#simpanKategori").click(function () {
	$("#formKategori").validate({
		rules: {
			txtNamaKategori: {
				required: true
			}
		},
		messages: {
			txtNamaKategori: {
				required: "Masukkan nama kategori."
			}
		},
		errorElement: "span",
		errorPlacement: function (error, element) {
			error.addClass("invalid-feedback");
			element.closest(".form-group").append(error);
		},
		unhighlight: function (element, errorClass, validClass) {
			$(element).removeClass("is-invalid");
		},
		submitHandler: function (form) {
			let kategori = $("#txtNamaKategori").val();
			$.ajax({
				url: site_url + "Master/Kategori/insert",
				type: "POST",
				data: {
					kategori: kategori
				},
				success: function (data) {
					$("#txtNamaKategori").val("");
					$("#dataKategori").html(data);
					$("#addKategori").modal("hide");

					Swal.fire(
						'Berhasil!',
						'Data berhasil ditambahkan.',
						'success'
					)
				}
			});
		}
	});
});

// Kirim Value Edit Kategori
$(document).on('click', '.editKategori', function () {
	var id_kategori = $(this).attr('data-id_kategori');
	var kategori = $(this).attr('data-nama_kategori');

	$("#id_kategori").val(id_kategori);
	$("#txtEditKategori").val(kategori);
});

// Update Kategori
$("#editKategori").click(function () {
	$("#formEditKategori").validate({
		rules: {
			txtEditKategori: {
				required: true
			}
		},
		messages: {
			txtEditKategori: {
				required: "Masukkan nama kategori."
			}
		},
		errorElement: "span",
		errorPlacement: function (error, element) {
			error.addClass("invalid-feedback");
			element.closest(".form-group").append(error);
		},
		unhighlight: function (element, errorClass, validClass) {
			$(element).removeClass("is-invalid");
		},
		submitHandler: function (form) {
			let id_kategori = $("#id_kategori").val();
			let kategori = $("#txtEditKategori").val();

			const swalWithBootstrapButtons = Swal.mixin({
				customClass: {
					confirmButton: 'btn btn-primary',
					cancelButton: 'btn btn-light mr-3'
				},
				buttonsStyling: false
			})

			swalWithBootstrapButtons.fire({
				title: 'Apakah Anda Yakin?',
				text: "Mengubah Data",
				icon: 'question',
				showCancelButton: true,
				confirmButtonText: 'Ya, Ubah',
				cancelButtonText: 'Batal',
				reverseButtons: true
			}).then((result) => {
				if (result.value) {

					$.ajax({
						type: "POST",
						url: site_url + "Master/Kategori/update",
						data: {
							id_kategori: id_kategori,
							kategori: kategori
						},
						success: function (data) {
							$("#txtEditKategori").val("");
							$("#dataKategori").load(site_url + "Master/Kategori/showData");
							$("#editKategori").modal("hide");

							Swal.fire(
								'Berhasil!',
								'Data berhasil diubah.',
								'success'
							)
						}
					});
				}
			});
		}
	});
});

// Hapus Kategori
$("#dataKategori").on('click', '.hapusKategori', function () {
	var id = $(this).data("id_kategori");
	const swalWithBootstrapButtons = Swal.mixin({
		customClass: {
			confirmButton: 'btn btn-primary',
			cancelButton: 'btn btn-light mr-3'
		},
		buttonsStyling: false
	})

	swalWithBootstrapButtons.fire({
		title: 'Apakah Anda Yakin?',
		text: "Menghapus Data",
		icon: 'warning',
		showCancelButton: true,
		confirmButtonText: 'Ya, Hapus',
		cancelButtonText: 'Batal',
		reverseButtons: true
	}).then((result) => {
		if (result.value) {

			$.ajax({
				type: "POST",
				url: site_url + "Master/Kategori/delete",
				data: {
					id: id
				},
				success: function (data) {
					$("#dataKategori").load(site_url + "Master/Kategori/showData");

					Swal.fire(
						'Berhasil!',
						'Data berhasil dihapus.',
						'success'
					)
				}
			});
		}
	});
});

// Tambah Barang
$("#dataBarang").load(site_url + "Master/Barang/showData");
$("#simpanBarang").click(function () {
	$("#formBarang").validate({
		rules: {
			txtNamaBarang: {
				required: true
			},
			txtDeskripsi: {
				required: true
			},
			txtKategori: {
				required: true
			},
			txtHarga: {
				required: true
			},
			txtStok: {
				required: true
			},
			gambar: {
				required: true
			}
		},
		messages: {
			txtNamaBarang: {
				required: "Masukkan nama barang."
			},
			txtDeskripsi: {
				required: "Masukkan deskripsi."
			},
			txtKategori: {
				required: "Pilih kategori."
			},
			txtHarga: {
				required: "Masukkan harga."
			},
			txtStok: {
				required: "Masukkan stok."
			},
			gambar: {
				required: "Masukkan gambar."
			}
		},
		errorElement: "span",
		errorPlacement: function (error, element) {
			error.addClass("invalid-feedback");
			element.closest(".form-group").append(error);
		},
		unhighlight: function (element, errorClass, validClass) {
			$(element).removeClass("is-invalid");
		}
	});
});

// Kirim Value Edit Barang
$(document).on('click', '.editBarang', function () {
	var id_barang = $(this).attr('data-id_barang');
	var barang = $(this).attr('data-nama_barang');
	var deskripsi = $(this).attr('data-deskripsi');
	var kategori = $(this).attr('data-kategori');
	var harga = $(this).attr('data-harga');
	var stok = $(this).attr('data-stok');
	var gambar = $(this).attr('data-gambar');

	$("#id_barang").val(id_barang);
	$("#txtEditBarang").val(barang);
	$("#txtEditDeskripsi").val(deskripsi);
	$("#txtEditHarga").val(harga);
	$("#txtEditStok").val(stok);
	$("#txtEditKategori")
	.val(kategori)
	.trigger("change");
	$("#editGambar").val(gambar);
});

$("#dataTransaksi").load(site_url + "Master/Transaksi/showData");