<?php 
   include "koneksi.php";
   $id=$_GET['id'];
   $tampil=mysqli_query($link,"SELECT * from suara where id_kandidat='$id'");
   $row=mysqli_fetch_array($tampil);
   $suara=$row['total_suara']+1;
   $sql=mysqli_query($link,"UPDATE suara SET total_suara='$suara' WHERE id_kandidat='$id'");
   if ($sql) {
   	header("location:success.php");
   }else{
   	echo "error".mysqli_error($link);
   	;
   }
?>