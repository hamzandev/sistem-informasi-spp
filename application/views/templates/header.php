<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SI-SPP | <?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <!-- Datatables -->
    <link rel="stylesheet" href="<?= base_url('assets/datatables/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/datatables/css/dataTables.min.css') ?>">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-credit-card"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SI-SPP <sup>jr</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= $title == 'Dashboard' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url() ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <?php if($this->session->userdata('user_level') === 'admin' || $this->session->userdata('user_level') === 'petugas') : ?>
                <!-- Heading -->
                <div class="sidebar-heading">
                    petugas
                </div>
                
                <!-- Nav Item - Transaksi Menu (Admin & Petugas) -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                        aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-dollar-sign"></i>
                        <span>Transaksi</span>
                    </a>
                    <div id="collapseUtilities" class="collapse <?= $menu == 'transaksi' ? 'show' : '' ?>" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Transaksi Pembayaran</h6>
                            <a class="collapse-item <?= $title == 'Tagihan Siswa' ? 'text-danger active' : '' ?>" href="<?= base_url('tagihan') ?>">Tagihan Siswa</a>
                            <a class="collapse-item <?= $title == 'Transaksi' ? 'active text-danger' : '' ?>" href="<?= base_url('transaksi') ?>">Entri Transaksi</a>
                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">
            <?php endif ?>
           
            <?php if($this->session->userdata('user_level') === 'admin') : ?>
                <!-- Heading -->
                <div class="sidebar-heading">
                    administrator
                </div>

                <!-- Nav Item - Master Data Menu (Admin) -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Master Data</span>
                    </a>
                    <div id="collapseTwo" class="collapse <?= $menu == 'master_data' ? 'show' : '' ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Kelola Master Data</h6>
                            <a class="collapse-item <?= $title == 'Siswa' ? 'text-danger active' : '' ?>" href="<?= base_url('siswa') ?>">Data Siswa</a>
                            <a class="collapse-item <?= $title == 'Kelas' ? 'text-danger active' : '' ?>" href="<?= base_url('kelas') ?>">Data Kelas</a>
                            <!-- <a class="collapse-item <?= $title == 'Tagihan Siswa' ? 'text-danger active' : '' ?>" href="<?= base_url('tagihan') ?>">Tagihan Siswa</a> -->
                            <a class="collapse-item <?= $title == 'Kategori Tagihan' ? 'text-danger active' : '' ?>" href="<?= base_url('tagihan') ?>">Kategori Tagihan</a>
                            <a class="collapse-item <?= $title == 'Tahun Ajaran' ? 'text-danger active' : '' ?>" href="<?= base_url('tahun_ajaran') ?>">Tahun Ajaran</a>
                            <h6 class="collapse-header">Kelola Petugas</h6>
                            <a class="collapse-item <?= $title == 'Petugas' ? 'text-danger active' : '' ?>" href="<?= base_url('petugas') ?>">Data Petugas</a>
                        </div>
                    </div>
                </li>

                
                <!-- Nav Item - Laporan Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
                        aria-controls="collapsePages">
                        <i class="fas fa-fw fa-print"></i>
                        <span>Laporan</span>
                    </a>
                    <div id="collapsePages" class="collapse <?= $menu == 'laporan' ? 'show' : '' ?>" aria-labelledby="headingPages"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Kelola Laporan</h6>
                            <a class="collapse-item <?= $title == 'Laporan' ? 'active text-danger' : '' ?>" href="<?= base_url('laporan') ?>">Generate Laporan</a>
                        </div>
                    </div>
                </li>


                <!-- Divider -->
                <hr class="sidebar-divider">
            <?php endif ?>

            <!-- Heading -->
            <div class="sidebar-heading">
                Fitur
            </div>


            <!-- Nav Item - Charts -->
            <li class="nav-item <?= $title == 'History' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('history') ?>">
                    <i class="fas fa-fw fa-clock"></i>
                    <span>History Pembayaran</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item <?= $title == 'Profil Sekolah' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= base_url('profil_sekolah') ?>">
                    <i class="fas fa-fw fa-school"></i>
                    <span>Profil Sekolah</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <?php if($this->session->userdata('nama_siswa')) : ?>
                        <h4 style="width: 300px; overflow: hidden;"><marquee behavior="scroll" direction="left"><i class="fas fa-laugh-wink"></i> Selamat datang, <?= $this->session->userdata('nama_siswa'); ?>!</marquee></h4>
                    <?php else : ?>
                        <h4 style="width: 300px; overflow: hidden;"><marquee behavior="scroll" direction="left"><i class="fas fa-laugh-wink"></i> Selamat datang, <?= $this->session->userdata('user_name'); ?>!</marquee></h4>
                    <?php endif ?>
                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Akun</span>
                                <i class="fas fa-user-circle fa-2x fa-fw"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <!-- <a class="dropdown-item" href="<?= base_url('user_profil') ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a> -->
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a onClick="return confirm('Anda perlu login kembali untuk mengakses dashboard. Yakin logout?')" class="dropdown-item" href="<?= base_url('dashboard/logout') ?>">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                               
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
