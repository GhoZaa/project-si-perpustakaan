<div class="row">
  <div class="col-md-12">
    <!-- Form Elements -->
    <div class="panel panel-default">
      <div class="panel-heading">
        Tambah Data Buku
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-md-6">
            <form role="form" method="POST">

              <div class="form-group">
                <label>Judul</label>
                <input class="form-control" name="judul" placeholder="Judul buku..." />
              </div>
              <div class="form-group">
                <label>Pengarang</label>
                <input class="form-control" name="pengarang" placeholder="Pengarang..." />
              </div>
              <div class="form-group">
                <label>Penerbit</label>
                <input class="form-control" name="penerbit" placeholder="Penerbit..." />
              </div>

              <div class="form-group">
                <label>Tahun Terbit</label>
                <select class="form-control" name="tahun">
                  <?php
                  $id_admin = $_GET['id_admin'];
                  $tahun = date("Y");

                  for ($i = $tahun - 50; $i <= $tahun; $i++) {
                    echo '<option value="' . $i . '">' . $i . '</option>';
                  }

                  ?>
                </select>
              </div>

              <div class="form-group">
                <label>ISBN</label>
                <input class="form-control" name="isbn" placeholder="ISBN..." />
              </div>
              <div class="form-group">
                <label>Jumlah</label>
                <input class="form-control" type="number" name="jumlah" placeholder="Jumlah buku..." />
              </div>

              <div class="form-group">
                <label>Lokasi</label>
                <select class="form-control" name="lokasi">
                  <option value="rak1">Rak 1</option>
                  <option value="rak2">Rak 2</option>
                  <option value="rak3">Rak 3</option>
                  <option value="rak4">Rak 4</option>
                  <option value="rak5">Rak 5</option>
                  <option value="rak6">Rak 6</option>
                </select>
              </div>

              <div class="form-group">
                <label>Tanggal Input</label>
                <input class="form-control" type="date" name="tanggal" />
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

  $input = mysqli_query($connections, "insert into tb_buku (judul, pengarang, penerbit, tahun_terbit, isbn, jumlah_buku, lokasi, tgl_input)
  values ('$judul', '$pengarang', '$penerbit', '$tahun', '$isbn', '$jumlah', '$lokasi', '$tanggal')");

  if ($input) {
?>
    <script type="text/javascript">
      alert("Data berhasil disimpan!");
      window.location.href = "?page=buku&id_admin=<?= $id_admin ?>";
    </script>
<?php
  }
}
?>