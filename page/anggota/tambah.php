<div class="row">
  <div class="col-md-12">
    <!-- Form Elements -->
    <div class="panel panel-default">
      <div class="panel-heading">
        Tambah Data Anggota
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-6">
            <form role="form" method="POST">

              <div class="form-group">
                <label>NIM</label>
                <input class="form-control" name="nim" placeholder="NIM / ID Anggota..." />
              </div>
              <div class="form-group">
                <label>Nama</label>
                <input class="form-control" name="nama" placeholder="Nama anggota..." />
              </div>
              <div class="form-group">
                <label>E-mail</label>
                <input class="form-control" type="email" name="email" placeholder="E-mail anggota..." />
              </div>
              <div class="form-group">
                <label>Password</label>
                <input class="form-control" name="password" placeholder="Password..." />
              </div>

              <div class="form-group">
                <label>Jenis Kelamin</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="gender" id="optionsRadios1" value="Pria" />Pria
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="gender" id="optionsRadios2" value="Wanita" />Wanita
                  </label>
                </div>
              </div>

              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input class="form-control" type="date" name="tanggal" />
              </div>

              <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" name="alamat" placeholder="Alamat..." />
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
include_once '../../connect.php';
$id_admin = $_GET['id_admin'];

$nim = isset($_POST['nim']) ? $_POST['nim'] : '';
$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$tgl_lahir = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';
$alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
$simpan = isset($_POST['simpan']) ? $_POST['simpan'] : '';

if ($simpan) {

  $input = mysqli_query($connections, "insert into tb_anggota (nim, nama, email, password, gender, tgl_lahir, alamat)
  values ('$nim', '$nama', '$email', '$password', '$gender', '$tgl_lahir', '$alamat')");

  if ($input) {
?>
    <script type="text/javascript">
      alert("Berhasil menambah data!");
      window.location.href = "?page=anggota&id_admin=<?= $id_admin ?>";
    </script>
<?php
  }
}
?>