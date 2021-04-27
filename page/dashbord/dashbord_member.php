<?php
session_start();
include('../../logic/connect.php');

if (!isset($_SESSION['nim'])) {
  header("location: ../../index.php");
}
if (isset($_SESSION['id'])) {
  $username = $_SESSION['nim'];
}

$nim = $_GET['nim'];
$query = mysqli_query($connections, "select * from tb_anggota where nim = '$nim'");
$d = mysqli_fetch_assoc($query);
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
              <a style="font-size: 40px;" class="nav-link active" aria-current="page" href="../profil/profil_member.php?nim=<?= $d['nim']; ?>">Halo, <?= $d['nama']; ?></a>
            </li>
          </ul>
          <a href="../../logic/logout_member.php"><button style="width:100px; font-size: 20px;border-radius: 30px;" class="btn btn-outline-danger" type="submit"><b>Log Out</button></a>
        </div>
      </div>
    </nav>
  </header>
  <br><br>
  <div style="text-align: center;margin-bottom: 50px;background-color: #15004a;border-radius: 30px;width: 400px;margin-left: auto;margin-right: auto;">
    <h1 style="color: white;font-size: 50px;margin-top: 10px;"><b>Member Area</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="card o-hidden border-0 shadow-lg my-5 col-lg-5 mx-auto mt-lg-10">
        <div class="card-body p-0">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="text-gray-900 mb-4">Profil</h1>
                <button type="button" class="btn btn-primary"><a href="../profil/profil_member.php?nim=<?php echo $d['nim']; ?>">
                    <div>
                      <div style="text-align: center;">
                        <input type="image" src="../../assets/img/profil.png">
                      </div>
                    </div>
                  </a>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card o-hidden border-0 shadow-lg my-5 col-lg-5 mx-auto mt-lg-10">
        <div class="card-body p-0">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class=" text-gray-900 mb-4">Cari Buku</h1>
                <button type="button" class="btn btn-primary"><a href="../buku/cari_buku.php?nim=<?php echo $d['nim']; ?>">
                    <div>
                      <div style="text-align: center;">
                        <input type="image" src="../../assets/img/caribuku.png">
                      </div>
                    </div>
                  </a>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <footer>
    <!-- <ul>
      <button type="button" class="btn btn-danger" style="height:380px;width:550px; background-color: red ;text-align: center;margin-left: 250px;margin-right: 50px;border-radius: 30px;"><a href="../profil/profil_member.php?nim=<?php echo $d['nim']; ?>">
          <div>
            <li><span>Profil</span></li>

            <div style="text-align: center;">
              <input type="image" src="../../assets/img/profil.png">
            </div>
          </div>
        </a>
      </button>

      <button type="button" class="btn btn-danger" style="height:380px;width:550px;background-color:red;text-align: center;margin-right: 250px;margin-left: 50px;border-radius: 30px;"><a href="caribuku.php">
          <div>
            <li><span>Cari Buku</span></li>
            <div style="text-align: center;">
              <input type="image" src="../../assets/img/caribuku.png">
            </div>
          </div>
        </a>
      </button>

    </ul> -->
  </footer>
</body>

</html>