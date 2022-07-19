/*
NIM  : 1914000049
Nama : Dina Lestari Trihapsari
*/
<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['username'])){
    header ("location:login.php");
}
else if (time() - $_SESSION['login_time_stamp'] > 100) {
    session_unset();
    session_destroy();
    header("location:login.php");
}
?>
Berhasil Login, <a href="logout.php">Logout</a>