<!DOCTYPE html>
<html>

<head>
  <title>Perpustakaan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <style type="text/css">
    .background {
      position: relative;
      align-items: center;
      background-color: rgba(0, 0, 0, 0.8);
      height: 500px;
      width: 90%;
      justify-content: center;
      margin: auto;
      margin-top: 100px;
      border-radius: 30px;
      text-align: center;
    }

    h1 {
      color: gold;
      font-family: 'Poppins', sans-serif;
      font-size: 48px;
    }

    a {
      text-decoration: none;
      color: inherit;
    }
  </style>

</head>

<body background="assets/img/bgwelcome.jfif">
  <center>
    <div class="background">
      <div style="padding-top: 200px;">
        <h1>Sistem Informasi Perpustakaan</h1>
      </div><br>

      <div>
        <button type="button" class="btn btn-outline-warning" style="margin-right:15px; border-radius: 30px;"><b><a href="page/login/login_member.php"> Login as Member</a></button>
        <button type="button" class="btn btn-outline-warning" style="margin-right:15px; border-radius: 30px;"><b><a href="page/login/login_admin.php"> Login as Admin</a></button>
        <button type="button" class="btn btn-outline-warning" style="margin-right:15px; border-radius: 30px;"><b><a href="login_manager.php"> Login as Manager</a></button>
      </div>
    </div>

  </center>



</body>

</html>