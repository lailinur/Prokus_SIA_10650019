<?php
session_start();
include('config.php');

//menangkap data dari login
$nip = $_POST['nip'];
$pass_guru = $_POST['pass_guru'];


//cek data yang dikirim, apakah kosong atau tidak
if (empty($nip) && empty($pass_guru)) {
	//kalau username dan password kosong
	header('location:login_guru.php?error= 1');
	break;
} else if (empty($nip)) {
	//kalau username saja yang kosong
	header('location:login_guru.php?error= 2');
	break;
} else if (empty($nip)) {
	//kalau password saja yang kosong
	header('location:login_guru.php?error=3');
	break;
}
$perintahnya ="select * from guru where nip='$nip' and pass_guru='$pass_guru'";
$jalankanperintahnya= mysql_query($perintahnya); 
$ada_apa_enggak = mysql_num_rows($jalankanperintahnya);
//$data = mysql_fetch_array($ada_apa_enggak,$con);

if ($ada_apa_enggak == 1) {

	//header('Location: utama.php');
$_SESSION['nip'] = $_POST['nip'];
echo "<script>alert('Hi, $nip anda login sebagai guru');document.location='utama_guru.php';</script>";
//header('Location: utama_guru.php');

} else {
	//kalau username ataupun password tidak terdaftar di database
	header('location:login_guru.php?error= 4');
}
?>



