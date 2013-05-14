<?php
session_start();
include 'config.php';
$nip = $_SESSION['nip'];



if (!isset($_SESSION['nip'])){
header("Location:./login_guru.php");
}
?>

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
		<div id="content">
			<div class="contentbg">
			<h2>DATA NILAI SISWA</h2>
			<table border="1" cellpadding="5" cellspacing="0">
			<tbody>
				<tr class='dark'>
					<td>No.</td>
					<td>NIS</td>
					<td>Kode Mapel</td>
					<td>Tahun Ajar</td>
					<td>Semester</td>
					<td>Nilai</td>
					<td colspan="2">Aksi</td>
				</tr>
			<?php
			$query = mysql_query("select * from nilai");
		 
			$no = 1;
			while ($data = mysql_fetch_array($query)) {
			?>
				<tr class='light'>
				<td><?php echo $no; ?></td>
					<td><?php echo $data['nis']; ?></td>
					<td><?php echo $data['kd_mapel']; ?></td>
					<td><?php echo $data['th_ajar']; ?></td>
					<td><?php echo $data['semester']; ?></td>
					<td><?php echo $data['nilai']; ?></td>
					
					<td><a href="edit_nilai.php?no=<?php echo $data['no']; ?>"><img src ="images/edit.png" /></a></td>
					<td><a href="deleteN.php?no=<?php echo $data['no']; ?>"><img src ="images/bin.png" /></a></td>
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
			<h2 class="title">Input Nilai Siswa</h2>
			<form name="input_data" action="insertN.php" method="post">
			<table border="0" cellpadding="5" cellspacing="0">
				<tbody>
					<tr class='dark'>
						<td>Nis</td>
						<td>:</td>
						<td><input type="text" name="nis" required="required" /></td>
					</tr>
					<tr class='light'>
						<td>Kode Mapel</td>
						<td>:</td>
						<td><input type="text" name="kd_mapel" required="required"> </textarea></td>
					</tr>
					<tr class='dark'>
						<td>Kode Kelas</td>
						<td>:</td>
						<td><input type="text" name="kd_kelas" required="required"> </textarea></td>
					</tr>
					<tr class='light'>
						<td>Tahun Ajar</td>
						<td>:</td>
						<td><input type="year" name="th_ajar" required="required" /></td>
					</tr>
					<tr class='dark'>
					<td>Semester</td>
					<td>:</td>
						<td><select name="semester">
							<option value="Genap">Genap</option>
							<option value="Ganjil">Ganjil</option>
							</select>
						</td>
					</tr>
					<tr class='light'>
						<td>Nilai</td>
						<td>:</td>
						<td><input type="text" name="nilai" required="required" /></td>
					</tr>
					<tr class='dark'>
						<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
					</tr>
					
				</tbody>
			</table>

</form>
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