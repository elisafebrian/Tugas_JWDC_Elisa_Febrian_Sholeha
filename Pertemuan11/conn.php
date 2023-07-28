<?php
//mysql procedural yg pak angger


//mysqli OOP
$host="localhost";
$u='root';
$p="";
$d="db_mhs";

// $con=new mysqli($host, $u , $p, "db_peserta");
// if($con->connect_error){
//     die("koneksi gagal".$con->connect_error);
// }
// echo("koneksi berhasil");
$conn = mysqli_connect($host,$u,$p,$d);
?>