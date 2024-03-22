<?php 
class Lingkaran {
    public $jarijari;
    const PHI = 3.14;

    public function __construct($jari)
    {
        $this->jarijari = $jari;
    }

    public function luas()
    {
        $luas = self::PHI * $this->jarijari * $this->jarijari;
        return $luas;
    }

    public function keliling()
    {
        $keliling = 2 * self::PHI *$this->jarijari;
        echo "Keliling dari lingkaran dengan jari-jari " . $this->jarijari . " adalah $keliling";
    }
}

$lingkaran1 = new Lingkaran(28);
echo "luas dari lingkaran tersebut adalah " . $lingkaran1->luas();
echo "<br>";
$lingkaran1->keliling();

?>