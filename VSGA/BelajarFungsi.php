<?php

function perkenalan() {
    //intruksi
    echo "selamat datang, ";
    echo("Pada Acara Digitalent");
    echo '2023</br>';
}
//memanggi fungsi
perkenalan();

function perkenalan_input($nama,$salam){
    echo "<hr>";
    echo $salam.",";
    echo "perkenalan , nama saya ".$nama."<br>";
    echo "Senang berkenalan dengan anda";
}
perkenalan_input(nama:"elisa",salam:"hallo dek");
$nama="ica";
$salam="selamat siang";
perkenalan_input($nama,$salam);
perkenalan_input($nama="tono",$salam="pagi");

function hitung_umur($tahun_lahir,$tahun_sekarang=2023){
    $umur= $tahun_lahir-$tahun_sekarang;
    return $umur;

}
echo ("\n umur saya ".hitung_umur(tahun_lahir: 2003))

?>