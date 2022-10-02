<!DOCTYPE html>
<html>
	<head>
		<title>Form-HTML</title>
	</head>
	<body>
		<h2>Element Form HTML 5</h2>
		<form name="fmhs" action ="proses.php" method="post">
			<table>
				<tr>
					<td>Nim</td>
					<td><input type="number" name="fnim" required></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="fnama" required></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>
						<input type="radio" id="laki" name="fav_language" value="Laki-Laki">
						<label for="laki">Laki-Laki</label>
						<input type="radio" id="perempuan" name="fav_language" value="Perempuan">
						<label for="perempuan">Perempuan</label>
					</td>
				</tr>
				<tr>
					<td>Tgl Lhr</td>
					<td><input type="date" name="ftgllhr" required></td>
				</tr>
				<tr>
					<td>Program Studi</td>
					<td>
						<select name="fprodi" required>
							<option value="">: Pilih Prodi</option>
							<option value="A11">S1 - Teknik Informatika</option>
							<option value="A12">S1 - Sstem Informasi</option>
							<option value="A13">D3 - Teknik Informatika</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Hobby</td>
					<td>
						<input type="checkbox" name="fhobby1" value="11">
						<label for="fhobby1">Web Programming<br>
						<input type="checkbox" name="fhobby2" value="12">
						<label for="fhobby2">Mobile Programming<br>
						<input type="checkbox" name="fhobby3" value="13">
						<label for="fhobby3">Data Science<br>
					</td>
				</tr>
				<tr>
					<td>File KTP</td>
					<td>
						<label for="fktp"></label>
						<input type="file" id="fktp" name="fktp" required>
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="fsubmit"></td>
				</tr>
			</table>
		</form>
	</body>
</html>