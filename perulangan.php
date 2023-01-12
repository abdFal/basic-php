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


?>