<?php


//session_start();
include 'config.php';
 
//tangkap data dari form
$nip = $_POST['nip'];
$nm_guru = $_POST['nm_guru'];
$pass_guru = $_POST['pass_guru'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];

 
//simpan data ke database
$query = mysql_query("insert into guru values( '$nip','$nm_guru', '$pass_guru', '$jk', '$agama', '$alamat')") or die(mysql_error());
 
if ($query) {
$_SESSION['user_admin'] = $_POST['user_admin'];

echo "<script>alert('berhasil menginputkan');document.location='data_guru.php?message=success';</script>";

	}
?> 