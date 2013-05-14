<?php
include('config.php');
 
$nip = $_GET['nip'];
 
$query = mysql_query("delete from guru where nip='$nip'") or die(mysql_error());
 
if ($query) {
    
	echo "<script>alert('berhasil menghapus');document.location='data_guru.php?message=delete';</script>";
}
?>