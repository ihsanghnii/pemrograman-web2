<?php
// variable server
echo $_SERVER['SERVER_NAME'];

echo "<br>";

// variable user (yang variable 1 dan 2 termasuk variable server)
$nama = "Budi";
echo $nama;
echo "<br>";

$nama = "Andi";
echo $nama;

echo "<br>";

// variiable konstanta
define('NAMA', 'Budi');
echo NAMA;

echo "<br>";

const JENIS_KELAMIN = "Laki-Laki"; //digunakan untuk data yang ga pernah berubah
echo JENIS_KELAMIN;

echo "<br>";
// latihan variable
// perhitungan bangun datar
// luas persegi
$sisi = 10;
$luas_persegi = $sisi * $sisi;
echo "Luas Persegi : " . $luas_persegi;

echo "<br>";

// string digabung dengan varaible menggunakan :
echo "Luas Persegi : . $luas_persegi";

echo "<br>";

echo 'luas persegi : $luas_persegi'; //kebaca sebagai variable
?>