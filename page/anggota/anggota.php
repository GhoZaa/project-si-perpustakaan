<div class="row">
  <div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-primary">
      <div class="panel-heading">
        Data Anggota
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>E-mail</th>
                <th>Gender</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Aksi</th>
              </tr>
            </thead>

            <tbody>
              <?php
              include_once '../../connect.php';
              $id_admin = $_GET['id_admin'];
              $no = 1;
              $data = mysqli_query($connections, "select * from tb_anggota");

              while ($d = mysqli_fetch_array($data)) {
              ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $d['nim']; ?></td>
                  <td><?= $d['nama']; ?></td>
                  <td><?= $d['email']; ?></td>
                  <td><?= $d['gender']; ?></td>
                  <td><?= $d['tgl_lahir']; ?></td>
                  <td><?= $d['alamat']; ?></td>
                  <td>
                    <a href="?page=anggota&aksi=edit&id=<?php echo $d['nim']; ?>&id_admin=<?= $id_admin ?>" class="btn btn-info">Edit</a>
                    <a onclick="return confirm('Apakah Anda yakin ingin menghapus data anggota ini?')" href="?page=anggota&aksi=hapus&id=<?php echo $d['nim']; ?>&id_admin=<?= $id_admin ?>" class="btn btn-danger">Hapus</a>
                  </td>
                </tr>

              <?php
              }
              ?>

            </tbody>
          </table>
        </div>
        <a href="?page=anggota&aksi=tambah&id_admin=<?= $id_admin ?>" class="btn btn-primary" style="margin-top: 8px;"> <i class="fa fa-plus"></i> Tambah Data</a>
        <a href="../../report/report_anggota_excel.php" target="_blank" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-print"></i> ExportToExcel</a>
        <a href="../../report/report_anggota_pdf.php" target="_blank" class="btn btn-danger" style="margin-top: 8px;"><i class="fa fa-print"></i> ExportToPDF</a>
      </div>
    </div>
    <!--End Advanced Tables -->
  </div>
</div>