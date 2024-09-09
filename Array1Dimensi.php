<?php
// Operasi Array 1 Dimensi
$array1_A = [5, 8, 23, 30, 41];
$array1_B = [4, 6, 16, 20, 12];

$sumArray1 = [];
$diffArray1 = [];

// Penjumlahan dan penguragan array 1 dimensi
for ($i =0; $i <count($array1_A); $i++) {
    $sumArray1[] = $array1_A[$i] + $array1_B[$i];
    $diffArray1[] = $array1_A[$i] - $array1_B[$i];
}

// Output Hasil Penjumlahan
echo "Hasil Penjumlahan Array 1 Dimensi: ";
print_r($sumArray1);
echo "<br>Hasil Pengurangan Array 1 Dimensi: ";
print_r($diffArray1);