<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- Widget: user widget style 1 -->
                    <div class="card card-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                       
                    </div>
                    <div class="row nilai3">
                        <div class="col-md-12">
                            <div class="card card-outline card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Defuzykasi</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                    <!-- /.card-tools -->
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Kategori</th>
                                                        <th>Nilai</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tidak Cocok</td>
                                                        <td><?php echo $hasil['nilai_tidakcocok'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status Tidak Cocok</td>
                                                        <td><?php echo $hasil['status_1'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai Cocok</td>
                                                        <td><?php echo $hasil['nilai_cocok'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status Cocok</td>
                                                        <td><?php echo $hasil['status_2'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nilai Sangat Cocok</td>
                                                        <td><?php echo $hasil['nilai_sangatcocok'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status Sangat Cocok</td>
                                                        <td><?php echo $hasil['status_3'] ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>


                    <!-- /.widget-user -->
                </div>
                <!-- /.col -->
            </div>
            <!-- row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

</div>
<!-- /.content-wrapper-->
