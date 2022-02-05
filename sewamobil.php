<?php

require 'koneksi.php';
$id = (isset($_GET['id'])) ? $_GET['id'] : null;

?>
<!DOCTYPE html>
<html>

<head>
	<title>Sewa mobil</title>
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

		.card {
			background: white;
			border: 3px solid black;
			height: 330px;
			width: 600px;
			padding-top: 30px;
			margin-top: 60px;
			border-radius: 15px;
		}

		.card label {
			font-weight: bold;
		}

		.card input {
			width: 200px;
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
	</style>
</head>

<body>
	<div class="header">
		<span>Sewa Mobil</span>
		<p>FOUR Rentcar</p>
		<a href="daftarmobil.php">Daftar Mobil</a><br>
	</div>

	<center>
	<div class="card">
		<form action="struk.php" method="POST">
			<input type="hidden" name="id" id="id" value="<?= $id ?>">
			<label for="nama">Nama Pemesan</label>
			<input type="text" name="nama" id="nama" style="margin-left: 150px;"><br><br>

			<label for="tanggal">Tanggal Pesan</label>
			<input type="date" name="tanggal" id="tanggal" style="margin-left: 158px;"><br><br>

			<label for="alamat">Alamat Pemesan</label>
			<input type="text" name="alamat" id="alamat" style="margin-left: 142px;"><br><br>

			<label for="no_telp">No.telp Pemesan</label>
			<input type="number" name="no_telp" id="no_telp" style="margin-left: 143px;"><br><br>

			<label for="sewasupir" style="margin-right: 120px;">Sewa dengan supir?</label>
			<select name="sewasupir" id="sewasupir" style="width: 210px;">
				<option value="" disabled="Sewa supir"></option>
				<option value="y">Ya</option>
				<option value="t">Tidak</option>
			</select><br><br>

			<label for="pesan">Pesan yang ingin disampaikan</label>
			<input type="text" name="pesan" id="pesan" style="margin-left: 50px;"><br><br>

			<input type="submit" name="submit" value="Pesan mobil" style="color: white; background: black;"><br><br>
			<a href="daftarmobil.php"><button type="button" style="width: 200px; color: white; background: black;">Kembali</button></a>
		</form>
	</div>
	</center>

	<footer>
		&copy; Copyright 2021 by TIM FOUR SMK WIKRAMA BOGOR
	</footer>
</body>

</html>