<?php
session_start();
include('../logic/connect.php');
$username = $_POST['nim'];
$password = $_POST['password'];
$query = mysqli_query($connections, "select * from tb_anggota where nim = '$username' and password = '$password' ");
$xxx = mysqli_num_rows($query);
if ($xxx == TRUE) {
  $_SESSION['nim'] = $username;
  header("location:../page/dashbord/dashbord_member.php?nim=$username");
} else {
  echo "<script>alert('Login Gagal! Silahkan input NIM dan Password dengan benar!'); location = '../page/login/login_member.php';</script>";
}
