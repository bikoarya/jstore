    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('Dashboard'); ?>">
                        <i class="mdi mdi-home menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-file-document-box menu-icon"></i>
                        <span class="menu-title">Master</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                        <ul class="nav flex-column sub-menu">
                            <input type="hidden" value="<?= $sess = $this->session->userdata('id_role'); ?>">
                            <?php if ($sess == 2) { ?>
                                <li class="nav-item"> <a class="nav-link" href="<?= site_url('Master/Admin') ?>">Admin</a></li>
                                <li class="nav-item"> <a class="nav-link" href="<?= site_url('Master/Role') ?>">Role</a></li>
                            <?php } ?>
                            <li class="nav-item"> <a class="nav-link" href="<?= site_url('Master/Barang') ?>">Barang</a></li>
                            <li class="nav-item"> <a class="nav-link" href="<?= site_url('Master/Kategori') ?>">Kategori</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('Master/Transaksi'); ?>">
                        <i class="mdi mdi-currency-usd menu-icon"></i>
                        <span class="menu-title">Transaksi</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->