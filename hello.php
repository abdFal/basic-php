<?php
//test
echo "Hello,\tWelcome \n";

// tipe data Number
var_dump(5);
var_dump(5.20);
var_dump(false);

// tipe data String
var_dump("String");
var_dump("123");    //akan tetap dibaca string

//heredoc
echo <<<contoh
Salah satu hal yang dapat disyukuri di tahun 2022 adalah, dapat mengikuti MIT (Mentor Intensive Training) yang diselengarakan oleh SkilvulAda beberapa materi yang dibahas, diantaranya Salah satu hal yang dapat disyukuri di tahun 2022 adalah, dapat mengikuti MIT (Mentor Intensive Training)\n
contoh;

// tipe data null
$name = "nofal";
$name = null;   //updating variable
echo "name : ";
print $name;

// unset dan isset
$isi = null;
echo "Is isi Null? : ";
var_dump(is_null($isi)); // mengecek apakah variabel null
echo "\n";
$contoh = "Aca";
unset($contoh); // menghapus data variabel
 
$contoh = null;
var_dump(isset($contoh)); // mengecek apakah variabel tidak null

// deklarasi array numerik
$judul = ["RDKL ", "Alhadiid"];
$nomor = array(10, 5, 72);
$nomor[2] = 71; // mengubah data array dengan nomor index
unset($nomor[1]); // menghapus data array dengan nomor index
print ($judul[0]);
print ($nomor[2]);
$judul[] = " Jakarta"; // menambah array
print ($judul[2]);
echo "\n";

// deklarasi array assosiatif (map)
$perumahan = 
array(
    "id" => "7",                    // id adalah key dan 7 adalah value
    "nama" => "Citra Indah City \n",   
);
echo ($perumahan["nama"]);

// deklarasi array didalam array
$sekolah = array(
    "id" => "2",
    "nama" => "SMA PKP Jakarta ",
    "alamat" => array(                  // membuat array baru didalam array
        "kecamatan" => "Kelapa dua wetan",
        "propinsi" => "Jakarta Raya"
    )
);
echo ($sekolah["nama"]);
echo ($sekolah["alamat"]["kecamatan"]); // memanggil array dalam array

?>

