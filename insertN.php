<?php

//session_start();
include 'config.php';
 
//tangkap data dari form
$nis = $_POST['nis'];
$kd_mapel = $_POST['kd_mapel'];
$kd_kelas = $_POST['kd_kelas'];
$th_ajar = $_POST['th_ajar'];
$semester = $_POST['semester'];
$nilai = $_POST['nilai'];

 
//simpan data ke database
$query = mysql_query("insert into nilai values('', '$nis', '$kd_mapel', '$kd_kelas','$th_ajar','$semester', '$nilai')") or die(mysql_error());
 
if ($query) {
$_SESSION['nip'] = $_POST['nip'];

echo "<script>alert('berhasil menginputkan');document.location='data_nilai.php?message=success';</script>";

	}
?> 