<?php
include('config.php');
session_start();
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

		</ul>
		<script type="text/javascript">
			$('#menu').dropotron();
		</script>
	</div>

	<div id="page">
		<div id="content">
			<div class="contentbg">
				<h2>DATA SISWA</h2>
<table border="1" cellpadding="5" cellspacing="0">

    <tbody>

				</tbody>
			</table>
		</div>
	</div>
		<div id="sidebar-bg">
			<div id="sidebar">
				<ul>
			<h2 class="title">Input Data Siswa</h2>
\\\\\\
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
