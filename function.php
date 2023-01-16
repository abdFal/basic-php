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
    $name = ["bgas", "aisy", "nadhif", "naufal"],
    $adress = ["jakarta", "cik", "bekasi"],
    $age = [15,16,17],
    $hobby = ["belajar", "memancing", "membaca"]
);
function DataDiri($nama, $alamat, $umur, $hobi = "Berenang"){
    echo "halo nama saya $nama, saya tinggal di $alamat, saya berusia $umur tahun, saya suka $hobi" .PHP_EOL;
}
DataDiri($p[0][3], $p[1][0], $p[2][0],);

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
    $totalKurang = $red - $blue;
    $totalKurangtambah = $totalKurang + $red;
    return $totalKurangtambah;
}
$hasil = kurang(40, 21);
var_dump($hasil);

// Variable function
function SayHello($friend){
    echo "Hello $friend" . PHP_EOL;
}

function SayHi(){
    echo "Hi" . PHP_EOL;
}
$greet = "SayHi";
$greet();
SayHello("Arianna");

// Function Built In
//untuk menampilkan waktu (hari, tanggal bulan tahun)
date_default_timezone_set("Asia/jakarta") . PHP_EOL;
echo date("l", strtotime("16 jan 2023")) . PHP_EOL;
echo date("d m Y") . PHP_EOL;
echo date("H:i") . PHP_EOL;

?>