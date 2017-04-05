<?php 
header('Content-Type: application/json');

include "koneksi.php";

$sql=mysqli_query($link,"SELECT nama from kandidat order by id");
while ($row=mysqli_fetch_array($sql)) {
	 $data[]=$row;
}

$link->close();

print json_encode($data);
?>