<!DOCTYPE html>
<html>

<head>
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<style type="text/css">
  @font-face {
    font-family: font1;
    src: url(font1.woff);
  }
</style>

<body background="../../assets/img/bgwelcome.jfif">

  <center>
    <div class="card" style="width: 18rem; margin-top: 70px;border-radius: 30px;padding:30px 30px;width: 1000px;margin-bottom: 50px;">
      <h1 style="font-family:font1;font-size:95px; text-align: center;">Register</h1>

      <form action="../../logic/register_proccess_member.php" method="post">
        <div class="card-body">
          <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">NIM </label>
            <div class="col-sm-10"><input type="number" class="form-control" id="inputPassword" placeholder="Input NIM" name="nim" required></div><br><br>

            <label for="inputPassword" class="col-sm-2 col-form-label">Nama </label>
            <div class="col-sm-10"><input type="text" class="form-control" id="inputPassword" placeholder="Input Nama" name="nama"></div><br><br>

            <label for="inputPassword" class="col-sm-2 col-form-label">E-mail </label>
            <div class="col-sm-10"><input type="email" class="form-control" id="inputPassword" placeholder="Input E-mail " name="email"></div><br><br>

            <label for="inputPassword" class="col-sm-2 col-form-label">Password </label>
            <div class="col-sm-10"><input type="password" class="form-control" id="inputPassword" placeholder="Input Password" name="password"></div><br><br>

            <label for="inputPassword" class="col-sm-2 col-form-label">Gender </label>
            <div class="col-sm-10">
              <select class="form-select" id="inputPassword" name="gender">
                <option value="Pria">Laki-laki</option>
                <option value="Wanita">Perempuan</option>
              </select>
            </div><br><br>

            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Lahir </label>
            <div class="col-sm-10"><input type="date" class="form-control" id="inputPassword" placeholder="Input Tanggal Lahir" name="tgl_lahir"></div><br><br>

            <label for="inputPassword" class="col-sm-2 col-form-label">Alamat </label>
            <div class="col-sm-10"><input type="text" class="form-control" id="inputPassword" placeholder="Input Alamat" name="alamat"></div><br><br>

            <div style="margin-top: 25px;"><input class="btn btn-primary" type="submit" value="Register" name="register"><br><br>
              <a href="login_member.php" style="text-decoration: none;color: black;font-size: 15px;">Have an account?Login</a>
            </div>

          </div>
        </div>
      </form>
    </div>
  </center>


</body>

</html>