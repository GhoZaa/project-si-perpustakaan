<?php
session_start();
include('../logic/connect.php');
$username = $_POST['id'];
$password = $_POST['password'];
$query = mysqli_query($connections, "select * from tb_admin where id_admin = '$username' and password = '$password' ");
$xxx = mysqli_num_rows($query);
if ($xxx == TRUE) {
  $_SESSION['id'] = $username;
  header("location:../page/dashbord/dashbord_admin.php?id_admin=$username");
} else {
  echo "<script>alert('Silahkan input ID dan Password dengan benar!'); location = '../page/login/login_admin.php';</script>";
}
