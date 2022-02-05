<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Admin FOUR Rentcar</title>
    <style type="text/css">
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


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="style.css">

    
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>FOUR Rentcar</h3>
            </div>

            <ul class="list-unstyled components">
             
                <li>
                    <a href="datamobil.php">Data mobil</a>                    
                </li>
                <li>
                    <a href="datapenyewa.php">Data penyewa</a>
                </li>
                <li>
                    <a href="datausers.php">Data Users</a>
                </li>
                <li class="active">
                    <a href="#adminSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Kelola akun</a>
                    <ul class="collapse list-unstyled" id="adminSubmenu">
                        <li>
                            <a href="login.php">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            
        </nav>