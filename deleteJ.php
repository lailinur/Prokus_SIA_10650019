<?php
include('config.php');
 
$id = $_GET['no'];
 
$query = mysql_query("delete from jadwal where no='$id'") or die(mysql_error());
 
if ($query) {
   echo "<script>alert('berhasil menghapus');document.location='data_jadwal.php?message=delete';</script>";
}
?>