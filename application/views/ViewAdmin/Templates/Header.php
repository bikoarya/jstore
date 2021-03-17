<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title; ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('assets/vendors/mdi/css/materialdesignicons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/vendors/base/vendor.bundle.base.css') ?>">
    <!-- endinject -->
    <!-- Data Tables -->
    <link rel="stylesheet" href="<?= base_url('assets/datatables/dataTables.bootstrap4.css'); ?>">
    <!-- End plugin css for this page -->
    <!-- Select 2 -->
    <link rel="stylesheet" href="<?= base_url('assets/select2/css/select2.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/select2/css/select2-bootstrap4.min.css'); ?>">
    <!-- Toastr -->
    <link rel="stylesheet" href="<?= base_url('assets/toastr/toastr.min.css'); ?>">
    <!-- Sweet Alert 2 -->
    <link rel="stylesheet" href="<?= base_url('assets/sweetalert2/sweetalert2.min.css'); ?>">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?= base_url('assets/datepicker/dist/css/bootstrap-datepicker.min.css'); ?>">
    <!-- Font Awesome -->
    <link href="<?= base_url('assets/fontawesome/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/favicon.png') ?>" />

    <script defer type="text/javascript">
        var base_url = '<?= base_url() ?>';
        var site_url = '<?= site_url() ?>';
    </script>

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex justify-content-center">
                <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                    <a class="navbar-brand brand-logo mt-2" href="<?= site_url('Dashboard'); ?>">
                        <h3 class="logo-jstore">Jstore</h3>
                    </a>
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-sort-variant"></span>
                    </button>
                </div>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown mt-1">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <i class="mdi mdi-account-circle"></i>
                            <span class="nav-profile-name ml-0"><?= $this->session->userdata('nama_lengkap'); ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="mdi mdi-settings text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="<?= site_url('Login/Logout') ?>">
                                <i class="mdi mdi-logout text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>