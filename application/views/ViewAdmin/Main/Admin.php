<div class="row">
    <div class="col-md-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <h1 class="admin-header mb-5 mt-3">Admin</h1>
                <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#addAdmin"><i class="mdi mdi-library-plus mr-1"></i> Tambah Admin</button>
                <div class="table-responsive">
                    <table class="table table-hover" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="showAdmin">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addAdmin" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="border: none;">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 0 none;">
                <h5 class="modal-title mt-3" id="exampleModalLabel">Tambah Admin</h5>
                <button type="button" class="close mt-1 mr-2" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formAdmin">
                    <div class="form-group">
                        <label for="txtUsername">Username</label>
                        <input type="text" class="form-control" name="txtUsername" id="txtUsername" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="txtNamaLengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" name="txtNamaLengkap" id="txtNamaLengkap" placeholder="Nama Lengkap" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="txtPassword">Password</label>
                        <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="Password" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="txtConfirmPass">Konfirmasi Password</label>
                        <input type="password" class="form-control" name="txtConfirmPass" id="txtConfirmPass" placeholder="Konfirmasi Password" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control role" name="txtRole" id="txtRole" style="width: 100%;" autocomplete="off">
                            <option value=""></option>
                            <?php foreach ($role as $lev) : ?>
                                <option value="<?= $lev['id_role']; ?>"><?= $lev['nama_role']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
            </div>
            <div class="modal-footer" style="border-top: 0 none;">
                <button type="button" class="btn btn-light mr-2" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" id="simpanAdmin">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editAdmin" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="border: none;">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 0 none;">
                <h5 class="modal-title mt-3" id="exampleModalLabel">Edit Admin</h5>
                <button type="button" class="close mt-1 mr-2" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formEditAdmin">
                    <input type="hidden" name="id_admin" id="id_admin">
                    <div class="form-group">
                        <label for="txtUsername">Username</label>
                        <input type="text" class="form-control" name="txtEditUsername" id="txtEditUsername" placeholder="Username" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="txtNamaLengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" name="txtEditNamaLengkap" id="txtEditNamaLengkap" placeholder="Nama Lengkap" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="txtPassword">Password</label>
                        <input type="hidden" class="form-control" name="oldPassword" id="oldPassword" placeholder="Password" autocomplete="off">
                        <input type="password" class="form-control" name="newPassword" id="newPassword" placeholder="Password" autocomplete="off">
                        <p class="text-danger mt-1">* Kosongkan password jika tidak ingin mengubah.</p>
                    </div>
                    <div class="form-group">
                        <label for="txtConfirmPass">Konfirmasi Password</label>
                        <input type="password" class="form-control" name="txtEditConfirmPass" id="txtEditConfirmPass" placeholder="Konfirmasi Password" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="role">Role</label>
                        <select class="form-control role" name="txtEditRole" id="txtEditRole" style="width: 100%; font-size: 12px;" autocomplete="off">
                            <option value=""></option>
                            <?php foreach ($role as $lev) : ?>
                                <option value="<?= $lev['id_role']; ?>"><?= $lev['nama_role']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
            </div>
            <div class="modal-footer" style="border-top: 0 none;">
                <button type="button" class="btn btn-light mr-2" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" id="editAdmin">Edit</button>
            </div>
            </form>
        </div>
    </div>
</div>