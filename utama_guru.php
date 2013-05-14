<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Halaman Guru</title>
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
		<li><a href="data_nilai.php"><img src ="images/users.png" />Input Data Nilai siswa</a>
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
			<?
session_start();
include 'config.php';
$nip = $_SESSION['nip'];


if (!isset($_SESSION['nip'])){
header("Location:./login_guru.php");
}
$sql="select * from guru where nip='$nip'";
$hasil=mysql_query($sql);
while($row=mysql_fetch_array($hasil)){

echo "Nama : ".$row['nm_guru'];
echo "<br>";
echo "<br>Alamat : ".$row['alamat'];
echo "<br>";
echo "<br>Agama : ".$row['agama'];
echo "<br>";
echo "<br>Jenis Kelamin : ".$row['jk'];
echo "<br>";

}
?>

		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
</div> -->
<div id="footer">
	<p>2013. SIA SMP N 1 Bantul. Design by <a href="http://www.smpn1bantul.net">Herucakra</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
