<?php
// membuat array
$arrayBuah = ["Mangga","Jeruk","Melon","Apel","Sirsak","Anggur","Pear"];

// cara pertama
print_r($arrayBuah);
echo "<br>";

// cara kedua
var_dump($arrayBuah);
echo "<br>";

// cara ketiga
foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}