<?php 
if(isset($_POST)){
$alamat = $_POST['alamat'];
$nama = $_POST['nama_pendaftar'];
echo $nama." dan ".$alamat;
}
?>
<form method="post" action="form_pendaftaran.php">
    <label for="nama_pendaftar">Nama anda</label>
    <input type="text" name="nama_pendaftar"><br>
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat"><br>
    <input type="submit" value="kirim">
</form>