 <?php
include 'conn.php';
$id = $_GET['id_mhs'];
$mahasiswa = mysqli_query($conn, "select * from mahasiswa where id_mhs='$id'");
$row       = mysqli_fetch_array($mahasiswa);
//membuat data jurusan menjadi dinamis dalam bentuk array
$jurusan = array('TEKNIK INFORMATIKA','TEKNIK MESIN','TEKNIK KIMIA');
//membuat function untuk set aktif radio button
function active_radio_button($value, $input){
    //apabila value dari radio sma dengan yang diinput 
    $result = $value == $input? 'cheked':'';
    return $result;
}
?>

<!DOCTYPE html>
<html >
<head>
    
    <title>Digit Talent</title>
</head>
<body>
    <form method="post" action="edit.php">
        <input type="hidden" value="<?= $row['id_mhs'];?>" name="id_mhs">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" value="<?php echo htmlentities($row['nim'])?>" name="nim"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" value="<?php echo $row['nama'];?>" name="nama"></td>
            </tr>
            <tr><td> JENIS KELAMIN </td>
            <td>
                <input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button("L", $row['jenis_kelamin'])?>>Laki-Laki
                <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button("P", $row['jenis_kelamin'])?>>Perempuan
            </td>
        </tr>
        <tr>
            <td>JURUSAN </td>
            <td>
                <select name="jurusan" <?php echo $row['jurusan'];?>>
                    <?php
                    foreach ($jurusan as $j){
                        echo "<option value='$j'";
                        echo $row['jurusan']==$j?'selected="selected"':'';
                        echo ">$j <option>";
                    }
                    ?>
                    
                </select>
            </td>
        </tr>
        <tr>
            <td>ALAMAT</td>
            <td>
                <input type="text" value="<?php echo $row['alamat'];?>" name="alamat">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit" value="simpan" >SIMPAN PERUBAHAN</button>
                <button type="submit" href="index.php">Kembali</button>
        </td>
        </tr>
    </table>
</form>

<!-- 
// include 'conn.php';

// if(isset ($_POST['proses'])){
//     $mahasiswa = mysqli_query($conn, "UPDATE mahasiswa SET
//     nim ='$_POST[nim]',
//     nama ='$_POST[nama]',
//     jenis_kelamin ='$_POST[jenis_kelamin]',
//     jurusan ='$_POST[jurusan]',
//     alamat ='$_POST[alamat]'
//     where id_mhs='$_GET[id_mhs]'");
    

//     echo "data barang telah diubah";
// }
?> -->

</body>
</html>
