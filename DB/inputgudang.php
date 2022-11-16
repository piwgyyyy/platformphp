<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "inventaris";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	if (isset($_POST['simpan'])){
		$kode = $_POST['Kode'];
		$nama = $_POST['Nama'];
		$jenis = $_POST['Jenis'];
		$lokasi= $_POST['Lokasi'];
		$harga = $_POST['Harga'];
		$jumlah = $_POST['Jumlah'];

		$sql = "INSERT INTO stok_barang(Kode , Nama, Jenis, Lokasi, Harga, Jumlah) 
		VALUES ('$kode','$nama','$jenis','$lokasi','$harga','$jumlah')";
		$result = mysqli_query($conn, $sql);

		echo 'barang berhasil disimpan';
	}
	if (isset($_POST['update'])){
		$kode = $_POST['Kode'];
		$nama = $_POST['Nama'];
		$jenis = $_POST['Jenis'];
		$lokasi= $_POST['Lokasi'];
		$harga = $_POST['Harga'];
		$jumlah = $_POST['Jumlah'];

		$sql = "UPDATE stok_barang SET Nama='$nama', Jenis='$jenis', 
		Lokasi='$lokasi', Harga='$harga', Jumlah='$jumlah' WHERE Kode='$kode'";
		$result = mysqli_query($conn, $sql);

		echo 'barang berhasil diUpdate';
	}
	if (isset($_POST['hapus'])){
		$kode = $_POST['Kode'];
		$nama = $_POST['Nama'];
		$jenis = $_POST['Jenis'];
		$lokasi= $_POST['Lokasi'];
		$harga = $_POST['Harga'];
		$jumlah = $_POST['Jumlah'];
		
		$sql = "DELETE FROM stok_barang WHERE Kode='$kode'";
		$result = mysqli_query($conn, $sql);

		echo "barang berhasil diHapus";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Toko Kelontong Bahagia</title>
	</head>
	<body>
	<form action="" method="POST">
		<h1>Input Stok Gudang <br> Toko Kelontong Bahagia</h1>
		<table>
			<tr>
				<td> Kode Barang </td>
				<td><input type="text" id="kode-barang" name="Kode" value="P-0" required="required"></td>
				<!-- <td> <input type="text" kode="kode"/></td> -->
			</tr>
			<tr>
				<td> Nama Barang </td>
				<td> <input type="text" id="nama" value="" name="Nama"></td>
			</tr>
			<tr>
				<td> Jenis </td>
				<td> <input type="radio" name="Jenis" value="makanan"> Makanan </td>
			</tr>
			<tr>
				<td></td>
				<td> <input type="radio" name="Jenis" value="non"> Non Makanan </td>
			</tr>
			<tr>
				<td> Lokasi </td>
				<td> <select name="Lokasi">
					<option value="Rak A">Rak A </option>
					<option value="Rak B">Rak B </option>
					<option value="Rak C">Rak C </option>
					<option value="Rak D">Rak D </option>
					<option value="Rak E">Rak E </option>
					</select></td>		
			</tr>
			<tr>
				<td> Harga Satuan </td>
				<td> <input type="text" id="harga" value="" name="Harga"></td>
			</tr>
			<tr>
				<td> Jumlah Stok </td>
				<td> <input type="text" jumlah="jumlah" value="" name="Jumlah"></td>
			</tr>
			<tr> 
				<td> <input type="submit" name="simpan" value="Simpan"/></td>
				<td> <input type="submit" name="hapus" value="Hapus"/></td>
				<td> <input type="submit" name="update" value="Update"/></td>
			</tr>
		</table>
	</form>
	</body>
</html>


	