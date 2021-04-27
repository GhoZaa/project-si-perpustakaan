<!DOCTYPE html>
<html>

<head>
  <title>Log in Member</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Ubuntu&display=swap" rel="stylesheet">
</head>

<style type="text/css">
  @font-face {
    font-family: font1;
    src: url(font1.woff);
  }

  a {
    text-decoration: none;
    color: inherit;
  }

  nav {
    background-color: #181818;
    text-align: center;
    padding-top: 8px;
    padding-bottom: 8px;

  }
</style>

<body background="../../assets/img/bgwelcome.jfif">

  <nav>
    <button type="button" class="btn btn-outline-warning" style="margin-right:15px; border-radius: 30px;"><b><a href="../../index.php"> Home</a></button>
    <button type="button" class="btn btn-outline-warning" style="margin-right:15px; border-radius: 30px;"><b><a href="../../page/login/login_admin.php"> Login as Admin</a></button>
    <button type="button" class="btn btn-outline-warning" style="margin-right:15px; border-radius: 30px;"><b><a href="loginmanager.php"> Login as Manager</a></button>
  </nav>



  <center>
    <div class="card" style="width: 18rem; margin-top: 150px;border-radius: 30px;padding:30px 30px;width: 550px;">
      <h1 style="font-family:'Ubuntu', sans-serif; font-size:45px; text-align: center;">Login Area Member</h1>

      <form method="POST" action="../../logic/action_login_member.php">
        <div class="card-body">
          <h5 class="card-title" style="text-align: left;">NIM</h5>
          <div class="mb-3">
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Input NIM" name="nim" required>
          </div>

          <h5 class="card-title" style="text-align: left;">Password</h5>
          <div class="mb-3">
            <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Input Password" name="password" required>
          </div>

          <input class="btn btn-primary" type="submit" value="Login"><br><br>
          <a href="../login/register_member.php" style="text-decoration: none;color: black;font-size: 15px;">Haven't an account yet?</a><br>
        </div>
      </form>

    </div>
  </center>

</body>

</html>