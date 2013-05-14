<?php
include('config.php');
 
$id = $_GET['kd_mapel'];
 
$query = mysql_query("delete from mapel where kd_mapel='$id'") or die(mysql_error());
 
if ($query) {
   echo "<script>alert('berhasil menghapus');document.location='data_mapel.php?message=delete';</script>";
}
?>