
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Hasil Sementara</h1>
<table>
<thead>
	<th>Nama Kandidat</th>
	<th>Total Suara</th>
</thead>
<tbody>
	<?php
include "koneksi.php";
$sql=mysqli_query($link,"SELECT a.* , b.nama FROM suara as a LEFT JOIN kandidat as b ON a.id_kandidat=b.id");
while ($data=mysqli_fetch_array($sql)) {
?>
<tr>
<td><?php echo $data['nama'];?></td>
<td><?php echo $data['total_suara'];?></td>
</tr>
<?php } ?>
</tbody>	
</table>
</body>
</html>