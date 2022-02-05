<?php 

$sname= "localhost";
$unmae= "root";
$password= "";

$db_name = "rentalkendaraan";
$koneksi = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$koneksi) {
 	echo "Connection Failed!";
 } 
