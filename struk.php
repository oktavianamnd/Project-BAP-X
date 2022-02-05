<?php

require 'koneksi.php';

$id = (isset($_POST['id'])) ? $_POST['id'] : null;

// DATA DARI FORM INPUT DATASEWA.PHP
$dataPenyewa = (isset($_POST['pesan'])) ? $_POST : null;

// CEK DATA SEWA BERHASIL / GAGAL
$cek = false;
$sewasupir = $_POST['sewasupir'];

// INSERT DATA PESAN KE DATABASE
if (isset($_POST['pesan'])) {
    $id = $_POST['id'];
    $nama_penyewa = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];
    $pesan = $_POST['pesan'];


    // CEK JIKA INPUT KOSONG
    if (!empty($nama_penyewa) && !empty($tanggal) && !empty($alamat) && !empty($no_telp) && !empty($pesan)) {

        $query = "INSERT INTO tb_transaksi VALUES('', '$nama_penyewa', '$tanggal', '$alamat', '$no_telp', '$pesan')";


        $result = mysqli_query($koneksi, $query);


        if (mysqli_affected_rows($koneksi) === 1) {
            echo "<script>alert('Sewa berhasil')</script>";
            $cek = true;
        } else {
            $cek = false;
            echo "<script>
                alert('sewa gagal');
                window.location.href = `datasewamobil.php?id=$id`;
            </script>";
        }
    } else {
        echo "<script>
        alert('data kosong');
        window.location.href = `datasewamobil.php?id=$id`;
    </script>";
    }
}

$detailMobil = query("SELECT merk, harga, plat_no, tahun, warna, bensin, penumpang, waktu FROM tb_mobil WHERE id_mobil = '$id'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk sewa mobil</title>
    <style type="text/css">
        span {
            margin-bottom: 10px;
        }

        .logo {
            width: 120px;
            color: black;
        }

        label {
           position: fixed;
           padding-top: 19px;
           font-size: 40px;
           font-weight: bold;
        }

        p {
            font-size: 20px;
            font-weight: bold;
        }

        span {
            position: fixed;
            padding-top: 59px;
            font-size: 17px;
            font-weight: bold;
            border-bottom: 5px solid black;
        }
    </style>
</head>

<body>

    <!-- MUNCUL STRUK JIKA DATA SEWA BERHASIL -->
    <img src="image/logohitam.png" class="logo">
    <label>FOUR Rentcar</label>
    <span>Villa Mutiara Lido Blok F 15 no 23, Cigombong-Bogor <br> No.telp 0895355211149 atau 081213817229</span>
    <br><br><br>
    <?php if ($cek) : ?>
        <table>
                <p>Data Pesanan :</p>
                <tr>    
                    <td>Nama</td>
                    <td>:</td>
                    <td> <?= $dataPenyewa['nama'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal pesan</td>
                    <td>:</td>
                    <td> <?= $dataPenyewa['tanggal'] ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td> <?= $dataPenyewa['alamat'] ?></td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td>:</td>
                    <td> <?= $dataPenyewa['no_telp'] ?></td>
                </tr>

            <?php foreach ($detailMobil as $mobil) : ?>
                <?php
                $harga_supir = (int)$mobil['harga'];
                $harga_supir = $harga_supir / 2.5 + $harga_supir;
                ?>

                 <tr>
                    <td>Total Harga</td>
                    <td>:</td>
                    <td>
                        <?php 
                            if ($sewasupir === 'y') {
                                echo $harga_supir;
                            } else {
                                echo $mobil['harga'];
                            }
                         ?>
                    </td>
                </tr>
        </table><br><br>
        <table>
                <p>Spesifikasi Pesanan :</p>
                <tr>
                    <td>Merk Mobil</td>
                    <td>:</td>
                    <td> <?= $mobil['merk'] ?></td> 
                </tr>
                <tr>
                    <td>Plat Nomor</td>
                    <td>:</td>
                    <td> <?= $mobil['plat_no'] ?></td>
                </tr>
                <tr>   
                    <td>Tahun</td>
                    <td>:</td>
                    <td> <?= $mobil['tahun'] ?></td>  
                </tr>
                <tr>
                    <td>Warna</td>
                    <td>:</td>
                    <td> <?= $mobil['warna'] ?></td>
                </tr>
                <tr>    
                    <td>Bensin</td>
                    <td>:</td>
                    <td> <?= $mobil['bensin'] ?></td>
                </tr>
                <tr>    
                    <td>Penumpang</td>
                    <td>:</td>
                    <td> <?= $mobil['penumpang'] ?></td>
                </tr>
                <tr> 
                    <td>Waktu</td>
                    <td>:</td>
                    <td> <?= $mobil['waktu'] ?></td>
                </tr>    
            <?php endforeach; ?>
        </table>
          
    <?php endif; ?>
    <br><br>
    <p>Terimakasih telah mempercayai kami dan selamat menikmati perjalanan anda <br> Salam manis dari FOUR Rentcar</p>
    
    <button onclick="window.print()">Print</button>
</body>

</html>