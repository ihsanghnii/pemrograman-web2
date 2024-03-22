<?php 
class Mahasiswa {
    public $nim;
    public $name;
    public $prodi;
    public $tahunAngkatan;

    public function __construct($nim, $name, $prodi, $tahunAngkatan)
    {
        $this->nim = $nim;
        $this->name = $name;
        $this->prodi = $prodi;
        $this->tahunAngkatan = $tahunAngkatan;
    }

    public function getInfo()
    {
        echo "NIM mahasiswa : " . $this->nim . "<br>";
        echo "Nama mahasiswa : " . $this->name . "<br>";
        echo "Program studi mahasiswa : " . $this->prodi . "<br>";
        echo "Tahun angkatan mahasiswa : " . $this->tahunAngkatan . "<br>";
    }

}

// $mahasiswa1 = new Mahasiswa("0110223191", "Ihsan Ghani", "Teknik Informatika", 2023);
// $mahasiswa1->getInfo();
?>