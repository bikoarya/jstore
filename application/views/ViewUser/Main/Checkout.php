<section>
    <!--form-->
    <div class="container">
        <div class="row">
            <div class="tab-content">
                <div class="tab-pane fade active in" id="body">
                    <div class="col-sm-5">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center align-items-center">
                                    <!-- Modal -->
                                    <img src="<?= base_url('assets/images/results/' . $barang['gambar']) ?>" alt="" />
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <h2><?= $barang['nama_barang'] ?></h2>
                        <p>Rp. <?= $barang['harga'] ?></p>
                        <br>

                        <p class="text-danger" style="font-weight: bold;">Deskripsi :</p>
                        <p><?= $barang['deskripsi'] ?></p>
                        <p class="text-title" style="font-weight: bold;">Stok : <?= $barang['stok'] ?></p>

                        <p class="text-title" style="font-weight: bold;">Qty : <?= $qty ?></p>
                        <hr>
                        <?php $total = $qty * $barang['harga'] ?>
                        <p class="text-title" style="font-weight: bold;">Total : Rp. <?= $total ?></p>

                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="signup-form">
                    <!--sign up form-->
                    <h2 style="font-weight: bold;">Checkout</h2>
                    <form id="formCheckout">
                        <div class="form-group">
                            <input type="text" name="namaC" id="namaC" placeholder="Nama lengkap" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="text" name="telpC" id="telpC" placeholder="Nomor telepon (WA)" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="text" name="alamatC" id="alamatC" placeholder="Alamat" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="text" name="kecamatanC" id="kecamatanC" placeholder="Kecamatan" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="text" name="kotaC" id="kotaC" placeholder="Kota / kabupaten" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="text" name="provinsiC" id="provinsiC" placeholder="Provinsi" autocomplete="off">
                        </div>
                        <input type="hidden" value="<?= $barang['id_barang'] ?>" name="id_barangC" id="id_barangC">
                        <input type="hidden" value="<?= $qty ?>" name="qtyC" id="qtyC">
                        <button type="submit" class="btn btn-default" id="checkout">Kirim</button>
                    </form>
                </div>
                <!--/sign up form-->
            </div>
        </div>
    </div>
</section>
<!--/form-->