<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= ucfirst($this->uri->segment(1)) . ' | ' . ucfirst($this->uri->segment(2, 'Admin')); ?>
    </title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-red navbar-yellow">
        <!-- Left Navbar Links -->
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a href="#" class="nav-link" data-widget="pushmenu"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </nav>
    <!-- Navbar End -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-dark elevation-4 ">
        <!-- Brand Logo -->
        <a href="<?= site_url('home'); ?>" class="brand-link navbar-yellow">
            <img src="<?= base_url('assets/'); ?>dist/img/jj.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8;">
            <span class="brand-text font-weight-light text-light">Warehouse Counter</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar User Panel (Optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?= base_url('assets/') ?>dist/img/ko.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Admin Warehouse</a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
                    <li class="nav-item navbar-yellow">
                        <a href="<?= site_url('home'); ?>" class="nav-link <?= $this->uri->segment(1) == 'home' ? 'active' : ''; ?>">
                            <i class="nav-icon fas fa-warehouse"></i>
                            <p>Warehouse Gadget</p>
                        </a>
                    </li>
                    <li class="nav-item navbar-black">
                        <a href="<?= site_url('goods'); ?>" class="nav-link <?= $this->uri->segment(1) == 'goods' ? 'active' : ''; ?>">
                            <i class="nav-icon fas fa-boxes"></i>
                            <p>Goods</p>
                        </a>
                    </li>
                    <li class="nav-item navbar-yellow">
                        <a href="<?= site_url('homea'); ?>" class="nav-link <?= $this->uri->segment(1) == 'home1' ? 'active' : ''; ?>">
                            <i class="nav-icon fas fa-warehouse"></i>
                            <p>Warehouse Accessories</p>
                        </a>
                    </li>
                    <li class="nav-item navbar-black">
                        <a href="<?= site_url('accessories'); ?>" class="nav-link <?= $this->uri->segment(1) == 'accessories' ? 'active' : ''; ?>">
                            <i class="nav-icon fas fa-box"></i>
                            <p>Accessories</p>
                        </a>
                    </li>

                    <li class="nav-item navbar-yellow">
                        <a href="<?= site_url(); ?>" class="nav-link">
                            <i class="nav-icon fas fa-sign-out-alt"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- Sidebar Menu End -->
        </div>
        <!-- Sidebar End -->
    </aside>
    <!-- Main Sidebar Container End -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">
                            <?= ucfirst($this->uri->segment(1)); ?>
                        </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcumb float-sm-right">
                            <?php
                                // Mengulang sebanyak segment yang ada di url
                                foreach($this->uri->segments as $segment) : ?>
                                    <?php
                                        // Mendapatkan url dengan cara memecah string url sesuai dengan panjang segment yang berkaitan
                                        $url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
                                        // Mengecek apakah url dengan string url sama atau tidak, jika sama maka segment tersebut adalah halaman yang dibuka
                                        $is_active = $this->uri->uri_string == $url;
                                    ?>
                                <li class="breadcumb-item <?php $is_active ? 'active' : '' ?>" style="list-style-type: none;">
                                    <?php if($is_active) : ?>
                                        <!-- Jika is_active == true maka nilai dari variabel segment akan dicetak -->
                                        <?= ucfirst($segment); ?>
                                    <?php else : ?>
                                        <!-- Jika tidak, maka nilai segment akan dicetak beserta link yang sudah didapatkan -->
                                        <a href="<?= site_url($url); ?>"><?= ucfirst($segment); ?></a>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->