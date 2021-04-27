<?php
include_once '../../logic/connect.php';

$id_transaksi = $_GET['id'];
$id_admin = $_GET['id_admin'];
$judul = $_GET['judul'];
$hari_terlambat = $_GET['lambat'];
$tgl_kembali = $_GET['tgl_kembali'];

if ($hari_terlambat > 7) {
  echo '
  <script type="text/javascript">
  alert("Tidak dapat melakukan perpanjangan masa pinjam dikarenakan sudah terkena denda. Bayar dan kembalikan dahulu kemudian pinjam kembali");
  window.location.href="?page=transaksi";
  </script>
  ';
} else {
  $tgl_kembali_pecah = explode("-", $tgl_kembali);
  $next_7_hari = mktime(0, 0, 0, $tgl_kembali_pecah[1], $tgl_kembali_pecah[0] + 7, $tgl_kembali_pecah[2]);
  $hari_next = date("d-m-Y", $next_7_hari);

  $sql = mysqli_query($connections, "UPDATE tb_transaksi SET tgl_kembali='$hari_next' WHERE id_transaksi='$id_transaksi' ");

  if ($sql) {
?>
    <script type="text/javascript">
      alert("Perpanjangan Berhasil!");
      window.location.href = "?page=transaksi&id_admin=<?= $id_admin ?>";
    </script>
  <?php
  } else {
  ?>
    <script type="text/javascript">
      alert("Perpanjangan Gagal!");
      window.location.href = "?page=transaksi&id_admin=<?= $id_admin ?>";
    </script>
<?php
  }
}
