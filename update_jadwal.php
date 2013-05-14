<?php
session_start();
include('config.php');
 
//tangkap data dari form
$id = $_POST['no'];
$kd_mapel = $_POST['kd_mapel'];
$kd_kelas = $_POST['kd_kelas'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$nip = $_POST['nip'];
$th_ajar = $_POST['th_ajar'];
$semester = $_POST['semester'];
 
$query = mysql_query("update jadwal set kd_mapel='$kd_mapel', kd_kelas='$kd_kelas', hari='$hari', jam='$jam', nip='$nip', th_ajar='$th_ajar', semester='$semester' where no='$id'") or die(mysql_error());
 
if ($query) {
    header('location:data_jadwal.php?message=success');	
}
?>