<?php
// for (init statement; kondisi; post statement) {blok perulangan}
// Kode perulangan dengan kondisi
$p = 10;
for (; $p >= 4;) {
    echo "Ulangi $p" . PHP_EOL;
$p--;
};

// Kode perulangan dengan Post Statement :
for ($c = 4; $c <= 10; $c++){
    echo "Hitung $c" . PHP_EOL;
}

// Alternatif Loop
for ($counter = 1; $counter <= 5; $counter++):
    echo "for loop $counter" . PHP_EOL;
endfor;
for ($counter = 5; $counter >= 1; $counter--):
    echo "for loop $counter" . PHP_EOL;
endfor;

// While Loop
$r = 17;
while ($r >= 7){
    print "While Looping" . $r .PHP_EOL;
    $r--;
}

// While Loop
$o = 10;
do {
echo "Ini adalah do while ke-$o" . PHP_EOL;
$o++;
} while ($o <= 20);

// Break and Continue
$u = 1;
while(true){
    echo "break $u". PHP_EOL;
    $u++;
    if($u > 5){
        break;      // memberhentikan loop saat kondisi terjadi
    }};

for ($counter = 1; $counter <= 10; $counter++) {
    if ($counter % 2 !== 0) {   // loop saat kondisi bilangan genap
    continue;
}
    echo "Angka $counter" . PHP_EOL;
}

// For Each Loop
$list = [11, 12, 13];
foreach ($list as $list){
    echo "Num $list" . PHP_EOL;
}

//Untuk array assosiatif (Map)
$daftar = [
"absen_1" => "Maxmiano",
"absen_2" => "Dialovares",
"absen_3" => "Rodriguez"
];
foreach ($daftar as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
?>