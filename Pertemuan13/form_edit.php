<?php
include 'helper/koneksi_db.php';
$no_daftar = $_GET['no_daftar'];
$resultpendaftar = mysqli_query($conn, "SELECT * FROM tbl_pendaftaran WHERE no_daftar=$no_daftar");
$data = mysqli_fetch_assoc($resultpendaftar);

function active_radio_button($value,$input){
    // apabila value dari radio sama dengan yang di input
    $result= $value==$input?'cheked':'';
    return $result;
}
//membuat data jurusan menjadi dinamis dalam bentuk array
$agama = array('Islam','Kristen','Hindu','Budha','Protestan');

if($data==null){
    echo('data tidak ada');
    die();
}
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Edit</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="container">
    <h2>Form Edit Pendaftaran</h2>
    <form action="edit.php" method="post">
    <input type="hidden" value="<?php echo htmlentities($data['no_daftar']) ?>" name="no_daftar">
      <div class="container-box">
        <label for="nama">Nama</label>
        <input class="container-input" type="text"  value="<?php echo htmlentities($data['nama']) ?>" name="nama" id="nama" placeholder="nama lengkap" />
      </div>
      <br>
      <div class="container-box">
        <label for="alamat">Alamat</label>
        <input class="container-input" type="text" value="<?php echo $data['alamat']; ?>" name="alamat" id="alamat" />
      </div>
      <br>
      <div>
        <label for="gender">Jenis kelamin</label>
        <input type="radio" name="gender" value="L" <?php echo active_radio_button("L", $data['gender'])?>> Laki-Laki
        <input type="radio" name="gender" value="P" <?php echo active_radio_button("P", $data['gender'])?>> Perempuan
      </div>
      <br>
      <div class="container-box">
        <label>Agama </label>
        <select name="agama" <?php echo $data['agama'];?>>
        <?php
                    foreach ($agama as $a){
                        echo "<option value='$a'";
                        echo $data['agama']==$a?'selected="selected"':'';
                        echo ">$a <option>";
                    }
                    ?>
        </select>
      </div>
      <br>
      <div class="container-box">
        <label for="sekolah_asal">Sekolah Asal</label>
        <input class="container-input" type="text" name="sekolah_asal" id="sekolah_asal" placeholder="sekolah asal" value="<?php echo htmlentities($data['sekolah_asal']) ?>"/>
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

