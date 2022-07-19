<?php
include "koneksi.php";
session_start();
if (isset($_SESSION['username'])){
header ("location:index.php");
}
?>
<html>
<head>
<title>LOGIN</title>
</head>
<body>
<form method="post" name="login" action="cek_login.php">
<center>
<h2>Ujian Tengah Semester<br/> Fundamental Secure Coding</h2>
<table border=0 align="center" cellpadding=5 cellspacing=0>
<td>NIM</td>
<td>:</td>
<td>1914000049</td>
</tr>
<tr>
<td>Nama</td>
<td>:</td>
<td>Dina Lestari Trihapsari</td>
</tr></table>
==================================================================== <br><br>
</center>
<table border=0 align="center" cellpadding=5 cellspacing=0>
<tr>
<td colspan=3><center><font size=4>LOGIN</font></center></td>
</tr>
<tr>
<td>Username</td>
<td>:</td>
<td><input type="text" name="username"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td colspan=2></td>
<td><input type="submit" name="submit" value="LOGIN"></td>
</tr>
<tr>
<td colspan=2>&nbsp;</td>
<td><input type="reset" name="reset" value="RESET"></td></tr>
<tr>
<td colspan=3><a href="daftar.php">DAFTAR</a></td>
</tr>
</table>
</form>
</body>
</html>