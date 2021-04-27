<?php
session_start();
include('../../logic/connect.php');
$id_admin = $_GET['id_admin'];

if (!isset($_SESSION['id'])) {
  header("location: ../../index.php");
}
if (isset($_SESSION['id'])) {
  $username = $_SESSION['id'];
}


// $nim = $_GET['nim'];
// $query = mysqli_query($koneksi, "select * from member where nim = '$nim'");
// $d = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SI Perpustakaan</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="../../assets/css/font-awesome.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="../../assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <link href="../../assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

</head>

<body>
  <div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="dashbord_admin.php?id=<?= $id_admin; ?>">Perpustakaan</a>
      </div>
      <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a onclick="return confirm('Apakah anda yakin ingin logout?')" href="../../logic/logout_admin.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
          <li class="text-center">
            <img src="../../assets/img/find_user.png" class="user-image img-responsive" />
          </li>

          <li>
            <a href="dashbord_admin.php?id_admin=<?= $id_admin; ?>"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
          </li>

          <li>
            <a href="?page=profil&id_admin=<?= $id_admin; ?>"><i class="fa fa-user fa-3x"></i> Profil</a>
          </li>

          <li>
            <a href="?page=anggota&id_admin=<?= $id_admin; ?>"><i class="fa fa-users fa-3x"></i> Data Anggota</a>
          </li>

          <li>
            <a href="?page=buku&id_admin=<?= $id_admin; ?>"><i class="fa fa-book fa-3x"></i> Data Buku</a>
          </li>

          <li>
            <a href="?page=transaksi&id_admin=<?= $id_admin; ?>"><i class="fa fa-edit fa-3x"></i> Transaksi</a>
          </li>
        </ul>

      </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
      <div id="page-inner">
        <div class="row">
          <div class="col-md-12">

            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : '';
            $aksi = isset($_GET['aksi']) ? $_GET['aksi'] : '';

            if ($page == "buku") {
              if ($aksi == "") {
                include "../buku/buku.php";
              } elseif ($aksi == "tambah") {
                include "../buku/tambah.php";
              } elseif ($aksi == "edit") {
                include "../buku/edit.php";
              } elseif ($aksi == "hapus") {
                include "../buku/hapus.php";
              }
            } elseif ($page == "anggota") {
              if ($aksi == "") {
                include "../anggota/anggota.php";
              } elseif ($aksi == "tambah") {
                include "../anggota/tambah.php";
              } elseif ($aksi == "edit") {
                include "../anggota/edit.php";
              } elseif ($aksi == "hapus") {
                include "../anggota/hapus.php";
              }
            } elseif ($page == "transaksi") {
              if ($aksi == "") {
                include "../transaksi/transaksi.php";
              } elseif ($aksi == "tambah") {
                include "../transaksi/tambah.php";
              } elseif ($aksi == "kembali") {
                include "../transaksi/kembali.php";
              } elseif ($aksi == "perpanjang") {
                include "../transaksi/perpanjang.php";
              }
            } elseif ($page == "profil") {
              if ($aksi == "") {
                include "../profil/profil_admin.php";
              } elseif ($aksi == "ubah") {
                include "../profil/profil_edit_admin.php";
              }
            } else {
              include "home_admin.php";
            }
            ?>

          </div>
        </div>
        <!-- /. ROW  -->
        <hr />

      </div>
      <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
  </div>
  <!-- /. WRAPPER  -->
  <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
  <!-- JQUERY SCRIPTS -->
  <script src="../../assets/js/jquery-1.10.2.js"></script>
  <!-- BOOTSTRAP SCRIPTS -->
  <script src="../../assets/js/bootstrap.min.js"></script>
  <!-- METISMENU SCRIPTS -->
  <script src="../../assets/js/jquery.metisMenu.js"></script>
  <!-- DATA TABLE SCRIPTS -->
  <script src="../../assets/js/dataTables/jquery.dataTables.js"></script>
  <script src="../../assets/js/dataTables/dataTables.bootstrap.js"></script>
  <script>
    $(document).ready(function() {
      $('#dataTables-example').dataTable();
    });
  </script>
  <!-- CUSTOM SCRIPTS -->
  <script src="../../assets/js/custom.js"></script>

</body>

</html>