<?php

$jawaban=true;
//if membuat struktur prcabangan berdasarkan kondisi yang
//ada  di dalam kurung
//kontrol program if
if($jawaban){ //ekspresi berupa bolean karena ada true dan false
    //statement yang akan dilakukan
    echo "selamat jawaban anda benar";

}else{
    echo "maaf jawaban anda salah";;

}
$nilai = 80;
if($nilai > 85){
    $index='A';
}elseif($nilai>=70){
    $index='B';
}elseif($nilai >= 50){
    $index='C';
} else {
    $index='D';
}

//switch digunakan kontrol program banyak seekali. kekurangannya hanya dapat membandingkan variabel tunggal 
$plat_nomor ='AB':

switch($plat_nomor){
    case "AB"://statemen ketika variabel bernilai AB
    echo("Yogyakarta");
    break;
    case "AD" :
        echo "Surakarta";
        break;
        case "BE" :
            echo "Lampung";
            break;
            default :
            echo "plat nomor tidak diketahui";
            break;

}
?>