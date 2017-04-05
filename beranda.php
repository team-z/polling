<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman User</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="beranda.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand" style="background-color: black;">
                    <a href="#">
                        Pemilos
                    </a>
                </li>
                <li>
                    <a href="beranda.html"><i class="fa fa-home fa-2x fa-stack"></i>Beranda</a>
                </li>
                <li>
                    <a href="tata_cara.html"><i class="fa fa-list fa-2x fa-stack"></i>Tata Cara Memilih</a>
                </li>
                <li>
                    <a href="peraturan.html"><i class="fa fa-list-alt fa-2x fa-stack"></i>Peraturan Memilih</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="jumbotron">
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
                        <center><h3>Kandidat Ketua OSIS</h3>
                        <h4>SMK Negeri 1 Lumajang</h4></center>

                    </div>   
                    </div>
                </div>
                <div class="row">
                <?php
include("koneksi.php");
$sql=mysqli_query($link,"SELECT * FROM kandidat");
while ($data=mysqli_fetch_array($sql)) {
	
?>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <center><img src="<?php echo $data['foto']; ?>" height="100" width="100"></center>
                            <div class="caption">
                                <h4><?php echo $data['nama']; ?></h4>
                                    <p>Motto: <?php echo $data['motto']; ?></p>
                                         <a href="proses.php?id=<?php echo $data['id']; ?>" class="btn btn-default">Pilih</a>
                            </div>
                    </div>
                </div>
                <?php } ?>
                </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
