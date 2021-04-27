<?php
include('../../connect.php');
$id = $_GET['id'];
$id_admin = $_GET['id_admin'];

$cek = mysqli_query($connections, "select nim from tb_anggota where nim = '$id'") or die(mysqli_error("Error"));

if (mysqli_num_rows($cek) == 0) {
  echo "<script>window.history.back()</script>";
} else {
  $del = mysqli_query($connections, "delete from tb_anggota where nim = '$id'");
  if ($del) {
?>
    <script type="text/javascript">
      alert("Hapus data berhasil!");
      window.location.href = "?page=anggota&id_admin=<?= $id_admin ?>";
    </script>
  <?php
  } else {
  ?>
    <script type="text/javascript">
      alert("Gagal menghapus data!");
      window.location.href = "?page=anggota&id_admin=<?= $id_admin ?>";
    </script>';
<?php
  }
}
?>