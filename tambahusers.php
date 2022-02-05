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
                    <p style="color: black; font-size: 45px; font-weight: bold;">Tambah users</p>
                    </div>
            </nav>
            <form method="post" action="tambahkanusers.php">
                <table>
                    <tr>
                        <td style="padding-top: 20px;">Nama</td>
                        <td style="padding-top: 20px;"><input type="text" name="nama"></td>
                    </tr>
                    <tr>            
                        <td style="padding-top: 20px;">Username</td>
                        <td style="padding-top: 20px;"><input type="text" name="username"></td>
                    </tr>
                    
                    <tr>
                        <td style="padding-top: 20px;">Password</td>
                        <td style="padding-top: 20px;"><input type="text" name="password"></td>
                    </tr>
                    <tr>
                        <td style="padding-top: 20px;">Email</td>
                        <td style="padding-top: 20px;"><input type="text" name="email"></td>
                    </tr>
                    <tr>
                        <td style="padding-top: 20px;"><input type="submit" value="Tambahkan"></td>
                    </tr>   
                    <tr>
                        <td style="padding-top: 20px; width: 150px;"><a href="datausers.php"><button type="button">Kembali</button></a></td>
                    </tr>    
                </table>
            </form>
        </div>
<?php include "footer.php"; ?>   
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>    