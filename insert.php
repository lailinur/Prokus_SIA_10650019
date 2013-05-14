<?php

//session_start();
include 'config.php';
 
//tangkap data dari form
$nis = $_POST['nis'];
$nm_siswa = $_POST['nm_siswa'];
$password = $_POST['password'];
$almt_siswa = $_POST['almt_siswa'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$angkatan = $_POST['angkatan'];
$gb = $_FILES['gb']['name'];
$up = './foto/';
$alamat = $up.$gb;
$dir = './foto/';
$url = $dir.$gb; 
//simpan data ke database

if(move_uploaded_file($_FILES['gb']['tmp_name'],$alamat)){
$query = mysql_query("insert into siswa values('$nis','$nm_siswa', '$password', '$almt_siswa', '$tmp_lahir', '$tgl_lahir','$jk','$agama', '$angkatan', '$alamat')") or die(mysql_error());
 

if ($query) {
$_SESSION['user_admin'] = $_POST['user_admin'];

echo "<script>alert('berhasil menginputkan');document.location='data_siswa.php?message=success';</script>";

}
}


?> 