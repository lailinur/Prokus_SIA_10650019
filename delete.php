<?php
include('config.php');
 
$nis = $_GET['nis'];
 
$query = mysql_query("delete from siswa where nis='$nis'") or die(mysql_error());
 
if ($query) {
 
	echo "<script>alert('berhasil menghapus');document.location='data_siswa.php?message=delete';</script>";

}
?>