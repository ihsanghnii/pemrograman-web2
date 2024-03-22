<?php 
class Persegi_Panjang {
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }


    public function getLuas()
    {
        $luas = $this->panjang * $this->lebar;
        return $luas;
    }

    public function getKeliling()
    {
        $keliling = 2 * $this->panjang + 2 * $this->lebar;
        return $keliling;
    }
}

$persegiPanjang = new Persegi_Panjang(20, 20);
echo "luas persegi panjang tersebut adalah " . $persegiPanjang->getluas();
echo "<br>";
echo "keliling persegi panjang tersebut adalah " . $persegiPanjang->getKeliling();
?>