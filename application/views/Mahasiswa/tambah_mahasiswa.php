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
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="gender" class="form-control select2" id="gender">
                        <option value="Perempuan" selected="selected">Perempuan</option>
                        <option value="Laki - laki" selected="selected">Laki - laki</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" id="alamat-edit" class="form-control"></textarea required="alamat Belum Di isi">
                  </div>
                    <div class="form-group">
                    <label>About</label>
                    <textarea name="about" id="alamat-edit" class="form-control"></textarea required="belum diisi">
                  </div>
               <div class=" form-group">
                    <label for="exampleEmail" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input name="tanggal" id="tanggal_lahir" placeholder="contoh 2021-05-23" type="date" class="form-control" value="<?= set_value('tanggal_keluar'); ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">pilih gambar</label>
                    <input class="form-control" type="file" id="gambar" name="image" multiple>
                </div>
                  <div class="form-group">
                    <label>Visi-misi</label>
                    <textarea name="visi" id="visi" class="form-control"></textarea required="belum diisi">
                  </div>
                  <div class="form-group">
                    <label for="varchar">No Hp</label>
                    <input type="text" name="nohp" class="form-control" placeholder="Jurusan">
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