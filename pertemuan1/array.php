<?php

// ada 2 cara

// cara 1
$ar_array = array("Budi", "Andi", "Caca");

// cara 2
$ar_array2 = ["Budi", "Andi", "Caca"];

//buat panggil semua
print_r($ar_array);

echo "<br>";

// panggil satu-satu
echo $ar_array[1];

echo "<br>";

// panggil secara keseluruhan
// ada 2 metode

//metode 1
foreach ($ar_array as $key => $value) {
    echo $key . "=>" . $value . "<br>";
}

// metode 2
foreach ($ar_array2 as $row) {
    echo $row[0] . "<br>";
}

echo "jumlah data dalam array adalah " . count($ar_array);

echo "<br>";

// menambahkan array
$ar_array[] = "Dedi";
// unset($ar_array[1]);  // unset buat menghapus
print_r($ar_array);

echo "<br>";

sort($ar_array); // sort buat mengurutkan sesuai dengan abjad
print_r($ar_array);

echo "<br>";

array_pop($ar_array); // pop untuk menghapus array yang ada dibagian akhir
print_r($ar_array);

echo "<br>";

/* jika menambahkan indeks 5 
$ar_array[5] = "Dedi";
print_r($ar_array); */

// menambahkan array menggunakan push
array_push($ar_array, "Lia");
print_r($ar_array);

// function shift untuk menghapaus value array yang pertama
echo "<br>";
array_shift($ar_array);
print_r($ar_array);

echo "<br>";

// function unshift untuk menambahkan value array yang pertama
array_unshift($ar_array, "Wafi");
print_r($ar_array);

//array data (array associative)
$buah_buahan = [
    "apel" => "merah",
    "jeruk" => "orange",
    "nanas" => "kuning"
];

echo "<br>";

foreach ($buah_buahan as $key => $value) {
    echo $key . "=>" . $value . "<br>";
}

echo "<br>";

// yang tampil warnanya aja
foreach ($buah_buahan as $buah) {
    echo $buah . "<br>";
}

// array multidimention
$siswa= [
    [
        "nama" => "budi",
        "kelas" => "XII",
        "alamat" => "jakarta"
    ],
    [
        "nama" => "andi",
        "kelas" => "XII",
        "alamat" => "jakarta"
    ],
    [
        "nama" => "caca",
        "kelas" => "XII",
        "alamat" => "jakarta"
    ]
];
echo "<br>";
foreach ($siswa as $row) {
    echo "nama : " . $row['nama'] . "<br>";
    echo "kelas : " . $row['kelas'] . "<br>";
    echo "alamat : " . $row['alamat'] . "<br>";
    echo "<br>";
}
?>