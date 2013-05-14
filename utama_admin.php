<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Halaman Admin</title>
<link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="jquery.dropotron-1.0.js"></script>
</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
				<h1><a href="#">SIA SMP N 1 Bantul</a></h1>
				<p>Jl. RA. Kartini No. 44 Bantul 55714 Telp./Fax.(0274) 367319 Yogyakarta</p>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu-wrapper">
		<ul id="menu">
		<li><a href="logout.php"><img src ="images/home.png" /><span>Logout</span></a></li>
		<li><img src ="images/nilai.png" /><span>Input</span></a>
			<ul>
					<li class="first"> <a href="data_siswa.php"><img src ="images/users.png" />Input Data Siswa</a> </li>
					<li> <a href="data_guru.php"><img src ="images/email.png" />Input Data Guru</a> </li>
					<li> <a href="data_jadwal.php"><img src ="images/email.png" />Input Data Jadwal</a> </li>
					<li> <a href="data_mapel.php"><img src ="images/email.png" />Input Data Mapel</a> </li>
					<li> <a href="data_kelas.php"><img src ="images/email.png" />Input Data Kelas</a> </li>
					<li class="last"> <a href="data_berita.php"><img src ="images/users.png" />Input Data Berita</a> </li>
			</ul>
		</li>
		<li><a href="jadwal.php"><img src ="images/cal.png" /><span>Jadwal</span></a></li>
		</ul>
		<script type="text/javascript">
			$('#menu').dropotron();
		</script>
	</div>
	<!-- end #menu -->
	<!-- <div id="splash"><img src="images/pics01.jpg" width="980" height="300" alt="" /></div> -->
	<div id="page">

			<h2 class="title">SELAMAT DATANG</h2>

				<?php
//include 'userheader.php';
session_start();
include 'config.php';
$user_admin = $_SESSION['user_admin'];



if (!isset($_SESSION['user_admin'])){
header("Location:./login_admin.php");
}
$conn=mysql_connect("localhost", "root", "");
mysql_select_db("smp");
$sql="select * from admin where user_admin='$user_admin'";
$hasil=mysql_query($sql);
while($row=mysql_fetch_array($hasil)){

echo "Nama : ".$row['user_admin'];
echo "<br>";
echo "Anda login sebagai admin.";
echo "<br>";
echo "Anda mempunyai hak untuk menginputkan data-data dalam sistem informasi akademik ini";
echo "<br>";
echo "<br>";
echo "<br>";




}
?>

		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>2013. SIA SMP N 1 Bantul. Design by <a href="http://www.smpn1bantul.net">Herucakra</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
