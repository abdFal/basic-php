<?php
$nama = "citra"; // ini adalah global scope

function data(){
    global $nama;
    echo "halo $nama" . PHP_EOL;
    $sekolah = "Jakarta International School"; // ini adalah local scope
    echo $sekolah . PHP_EOL;
}
data();

function increment()
{
static $counter = 1; // static scope
echo "Counter = $counter" . PHP_EOL;
$counter++;
}
increment();
increment();
increment();
?>