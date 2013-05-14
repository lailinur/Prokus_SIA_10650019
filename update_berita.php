<?php
session_start();
include('config.php');
 
//tangkap data dari form
$id_berita = $_POST['id_berita'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
$tgl = $_POST['tgl'];


 

$query = mysql_query("update berita set judul='$judul', isi='$isi', tgl='$tgl' where id_berita='$id_berita'") or die(mysql_error());
 
if ($query) {
    header('location:view_berita.php?message=success');	
}
?>