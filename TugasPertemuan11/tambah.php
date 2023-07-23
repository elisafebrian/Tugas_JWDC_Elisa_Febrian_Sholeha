<?php 
include 'koneksi.php';
if(isset($_POST['nomor'])){
    $nomor=mysqli_real_escape_string($conn,$_POST['nomor']);
    $nama_merek=mysqli_real_escape_string($conn,$_POST['nama_merek']);
    $warna=mysqli_real_escape_string($conn,$_POST['warna']);
    $jumlah=mysqli_real_escape_string($conn,$_POST['jumlah']);
    

    
    $query_insert = "INSERT INTO barang(nomor,nama_merek,warna,jumlah) 
    values ('".$nomor."','".$nama_merek."','".$warna."','".$jumlah."')";

    $hasil=mysqli_query($conn,$query_insert);
    if($hasil){
        header("location:index.php?=status=sukses");

    }

}
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Tambah Data</title>
    <link rel="stylesheet" href="tampilan.css" />
  </head>
  <body>
    <div class="container">
      <form class="container-form1"action="tambah.php" method="post">
        <h2>Tambah Data Barang</h2>
        <div class="container-box">
          <label for="nomor">No</label>
          <input  type="text" name="nomor" id="nomor" />
        </div>
        <div class="container-box">
          <label for="nama_merek">Nama Merek</label>
          <input class="containerna" type="text" name="nama_merek" id="nama_merek" />
        </div>
        <div class="container-box">
          <label for="warna">Warna</label>
          <input class="containerwa" type="text" name="warna" id="warna" />
        </div>
        <div class="container-box">
          <label for="jumlah">jumlah</label>
          <input class="containerju" type="text" name="jumlah" id="jumlah" />
        </div>
        <input type="submit" value="Simpan" />
      </form>
      <form action="tambah.php">
        <input type="submit" value="Ulangi" />
      </form>
      <form action="index.php">
        <input type="submit" value="Kembali" />
      </form>
    </div>
  </body>
</html>