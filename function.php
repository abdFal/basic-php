<?php
// Function
function salam(){
    echo "Assalamualaikum" . PHP_EOL;
}
salam();

// Function Argument
function greeting($FirstName , int $class){
    echo "Hai $FirstName kelas $class rpl , Semangat terus yaa" . PHP_EOL;
}
greeting("Naufal", 10);

// latihan
$p = array(
    $name = ["bgas", "aisy", "nadhif"],
    $adress = ["jakarta", "cik", "bekasi"],
    $age = [15,16,17],
    $hobby = ["belajar", "memancing", "membaca"]
);
function DataDiri($nama, $alamat, $umur, $hobi){
    echo "halo nama saya $nama, saya tinggal di $alamat, saya berusia $umur tahun, saya suka $hobi" .PHP_EOL;
}
DataDiri($p[0][2], $p[1][0], $p[2][2], $p[3][1]);

// default argument value
function normal($def = "Yes", $fed = "no"){
    echo "$def or $fed" . PHP_EOL;
}
normal();

// Menentukan Tipe Data
function rate(int $one , int $two){
    $rating = $one + $two;
    echo "Total dari $one + $two adalah $rating" . PHP_EOL;
}
rate(1, 1);

// function return value
function kurang(int $red, int $blue):int
{
    $total = $red - $blue;
    return $total;
}
$hasil = kurang(40, 2);
var_dump($hasil);

// Variable function
function rawr(){
echo "rawr" . PHP_EOL;
}
$panggilRawr = "rawr";
$panggilRawr();
?>