<?php
include 'helper/koneksi_db.php';
$no_daftar = $_GET['no_daftar'];
$hasil = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tbl_pendaftaran WHERE no_daftar=$no_daftar"));

$result = mysqli_query($conn, "DELETE FROM tbl_pendaftaran WHERE no_daftar='$no_daftar'");
header('Location: list_siswa.php');