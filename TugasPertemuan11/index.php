<?php
include 'koneksi.php';

$q="SELECT * FROM barang";
$hasil=mysqli_query($conn,$q);

//jumlah data pada tabel
$jumlah=mysqli_num_rows($hasil);

?>
<h3>Daftar Barang</h3>
<a href="tambah.php">[+]Tambah Baru</a>
<table border="1">
    <tr>
        <td><b>NO</b></td>
        <td><b>NAMA MEREK</b></td>
        <td><b>WARNA</b></td>
        <td><b>JUMLAH</b></td>
    </tr>
    <?php
   

    if($jumlah > 0) {
        while($baris=mysqli_fetch_assoc($hasil)){
            echo("<tr>
            <td>".htmlspecialchars($baris['nomor'])."</td>
            <td>".htmlspecialchars($baris['nama_merek'])."</td>
            <td>".htmlspecialchars($baris['warna'])."</td>
            <td>".htmlspecialchars($baris['jumlah'])."</td>
            </tr>"
        );

        }
    } 
    
    ?>

</table>

Total =<?php echo($jumlah)?>