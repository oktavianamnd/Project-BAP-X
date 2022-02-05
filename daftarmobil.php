<?php

require 'koneksi.php';

$mobils = query("SELECT * FROM tb_mobil");
?>
<!DOCTYPE html>
<html>

<head>
	<title>Daftar Mobil</title>
	<style type="text/css">
		.header {
			width: 100%;
			height: auto;
			background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(image/navbar.jpg);
			background-size: cover;
			background-position: center;
			text-align: center;
			padding-top: 100px;
			padding-bottom: 10px;
		}

		.header span {
			color: white;
			font-family: sans-serif;
			font-weight: 100;
			font-size: 2.7em;
		}

		.header p {
			color: white;
			font-family: 'Courier New', Courier, monospace;
			font-weight: 100;
			font-size: 12px;
		}

		.header a {
			color: white;
			font-size: 12px;
			font-family: sans-serif;
			font-weight: bold;
			text-decoration: none;
		}

		.column {
			position: relative;
			background-color: white;
			border: 3px solid black;
			width: 380px;
			height: 85%;
			padding: 20px;
			transition: transform 0.5s;
		}

		.column:hover {
			transform: translateY(-10px);
		}

		.column span {
			color: black;
			font-family: calibri;
			font-size: 23px;
			font-weight: bold;
			margin-top: -10px;
		}

		.row {
			position: relative;
			border: 3px solid black;
			background-color: #bdc3c7;
			width: 380px;
			height: 35%;
		}

		.row i {
			margin-bottom: 17px;
		}

		.font {
			text-align: center;
		}

		.satu a {
			margin-bottom: -50px;
		}

		button {
			border: 3px solid black;
			font-weight: bold;
		}

		footer {
			position: fixed;
			left: 0;
			bottom: 0;
			padding-bottom: 10px;
			padding-top: 10px;
			width: 100%;
			background-color: black;
			font-weight: bold;
			font-family: 'Courier New', Courier, monospace;
			color: white;
			text-align: center;
		}
		.data_mobil {
			margin-top: 2rem;
			display: grid;
			grid-template-columns: repeat(3, 1fr);
		}
	</style>
</head>

<body>
	<div class="header">
		<span>Daftar Mobil</span>
		<p>FOUR Rentcar</p>
		<a href="home.html">Beranda</a><br>
	</div>
	<div class="data_mobil">
		<?php foreach ($mobils as $mobil) : ?>
			<?php
				$harga_supir = (int)$mobil['harga'];
				$harga_supir = $harga_supir / 2.5 + $harga_supir;
			?>
			<div class="column">
				<span><?= $mobil['merk'] ?></span>
				<br><br>
				<div class="row" style="background-image: url(image/<?= $mobil['gambar'] ?>); background-size: cover;  background-position: center;">
					<br><br><br><br><br><br><br><br><br><br><br><br><br>
					<i class="fas fa-tags"> Rp <?= $mobil['harga']  ?> /hari (dengan sewa supir Rp : <?= $harga_supir ?>)</i><br>
					<i class="fas fa-ad"> <?= $mobil['plat_no'] ?></i><br>
					<i class="fas fa-calendar"> <?= $mobil['tahun'] ?></i><br>
					<i class="fas fa-palette"> <?= $mobil['warna'] ?></i><br>
					<i class="fas fa-gas-pump"> <?= $mobil['bensin'] ?> bensin</i><br>
					<i class="fas fa-user-check"> Max <?= $mobil['penumpang'] ?> 0rang</i><br>
					<i class="fas fa-clock"> <?= $mobil['waktu'] ?></i><br>
				</div>
				<div class="font">
					<p></p>
					<?php 
						$kondisi = $mobil['kondisi']; 
					?>
					<?php if ($kondisi === "Tersedia") { ?>
						<a href="sewamobil.php?id=<?= $mobil['id_mobil'] ?>"><button type="submit" style="width: 100%; background: white;" style="color: black; text-decoration: none;">Tersedia + Sewa</button></a>	
					<?php }elseif ($kondisi === "Telah disewa") { ?>
						<button onclick="return alert('mobil tidak tersedia')">mobil tidak tersedia</button>
					<?php } ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
	<footer>
		&copy; Copyright 2021 by TIM FOUR SMK WIKRAMA BOGOR
	</footer>
	<script src="https://kit.fontawesome.com/6d2ea823d0.js"></script>
</body>

</html>