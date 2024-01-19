<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hasil</title>
</head>

<body>
	<!-- Awal jumbotron -->
	<section id="jumbotron">
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<?php

				$nilai1 = $_POST['nilai1'];
				$nilai2 = $_POST['nilai2'];
				$pilih = $_POST['pilih'];


				if ($pilih == "+") {
					$hasil = $nilai1 + $nilai2;
					echo "<h1>jawaban</h1>";
				} elseif ($pilih == "-") {
					$hasil = $nilai1 - $nilai2;
					echo "<h1>jawaban</h1>";
				} elseif ($pilih == "*") {
					$hasil = $nilai1 * $nilai2;
					echo "<h1>jawaban</h1>";
				} elseif ($pilih == ":") {
					$hasil = $nilai1 / $nilai2;
					echo "<h1>jawaban</h1>";
				}

				include "koneksi.php";

				$query = "INSERT INTO hitung (nilai_1, nilai_2, pilih, hasil) VALUES ('$nilai1','$nilai2','$pilih','$hasil')";

				$masuk = mysqli_query($koneksi, $query);
				?>
				<h1 class="display-3 center "><?php echo "<br>" . $nilai1 . " $pilih " . $nilai2 . " = " . $hasil; ?></h1><br>
				<div>
					<br>
					<a href="index.php?page=home"><button type="button" class="btn btn-primary btn-lg btn-block">Kembali</button></a>
				</div>
			</div>
		</div>
	</section>
	<!-- Akhir Jumbotron -->
</body>

</html>