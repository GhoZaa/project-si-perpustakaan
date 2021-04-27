<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "db_perpustakaan";
$connections = mysqli_connect($host, $user, $pass) or die("Konkesi ke Database gagal!");
mysqli_select_db($connections, $name) or die("Database tidak tersedia!");
