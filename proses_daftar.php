/*
NIM  : 1914000049
Nama : Dina Lestari Trihapsari
*/
<?php
include "koneksi.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$tanggallahir=$_POST['tanggallahir'];
$username = $_POST['username'];
$password = $_POST['password'];
if (empty($nama)){
echo "<script>alert('Nama belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
    if (is_numeric($nama)){
        echo "<script> alert ('Nama harus berupa huruf')</script>";
        echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else 
if (empty($email)){
echo "<script>alert('Email belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Email tidak sesuai')</script>";
        echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
    }else
    if (empty($tanggallahir)){
        echo "<script>alert('Tanggal lahir belum diisi')</script>";
        echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
    }else
if(empty($username)){
echo "<script>alert('Username belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else
    if(strlen($username)>20) {
        echo "<script> alert ('Panjang username maksimal 20 karakter')</script>";
        echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
    }else 
if (empty($password)){
echo "<script>alert('Password belum diisi')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else{
$daftar = mysqli_query($conn, "INSERT INTO users (nama,email,username,password) values ('$nama','$email','$username','$password')");
if ($daftar){
echo "<script>alert('Berhasil Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else{
echo "<script>alert('Gagal Mendaftar')</script>";
echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}
}
?>