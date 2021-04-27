<?php
include('../../connect.php');
$id = $_GET['id'];
$id_admin = $_GET['id_admin'];

$show = mysqli_query($connections, "select * from tb_anggota where nim = '$id' ");

if (mysqli_num_rows($show) == 0) {
  echo '<script>window.history.back()</script>';
} else {
  $d = mysqli_fetch_assoc($show);
}

// $tgl_lahir = isset($d['tgl_lahir']) ? $d['tgl_lahir'] : '';

?>

<div class="row">
  <div class="col-md-12">
    <!-- Form Elements -->
    <div class="panel panel-default">
      <div class="panel-heading">
        Edit Data Anggota
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-6">
            <form role="form" method="POST">

              <div class="form-group">
                <label>NIM</label>
                <input class="form-control" type="text" value="<?= $d['nim']; ?>" readonly />
              </div>

              <div class="form-group">
                <label>Nama</label>
                <input class="form-control" name="nama" value="<?= $d['nama']; ?>" />
              </div>
              <div class="form-group">
                <label>E-mail</label>
                <input class="form-control" type="email" name="email" value="<?= $d['email']; ?>" />
              </div>
              <div class="form-group">
                <label>Password</label>
                <input class="form-control" name="password" value="<?= $d['password']; ?>" />
              </div>

              <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="gender" id="optionsRadios1" value="Pria" <?php if ($d['gender'] == 'Pria') {
                                                                                          echo "checked";
                                                                                        } ?> />Pria
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="gender" id="optionsRadios2" value="Wanita" <?php if ($d['gender'] == 'Wanita') {
                                                                                            echo "checked";
                                                                                          } ?> />Wanita
                  </label>
                </div>
              </div>

              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input class="form-control" type="date" name="tanggal" value="<?= $d['tgl_lahir']; ?>" />
              </div>

              <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" name="alamat" value="<?= $d['alamat']; ?>" />
              </div>

              <div>
                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Form Elements -->
  </div>
</div>

<?php

// $nim = isset($_POST['nim']) ? $_POST['nim'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$tgl_lahir = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$simpan = isset($_POST['simpan']) ? $_POST['simpan'] : '';

if ($simpan) {

  $input = mysqli_query($connections, "update tb_anggota set 
  nama = '$nama', 
  email = '$email', 
  password = '$password',
  gender = '$gender', 
  tgl_lahir = '$tgl_lahir', 
  alamat = '$alamat' 
  where nim = '$id'");

  if ($input) {
?>
    <script type="text/javascript">
      alert("Berhasil menyimpan perubahan!");
      window.location.href = "?page=anggota&id_admin=<?= $id_admin ?>";
    </script>
    ';
<?php
  }
}
?>