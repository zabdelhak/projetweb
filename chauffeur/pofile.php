<?php
session_start();
include("../fonction/session.php");
include("../fonction/condb.php");
$user=$_SESSION["username"];
//echo $user;
$res="SELECT user_name,user_fname,last_cnx,iduser from user where  iduser=$user";
// echo $res;
$name=$conn->query($res);
// $rep= mysqli_fetch_array($name);
$rows=$name->fetch_assoc();
// var_dump ($rows);
// print_r($rows['id_client']);
// $idclient=$rows['id_client']
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>profile</title>

    <!-- Custom fonts for this template-->
    <link href="../App/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../App/css/sb-admin-2.min.css" rel="stylesheet">

</head>
 <body>
 <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>

<!-- Topbar Search -->
<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <!-- Dropdown - Messages -->
    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $rows["user_name"]." ".$rows["user_fname"];?></span>
                                 <img class="img-profile rounded-circle"
                                    src="../App/imge/undraw_profile.svg">
                              
        </a>
      <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a id="consulter" class="dropdown-item" href="consulter.php">
                                    <i class="fa fa-home fa-sm fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                                    accuile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="dex.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
        </div>
    </li>

</ul>

</nav>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">pret a Déconncté?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">voulez vous vos deconnectez ?.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="dex.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                            <th>NOM</th>
                                            <th>PRENOM</th>
                                            <th>Date de derniere connexion</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>NOM</th>
                                            <th>PRENOM</th>
                                            <th>Date de derniere connexion</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <td><?php echo $rows['user_name']?></td>
                                        <td><?php echo $rows['user_fname']?></td>
                                        <td><?php echo $rows['last_cnx']?></td>                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
 </body>
   <!-- Bootstrap core JavaScript-->
   <script src="../App/vendor/jquery/jquery.min.js"></script>
    <script src="../App/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../App/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../App/jss/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../App/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../App/js/demo/chart-area-demo.js"></script>
    <script src="../App/js/demo/chart-pie-demo.js"></script>
</html>
