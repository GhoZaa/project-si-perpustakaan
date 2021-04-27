<?php
include_once('../../logic/connect.php');
$id_admin = $_GET['id_admin'];
$query = mysqli_query($connections, "SELECT * FROM tb_admin");
$d = mysqli_fetch_assoc($query);
?>

<div class="row">
  <div class="col-md-12">
    <!-- Form Elements -->
    <div class="panel panel-default">
      <div class="panel-heading">
        Profil Saya
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-6">
            <form role="form" method="">

              <div class="form-group">
                <label>ID Admin</label>
                <input class="form-control" type="text" value="<?= $d['id_admin']; ?>" readonly />
              </div>

              <div class="form-group">
                <label>Nama</label>
                <input class="form-control" type="text" name="nama" value="<?= $d['nama']; ?>" readonly />
              </div>

              <div class="form-group">
                <label>E-mail</label>
                <input class="form-control" type="text" name="email" value="<?= $d['email']; ?>" readonly />
              </div>

              <div class="form-group">
                <label>Password</label>
                <input class="form-control" type="password" name="password" value="<?= $d['password']; ?>" readonly />
              </div>

              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input class="form-control" type="text" name="tanggal" value="<?= $d['tgl_lahir']; ?>" readonly />
              </div>

              <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" type="text" name="alamat" value="<?= $d['alamat']; ?>" readonly />
              </div>

              <!-- <div>
                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
              </div> -->

            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Form Elements -->
  </div>
</div>