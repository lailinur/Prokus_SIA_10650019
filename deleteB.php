<?php
include('config.php');
 
$id = $_GET['id_berita'];
 
$query = mysql_query("delete from berita where id_berita='$id'") or die(mysql_error());
 
if ($query) {
   echo "<script>alert('berhasil menghapus');document.location='view_berita.php?message=delete';</script>";
}
?>