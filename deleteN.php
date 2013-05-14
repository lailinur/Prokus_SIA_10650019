<?php
include('config.php');
 
$no = $_GET['no'];
 
$query = mysql_query("delete from nilai where no='$no'") or die(mysql_error());
 
if ($query) {
    
	echo "<script>alert('berhasil menghapus');document.location='data_nilai.php?message=delete';</script>";
}
?>