<?php include "header.php"; ?>

        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <p style="color: black; font-size: 45px; font-weight: bold;">Edit penyewa</p>
                    </div>
            </nav>
            <?php
            include 'koneksi.php';
            $id = $_GET['Id'];
            $data = mysqli_query($koneksi,"select * from tb_transaksi where id='$id'");
            while($d = mysqli_fetch_array($data)){
                ?>
                <form method="post" action="updatepenyewa.php">
                    <table>
                        <tr>            
                            <td>Nama Pemesan</td>
                            <td>
                                <input type="hidden" name="id" value="<?php echo $d['Id']; ?>">
                                <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;">Tanggal Pesan</td>
                            <td style="padding-top: 20px;"><input type="date" name="tanggal" value="<?php echo $d['tanggal']; ?>"></td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;">Alamat Pemesan</td>
                            <td style="padding-top: 20px;"><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;">No.telp Pemesan</td>
                            <td style="padding-top: 20px;"><input type="number" name="no_telp" value="<?php echo $d['no_telp']; ?>"></td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;">Pesan yang ingin disampaikan</td>
                            <td style="padding-top: 20px;"><input type="text" name="pesan" value="<?php echo $d['pesan']; ?>"></td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px; width: 150px;"><input type="submit" value="Update"></td>
                        </tr>   
                        <tr>
                            <td style="padding-top: 20px; width: 150px;"><a href="datapenyewa.php"><button type="button">Kembali</button></a></td>
                        </tr>     
                    </table>
                </form>
                <?php 
            }
            ?> 
        </div>
<?php include "footer.php"; ?>   
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>    