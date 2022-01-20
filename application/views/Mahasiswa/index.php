<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Mahasiswa</h1>
                    <div class="col-md-6">
                        <a href="<?= base_url(); ?>Mahasiswa/tambah_mahasiswa" class="btn btn-primary">Tambah data</a>
                    </div>

                    <table class="table table-bordered table-striped" id="mytable">
                        <thead>
                            <tr>
                                <th width="80px">No</th>
                                <th>Nim</th>
                                <th>Nama</th>
                                <th>Jurusan</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($mahasiswa as $mhs) {
                            ?>
                                <tr>
                                    <td><?php echo ++$no ?></td>
                                    <td><?php echo $mhs['Nim'] ?></td>
                                    <td><?php echo $mhs['Nama_mhs'] ?></td>
                                    <td><?php echo $mhs['Jurusan'] ?></td>
                                    <td> <a href="<?= base_url(); ?>Mahasiswa/update_mhs/<?= $mhs['id_mahasiswa']; ?> " class="fas fa-edit badge badge-pill badge-success">edit</a>
                                        <a href="<?= base_url(); ?>menu/delete_mhs/<?= $mhs['id_mahasiswa']; ?> " class="fas fa-trash badge badge-pill badge-danger">delete</a>
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