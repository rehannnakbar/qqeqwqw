<!DOCTYPE html>
<html>
<head>
	<title> HALAMAN WEB PEDULI DIRI </title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>

<div class="content">
	<header>
		<h1 class="judul"> PEDULI DIRI</h1>
		<h3 class="deskripsi"> website peduli diri</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="catatan_perjalanan.php?page=tentang">CATATAN PERJALANAN</a>
			<li><a href="isi_data.php?page=tutorial">ISI DATA</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "home.php";
				break;
			case 'catatan.perjalanan':
				include "catatan_perjalanan.php";
				break;
			case 'isi_data':
				include "isi_data.php";
				break;			
			
		}
	}else{
		include "home.php";
	}

	
 
	 ?>
	 	<form action="logouttttt.php"></form>
	    <H1 align="center"><a href="logouttttt.php" class="btn btn-info">logout</a></H1>

	</div>
</div>
</body>
</html>