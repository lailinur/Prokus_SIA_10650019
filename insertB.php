<?php

//session_start();
include 'config.php';
 
//tangkap data dari form

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$tgl = $_POST['tgl'];


 
//simpan data ke database
$query = mysql_query("insert into berita values('' '$judul', '$isi', '$tgl')") or die(mysql_error());
 
if ($query) {
$_SESSION['user_admin'] = $_POST['user_admin'];
echo "<script>alert('berhasil menginputkan');document.location='data_berita.php?message=success';</script>";

	}
?> 