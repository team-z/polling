<?php 
include "koneksi.php";
$sql=mysqli_query($link,"SELECT SUM(total_suara) FROM suara");
$fetch=mysqli_fetch_array($sql);
echo $fetch['SUM(total_suara)'];
?>