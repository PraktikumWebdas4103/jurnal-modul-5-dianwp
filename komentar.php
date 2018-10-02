<!DOCTYPE html>
<html>
<body>
	<center><h2>Komentar</h2><br>
	<form method="POST">
		<table>
			<tr><input type="text" name="komentar" placeholder="komentar" required></tr><br><br>
			<tr><input type="submit" name="submit" value="hitung kata"></tr><br><br>
		</table>
	</form>
</body>
</html>
	</center>
</form>

<?php
	if(isset($_POST['submit'])){
		$komentar = $_POST['komentar'];
		$hasil = str_word_count($komentar);
			echo "Jumlah kata pada komentar  adalah : $hasil";
	}

?>
