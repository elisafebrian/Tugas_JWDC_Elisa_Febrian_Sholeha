<?php
include 'conn.php';
//menyimpan data kedalam variabel
$id_mhs        = $_POST['id_mhs'];
$nim           = $_POST['nim'];
$nama          = $_POST['nama'];
$jurusan       = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat        = $_POST['alamat'];

//query sql untuk insert data
$query="UPDATE mahasiswa SET nim='$nim' ,nama ='$nama' ,jurusan='$jurusan' ,jenis_kelamin='$jenis_kelamin' ,alamat='$alamat'
where id_mhs='$id_mhs'";
mysqli_query($conn,$query);
//mengalihkan ke halaman index.php
header("location:index.php");
?>