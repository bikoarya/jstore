<div class="row">
    <div class="col-md-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <h1 class="admin-header mb-5 mt-3">Barang</h1>
                <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#addBarang"><i class="mdi mdi-library-plus mr-1"></i> Tambah Barang</button>
                <div class="table-responsive">
                    <table class="table table-hover" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="dataBarang">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addBarang" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="border: none;">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 0 none;">
                <h5 class="modal-title mt-3" id="exampleModalLabel">Tambah Barang</h5>
                <button type="button" class="close mt-1 mr-2" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formBarang">
                    <div class="form-group">
                        <label for="txtNamaBarang">Nama Barang</label>
                        <input type="text" class="form-control" name="txtNamaBarang" id="txtNamaBarang" placeholder="Nama Barang" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="txtDeskripsi">Deskripsi</label>
                        <textarea class="form-control" name="txtDeskripsi" id="txtDeskripsi" autocomplete="off"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control kategori" name="txtKategori" id="txtKategori" style="width: 100%;" autocomplete="off">
                            <option value=""></option>
                            <?php foreach ($kategori as $ctg) : ?>
                                <option value="<?= $ctg['id_kategori']; ?>"><?= $ctg['nama_kategori']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="txtHarga">Harga</label>
                        <input type="text" class="form-control" name="txtHarga" id="txtHarga" placeholder="Harga" autocomplete="off">
                    </div>
                    <label for="gambar">Gambar</label>
                    <div class="input-group mb-3 w-50">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="gambar" id="gambar" aria-describedby="inputGroupFileAddon01" accept="image/*" onchange="loadFile(event)">
                            <label class="custom-file-label" for="gambar">Choose file</label>
                        </div>
                    </div>
                    <img id="output" width="100px" style="margin-left: 300px; margin-top: -90px">
            </div>
            <div class="modal-footer" style="border-top: 0 none;">
                <button type="button" class="btn btn-light mr-2" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" id="simpanBarang">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>