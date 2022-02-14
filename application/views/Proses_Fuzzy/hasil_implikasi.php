<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Nilai Implikasi</h1>

                    <table class="table table-bordered table-striped" id="mytable">
                        <thead>
                            <tr>
                                <th width="20px">No</th>
                                <th width="80px">nama</th>
                                <th width="20px">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($implikasi as $h) {
                            ?>
                                <tr>
                                    <td><?php echo ++$no ?></td>
                                    <td><?php echo $h['Nama_mhs'] ?></td>
                                    <td><a class="btn btn-info btn-sm" href="<?= base_url(); ?>Hasil/detail_implikasi/<?= $h['id_implikasi']; ?>">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Detail
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="<?= base_url(); ?>Hasil/delete_implikasi/<?= $h['id_implikasi']; ?>">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>

                                </tr>

                            <?php
                            }
                            ?>
                        </tbody>
                    </table>


                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

</div>
<!-- /.content-wrapper -->