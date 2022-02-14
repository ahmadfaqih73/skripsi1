<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-sm-16">
                    <h1 class="m-0">Data User</h1>
                    <div class="col-md-6">
                        <a href="<?= base_url(); ?>View_user/tambah" class="btn btn-primary">Tambah data</a>
                    </div>
                    <!-- Main content -->
                    <section class="content">


                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped projects">
                                    <thead>
                                        <tr>
                                            <th style="width: 1%">
                                                No
                                            </th>
                                            <th style="width: 20%">
                                                Nama
                                            </th>
                                            <th style="width: 20%">
                                                User
                                            </th>
                                            <th style="width: 30%">
                                                Password
                                            </th>

                                            <th style="width: 20%">
                                                Status
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;
                                        foreach ($users as $user) {
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php echo ++$no ?>
                                                </td>
                                                <td>
                                                    <?php echo $user['fullname'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $user['username'] ?>
                                                </td>
                                                <td><?php echo $user['password'] ?></td>
                                                <td class="project-actions text-right">
                                                    <a class="btn btn-info btn-sm" href="<?= base_url(); ?>View_user/view_edit/<?= $user['id_user']; ?>">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                        Edit
                                                    </a>
                                                    <a class="btn btn-danger btn-sm" href="<?= base_url(); ?>View_user/delete_user/<?= $user['id_user']; ?>">
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
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </section>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

</div>
<!-- /.content-wrapper -->