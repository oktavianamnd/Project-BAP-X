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
                    <p style="color: black; font-size: 45px; font-weight: bold;">Edit users</p>
                    </div>
            </nav>
            <?php
            include 'koneksi.php';
            $id = $_GET['Id'];
            $data = mysqli_query($koneksi,"select * from login where id='$id'");
            while($d = mysqli_fetch_array($data)){
                ?>
                <form method="post" action="updateusers.php">
                    <table>
                        <tr>            
                            <td>Nama</td>
                            <td>
                                <input type="hidden" name="id" value="<?php echo $d['Id']; ?>">
                                <input type="text" name="nama" value="<?php echo $d['Nama']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;">Username</td>
                            <td style="padding-top: 20px;"><input type="text" name="username" value="<?php echo $d['Username']; ?>"></td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;">Password</td>
                            <td style="padding-top: 20px;"><input type="text" name="password" value="<?php echo $d['Password']; ?>"></td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;">Email</td>
                            <td style="padding-top: 20px;"><input type="text" name="email" value="<?php echo $d['Email']; ?>"></td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;"><input type="submit" value="Update"></td>
                        </tr>
                        <tr>
                            <td style="padding-top: 20px;"><a href="datausers.php"><button type="button">Kembali</button></a></td>
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