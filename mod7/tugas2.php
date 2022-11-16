<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		echo "<h1>PENDAFTARAN BERHASIL</h1>";
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		if (!empty($_POST['status'])) {
			$status = $_POST['status'];
		}		
		$temp = "";
		if(isset($_POST['submit'])){
			if(!empty($_POST['minat'])){
				for ($i=0; $i < count($_POST['minat']); $i++) {
					$temp .= ($_POST['minat'][$i] . ", ");
				}
			}
		}
		setcookie("counter", "0");
		setcookie("nim", $nim);
		setcookie("nama", $nama);
		setcookie("status", $status);
		setcookie("minat", $temp);
	?>	
</body>
</html>
