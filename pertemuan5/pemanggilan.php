<?php
require_once('lingkaran.php');
echo "<br>";
echo "<br>";
require_once('persegiPanjang.php');

echo "<br>";
$lingkaran1 = new Lingkaran(8);

echo "<br>";
echo "luas lingkaran tersebut adalah " . $lingkaran1->luas();
echo "<br>";
$lingkaran1->keliling();
echo "<br>";

$persegiPanjang = new Persegi_Panjang(10, 20);

echo "<br>";
echo "luas persegi panjang tersebut adalah " . $persegiPanjang->getLuas();
echo "<br>";
echo "keliling persegi panjang tersebut adalah " . $persegiPanjang->getkeliling();

?>