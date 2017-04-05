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
	<title>Data Kandidat</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="beranda.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
</head>
<body>
     <div id="wrapper">
     	<?php include "sidebar.php"; ?>
        <div id="page-content-wrapper">
        	<div class="container-fluid">
         <?php include "admin-nav.php"; ?>
         <br>
            <div class="row">
            	
            </div>
        	</div>
        </div>
     </div>
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