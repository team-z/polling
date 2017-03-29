<?php 
session_start();
if (empty($_SESSION['nis'])) {
	header("location:login.php");
}else{
	include "koneksi.php";
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <script src="js/jquery-3.1.1.min.js"></script>
	<title></title>
</head>
<body>
    <div class="navbar navbar-default navbar-static-top" style="padding: 2%;">
      <div class="container">
      	<center><h1 style="letter-spacing: 5px;">WEB BASED POLLING SYSTEM</h1></center>
      </div>
    </div><br><br><br>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>