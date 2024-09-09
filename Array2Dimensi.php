<?php
// Operasi Array 2 Dimensi
$array2_A = [
    [5, 14, 25],
    [1, 5, 16],
    [31, 12, 9]
];

$array2_B = [
    [12, 21, 24],
    [3, 7, 21],
    [20, 17, 24]
];

$sumArray2 = [];

// Penjumlahan array 2 dimensi
for ($i = 0; $i < count($array2_A); $i++) {
    for ($j = 0; $j < count($array2_A[$i]); $j++) {
        $sumArray2[$i][$j] = $array2_A[$i][$j] + $array2_B[$i][$j];
    }
}

// Tampilkan hasil penjumlahan array 2 dimensi
echo "Hasil Penjumlahan Array 2 Dimensi: <br>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
foreach ($sumArray2 as $row) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>