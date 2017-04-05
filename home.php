<?php 
session_start();
if (empty($_SESSION['user'])) {
	header("location:login.php");
}else{
	include "koneksi.php";
$sql=mysqli_query($link,"SELECT SUM(total_suara) FROM suara");
$fetch=mysqli_fetch_array($sql);

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="morris/morris.css">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="beranda.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
</head>
<body>
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php"; ?>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
            <?php include "admin-nav.php"; ?>
            <br>
            <div class="row animated slideInLeft">
               <div class="col-md-4">
                   <div class="panel panel-default">
                      <div class="panel-body" style="border-left: 10px solid red;box-shadow: 0px 5px 10px rgba(0,0,0,0.3);">
                          <div class="row">
                            <div class="col-md-3">
                              <h1 align="center"><i class="fa fa-user"></i></h1>
                            </div>
                            <div class="col-md-9">
                              <h3 style="letter-spacing: 5px;">DATA ADMIN</h3>
                              <p style="font-size: 20px;">3 ORANG</p>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                  <div class="panel panel-default">
                      <div class="panel-body" style="border-left: 10px solid green;box-shadow: 0px 5px 10px rgba(0,0,0,0.3);">
                          <div class="row">
                            <div class="col-md-3">
                              <h1 align="center"><i class="fa fa-user"></i></h1>
                            </div>
                            <div class="col-md-9">
                              <h3 style="letter-spacing: 5px;">DATA KANDIDAT</h3>
                              <p style="font-size: 20px;">6 Orang</p>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-4">
                  <div class="panel panel-default">
                      <div class="panel-body" style="border-left: 10px solid yellow;box-shadow: 0px 5px 10px rgba(0,0,0,0.3);">
                          <div class="row">
                            <div class="col-md-3">
                              <h1 align="center"><i class="fa fa-bullhorn"></i></h1>
                            </div>
                            <div class="col-md-9">
                              <h3 style="letter-spacing: 5px;">TOTAL SUARA</h3>
                              <p style="font-size: 20px;"><?php echo $fetch['SUM(total_suara)']; ?> Suara</p>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="row animated fadeInDown">
              <div class="col-md-8">
                <div class="panel panel-default">
                  <div class="panel-heading"><h3><i class="fa fa-bar-chart fa-stack"></i>Grafik Suara</h3></div>
                  <div class="panel-body">
                    <div id="linechart"></div>
                  </div>
                  <div class="panel-footer">
                    <p>Maded By : Highchart</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="panel panel-default">
                  <div class="panel-heading"><h3><i class="fa fa-bell fa-stack"></i> Notification</h3></div>
                  <div class="panel-body">
                    
                  </div>
                  <div class="panel-footer">
                    <p>Maded By : Highchart</p>
                  </div>
                </div>
              </div>
            </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chart.js"></script>
    <script src="js/app.js"></script>
    <?php
      $sql=mysqli_query($link,"SELECT nama from kandidat");
      $res=mysqli_query($link,"SELECT total_suara from suara");
    ?>
    <script type="text/javascript">
    $(function() {
                "use strict";
                //BAR CHART
                var data = {
                    labels: [<?php while ($ko=mysqli_fetch_array($sql)) { echo "'".$ko["nama"]."',"; }?>],
                    datasets: [
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(151,187,205,0.2)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: [<?php while ($gor=mysqli_fetch_array($res)) { echo $gor["total_suara"].","; } ?>]
                        }
                    ]
                };
            new Chart(document.getElementById("linechart").getContext("2d")).Line(data,{
                responsive : true,
                maintainAspectRatio: false,
            });

            });
            // Chart.defaults.global.responsive = true;
</script>
    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>
</html>