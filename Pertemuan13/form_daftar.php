<?php 
include 'helper/koneksi_db.php';
if(isset($_POST['nama'])){
    $nama=mysqli_real_escape_string($conn,$_POST['nama']);
    $alamat=mysqli_real_escape_string($conn,$_POST['alamat']);
    $gender=mysqli_real_escape_string($conn,$_POST['gender']);
    $agama=mysqli_real_escape_string($conn,$_POST['agama']);
    $sekolah_asal=mysqli_real_escape_string($conn,$_POST['sekolah_asal']);

    
    $query_insert = "INSERT INTO tbl_pendaftaran(nama,alamat,gender,agama,sekolah_asal) 
    values ('".$nama."','".$alamat."','".$gender."','".$agama."','".$sekolah_asal."')";

    $hasil=mysqli_query($conn,$query_insert);
    if($hasil){
        header("location:index.php?=status=sukses");

    }

}


?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="container">
    <h2>Formulir Pendaftaran Siswa Baru</h2>
    <form action="form_daftar.php" method="post">
      <div class="container-box">
        <label for="nama">Nama</label>
        <input class="container-input" type="text" name="nama" id="nama" placeholder="masukkan nama lengkap" />
      </div>
      <br>
      <div class="container-box">
        <label for="alamat">Alamat</label>
        <input class="container-input" type="text" name="alamat" id="alamat" placeholder="masukkan alamat" />
      </div>
      <br>
      <div>
        <label for="gender">Jenis kelamin</label>
        <input type="radio" name="gender" value="laki-laki"> Laki-Laki
        <input type="radio" name="gender" value="perempuan"> Perempuan
      </div>
      <br>
      <div class="container-box">
      <label for="agama">Agama</label>
        <select name="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Protestan">Protestan</option>
        </select><br>
      </div>
      <br>
      <div class="container-box">
        <label for="sekolah_asal">Sekolah Asal</label>
        <input class="container-input" type="text" name="sekolah_asal" id="sekolah_asal" placeholder="masukkan asal sekolah" />
      </div>
      <br>
      <input type="submit" value="submit">
      <!-- <input type="text" onclick="send()" name="" id=""> -->
      <!-- <script>
        function send() {
          alert("Data Dimasukkan");
        }
      </script> -->
    </form>
  </div>
</body>

</html>
