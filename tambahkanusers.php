<?php 
include 'koneksi.php';
         

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
         

mysqli_query($koneksi,"insert into login(Nama, Username, Password, Email) values('$nama','$username','$password','$email')");

header("location:datausers.php");
 
?>