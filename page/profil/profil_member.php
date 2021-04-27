<?php
session_start();
include('../../logic/connect.php');
$nim = $_GET['nim'];
$query = mysqli_query($connections, "select * from tb_anggota where nim = '$nim'");
$d = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html>

<head>
  <title>Profil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <style type="text/css">
    @font-face {
      font-family: font1;
      src: url(../../assets/fonts/font1.woff);
    }

    nav {
      background-color: #181818;
      text-align: left;
      padding-top: 8px;
      padding-bottom: 8px;

    }

    a {
      text-decoration: none;
      color: inherit;
    }
  </style>
</head>

<body background="../../assets/img/bgwelcome.jfif">
  <nav>
    <button style="border-radius: 30px;" type="button" class="btn btn-outline-warning" style="margin-right:15px; "><b><a href="../dashbord/dashbord_member.php?nim=<?= $d['nim']; ?>"> Back</a></button>
    <button style="border-radius: 30px; float: right" type="button" class="btn btn-outline-warning" style="margin-right:15px; "><b><a href="../../logic/logout_member.php"> Log Out</a></button>

  </nav>

  <center>
    <div class="card" style="width: 18rem; margin-top: 150px;border-radius: 30px;padding:30px 30px;width: 1000px;margin-bottom: 50px;">
      <h1 style="font-family:font1;font-size:75px; text-align: center;">Profil Anda</h1>


      <div class="card-body">
        <div class="mb-3 row">
          <label for="inputPassword" class="col-sm-2 col-form-label">NIM </label>
          <div class="col-sm-10">
            <div class="col-sm-10 form-control" id="inputPassword" style="text-align: left;"><?php echo $d['nim']; ?></div>
          </div><br><br>

          <label for="inputPassword" class="col-sm-2 col-form-label">Nama </label>
          <div class="col-sm-10">
            <div class="col-sm-10 form-control" id="inputPassword" style="text-align: left;"><?php echo $d['nama']; ?></div>
          </div><br><br>

          <label for="inputPassword" class="col-sm-2 col-form-label">Alamat </label>
          <div class="col-sm-10">
            <div class="col-sm-10 form-control" id="inputPassword" style="text-align: left;"><?php echo $d['alamat']; ?></div>
          </div><br><br>

          <label for="inputPassword" class="col-sm-2 col-form-label">Gender </label>
          <div class="col-sm-10">
            <div class="col-sm-10 form-control" id="inputPassword" style="text-align: left;"><?php echo $d['gender']; ?></div>
          </div><br><br>

          <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Lahir </label>
          <div class="col-sm-10">
            <div class="col-sm-10 form-control" id="inputPassword" style="text-align: left;"><?php echo $d['tgl_lahir']; ?></div>
          </div><br><br>

          <label for="inputPassword" class="col-sm-2 col-form-label">E-mail </label>
          <div class="col-sm-10">
            <div class="col-sm-10 form-control" id="inputPassword" style="text-align: left;"><?php echo $d['email']; ?></div>
          </div><br><br>

        </div>
      </div>

    </div>
  </center>
</body>

</html>