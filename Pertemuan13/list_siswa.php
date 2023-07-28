<?php
include 'helper/koneksi_db.php';

$q="SELECT * FROM tbl_pendaftaran";
$hasil=mysqli_query($conn,$q);

//jumlah data pada tabel
$jumlah=mysqli_num_rows($hasil);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Siswa</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" />
</head>
<body>
    <div class="container">
<h3>Siswa yang sudah mendaftar</h3>
<button type="button" class="btn btn-primary" ><a href="form_daftar.php" style="color: white;" >+ Tambah data</a></button>
<button type="button" class="btn btn-secondary" ><a href="index.php" style="color: white;"> Kembali </a></button>

<table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Agama</th>
      <th scope="col">Asal Sekolah</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
   

   if($jumlah > 0) {
       while($baris=mysqli_fetch_assoc($hasil)){

           $gender = $baris['gender'] == 'P' ? 'Perempuan' : 'Laki-laki';
           echo("<tr>
           <td>".htmlspecialchars($baris['no_daftar'])."</td>
           <td>".$baris['nama']."</td>
           <td>".htmlspecialchars($baris['alamat'])."</td>
           <td>" . $gender . "</td>
           <td>".htmlspecialchars($baris['agama'])."</td>
           <td>".htmlspecialchars($baris['sekolah_asal'])."</td>
           <td><a href='form_edit.php?no_daftar=$baris[no_daftar]'>Edit</a>
       <a href='hapus.php?no_daftar=$baris[no_daftar]'>Hapus</a>
       </td>
           </tr>"
       );

       }
   } 
   
   ?>
    </tr>
    
</body>
</html>


  </tbody>
</table>
<!-- <table border="1">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Jenis Kelamin</td>
        <td>Agama</td>
        <td>Asal Sekolah</td>
        <td>Aksi</td>
    </tr>
     <?php
   

    // if($jumlah > 0) {
    //     while($baris=mysqli_fetch_assoc($hasil)){

    //         $gender = $baris['gender'] == 'P' ? 'Perempuan' : 'Laki-laki';
    //         echo("<tr>
    //         <td>".htmlspecialchars($baris['no_daftar'])."</td>
    //         <td>".$baris['nama']."</td>
    //         <td>".htmlspecialchars($baris['alamat'])."</td>
    //         <td>" . $gender . "</td>
    //         <td>".htmlspecialchars($baris['agama'])."</td>
    //         <td>".htmlspecialchars($baris['sekolah_asal'])."</td>
    //         <td><a href='form_edit.php?no_daftar=$baris[no_daftar]'>Edit</a>
    //     <a href='hapus.php?no_daftar=$baris[no_daftar]'>Hapus</a>
    //     </td>
    //         </tr>"
    //     );

    //     }
    // } 
    
    ?> -->

</table> 

Total =<?php echo($jumlah)?>
<?php
mysqli_close($conn);
?>