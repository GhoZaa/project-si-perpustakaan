<div class="row">
  <div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-primary">
      <div class="panel-heading">
        Data Transaksi
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
              <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Terlambat</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>

            <tbody>
              <?php
              include_once '../../connect.php';
              include('../../logic/function.php');
              $id_admin = $_GET['id_admin'];

              $no = 1;

              $data = mysqli_query($connections, "SELECT tb_transaksi.id_transaksi, tb_transaksi.judul, tb_transaksi.nim, tb_transaksi.tgl_pinjam, tb_transaksi.tgl_kembali, tb_transaksi.status, tb_anggota.nama
              FROM tb_transaksi INNER JOIN tb_anggota ON tb_anggota.nim = tb_transaksi.nim WHERE tb_transaksi.status = 'Pinjam' ORDER BY id_transaksi;");

              while ($d = mysqli_fetch_assoc($data)) {
              ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $d['judul']; ?></td>
                  <td><?= $d['nim']; ?></td>
                  <td><?= $d['nama']; ?></td>
                  <td><?= $d['tgl_pinjam']; ?></td>
                  <td><?= $d['tgl_kembali']; ?></td>
                  <td><?php
                      $denda = 600;
                      $deadline = $d['tgl_kembali'];
                      $tgl_kembali = date('Y-m-d');

                      $hari_terlambat = terlambat($deadline, $tgl_kembali);
                      $denda *= $hari_terlambat;

                      if ($hari_terlambat > 0) {
                        echo "<font color='red'>$hari_terlambat hari<br>(Rp $denda)</font>";
                      } else {
                        echo $hari_terlambat . " hari";
                      }
                      ?>
                  </td>
                  <td><?= $d['status']; ?></td>
                  <td>
                    <a onclick="return confirm('Konfirmasi pengembalian buku?')" href="?page=transaksi&aksi=kembali&id=<?= $d['id_transaksi']; ?>&judul=<?= $d['judul']; ?>&id_admin=<?= $id_admin ?>" class="btn btn-info">
                      Kembali
                    </a>
                    <a onclick="return confirm('Perpanjang masa pinjaman?')" href="?page=transaksi&aksi=perpanjang&id=<?= $d['id_transaksi']; ?>&judul=<?= $d['judul']; ?>&lambat=<?= $hari_terlambat; ?>&tgl_kembali=<?= $d['tgl_kembali']; ?>&id_admin=<?= $id_admin ?>" class="btn btn-success">
                      Perpanjang
                    </a>
                  </td>
                </tr>

              <?php
              }
              ?>

            </tbody>
          </table>
        </div>
        <a href="?page=transaksi&aksi=tambah&id_admin=<?= $id_admin ?>" class="btn btn-primary" style="margin-top: 8px;">Tambah Data</a>

      </div>
    </div>
    <!--End Advanced Tables -->
  </div>
</div>