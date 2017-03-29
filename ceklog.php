<?php 

include "koneksi.php";
if (isset($_POST['login'])) {
	$nis1=$_POST['nis'];
	$nis=mysqli_real_escape_string($nis1);
	$sql=mysqli_query($link,"SELECT * FROM pemilih WHERE nis = '$nis'");
	if ($sql) {
		$row=mysqli_fetch_array($sql);
		session_start();
		$_SESSION['nis']= $row['nis'];
		$_SESSION['username']= $row['nama'];
		$_SESSION['kelas']= $row['kelas'];
		$_SESSION['sekolah']= $row['sekolah'];
		header("location:home.php");
	}else{
		echo "gagal";
	}
}

?>