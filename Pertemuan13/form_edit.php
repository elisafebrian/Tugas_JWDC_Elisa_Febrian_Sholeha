<?php
include 'helper/koneksi_db.php';
$no_daftar = $_GET['no_daftar'];
$resultpendaftar = mysqli_query($conn, "SELECT * FROM tbl_pendaftaran WHERE no_daftar=$no_daftar");
$data = mysqli_fetch_assoc($resultpendaftar);
//membuat data jurusan menjadi dinamis dalam bentuk array
$agama = array('Islam','Kristen','Hindu','Budha','Protestan');
function active_radio_button($value, $input){
  //apabila value dari radio sma dengan yang diinput 
  $result = $value == $input? 'cheked':'';
  return $result;
}


?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Edit</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
</head>

<body>
<div class="container">
    <h2>Formulir Pendaftaran Siswa Baru</h2>
    <form action="edit.php" method="POST">
    <input type="hidden" value="<?php echo htmlentities($data['no_daftar']) ?>" name="no_daftar">
  <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input class="form-control" type="text" value="<?php echo htmlentities($data['nama']) ?>" name="nama" id="nama" placeholder="masukkan nama lengkap anda" />
      </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
        <input class="form-control" type="text" value="<?php echo $data['alamat']; ?>"  name="alamat" id="alamat" rows="3" placeholder="masukkan alamat anda">
      </div>
      
      <div class="mb-3">
        <label for="gender" class="form-label">Jenis Kelamin</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gender"  value="L" <?php echo active_radio_button("L", $data['gender'])?>>
        <label class="form-check-label" for="gender">
         Laki-Laki
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gender" id="gender"  value="P" <?php echo active_radio_button("P", $data['gender'])?>checked>
        <label class="form-check-label" for="gender">
          Perempuan
        </label>
      </div>
      <div class="mb-2">
      <label for="agama">Agama</label>
      </div>
      <div class="mb-3">
      <select class="form-select" name="agama" <?php echo $data['agama'];?> aria-label="Default select example">
      <?php
                    foreach ($agama as $a){
                        echo "<option value='$a'";
                        echo $data['agama']==$a?'selected="selected"':'';
                        echo ">$a <option>";
                    }
                    ?>
      </select>
      </div>
      <div class="mb-3">
        <label for="sekolah_asal" class="form-label">Asal Sekolah</label>
        <input  class="form-control" type="text" name="sekolah_asal" id="sekolah_asal"  placeholder="masukkan asal sekolah anda"value="<?php echo htmlentities($data['sekolah_asal']) ?>">
      </div><br>
      <button type="submit" class="btn btn-success" name="btn"><i class="fa-regular fa-floppy-disk"></i> Simpan</button>
      <button type="submit" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i><a href="list_siswa.php" style="color:white;"> Kembali</a></button>
  
    </form>
  </div>
</body>

