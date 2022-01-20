<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Nilai Fuzzyfikasi</h1>





          <table class="table table-bordered table-striped" id="mytable">
            <thead>
              <tr>
                <th width="80px">No</th>
                <th>nama</th>
                <th>Ipk</th>
                <th>Itaq</th>
                <th>Taat Pancasila</th>
                <th>Visi Misi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 0;
              foreach ($fuzzyfikasi as $f) {
              ?>
                <tr>
                  <td><?php echo ++$no ?></td>
                  <td><?php echo $f['nama_mahasiswa'] ?></td>
                  <td><?php echo $f['nilai_ipk'] ?></td>
                  <td><?php echo $f['nilai_itaq'] ?></td>
                  <td><?php echo $f['nilai_taat'] ?></td>
                  <td><?php echo $f['nilai_visi'] ?></td>
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