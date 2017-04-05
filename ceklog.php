<?php 
include "koneksi.php";
if (isset($_POST['login'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$sql=mysqli_query($link,"SELECT * FROM admin WHERE username='$user' AND password='$pass' ");
	if ($sql) {
		$data = mysqli_fetch_array($sql);
		session_start();
		$_SESSION['user'] = $data['username'];
		header("location:home.php");
	}
}

?>