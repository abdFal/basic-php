<?php
$isi = null;
echo "Is isi Null? : ";
var_dump(is_null($isi)); // mengecek apakah variabel null
echo "\n";
$contoh = "Aca";
unset($contoh); // unset tidak harus digunakan dalam mengganti suatu variabel
 
$contoh = null;
$contoh = "p";
 
var_dump(isset($contoh)); // mengecek apakah variabel tidak null

?>