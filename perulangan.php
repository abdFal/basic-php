<?php
// for (init statement; kondisi; post statement) {blok perulangan}
// Kode perulangan dengan kondisi
$p = 10;
for (; $p >= 4;) {
    echo "Repeat $p" . PHP_EOL;
$p--;
};

// Kode perulangan dengan Post Statement :
for ($c = 4; $c <= 10; $c++){
    echo "Count $c" . PHP_EOL;
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

// Do While Loop
$o = 10;
do {
echo "This is do while $o" . PHP_EOL;
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

for ($call = 1; $call <= 10; $call++) {
    if ($call % 2 !== 0) {   // loop saat kondisi bilangan genap
    continue;
}
    echo "My Num $call" . PHP_EOL;
}

// For Each Loop
$list = [11, 12, 13];
foreach ($list as $list){
    echo "Num $list" . PHP_EOL;
}

//Untuk array assosiatif (Map)
$daftar = [
"first_1" => "Maxmiano",
"second_2" => "Dialovares",
"third_3" => "Rodriguez"
];
foreach ($daftar as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
?>