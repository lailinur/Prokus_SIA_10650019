<?php
session_start();
include('config.php');

//menangkap data dari login
$user_admin = $_POST['user_admin'];
$pass_admin = $_POST['pass_admin'];


//cek data yang dikirim, apakah kosong atau tidak
if (empty($user_admin) && empty($pass_admin)) {
	//kalau username dan password kosong
	header('location:login_admin.php?error= 1');
	break;
} else if (empty($user_admin)) {
	//kalau username saja yang kosong
	header('location:login_admin.php?error= 2');
	break;
} else if (empty($user_admin)) {
	//kalau password saja yang kosong
	header('location:login_admin.php?error=3');
	break;
}
$perintahnya ="select * from admin where user_admin='$user_admin' and pass_admin='$pass_admin'";
$jalankanperintahnya= mysql_query($perintahnya); 
$ada_apa_enggak = mysql_num_rows($jalankanperintahnya);

if ($ada_apa_enggak == 1) {

$_SESSION['user_admin'] = $_POST['user_admin'];
echo "<script>alert('Hi, $user_admin anda login sebagai Admin');document.location='utama_admin.php';</script>";
//header('Location: utama_admin.php');

} else {
	//kalau username ataupun password tidak terdaftar di database
	header('location:login_admin.php?error= 4');
}
?>
