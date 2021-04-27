<?php
include('../../connect.php');
$id = $_GET['id'];
$cek = mysqli_query($connections, "select id_buku from tb_buku where id_buku = '$id'") or die(mysqli_error("Error"));

if (mysqli_num_rows($cek) == 0) {
  echo "<script>window.history.back()</script>";
} else {
  $del = mysqli_query($connections, "delete from tb_buku where id_buku = '$id'");
  if ($del) {
?>
    <script type="text/javascript">
      alert("Hapus data berhasil!");
      window.location.href = "?page=buku&id_admin=<?= $id_admin ?>";
    </script>
  <?php
  } else {
  ?>
    <script type="text/javascript">
      alert("Gagal menghapus data!");
      window.location.href = "?page=buku&id_admin=<?= $id_admin ?>";
    </script>
<?php
  }
}
?>