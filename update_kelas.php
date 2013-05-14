<?php
session_start();
include('config.php');
 
//tangkap data dari form
$kd_kelas = $_POST['kd_kelas'];
$nm_kelas = $_POST['nm_kelas'];

$query = mysql_query("update kelas set nm_kelas='$nm_kelas' where kd_kelas='$kd_kelas'") or die(mysql_error());
 
if ($query) {
    header('location:data_kelas.php?message=success');	
}
?>