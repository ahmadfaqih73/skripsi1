<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Us</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <?php echo form_open_multipart('Mahasiswa/input_mhs') ?>
            <form class="Mahasiswa" method="POST">

                <div class="form-group">
                    <label for="varchar">Nim Mahasiswa</label>
                    <input type="text" name="nim" class="form-control" placeholder="Nim Mahasiswa">
                </div>
                <div class="form-group">
                    <label for="varchar">Nama Mahasiswa</label>
                    <input type="text" name="mahasiswa" class="form-control" placeholder="Nama Mahasiswa">
                </div>
                <div class="form-group">
                    <label for="varchar">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" placeholder="Jurusan">
                </div>
                <button type="button" class="btn btn-warning float-left" onclick="window.history.back(-1)">Kembali</button>
                <button type="submit" class="btn btn-success float-right">Tambah data</button>

            </form>

            <?php echo form_close() ?>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

</div>
<!-- /.content-wrapper -->