<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Halaman Siswa</title>
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
		<li><a href="nilai.php"><img src ="images/nilai.png" /><span>Nilai</span></a></li>
		<li><a href="jadwalS.php"><img src ="images/cal.png" /><span>Jadwal</span></a></li>
		</ul>
		<script type="text/javascript">
			$('#menu').dropotron();
		</script>
	</div>
	<!-- end #menu -->
	<!-- <div id="splash"><img src="images/pics01.jpg" width="980" height="300" alt="" /></div> -->
	<div id="page">
	<h2 class="title"><a href="#">Jadwal Mata Pelajaran</a></h2>


<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
			<td>No.</td>
            <td>NIS</td>
			<td>Kode Mapel</td>
			<td>Hari</td>
			<td>Jam</td>
            <td>NIP</td>
            <td>Tahun Ajar</td>
			
        </tr>
    </thead>
    <tbody>
    <?php
//include 'userheader.php';
session_start();
include 'config.php';
$nis = $_SESSION['nis'];



if (!isset($_SESSION['nis'])){
header("Location:./login_siswa.php");
}
    $query = mysql_query("select * FROM jadwal WHERE nis=$nis") or die(mysql_error());
	//$hasil=mysql_query($query);
    $no = 1;
    while ($data = mysql_fetch_array($query)) {
    ?>
        <tr>
		<td><?php echo $no; ?></td>
            <td><?php echo $data['nis']; ?></td>
            <td><?php echo $data['kd_mapel']; ?></td>
			<td><?php echo $data['hari']; ?></td>
            <td><?php echo $data['jam']; ?></td>
            <td><?php echo $data['nip']; ?></td>
			<td><?php echo $data['th_ajar']; ?></td>
            
        </tr>
    <?php
        $no++;
    }
    ?>



    </tbody>
</table>
<div style="clear: both;">&nbsp;</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>2013. SIA SMP N 1 Bantul. Design by <a href="http://www.smpn1bantul.net">Herucakra</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>