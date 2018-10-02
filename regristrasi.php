<!DOCTYPE html>
<html>
<body>
	<center><h2>User Sign Up</h2><br>
	<form method="POST">
		<table>
			<tr><input type="int" name="nim" placeholder="nim" maxlength="10" minlength="10" required></tr><br><br>
			<tr><input type="text" name="nama" placeholder="nama" maxlength="25" required></tr><br><br>
			<tr><input type="email" name="email" value="@gmail.com" required></tr><br><br>
			<tr><input type="submit" name="submit" value="kirim">
		</table>
	</form>
</body>
</html>
		
<?php 
$servername 	= "localhost"; 
$nim 	= "root";
$nama ="";
$db 	= "dataMhs";
 
$koneksi= new mysqli($servername, $nim, $nama, $db) ; 
if($koneksi ==false){
	die("koneksi gagal :". $koneksi->koneksi_error);
}
if(isset($_POST['submit'])){
	$nim = $_POST['nim'];
	$nama =$_POST['nama'];
	$email =$_POST['email'];
	$masuk = "INSERT INTO mhs (nim, nama, email) VALUES ('$nim','$nama','$email')";
	if (mysqli_query($koneksi,$masuk)){
		echo "<center> Registrasi berhasil</center>";
	}else{
		echo "Error";
	}
	}
?>
