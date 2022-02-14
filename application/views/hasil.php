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
            <div class="widget-user-header bg-info">
              <h3 class="widget-user-username"><?= $nama ?>php</h3>
              <h5 class="widget-user-desc">Founder & CEO</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle elevation-2" src="<?php echo base_url() ?>/assets/dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <button type="submit" id="btn-1" class="btn btn-block btn-primary btn-sm">Nilai 1</button>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <button type="button" id="btn-2" class="btn btn-block btn-primary btn-sm">Nilai 2</button>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <button type="button" id="btn-3" class="btn btn-block btn-primary btn-sm">Nilai3</button>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>

          <div class="row nilai1">
            <div class="col-md-12">
              <div class="card card-outline card-primary">
                <div class="card-header">
                  <h3 class="card-title">Fuzzyfikasi</h3>

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
                    <div class="col-md-3">
                      <label>IPK</label>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Status</th>
                            <th>Nilai</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo $ipk['status1'] ?></td>
                            <td>
                              <?php echo $ipk['nilai1'] ?>
                            </td>
                          </tr>
                          <tr>
                            <td><?php echo $ipk['status2'] ?></td>
                            <td>
                              <?php echo $ipk['nilai2'] ?>
                            </td>
                          </tr>
                          <tr>
                            <td><?php echo $ipk['status3'] ?></td>
                            <td>
                              <?php echo $ipk['nilai3'] ?>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-md-3">
                      <label>Itaq</label>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Status</th>
                            <th>Nilai</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo $itaq['status1'] ?></td>
                            <td>
                              <?php echo $itaq['nilai1'] ?>
                            </td>
                          </tr>
                          <tr>
                            <td><?php echo $itaq['status2'] ?></td>
                            <td>
                              <?php echo $itaq['nilai2'] ?>
                            </td>
                          </tr>
                          <tr>
                            <td><?php echo $itaq['status3'] ?></td>
                            <td>
                              <?php echo $itaq['nilai3'] ?>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-md-3">
                      <label>Taat</label>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Status</th>
                            <th>Nilai</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo $taat['status1'] ?></td>
                            <td>
                              <?php echo $taat['nilai1'] ?>
                            </td>
                          </tr>
                          <tr>
                            <td><?php echo $taat['status2'] ?></td>
                            <td>
                              <?php echo $taat['nilai2'] ?>
                            </td>
                          </tr>
                          <tr>
                            <td><?php echo $taat['status3'] ?></td>
                            <td>
                              <?php echo $taat['nilai3'] ?>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="col-md-3">
                      <label>Visi</label>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Status</th>
                            <th>Nilai</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo $visi['status1'] ?></td>
                            <td>
                              <?php echo $visi['nilai1'] ?>
                            </td>
                          </tr>
                          <tr>
                            <td><?php echo $visi['status2'] ?></td>
                            <td>
                              <?php echo $visi['nilai2'] ?>
                            </td>
                          </tr>
                          <tr>
                            <td><?php echo $visi['status3'] ?></td>
                            <td>
                              <?php echo $visi['nilai3'] ?>
                            </td>
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

          <div class="row nilai2">
            <div class="col-md-12">
              <div class="card card-outline card-primary">
                <div class="card-header">
                  <h3 class="card-title">Implikasi</h3>

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
                      <label>Rule</label>
                      <table class="table table-striped">
                        <thead>
                          <tr>
                        
                            <th>Nomor</th>
                            <th>ARRAY</th>
                            <th>Output</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php for ($i = 0; $i < count($rule); $i++) { ?>
                            <tr>
                              <?php $no=$i+1?>
                              <td> <?php echo  $no;?></td>
                               <td><?php echo 'R'.$i; ?></td>
                              <td><?php echo $rule[$i] ?></td>
                            </tr>
                          <?php } ?>
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
                      <label>Defuzifikasi</label>
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
                            <td><?php echo $final['nilai_hasil_tdkcocok'] ?></td>
                          </tr>
                          <tr>
                            <td>Status Tidak Cocok</td>
                            <td><?php echo $final['status_tdkcocok'] ?></td>
                          </tr>
                          <tr>
                            <td>Nilai Cocok</td>
                            <td><?php echo $final['nilai_hasil_cocok'] ?></td>
                          </tr>
                          <tr>
                            <td>Status Cocok</td>
                            <td><?php echo $final['status_cocok'] ?></td>
                          </tr>
                          <tr>
                            <td>Nilai Sangat Cocok</td>
                            <td><?php echo $final['nilai_hasil_sangatcocok'] ?></td>
                          </tr>
                          <tr>
                            <td>Status Sangat Cocok</td>
                            <td><?php echo $final['status_sangatcocok'] ?></td>
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
<script type="text/javascript">
  $('.nilai1').hide();
  $('.nilai2').hide();
  $('.nilai3').hide()
  $(document).on("click", '#btn-1', function(e) {
    $('.nilai1').show();
    $('.nilai2').hide();
    $('.nilai3').hide()
  });
  $(document).on("click", '#btn-2', function(e) {
    $('.nilai1').hide();
    $('.nilai2').show();
    $('.nilai3').hide()
  });
  $(document).on("click", '#btn-3', function(e) {
    $('.nilai1').hide();
    $('.nilai2').hide();
    $('.nilai3').show()
  });
</script>