<?php 
class Fruit {
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function getinfo()
    {
        echo "Buah $this->name ini berwarna $this->color <br>";
    }
}

class Price extends Fruit {
    public $price;
    public $weight;

    public function __construct($name, $color, $price, $weight)
    {
        parent::__construct($name, $color);
        $this->price = $price;
        $this->weight = $weight;
    }

    public function getPrice(){
        $this->getinfo();
        echo "harga buahnya $this->price <br>";
        echo "berat buahnya $this->weight";
    }
}

$semangka = new Fruit("Mangga", "Hijau");
// $semangka->getinfo();

$mangga = new Price("Mangga", "merah", 15000, "1 kg");
$mangga->getPrice();
// $mangga->getinfo();
?>