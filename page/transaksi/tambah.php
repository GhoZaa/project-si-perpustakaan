<?php
include_once '../../logic/connect.php';
$id_admin = $_GET['id_admin'];

date_default_timezone_set('Asia/Jakarta');
$tgl_pinjam = date("d-m-Y");
$tujuh_hari = mktime(0, 0, 0, date("n"), date("j") + 7, date("Y"));
$tgl_harus_kembali = date("d-m-Y", $tujuh_hari);
?>

<div class="row">
  <div class="col-md-12">
    <!-- Form Elements -->
    <div class="panel panel-default">
      <div class="panel-heading">
        Tambah Data Transaksi
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-6">
            <form role="form" method="POST">

              <div class="form-group">
                <label>Judul Buku</label>
                <select class="form-control" name="buku">
                  <?php

                  $sql = mysqli_query($connections, "select * from tb_buku");

                  while ($d = mysqli_fetch_assoc($sql)) {
                    echo "<option value='$d[id_buku].$d[judul]'>$d[judul]</option>";
                  }

                  ?>
                </select>
              </div>

              <div class="form-group">
                <label>NIM / Nama</label>
                <select class="form-control" name="nama">
                  <?php

                  $sql = mysqli_query($connections, "select * from tb_anggota");

                  while ($d = mysqli_fetch_assoc($sql)) {
                    echo "<option value='$d[nim].$d[nama]'>$d[nim] $d[nama]</option>";
                  }

                  ?>
                </select>
              </div>

              <div class="form-group">
                <label>Tanggal Pinjam</label>
                <input class="form-control" name="tgl_pinjam" type="text" id="tgl" value="<?= $tgl_pinjam ?>" readonly />
              </div>
              <div class="form-group">
                <label>Tanggal Kembali</label>
                <input class="form-control" name="tgl_kembali" type="text" id="tgl" value="<?= $tgl_harus_kembali ?>" readonly />
              </div>

              <!-- <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="gender" id="optionsRadios1" value="Pria" />Pria
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="gender" id="optionsRadios2" value="Wanita" />Wanita
                  </label>
                </div>
              </div> -->

              <div>
                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Form Elements -->
  </div>
</div>

<?php
// include_once 'connect.php';
// $simpan = isset($_POST['simpan']) ? $_POST['simpan'] : '';

if (isset($_POST['simpan'])) {

  $tgl_pinjam = $_POST['tgl_pinjam'];
  $tgl_kembali = $_POST['tgl_kembali'];

  $buku = $_POST['buku'];
  $pecah_buku = explode(".", $buku);
  $id_buku = $pecah_buku[0];
  $judul = $pecah_buku[1];

  $nama = $_POST['nama'];
  $pecah_nama = explode(".", $nama);
  $nim = $pecah_nama[0];
  $nama = $pecah_nama[1];

  $sql = mysqli_query($connections, "select * from tb_buku where id_buku = '$id_buku'");
  while ($d = mysqli_fetch_assoc($sql)) {
    $sisa_buku = $d['jumlah_buku'];

    if ($sisa_buku == 0) {
?>
      <script type="text/javascript">
        alert("Stok Buku Habis, Transaksi tidak dapat dilakukan! Silahkan tambah stok buku terlebih dahulu");
        window.location.href = "?page=transaksi&aksi=tambah&id_admin=<?= $id_admin ?>";
      </script>
    <?php
    } else {
      $sql_input = mysqli_query($connections, "insert into tb_transaksi (judul, nim, tgl_pinjam, tgl_kembali)
      values ('$judul', '$nim', '$tgl_pinjam', '$tgl_kembali')");

      $sql_buku = mysqli_query($connections, "update tb_buku set jumlah_buku=(jumlah_buku-1) where id_buku='$id_buku'");

    ?>
      <script type="text/javascript">
        alert("Simpan Data Berhasil!");
        window.location.href = "?page=transaksi&id_admin=<?= $id_admin ?>";
      </script>
<?php
    }
  }
}
?>