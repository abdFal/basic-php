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
Salah satu hal yang dapat disyukuri di tahun 2022 adalah, dapat mengikuti MIT (Mentor Intensive Training) yang diselenggarakan oleh Skilvul. Ada beberapa materi yang dibahas, diantaranya Salah satu hal yang dapat disyukuri di tahun 2022 adalah, dapat mengikuti MIT (Mentor Intensive Training)\n
contoh;

// tipe data null
$name = "nofal";
$name = null;   //updating variable
echo "name : ";
print $name;
?>