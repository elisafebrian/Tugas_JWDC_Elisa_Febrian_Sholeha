<?php
// Start the session
session_start();
?>
<html>
<head>
    <title>PHP Form Validasi</title>
</head>
<body>
    <h1>Membuat Form Validasi</h1>
    <!-- Ini process -->
    <!-- <?php
        // if(isset($_GET['nama']) && $_GET['nama'] == 'kosong'){
        //     echo "<h4 style='color:red'> Nama belum diisi!</h4>";
        // } else if(isset($_GET['alamat']) && $_GET['alamat'] == 'kosong'){
        //     echo "<h4 style='color:red'> Alamat belum diisi!</h4>";
        // } else if(isset($_GET['tempat']) && $_GET['tempat'] == 'kosong'){
        //     echo "<h4 style='color:red'> Tempat lahir belum diisi!</h4>";
        // } else if(isset($_GET['gender']) && $_GET['gender'] == 'kosong'){
        //     echo "<h4 style='color:red'> Jenis Kelamin belum diisi!</h4>";
        // } else if(isset($_GET['usia']) && $_GET['usia'] == 'kosong'){
        //     echo "<h4 style='color:red'> Usia belum diisi!</h4>";
        // }
    ?> -->

    <!-- Ini ui form -->
    <h4>Masukkan nama anda:</h4>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php if(isset($_SESSION['nama'])){echo $_SESSION['nama'];} ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php if(isset($_SESSION['alamat'])){echo $_SESSION['alamat'];} ?>"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempat" value="<?php if(isset($_SESSION['tempat'])){echo $_SESSION['tempat'];} ?>"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="text" name="gender" value="<?php if(isset($_SESSION['gender'])){echo $_SESSION['gender'];} ?>"></td>
            </tr>
            <tr>
                <td>Usia</td>
                <td><input type="number" name="usia" value="<?php if(isset($_SESSION['usia'])){echo $_SESSION['usia'];} ?>"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="simpan" name="proses"></td>
            </tr>
        </table>
    </form>
    <?php
    include "koneksi.php";
    if(isset($_POST['proses'])){
        mysqli_query($koneksi,"insert into siswa set
        nama = '$_POST[nama]',
        alamat = '$_POST[alamat]',
        tempat ='$_POST[tempat]',
        gender ='$_POST[gender]',
        usia ='$_POST[usia]',");

        echo "data telah tersimpan";
    }
    ?>

</body>

</html>