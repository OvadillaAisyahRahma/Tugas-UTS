<?php
include "koneksi.php";

$id = $_POST['id_033'];
$nama = $_POST['nama_033'];
$email = $_POST['email_033'];

$sql = "UPDATE tbl_033 set nama_033='$nama', email_033='$email' WHERE id_033=$id";
$hasil = mysqli_query($koneksi, $sql);
if (!$hasil){
    echo "eksekusi update data mahasiswa gagal";
}
else{
    echo "eksekusi update data mahsiswa berhasil <br>";
    echo "<a href = 'data.php'>Show Data </a>";
}

?> 