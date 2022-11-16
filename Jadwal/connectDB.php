<!-- mysqli_query($conn, $sql);
 
    echo "data telah disimpan";
}
if(isset($_POST['update'])){
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $dosen = $_POST['nados'];
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];
 
    //  sql to update
    $sql = "UPDATE table_jadwal SET kode='$kode',matkul='$nama',kelas='$kelas',dosen='$dosen',hari='$hari',jam='$jam' WHERE kode='$kode'";
 
    mysqli_query($conn, $sql);
 
    echo "Data telah di update";
}
if(isset($_POST['delete'])){
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $dosen = $_POST['nados'];
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];
 
    //  sql to update
    $sql = "DELETE FROM table_jadwal WHERE kode='$kode'";
 
    mysqli_query($conn, $sql);
 
    echo "data dihapus";
}
$conn->close(); -->