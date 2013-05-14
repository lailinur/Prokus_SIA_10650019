<?php
session_start();
include('config.php');
 
//tangkap data dari form
$kd_mapel = $_POST['kd_mapel'];
$nm_mapel = $_POST['nm_mapel'];
$nip = $_POST['nip'];

 

$query = mysql_query("update mapel set nm_mapel='$nm_mapel', nip='$nip' where kd_mapel='$kd_mapel'") or die(mysql_error());
 
if ($query) {
    header('location:data_mapel.php?message=success');	
}
?>