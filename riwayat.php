<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>riwayat</title>
</head>
<body>
	<style type="text/css">
		table,th,td{
			
			margin: auto;
			background-color: white;
			padding: 20px;
			font-size: 20px;

			
		}
		table,th{
			background-color: red;
		}

		h1{
			padding-top: 200px;
		}
		a{
			color:red;
		}
	</style>
	<h1 align="center">Riwayat</h1>
	<table>
		<tr>
			<th>No</th>
			<th>Nilai 1</th>
			<th>Nilai 2</th>
			<th>Operator</th>
			<th>Hasil</th>
			<th>Hapus</th>
		</tr>
	

<?php 

include "koneksi.php";

$no=1;
$query = "SELECT * FROM hitung";


$masuk = mysqli_query($koneksi,$query);

while ($data=mysqli_fetch_array($masuk)) {
	?>
	<tr>
		<td><?php echo $no++ ?></td>
		<td><?php echo $data['nilai_1'] ?></td>
		<td><?php echo $data['nilai_2'] ?></td>
		<td><?php echo $data['pilih'] ?></td>
		<td><?php echo $data['hasil'] ?></td>
		<td align="center"><a href="riwayat.php?kode=<?php echo $data['id']?>">X</a></td>
	</tr>
<?php } ?>
</table>
</body>
</html>

<?php
if(isset($_GET['kode'])){
	mysqli_query($koneksi,"delete  from hitung where id='$_GET[kode]'");
    header("location:index.php?page=riwayat");
}

?>