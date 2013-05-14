<?php
session_start();
include('config.php');
 
//tangkap data dari form
$no = $_POST['no'];
$nis = $_POST['nis'];
$kd_mapel = $_POST['kd_mapel'];
$th_ajar = $_POST['th_ajar'];
$semester = $_POST['semester'];
$nilai = $_POST['nilai'];
 
//update data di database sesuai user_id
$query = mysql_query("update nilai set nis='$nis', kd_mapel='$kd_mapel', th_ajar='$th_ajar',semester='$semester', nilai='$nilai' where no='$no'") or die(mysql_error());
 
if ($query) {
    header('location:data_nilai.php?message=success');	
}
?>