<?php
// membuat array assosiatif
$profileArray = [
    "nama" => "Jasrino Maulana Putra", 
    "kelas" => "SI14"
];

// print_r($profileArray);

$profileMultiArray = [
    [
        'nama' => 'Siti', 
        'kelas' => 'XTKJ2'
    ], [
        'nama' => 'Sri',
        'kelas' => 'XITKR3'
    ], [
        'nama' => 'Ahmad',
        'kelas' => 'XIRPL3'
    ]
    ];

foreach($profileMultiArray as $profile) {
    echo $profile['nama'] . "<br>";
    echo $profile['kelas'] . "<br>";
}