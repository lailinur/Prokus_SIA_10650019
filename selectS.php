<?php

//session_start();
include 'config.php';
 
//tangkap data dari form
$nis = $_POST['nis'];
$kd_mapel = $_POST['kd_mapel'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$nip = $_POST['nip'];
$th_ajar = $_POST['th_ajar'];

 
//simpan data ke database
$query = mysql_query("select '', '$nis','$kd_mapel', '$hari', '$jam', '$nip', '$th_ajar' FROM jadwal WHERE nis=$nis") or die(mysql_error());
 
if ($query) {
$_SESSION['nis'] = $_POST['nis'];
echo "<script>alert('berhasil menginputkan');document.location='jadwalS.php?message=success';</script>";

	}
?> 