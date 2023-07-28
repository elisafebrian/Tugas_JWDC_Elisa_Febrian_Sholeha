<?php 
//tipe array
$arr_mahasiswa = array('andi','elisa');
$arr_guru=['ilham','fara',123,14527,2466];

$arr_anggota[0]='andin';
$arr_anggota[1]='budi';

echo $arr_guru[0]."<br>";
echo $arr_guru[1]."<br>";
//menampilkan seluruh array
print_r($arr_guru);

for($i=0;$i<count($arr_guru);$i++){
    echo $arr_guru[$i].'<br>';
}

foreach ($arr_guru as $guru){
    echo $guru."<br>";
}

//mengisi array
$arr_anggota[0]='andin';
$arr_anggota[1]='budi';
//menambah array
$arr_anggota[2]='ahmad';
$arr_anggota[]='ica';
//menghapus array
unset($arr_anggota[0]);
print_r($arr_anggota);

//array asosiatif yaitu array yang tdak menggunakan nomor
$artikel=[
    'Judul' => "Belajar PHP",
    "Penulis" => "Digital Telent"
];
echo "<h3>".$artikel['Judul']."</h2>";
$artikel[] = "penerbit andi";
print_r($artikel);

//array multidimensi biasanya digunakan untuk matrik dan sbg
$gambar3x3=[
    [2,3,4],
    [7,5,0],
    [4,3,8]
];
//menampiilkan nilai 7
echo '<br>'. $gambar3x3[1][0];
?>