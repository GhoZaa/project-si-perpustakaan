<?php
include_once('../../logic/connect.php');
$id_admin = $_GET['id_admin'];
$query = mysqli_query($connections, "select * from tb_admin where id_admin = '$id_admin'");
$d = mysqli_fetch_assoc($query);

?>

<div class="row">
  <div class="col-md-12">
    <h2>Admin Dashboard</h2>
    <h5>Hi <b><?= $d['nama'] ?></b>, Selamat datang kembali. </h5>
  </div>
</div>
<!-- /. ROW  -->
<hr />
<div class="row">
  <div class="col-md-3 col-sm-6 col-xs-6">
    <div class="panel panel-back noti-box">
      <a href="?page=profil&id_admin=<?= $id_admin ?>">
        <span class="icon-box bg-color-brown set-icon">
          <i class="fa fa-user"></i>
        </span>
        <div class="text-box">
          <p class="main-text">Profil</p>
          <p class="text-muted">Profil saya</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-xs-6">
    <div class="panel panel-back noti-box">
      <a href="?page=anggota&id_admin=<?= $id_admin ?>">
        <span class="icon-box bg-color-red set-icon">
          <i class="fa fa-users"></i>
        </span>
        <div class="text-box">
          <p class="main-text">Anggota</p>
          <p class="text-muted">data anggota</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-xs-6">
    <div class="panel panel-back noti-box">
      <a href="?page=buku&id_admin=<?= $id_admin ?>">
        <span class="icon-box bg-color-green set-icon">
          <i class="fa fa-book"></i>
        </span>
        <div class="text-box">
          <p class="main-text">Buku</p>
          <p class="text-muted">data buku</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-3 col-sm-6 col-xs-6">
    <div class="panel panel-back noti-box">
      <a href="?page=transaksi&id_admin=<?= $id_admin ?>">
        <span class="icon-box bg-color-blue set-icon">
          <i class="fa fa-edit"></i>
        </span>
        <div class="text-box">
          <p class="main-text">Transaksi</p>
          <p class="text-muted">data transaksi</p>
        </div>
      </a>
    </div>
  </div>

</div>