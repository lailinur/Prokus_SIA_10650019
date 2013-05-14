<?php
session_start();
include 'config.php';
$user_admin = $_SESSION['user_admin'];



if (!isset($_SESSION['user_admin'])){
header("Location:./login_admin.php");
}
?>

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
					<li class="first"> <a href="data_siswa.php"><img src ="images/page_edit.png" />Input Data Siswa</a> </li>
					<li> <a href="data_guru.php"><img src ="images/page_edit.png" />Input Data Guru</a> </li>
					<li> <a href="data_jadwal.php"><img src ="images/page_edit.png" />Input Data Jadwal</a> </li>
					<li> <a href="data_kelas.php"><img src ="images/page_edit.png" />Input Data Kelas</a> </li>
					<li class="last"> <a href="data_berita.php"><img src ="images/page_edit.png" />Input Data Berita</a> </li>
			</ul>
		</li>
		</ul>
		<script type="text/javascript">
			$('#menu').dropotron();
		</script>
	</div>
	<!-- end #menu -->
	<!-- <div id="splash"><img src="images/pics01.jpg" width="980" height="300" alt="" /></div> -->
	<div id="page">
		<div id="content">
			<div class="contentbg">
				<h2>DATA PELAJARAN</h2>
				<table border="1" cellpadding="5" cellspacing="0">
				<tbody>
					<tr class='dark'>
						<td>No.</td>
						<td>Kode Mapel</td>
						<td>Nama Mapel</td>
						<td>NIP</td>
						<td colspan="2">Aksi</td>
					</tr>
				<?php
				$query = mysql_query("select * from mapel");

				$no = 1;
				while ($data = mysql_fetch_array($query)) {
				?>
					<tr class='light'>
					<td><?php echo $no; ?></td>
						<td><?php echo $data['kd_mapel']; ?></td>
						<td><?php echo $data['nm_mapel']; ?></td>
						<td><?php echo $data['nip']; ?></td>
						
						<td><a href="edit_mapel.php?kd_mapel=<?php echo $data['kd_mapel']; ?>"><img src ="images/edit.png" /></a></td>
						<td><a href="deleteM.php?kd_mapel=<?php echo $data['kd_mapel']; ?>"><img src ="images/bin.png" /></a></td>
					</tr>
				<?php
					$no++;
				}
				?>
				</tbody>
				</table>
			</div>
		</div>
		<div id="sidebar-bg">
			<div id="sidebar">
				<ul>
					<h2>Input Data Pelajaran</h2>
					<form name="input_data" action="insertM.php" method="post">
					
					<table border="0" cellpadding="5" cellspacing="0">
						<tbody>
						<tr class='dark'>
							<td>Kode Mapel</td>
							<td>:</td>
							<td><input type="text" name="kd_mapel" required="required" /></td>
						</tr>
						<tr class='light'>
							<td>Nama Mapel</td>
							<td>:</td>
							<td><input type="text" name="nm_mapel" required="required" /></td>
						</tr>
						<tr class='dark'>
							<td>NIP</td>
							<td>:</td>
							<td><input type="text" name="nip" required="required" /></td>
						</tr>
						<tr class='light'>
							<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
						</tr>
		
						</tbody>
					</table>

					</form>
				</ul>
			</div>
		</div>
		<div style="clear: both;">&nbsp;</div>
	</div>
</div>

<div id="footer">
	<p>2013. SIA SMP N 1 Bantul. Design by <a href="http://www.smpn1bantul.net">Herucakra</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>