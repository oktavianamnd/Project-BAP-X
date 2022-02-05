<?php 

include 'koneksi.php';
 

$id = $_POST['id'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$pesan = $_POST['pesan'];


mysqli_query($koneksi,"update tb_transaksi set nama='$nama', tanggal='$tanggal', alamat='$alamat', no_telp='$no_telp', pesan='$pesan' where Id='$id'");
 

header("location:datapenyewa.php");
 
?>