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
                    <form action="<?= site_url('User/Checkout/insert') ?>" method="POST">
                        <input type="text" placeholder="Nama" name="nama" autocomplete="off" required>
                        <input type="text" placeholder="Telp(WA)" name="telp" autocomplete="off" required>
                        <input type="text" placeholder="Alamat" name="alamat" autocomplete="off" required>
                        <input type="text" placeholder="Kecamatan" name="kecamatan" autocomplete="off" required>
                        <input type="text" placeholder="Kota" name="kota" autocomplete="off" required>
                        <input type="text" placeholder="Provinsi" name="provinsi" autocomplete="off" required>
                        <input type="hidden" value="<?= $barang['id_barang'] ?>" name="id_barang">
                        <input type="hidden" value="<?= $qty ?>" name="qty">
                        <button type="submit" class="btn btn-default">Kirim</button>
                    </form>
                </div>
                <!--/sign up form-->
            </div>
        </div>
    </div>
</section>
<!--/form-->