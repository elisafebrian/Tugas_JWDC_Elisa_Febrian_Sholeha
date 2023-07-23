<?php
include 'helper/koneksi_db.php';

$q="SELECT * FROM tbl_pendaftaran";
$hasil=mysqli_query($conn,$q);

//jumlah data pada tabel
$jumlah=mysqli_num_rows($hasil);

?>
<h3>Siswa yang sudah mendaftar</h3>
<a href="form_daftar.php">[+]Tambah Baru</a>
<a href="index.php">[x]Kembali</a>
<table border="1">
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
   

    if($jumlah > 0) {
        while($baris=mysqli_fetch_assoc($hasil)){
            echo("<tr>
            <td>".htmlspecialchars($baris['no_daftar'])."</td>
            <td>".$baris['nama']."</td>
            <td>".htmlspecialchars($baris['alamat'])."</td>
            <td>".htmlspecialchars($baris['gender'])."</td>
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

</table>

Total =<?php echo($jumlah)?>