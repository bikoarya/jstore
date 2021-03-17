<div class="row">
    <div class="col-md-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <h1 class="admin-header mb-5 mt-3">Role</h1>
                <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#addRole"><i class="mdi mdi-library-plus mr-1"></i> Tambah Role</button>
                <div class="table-responsive">
                    <table class="table table-hover" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody id="dataRole">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addRole" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="border: none;">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 0 none;">
                <h5 class="modal-title mt-3" id="exampleModalLabel">Tambah Role</h5>
                <button type="button" class="close mt-1 mr-2" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formRole">
                    <div class="form-group">
                        <label for="txtNamaRole">Nama Role</label>
                        <input type="text" class="form-control" name="txtNamaRole" id="txtNamaRole" placeholder="Nama Role" autocomplete="off">
                    </div>
            </div>
            <div class="modal-footer" style="border-top: 0 none;">
                <button type="button" class="btn btn-light mr-2" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" id="simpanRole">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editRole" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document" style="border: none;">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 0 none;">
                <h5 class="modal-title mt-3" id="exampleModalLabel">Edit Role</h5>
                <button type="button" class="close mt-1 mr-2" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formEditRole">
                    <input type="hidden" name="id_role" id="id_role">
                    <div class="form-group">
                        <label for="txtEditRole">Nama Role</label>
                        <input type="text" class="form-control" name="txtEditRole" id="txtEditRole" placeholder="Nama Role" autocomplete="off">
                    </div>
            </div>
            <div class="modal-footer" style="border-top: 0 none;">
                <button type="button" class="btn btn-light mr-2" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary" id="editRole">Edit</button>
            </div>
            </form>
        </div>
    </div>
</div>