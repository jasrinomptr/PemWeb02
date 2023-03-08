<?php

function hitungUmur($tahunLahir){
    $tahunSekarang = 2023;
    echo $tahunSekarang - $tahunLahir;
}

hitungUmur(2001);
echo "<br>";
hitungUmur(1990);
echo "<br>";
hitungUmur(2003);
echo "<br>";
hitungUmur(1993);
echo "<br>";

function welcome($nama)
{
    echo "Hello, selamat datang $nama !";
}

welcome("Jasrino");