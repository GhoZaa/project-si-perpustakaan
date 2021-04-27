<?php
// session_start();
include('../../logic/connect.php');

$nim = $_GET['nim'];
$query_user = mysqli_query($connections, "select * from tb_anggota where nim = '$nim'");
$d = mysqli_fetch_assoc($query_user);

$quuery_buku = mysqli_query($connections, "select * from tb_buku");
$d_buku = mysqli_fetch_assoc($quuery_buku);
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <title>Member Area</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">
  <link media="all" type="text/css" rel="stylesheet" href="index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <style type="text/css">
    body {
      font-family: 'Source Sans Pro';
      background: white;
      margin: 0;
      /* color: white; */
    }

    a {
      text-decoration: none;
      color: inherit;
      font-size: 1.8em;
      font-weight: 700;
    }

    img {
      width: 150px;
      justify-self: center;
    }

    header {
      background: #3581fc;
      padding: 1em;
    }

    ul {
      display: grid;
      list-style-type: none;
      margin: 0;
      padding: 0;
      grid-template-columns: repeat(2, auto);

    }

    ul li span {
      display: block;
      font-size: 1.4em;
      margin-bottom: 1em;
      color: white;
    }
  </style>

</head>

<body>

  <header>

    <nav style="border-radius: 30px;height: 60px;" class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a style="font-size: 40px;" class="nav-link active" aria-current="page" href="#">Member Area</a>
            </li>
          </ul>
          <a href="../../logic/logout_member.php"><button style="width:100px; font-size: 20px;border-radius: 30px;" class="btn btn-outline-danger" type="submit"><b>Log Out</button></a>
        </div>
      </div>
    </nav>
  </header>
  <br><br>
  <div style="text-align: center;margin-bottom: 50px;background-color: #15004a;border-radius: 30px;width: 400px;margin-left: auto;margin-right: auto;">
    <h1 style="color: white;font-size: 50px;margin-top: 10px;"><b>Cari Buku</h1>
  </div>
  <div class="container">
    <div class="row">


    </div>

  </div>

  <footer>
  </footer>
</body>

</html>