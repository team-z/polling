<?php 

include "koneksi.php";
if (isset($_POST['login'])) {
	$nis=$_POST['nis'];
	$sql=mysqli_query($link,"SELECT * FROM pemilih WHERE nis = '$nis'");
	if ($sql) {
		header("location:home.php");
	}else{
		echo "gagal";
	}
}

?>