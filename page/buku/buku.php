<div class="row">
  <div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-primary">
      <div class="panel-heading">
        Data Buku
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>ISBN</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Jumlah</th>
                <th>Aksi</th>
              </tr>
            </thead>

            <tbody>
              <?php
              include_once '../../logic/connect.php';
              $id_admin = $_GET['id_admin'];
              $no = 1;
              $data = mysqli_query($connections, "select * from tb_buku");

              while ($d = mysqli_fetch_array($data)) {
              ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $d['judul']; ?></td>
                  <td><?= $d['pengarang']; ?></td>
                  <td><?= $d['isbn']; ?></td>
                  <td><?= $d['penerbit']; ?></td>
                  <td><?= $d['tahun_terbit']; ?></td>
                  <td><?= $d['jumlah_buku']; ?></td>
                  <td>
                    <a href="?page=buku&aksi=edit&id=<?php echo $d['id_buku']; ?>&id_admin=<?= $id_admin ?>" class="btn btn-info">Edit</a>
                    <a onclick="return confirm('Apakah Anda yakin ingin menghapus data buku ini?')" href="?page=buku&aksi=hapus&id=<?php echo $d['id_buku']; ?>&id_admin=<?= $id_admin ?>" class="btn btn-danger">Hapus</a>
                  </td>
                </tr>

              <?php
              }
              ?>

            </tbody>
          </table>
        </div>
        <a href="?page=buku&aksi=tambah&id_admin=<?= $id_admin ?>" class="btn btn-primary" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data</a>
      </div>
    </div>
    <!--End Advanced Tables -->
  </div>
</div>