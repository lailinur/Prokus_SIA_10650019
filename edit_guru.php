
<?php
session_start();
include 'config.php';
$user_admin = $_SESSION['user_admin'];



if (!isset($_SESSION['user_admin'])){
header("Location:./login_admin.php");
}
$id = $_GET['nip'];
 
$query = mysql_query("select * from guru where nip='$id'") or die(mysql_error());
 
$data = mysql_fetch_array($query);
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
					<li> <a href="data_jadwal.php"><img src ="images/page_edit.png" />Input Data Jadwal</a> </li>
					<li> <a href="data_mapel.php"><img src ="images/page_edit.png" />Input Data Mapel</a> </li>
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
		<div id="sidebar-bg">
			<div id="sidebar">
			<h2 class="title">Form Edit Data Guru</h2>

<form name="input_data" action="update_guru.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
        <tr class='dark'>
            <td>NIP</td>
            <td>:</td>
            <td><input type="text" name="nip" maxlength="20" required="required" value="<?php echo $data['nip']; ?>" /></td>
        </tr>
        <tr class='light'>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nm_guru" maxlength="20" required="required" value="<?php echo $data['nm_guru']; ?>" /></td>
        </tr>
        <tr class='dark'>
            <td>password</td>
            <td>:</td>
            <td><input type="password" name="pass_guru" required="required" value="<?php echo $data['pass_guru']; ?>" /></td>
        </tr>
        <tr class='light'>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><select name="jk">
				<option value="L">Laki-laki</option>
				<option value="P">Perempuan</option>
				</select></td>
        </tr>
        <tr class='dark'>
            <td>Agama</td>
            <td>:</td>
            <td><input type="date" name="agama"  required="required" value="<?php echo $data['agama']; ?>" /></td>
        </tr>
        <tr class='light'>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="year" name="alamat" maxlength="14" required="required" value="<?php echo $data['alamat']; ?>" /></td>
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

