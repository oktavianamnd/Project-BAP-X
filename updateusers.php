<?php 

include 'koneksi.php';
 

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];


mysqli_query($koneksi,"update login set Nama='$nama', Username='$username', Password='$password', Email='$email' where Id='$id'");
 

header("location:datausers.php");
 
?>