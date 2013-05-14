<?php
session_start();

include('config.php');

//menangkap data dari login
$nis = $_POST['nis'];
$password = $_POST['password'];


//cek data yang dikirim, apakah kosong atau tidak
if (empty($nis) && empty($password)) {
	//kalau username dan password kosong
	header('location:login_siswa.php?error= 1');
	break;
} else if (empty($nis)) {
	//kalau username saja yang kosong
	header('location:login_siswa.php?error= 2');
	break;
} else if (empty($nis)) {
	//kalau password saja yang kosong
	header('location:login_siswa.php?error=3');
	break;
}
$perintahnya ="select * from siswa where nis='$nis' and password='$password'";
$jalankanperintahnya= mysql_query($perintahnya); 
$ada_apa_enggak = mysql_num_rows($jalankanperintahnya);

if ($ada_apa_enggak == 1) {

$_SESSION['nis'] = $_POST['nis'];
echo "<script>alert('Hi, $nis anda login bagai siswa');document.location='utama_siswa.php';</script>";
//header('Location: utama_siswa.php');

} else {
	//kalau username ataupun password tidak terdaftar di database
	header('location:login_siswa.php?error= 4');
}
?>



