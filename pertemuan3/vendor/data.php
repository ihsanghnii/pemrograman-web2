<?php
$prodi = [
    "SI" => "Sistem Informasi",
    "TI" => "Teknik Informatika",
    "BD" => "Bisnis Digital",
];

$skills = [
    "HTML" => 10,
    "CSS" => 10,
    "Javascript" => 20,
    "RWD Bootstrap" => 20,
    "PHP" => 30,
    "Python" => 30,
    "Java" => 50
];

$domisili = [
    "Jakarta",
    "Bogor",
    "Depok",
    "Tangerang",
    "Bekasi",
    "Lainnya"
];

$kategori_skills = "";
if ($skor_skills = 0 ) {
    $kategori_skills = "Tidak memadai";
} elseif($skor_skills >= 0 && $skor_skills <= 40) {
    $kategori_skills = "kurang";
} elseif($skor_skills >= 41 && $skor_skills <= 60) {
    $kategori_skills = "cukup";
} elseif($skor_skills >= 61 && $skor_skills <= 100) {
    $kategori_skills = "baik";
} elseif($skor_skills >= 101 && $skor_skills <= 150) {
    $kategori_skills = "sangat baik";
}
?>