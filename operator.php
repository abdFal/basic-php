<?php

// operator aritmatika
$a = 30;
$b = 20;
$c = 10;

// penambahan pada variabel
$TotalTambah = $a + $b;         
print("hasil nilai a ditambah nilai b = ");
echo($TotalTambah);
echo("\n");

//pengurangan
define("TOTALKURANG", $a - $c);
print("hasil nilai a dikurang nilai c = ");
echo (TOTALKURANG);
echo("\n");

// perkalian 
define("TOTALKALI", $a * $c);
print("hasil nilai a dikali nilai c = " . TOTALKALI);
echo("\n");

// pembagian
define("TOTALBAGI", $a / $c);   
print("hasil nilai a dibagi nilai c = " . TOTALBAGI);
echo("\n");

// menampilkan nilai negatif
echo(-$TotalTambah);

// operator penugasan
$total = 0;
$apel = 2000;
$jeruk = 5000;
$mangga = 10000;
$bayar = 100000;

$total += $apel;
$total += $jeruk;
$total += $mangga;

$kembali = $bayar - $total;

echo("\nTotal harga " . $total . "\nUang Bayar " . $bayar . "\nUang Kembali " . $kembali . "\n");

// operator perbandingan
$uang = 200;
$jumlah = "200";

var_dump ($uang === $jumlah);
var_dump ($uang !== $jumlah);

//operator logika
var_dump($uang == $jumlah and $jumlah != $uang);
var_dump($uang == $jumlah or $jumlah != $uang);

//operator array
$first = array (
    "first_name" => "Abdillah"
);

$last = array (
    "first_name" => "Muhammad", // tidak akan diganti karna key sudah ada di sebelumnya
    "last_name" => "Naufal"
);
$full = $first + $last;
var_dump($full);


?>