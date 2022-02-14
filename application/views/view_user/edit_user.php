<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Variable</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->

            <?php echo form_open_multipart('View_user/update_user') ?>
            <form class="surat_out" method="POST">
                <input type="hidden" id="id" name="id" value="<?= $user['id_user']; ?>">
                <div class="form-group">
                    <div class="form-group">
                        <label>Fullname</label>
                        <input type="text" name="fullname" class="form-control" placeholder="Full name" value="<?= $user['fullname']; ?>">
                        <?= form_error('Nama', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="username" value="<?= $user['username']; ?>">
                        <?= form_error('Username', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="password" value="<?= $user['password']; ?>">
                        <?= form_error('Password', '<small class="text-danger pl-3">', '</small>'); ?>
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