<?php
session_start();
include 'config.php';
$user_admin = $_SESSION['user_admin'];



if (!isset($_SESSION['user_admin'])){
header("Location:./login_admin.php");
}
$conn=mysql_connect("localhost", "root", "");
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
    echo '<h3>Berhasil menambah data!</h3>';
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
					<li> <a href="data_mapel.php"><img src ="images/page_edit.png" />Input Data Mapel</a> </li>
					<li class="last"> <a href="data_berita.php"><img src ="images/page_edit.png" />Input Data Berita</a> </li>
			</ul>
			</li>
		</ul>
		<script type="text/javascript">
			$('#menu').dropotron();
		</script>
	</div>
	<div id="page">
		<div id="content">
			<div class="contentbg">
				<h2>DATA KELAS</h2>
				<tbody>
					<table border="1" cellpadding="5" cellspacing="0">
        <tr class='dark'>
			<td>No.</td>
			<td>Kode Kelas</td>
			<td>Nama Kelas</td>
			<td colspan="2">Aksi</td>
        </tr>

    <?php
    $query = mysql_query("select * from kelas");

    $no = 1;
    while ($data = mysql_fetch_array($query)) {
    ?>
        <tr class='light'>
		<td><?php echo $no; ?></td>
            <td><?php echo $data['kd_kelas']; ?></td>
			<td><?php echo $data['nm_kelas']; ?></td>
            
            <td><a href="edit_kelas.php?kd_kelas=<?php echo $data['kd_kelas']; ?>"><img src ="images/edit.png" /></a></td>
			<td><a href="deleteK.php?kd_kelas=<?php echo $data['kd_kelas']; ?>"><img src ="images/bin.png" /></a></td>
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
			<h2 class="title">Input Data Kelas</h2>
<form name="input_data" action="insertK.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
        <tr class='dark'>
            <td>Kode Kelas</td>
            <td>:</td>
            <td><input type="text" name="kd_kelas" required="required" /></td>
        </tr>
        <tr class='light'>
            <td>Nama Kelas</td>
            <td>:</td>
            <td><input type="text" name="nm_kelas" required="required" /></td>
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

