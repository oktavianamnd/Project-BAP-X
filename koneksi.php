<?php
$koneksi = mysqli_connect("localhost", "root", "", "rentalkendaraan");

if (mysqli_connect_error()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// TAMBAH DATA MOBIL
function tambah($data)
{
    global $koneksi;
    $merk = htmlspecialchars($data["merk"]);
    $harga = htmlspecialchars($data["harga"]);
    $plat_no = htmlspecialchars($data["plat_no"]);
    $tahun = htmlspecialchars($data["tahun"]);
    $warna = htmlspecialchars($data["warna"]);
    $bensin = htmlspecialchars($data["bensin"]);
    $penumpang = htmlspecialchars($data["penumpang"]);
    $waktu = htmlspecialchars($data["waktu"]);
    $kondisi = htmlspecialchars($data["kondisi"]);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO tb_mobil
				VALUES
				('', '$merk', '$gambar', '$harga', '$plat_no', '$tahun', '$warna', '$bensin', '$penumpang', '$waktu', '$kondisi')
			";
    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

// EDIT DATA MOBIL
function ubah($data)
{
    global $koneksi;
    $id = $data["id"];
    $merk = htmlspecialchars($data["merk"]);
    $harga = htmlspecialchars($data["harga"]);
    $plat_no = htmlspecialchars($data["plat_no"]);
    $tahun = htmlspecialchars($data["tahun"]);
    $warna = htmlspecialchars($data["warna"]);
    $bensin = htmlspecialchars($data["bensin"]);
    $penumpang = htmlspecialchars($data["penumpang"]);
    $waktu = htmlspecialchars($data["waktu"]);
    $kondisi = htmlspecialchars($data["kondisi"]);
    $gambar_lama = htmlspecialchars($data["gambar_lama"]);

    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambar_lama;
    } else {
        $gambar = upload();
    }



    $query = "UPDATE `tb_mobil` SET `merk`='$merk',`gambar`='$gambar',`harga`='$harga',`plat_no`='$plat_no',`tahun`='$tahun',`warna`='$warna',`bensin`='$bensin',`penumpang`='$penumpang',`waktu`='$waktu',`kondisi`='$kondisi' WHERE id_mobil = '$id'
                ";


    mysqli_query($koneksi, $query);

    return mysqli_affected_rows($koneksi);
}

// HAPUS DATA MOBIL
function hapus($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM tb_mobil WHERE id_mobil = $id ");
    return mysqli_affected_rows($koneksi);
}


function upload()
{

    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_name = $_FILES['gambar']['tmp_name'];

    if ($error === 4) {
        echo "<script>
				alert ('pilih gambar terlebih dahulu');
			</script>";
        return false;
    }

    $ekstensi_gambar_valid = ['jpg', 'jpeg', 'png'];
    $ekstensi_gambar = explode('.', $nama_file);
    $ekstensi_gambar = strtolower(end($ekstensi_gambar));
    if (!in_array($ekstensi_gambar, $ekstensi_gambar_valid)) {
        echo "<script>
				alert ('yang anda upload bukan gambar');
			</script>";

        return false;
    }

    if ($ukuran_file > 1000000) {
        echo "<script>
				alert ('ukuran gambar terlalu besar');
			</script>";
    }

    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_gambar;

    move_uploaded_file($tmp_name, 'image/' . $nama_file_baru);

    return $nama_file_baru;
}
