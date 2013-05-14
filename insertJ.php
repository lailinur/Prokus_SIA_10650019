<?php

//session_start();
include 'config.php';
 
//tangkap data dari form
$nis = $_POST['nis'];
$kd_mapel = $_POST['kd_mapel'];
$kd_kelas = $_POST['kd_kelas'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$nip = $_POST['nip'];
$th_ajar = $_POST['th_ajar'];
$semester = $_POST['semester'];

 
//simpan data ke database
$query = mysql_query("insert into jadwal values('', '$nis','$kd_mapel', '$kd_kelas', '$hari', '$jam', '$nip', '$th_ajar', '$semester')") or die(mysql_error());
 
if ($query) {
$_SESSION['user_admin'] = $_POST['user_admin'];
echo "<script>alert('berhasil menginputkan');document.location='data_jadwal.php?message=success';</script>";

	}
?> 