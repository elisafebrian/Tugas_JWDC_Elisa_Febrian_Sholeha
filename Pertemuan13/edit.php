<?php
include 'helper/koneksi_db.php';
//menyimpan data kedalam variabel
$no_daftar        = $_POST['no_daftar'];
$nama             = $_POST['nama'];
$alamat           = $_POST['alamat'];
$gender           = $_POST['gender'];
$agama            = $_POST['agama'];
$sekolah_asal     = $_POST['sekolah_asal'];

//query sql untuk insert data
$query="UPDATE tbl_pendaftaran SET nama ='$nama' ,alamat='$alamat' ,gender='$gender',agama='$agama',sekolah_asal='$sekolah_asal'
where no_daftar='$no_daftar'";
mysqli_query($conn,$query);
//mengalihkan ke halaman index.php
header("location:list_siswa.php");
?>