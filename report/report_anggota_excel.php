<?php
include_once '../logic/connect.php';

$filename = "laporan_anggota_exel-(" . date('d-m-Y') . ").xls";
header("content-disposition: attachment; filename=$filename");
header("contet-type: application/vdn.ms-excel");

?>

<h2>Laporan Anggota Perpustakaan</h2>

<table border="1">
  <thead>
    <tr>
      <th>No.</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>E-mail</th>
      <th>Gender</th>
      <th>Tanggal Lahir</th>
      <th>Alamat</th>
    </tr>
  </thead>
  <tbody>
    <?php
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
      </tr>

    <?php
    }
    ?>

  </tbody>
</table>