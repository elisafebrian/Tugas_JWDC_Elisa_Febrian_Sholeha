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
  <title>Form Pendaftaran</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
</head>

<body>
  <div class="container">
    <h2>Formulir Pendaftaran Siswa Baru</h2>
    <form action="form_daftar.php" method="POST">
  <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input class="form-control" type="text" name="nama" id="nama" placeholder="masukkan nama lengkap anda" />
      </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="masukkan alamat anda"></textarea>
      </div>
      <div class="mb-3">
        <label for="gender" class="form-label">Jenis Kelamin</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gender" value="L">
        <label class="form-check-label" for="gender">
         Laki-Laki
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gender" value="P" checked>
        <label class="form-check-label" for="gender">
          Perempuan
        </label>
      </div>
      <div class="mb-2">
      <label for="agama">Agama</label>
      </div>
      <div class="mb-3">
      <select class="form-select" name="agama" aria-label="Default select example">
        <option selected>Pilih Agama</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
        <option value="Protestan">Protestan</option>
      </select>
      </div>
      <div class="mb-3">
        <label for="sekolah_asal" class="form-label">Asal Sekolah</label>
        <input  class="form-control" type="text" name="sekolah_asal" id="sekolah_asal"  placeholder="masukkan asal sekolah anda">
      </div><br>
      <button type="submit" class="btn btn-success" name="btn"><i class="fa-regular fa-floppy-disk"></i> Simpan</button>
      <button type="submit" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i><a href="index.php" style="color:white;"> Kembali</a></button>
     
      <!-- <div class="container-box">
        <label for="nama">Nama</label>
        <input class="container-input" type="text" name="nama" id="nama" placeholder="masukkan nama lengkap" />
      </div> -->
      <!-- <br>
      <div class="container-box">
        <label for="alamat">Alamat</label>
        <input class="container-input" type="text" name="alamat" id="alamat" placeholder="masukkan alamat" />
      </div>
      <br> -->
      <!-- <div>
        <label for="gender">Jenis kelamin</label>
        <input type="radio" name="gender" value="L"> Laki-Laki
        <input type="radio" name="gender" value="P"> Perempuan
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
      <input type="submit" value="submit"> -->
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
