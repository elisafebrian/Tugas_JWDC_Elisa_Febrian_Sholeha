<?php 
//for
//for($inisialisasi,$kondisi,$i){
for($i=1;$i<=10;$i++){
    echo "perulangan ke".$i."<br>";

}
//inisialisasi
// while 
//while($kondisi){ //statement increment}
$i=0;
while($i<=10){
    echo "perulangaan ke-".$i."<br>";
    $i++;
}

//do while minimal eksekusi perulangan 1
//do{
    //statement
//}while();

$i=0;
do{
    echo("perulangan ke".$i ."<br>");
    $i++;

}while ($i<=10);

//foreach
$nama_mhs=array('ica','fara','indra','krisna','andin');
$nama_mhs[1]="elisa";
echo($nama_mhs[0]);
echo($nama_mhs[3]);

foreach ($nama_mhs as $n){
    echo($n."<br>");
}

?>