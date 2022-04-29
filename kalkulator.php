
<title>Kalkulator ERI</title>
<!-- awal form -->
<div class="container mb-4"> 
<section class="form">
	<center>
	<form action="index.php?page=hasil" method="post">
		<div class="row mb-3">
			<div class="col">
			<h1 class="fw-bold">Kangkulator Eri</h1>
			</div>
		</div>
		
		<table class="fs-3">
			<tr>
				<td>Nilai 1</td>
				<td><input type="number" name="nilai1" id="nilai"></td>
			</tr>
			<tr>
				<td>Nilai 2</td>
				<td><input type="number" name="nilai2" id="nilai"></td>
			</tr>
			<tr>
				<td>Operator</td>
				<td><select name="pilih">
					<option value="+">Tambah (+)</option>
					<option value="-">Kurang (-)</option>
					<option value="*">Kali (x)</option>
					<option value=":">Bagi (:)</option>
				</select></td>
			</tr>
			<td colspan="2" align="center">
			<button type="submit" value="proses" name="hitung" class="btn btn-primary">Hitung</button>
		<button type="reset" value="RESET" class="btn btn-warning">Batal</button></td>
				</table>
		
	</form>
	</center>
	</section>
	</div>
</div>
<!-- Akhir form -->