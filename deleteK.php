<?php
include('config.php');
 
$id = $_GET['kd_kelas'];
 
$query = mysql_query("delete from kelas where kd_kelas='$id'") or die(mysql_error());
 
if ($query) {
   echo "<script>alert('berhasil menghapus');document.location='data_kelas.php?message=delete';</script>";
}
?>