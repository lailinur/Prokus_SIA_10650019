<?php

//session_start();
include 'config.php';
 
//tangkap data dari form
$kd_mapel = $_POST['kd_mapel'];
$nm_mapel = $_POST['nm_mapel'];
$nip = $_POST['nip'];

 
//simpan data ke database
$query = mysql_query("insert into mapel values('$kd_mapel', '$nm_mapel', '$nip')") or die(mysql_error());
 
if ($query) {
$_SESSION['user_admin'] = $_POST['user_admin'];
echo "<script>alert('berhasil menginputkan');document.location='data_mapel.php?message=success';</script>";

	}
?> 