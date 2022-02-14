<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row  mb-2">
                <div class="col-md-12">
                    <h1 class="m-0">Daftar</h1>
                    <div class="col-md-6">
                        <a href="<?= base_url(); ?>Mahasiswa/tambah_mahasiswa" class="btn btn-primary">Tambah data</a>
                    </div>
                    <section class="content">

                        <!-- Default box -->
                        <div class="card card-solid">
                            <div class="card-body pb-0">
                                <div class="row">
                                    <?php
                                    $no = 0;
                                    foreach ($mahasiswa as $mhs) {
                                    ?>
                                        <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                                            <div class="card bg-light d-flex flex-fill">
                                                <div class="card-header text-muted border-bottom-0">
                                                    mahasiswa
                                                </div>
                                                <div class="card-body pt-0">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <h2 class="lead"><b><?php echo $mhs['Nama_mhs'] ?></b></h2>
                                                            <p class="text-muted text-sm"><b>About: </b><?php echo  $mhs['about'] ?> </p>
                                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span><b> Address:</b>.</b><br><?php echo  $mhs['Alamat'] ?></li>
                                                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #:<br> + 800 - 12 12 23 52</li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-5 text-left">
                                                            <img class="img" src="<?= base_url('uploads/foto_mhs/') . $mhs['foto'] ?>" alt="user-avatar" class="img-rounded img-fluid">
                                                        </div>
                                                        <style type="text/css">
                                                            .img {
    float: left;
    width:  100px;
    height: 100px;
    object-fit: cover;
}
                                                        </style>

                                                    </div>
                                                </div>
                                                <div class="card-header">
                                                                                       
                                                        <a href="<?= base_url('mahasiswa/detail_mhs/' . $mhs['id_mahasiswa']) ?>" class="btn btn-sm btn-primary">
                                                            <i class="fas fa-user"></i> View Profile
                                                        </a>
                                               
                                    
                                                     
                                                        <a href="<?= base_url('mahasiswa/delete_mhs/' . $mhs['id_mahasiswa']) ?>" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash"></i> delete
                                                        </a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <nav aria-label="Contacts Page Navigation">
                                    <ul class="pagination justify-content-center m-0">
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->

                    </section>
                    <!-- /.content -->

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

</div>
<!-- /.content-wrapper -->