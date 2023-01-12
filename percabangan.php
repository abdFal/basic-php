<?php
// if else statement
$nilai_a = 50;
$nilai_b = 80;

if ($nilai_a >= 85 or $nilai_b >= 80){
    echo "kamu lulus dengan nilai a" . PHP_EOL;
}
elseif (($nilai_a < 85 and $nilai_a >=70 ) or ($nilai_b < 80 and $nilai_b >= 70)){
    echo "kamu lulus dengan nilai b" . PHP_EOL;
}
elseif (($nilai_a < 70 and $nilai_a >=60 ) or ($nilai_b < 75 and $nilai_b >= 60)){
    echo "kamu lulus dengan nilai c" . PHP_EOL;
}
else{
    echo "kamu tidak lulus" . PHP_EOL;
};

// Switch Statement
$predikat = "Z";        

// menentukan apakah dia BISA / ADA
switch($predikat):      
    case "A":
        echo "Anda lulus dengan sangat bisa" . PHP_EOL;
        break;
    case "B" :
        echo "Anda lulus dengan predikat bisa" . PHP_EOL;
        break;
    case "C" :
        echo "Anda lulus dengan predikat lumayan" . PHP_EOL;
        break;
    case "D" :
        echo "Anda lulus dengan predikat cukup" . PHP_EOL;
        break;
    default:
        echo "ADA" . PHP_EOL;
    endswitch;

// Ternary Operator
$s = "datang";
$greeting = $s == "datang" ? "Welcome!" : "Goodbye!";
echo $greeting . PHP_EOL;

// Null Coalescing Operator
$n = [
    "value" => null
];
$value = $n ["value"] ?? "Nothing";
echo $value;
?>