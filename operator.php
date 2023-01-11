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
?>