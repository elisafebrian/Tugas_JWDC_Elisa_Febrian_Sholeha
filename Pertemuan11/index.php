<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Didital Talent</title>
</head>
<body>
    <h2> List Mahasiswa </h2>
    <table border="1">
    <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Gender</th>
        <th>Jurusan</th>
        <th>Alamat</th>
        <th>Action</th>
    </tr>
    <?php 
    include 'conn.php';
    $mahasiswa = mysqli_query($conn, "SELECT * from mahasiswa");
    $no=1;
    foreach ($mahasiswa as $row){

        $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki-laki';
        echo "<tr> 
        <td>$no</td>
        <td>" . $row['nim'] . "</td>
        <td>" . $row['nama'] . "</td>
        <td>" . $jenis_kelamin . "</td>
        <td>" . $row['jurusan'] . "</td>
        <td>" . $row['alamat'] . "</td>
        <td><a href='form-edit.php?id_mhs=$row[id_mhs]'>Edit</a>
        <a href='delete.php?id_mhs=$row[id_mhs]'>Hapus</a>
        </td>
        </tr>";
        $no++;
    }
    ?>
</table>
</body>
</html>