
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row ">


                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="<?= base_url('uploads/foto_mhs/') . $mahasiswa['foto'] ?>" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?php echo $mahasiswa['Nama_mhs'] ?></h3>

                            <p class="text-muted text-center"><?php echo $mahasiswa['Jurusan'] ?></p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Biodata</a></li>
                                <!-- <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li> -->
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="activity">
                                    <!-- Post -->
                                    <div class="post">
                                        <div class="card" style="width: 18rem;">

                                        </div>

                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Nim</h3>
                                            </div>
                                            <b></b>
                                            <p><strong>
                                                    <?php echo $mahasiswa['Nim'] ?>
                                                </strong>
                                            </p>
                                        </div>
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Nama</h3>
                                            </div>

                                            <b></b>
                                            <p><strong>
                                                    <?php echo $mahasiswa['Nama_mhs'] ?>
                                                </strong>
                                            </p>
                                        </div>
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Jurusan</h3>
                                            </div>

                                            <b></b>
                                            <p><strong>
                                                    <?php echo $mahasiswa['Jurusan'] ?>
                                                </strong>
                                            </p>



                                        </div>



                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Tanggal lahir</h3>
                                            </div>

                                            <b></b>
                                            <p><strong>
                                                    <?php echo $mahasiswa['TTL'] ?>
                                                </strong>
                                            </p>

                                        </div>
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Jenis Kelamin</h3>
                                            </div>
                                            <b></b>
                                            <p>
                                                <strong>
                                                    <?php echo $mahasiswa['Jenis_Kelamin'] ?>
                                                </strong>

                                            </p>
                                        </div>
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Alamat</h3>
                                            </div>
                                            <b></b>
                                            <p><strong>
                                                    <?php echo $mahasiswa['Alamat'] ?>
                                                </strong>
                                            </p>
                                        </div>
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">Visi_misi</h3>
                                            </div>
                                            <b></b>
                                            <textarea>
                                                    <?php echo $mahasiswa['Visi_misi'] ?>
                                                

                                            </textarea>
                                        </div>
                                        <div class="card card-primary">
                                            <div class="card-header">
                                                <h3 class="card-title">About Me</h3>
                                            </div>
                                            <b></b>
                                            <p><strong>
                                                    <?php echo $mahasiswa['about'] ?>
                                                </strong>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- /.post -->

                                </div>
                              

                                <div class="tab-pane" id="settings">
                                    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url() ?>Mahasiswa/update_mhs">
                                        <input type="hidden" id="id" name="id" value="<?= $mahasiswa['id_mahasiswa']; ?>">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label for="varchar">Nim Mahasiswa</label>
                                                <input type="text" name="nim" class="form-control" placeholder="Nim Mahasiswa" value="<?php echo $mahasiswa['Nim'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="varchar">Nama Mahasiswa</label>
                                                <input type="text" name="mahasiswa" class="form-control" placeholder="Nama Mahasiswa" value="<?php echo $mahasiswa['Nama_mhs'] ?>">
                                            </div>
                                            <div class=" form-group">
                                                <label for="varchar">Jurusan</label>
                                                <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" value="<?php echo $mahasiswa['Jurusan'] ?>">
                                            </div>
                                            <div class=" form-group">
                                                <label>Jenis Kelamin</label>
                                                <select name="gender" class="form-control select2" id="gender">
                                                    <?php if ($mahasiswa['Jenis_Kelamin'] == 'Perempuan') { ?>
                                                        <option value="Perempuan2">Perempuan</option>
                                                        <option value="Laki - laki">Laki - laki</option>
                                                    <?php } else if ($mahasiswa['Jenis_Kelamin'] == 'Laki - laki') { ?>
                                                        <option value="Laki - laki">Laki - laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <textarea name="alamat" id="alamat-edit" class="form-control"><?php echo $mahasiswa['Alamat'] ?></textarea required="alamat Belum Di isi" value="">
                                            </div>
                                             <div class="form-group">
                                                <label>About</label>
                                                <textarea name="about" id="alamat-edit" class="form-control"><?php echo $mahasiswa['about'] ?></textarea required="belum diisi">
                                            </div>
                                                <div class=" form-group">
                                                <label for="exampleEmail" class="col-sm-2 col-form-label">Tanggal</label>
                                                <div class="col-sm-10">
                                                 <input name="tanggal" id="tanggal_lahir" placeholder="contoh 2021-05-23" type="date" class="form-control" value="<?php echo $mahasiswa['TTL'] ?>">
                                            </div>
                                                 </div>
                                            <div class="mb-3">
                                                 <label for="formFileMultiple" class="form-label">pilih gambar</label>
                                                 <input class="form-control" type="file" name="image" value="<?php echo $mahasiswa['foto'] ?>">
                                            </div>
                                            <div class="form-group">
                                                 <label>Visi-misi</label>
                                                 <textarea name="visi" id="visi" class="form-control"><?php echo $mahasiswa['Visi_misi'] ?></textarea required="belum diisi">
                                            </div>
                                            <div class="form-group">
                                            <label for="varchar">No Hp</label>
                                             <input type="text" name="nohp" class="form-control" placeholder="no hp" value="<?php echo $mahasiswa['No_hp'] ?>">
                                         </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-warning">update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div><!-- /.col -->
                </div><!-- /.row -->

            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

    </div>
    <!-- /.content-wrapper