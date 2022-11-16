<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Seminar</title>
</head>
<body>
	<?php  
		if (isset($_COOKIE['counter'])) {
			$c = $_COOKIE['counter'];
			$c = $c+1;
			setcookie("counter", $c);
			echo "<h1>ANDA SUDAH TERDAFTAR SEBAGAI PESERTA SEMINAR</h1>";
			echo '<table border="1">';
			echo '<tr>';
			echo '<td>';
			echo 'No Induk';
			echo '</td>';
			echo '<td>';
			echo $_COOKIE['nim'];
			echo '</td>';
			echo '</tr><tr>';
			echo '<td>';
			echo 'Nama';
			echo '</td>';
			echo '<td>';
			echo $_COOKIE['nama'];
			echo '</td>';
			echo '</tr><tr>';
			echo '<td>';
			echo 'Status';
			echo '</td>';
			echo '<td>';
			echo $_COOKIE['status'];
			echo '</td>';
			echo '</tr><tr>';
			echo '<td>';
			echo 'Minat';
			echo '</td>';
			echo '<td>';
			echo $_COOKIE['minat'];
			echo '</td>';
			echo '</tr>';
			echo '';
			echo '</table>';
		}else{
			echo '<h1>PENDAFTARAN PESERTA SEMINAR</h1>';
			echo '<form action="tugas2.php" method="POST">';
			echo '<table>';
			echo '<tr>';
			echo '<td>';
			echo '<label for="nim">No Induk</label>';
			echo '</td>';
			echo '<td>';
			echo '<input type="text" name="nim">';
			echo '</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td>';
			echo '<label for="nama">Nama</label>';
			echo '</td>';
			echo '<td>';
			echo '<input type="text" name="nama">';
			echo '</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td rowspan="2">';
			echo '<label for="status">Status</label>';
			echo '</td>';
			echo '<td>';
			echo '<input type="radio" name="status" value="Dosen">Dosen';
			echo '</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td>';
			echo '<input type="radio" name="status" value="Mahasiswa">Mahasiswa';
			echo '</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td rowspan="4">';
			echo '<label for="minat">Minat</label>';
			echo '</td>';
			echo '<td>';
			echo '<input type="checkbox" name="minat[]" value="Programming">Programming';
			echo '</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td>';
			echo '<input type="checkbox" name="minat[]" value="Database">Database';
			echo '</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td>';
			echo '<input type="checkbox" name="minat[]" value="Networking">Networking';
			echo '</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td>';
			echo '<input type="checkbox" name="minat[]" value="Multimedia">Multimedia';
			echo '</td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td>';
			echo '';
			echo '</td>';
			echo '<td>';
			echo '<input type="submit" name="submit" value="Daftar">';
			echo '</td>';
			echo '</tr>';
			echo '';
			echo '</table>';
			echo '</form>';
		}
	?>
</body>
</html>