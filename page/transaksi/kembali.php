<?php
include_once '../../logic/connect.php';
$id_transaksi = $_GET['id'];
$judul = $_GET['judul'];
$id_admin = $_GET['id_admin'];

$sql_update_tb_transaksi = mysqli_query($connections, "UPDATE tb_transaksi SET status='Kembali' WHERE id_transaksi = '$id_transaksi'");
$sql_update_tb_buku = mysqli_query($connections, "UPDATE tb_buku SET jumlah_buku=(jumlah_buku + 1) WHERE judul = '$judul'");

?>
<script type="text/javascript">
  alert("Proses Pengembalian Buku Berhasil!!");
  window.location.href = "?page=transaksi&id_admin=<?= $id_admin ?>";
</script>