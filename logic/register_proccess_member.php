<?php
if (isset($_POST['register'])) {
  include_once 'connect.php';
  $nim        = $_POST['nim'];
  $nama       = $_POST['nama'];
  $email      = $_POST['email'];
  $password   = $_POST['password'];
  // $password   = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $gender     = $_POST['gender'];
  $tgl_lahir  = $_POST['tgl_lahir'];
  $alamat     = $_POST['alamat'];

  // $password = password_hash($password, PASSWORD_DEFAULT);

  $input = mysqli_query($connections, "insert into tb_anggota values('$nim', '$nama', '$email', '$password', '$gender', '$tgl_lahir', '$alamat')");
  if ($input) {
    echo "<script>alert('Berhasil Melakukan Registrasi Login Kembali'); location = '../page/login/login_member.php';</script>";
  } else {
    echo "Gagal Melakukan Registrasi";
    echo "<a href = '../page/login/register_member.php'>Kembali</a>";
  }
} else {
  echo "<script>window.history.back()</script>";
}
