<?php
include('../../connect.php');
$id = $_GET['id'];
$id_admin = $_GET['id_admin'];
// $query = $connections->query("select * from tb_buku where id = '$id'");
// $show = $query->fetch_assoc();
$show = mysqli_query($connections, "select * from tb_buku where id_buku = '$id' ");

if (mysqli_num_rows($show) == 0) {
  echo '<script>window.history.back()</script>';
} else {
  $d = mysqli_fetch_assoc($show);
}

$tahun2 = isset($d['tahun_terbit']) ? $d['tahun_terbit'] : '';

?>

<div class="row">
  <div class="col-md-12">
    <!-- Form Elements -->
    <div class="panel panel-default">
      <div class="panel-heading">
        Edit Data Buku
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-6">
            <form role="form" method="POST">

              <div class="form-group">
                <label>Judul</label>
                <input class="form-control" name="judul" value="<?= $d['judul']; ?>" />
              </div>
              <div class="form-group">
                <label>Pengarang</label>
                <input class="form-control" name="pengarang" value="<?= $d['pengarang']; ?>" />
              </div>
              <div class="form-group">
                <label>Penerbit</label>
                <input class="form-control" name="penerbit" value="<?= $d['penerbit']; ?>" />
              </div>

              <div class="form-group">
                <label>Tahun Terbit</label>
                <select class="form-control" name="tahun">
                  <?php
                  $tahun = date("Y");
                  for ($i = $tahun - 50; $i <= $tahun; $i++) {
                    if ($i == $tahun2) {
                      echo '<option value="' . $i . '" selected>' . $i . '</option>';
                    } else {
                      echo '<option value="' . $i . '">' . $i . '</option>';
                    }
                  }

                  ?>
                </select>
              </div>

              <div class="form-group">
                <label>ISBN</label>
                <input class="form-control" name="isbn" value="<?= $d['isbn']; ?>" />
              </div>
              <div class="form-group">
                <label>Jumlah</label>
                <input class="form-control" type="number" name="jumlah" value="<?= $d['jumlah_buku']; ?>" />
              </div>

              <div class="form-group">
                <label>Lokasi</label>
                <select class="form-control" name="lokasi">
                  <option value="rak1" <?php if ($d['lokasi'] == 'rak1') {
                                          echo "selected";
                                        } ?>>Rak 1</option>
                  <option value="rak2" <?php if ($d['lokasi'] == 'rak2') {
                                          echo "selected";
                                        } ?>>Rak 2</option>
                  <option value="rak3" <?php if ($d['lokasi'] == 'rak3') {
                                          echo "selected";
                                        } ?>>Rak 3</option>
                  <option value="rak4" <?php if ($d['lokasi'] == 'rak4') {
                                          echo "selected";
                                        } ?>>Rak 4</option>
                  <option value="rak5" <?php if ($d['lokasi'] == 'rak5') {
                                          echo "selected";
                                        } ?>>Rak 5</option>
                  <option value="rak6" <?php if ($d['lokasi'] == 'rak6') {
                                          echo "selected";
                                        } ?>>Rak 6</option>
                </select>
              </div>

              <div class="form-group">
                <label>Tanggal Input</label>
                <input class="form-control" type="date" name="tanggal" value="<?= $d['tgl_input']; ?>" />
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
include_once 'connect.php';

$judul = isset($_POST['judul']) ? $_POST['judul'] : '';
$pengarang = isset($_POST['pengarang']) ? $_POST['pengarang'] : '';
$penerbit = isset($_POST['penerbit']) ? $_POST['penerbit'] : '';
$tahun = isset($_POST['tahun']) ? $_POST['tahun'] : '';
$isbn = isset($_POST['isbn']) ? $_POST['isbn'] : '';
$jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
$lokasi = isset($_POST['lokasi']) ? $_POST['lokasi'] : '';
$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';
$simpan = isset($_POST['simpan']) ? $_POST['simpan'] : '';

if ($simpan) {

  $input = mysqli_query($connections, "update tb_buku set 
  judul = '$judul', 
  pengarang = '$pengarang', 
  penerbit = '$penerbit',
  tahun_terbit = '$tahun', 
  isbn = '$isbn', 
  jumlah_buku = '$jumlah', 
  lokasi = '$lokasi', 
  tgl_input = '$tanggal'
  where id_buku = '$id'");

  if ($input) {
?>
    <script type="text/javascript">
      alert("Edit data berhasil!");
      window.location.href = "?page=buku&id_admin=<?= $id_admin ?>";
    </script>
<?php
  }
}
?>