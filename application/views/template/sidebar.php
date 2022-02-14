<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="<?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SPK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->


        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-close">
                    <a href="<?= base_url('View_user/index'); ?>" class="nav-link active">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            User
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <a href="<?= base_url('Mahasiswa/view_mhs'); ?>" class="nav-link active">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                            Mahasiswa
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Rule
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('Data_variable/index') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Variable</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('Rules/index') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Himpunan Fuzzy</p>
                            </a>
                        </li>
                    </ul>

                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Proses Fuzzy
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('Fuzzyfikasi/index') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Input Nilai</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('Hasil/lihat_fuzyfikasi') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>hasil fuzzyfikasi</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('Hasil/lihat_implikasi') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>hasil implikasi</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url('Hasil/index') ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Hasil</p>
                            </a>
                        </li>
                    </ul>

                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>