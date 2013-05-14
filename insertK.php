<?php

//session_start();
include 'config.php';
 
//tangkap data dari form
$kd_kelas = $_POST['kd_kelas'];
$nm_kelas = $_POST['nm_kelas'];

 
//simpan data ke database
$query = mysql_query("insert into kelas values('$kd_kelas', '$nm_kelas')") or die(mysql_error());
 
if ($query) {
$_SESSION['user_admin'] = $_POST['user_admin'];
echo "<script>alert('berhasil menginputkan');document.location='data_kelas.php?message=success';</script>";

	}
?> 