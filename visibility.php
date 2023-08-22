<?php

class Product
{
    public $judul, $penulis, $penerbit;

    protected $diskon;
    
    private $harga;

    public function __construct( $judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100);
    }

    public function getLable() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduct() {
        $str = "{$this->judul} | {$this->getLable()} (Rp. {$this->harga})";
        return $str;
    }
}

class Komik extends Product{

    public $jmlhalaman;

    public function __construct( $judul, $penulis, $penerbit, $harga, $jmlhalaman) 
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlhalaman = $jmlhalaman;
    }

       public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getInfoProduct() {
        $str = "Komik : " . parent::getInfoProduct() . " - {$this->jmlhalaman} Halaman.";
        return $str;
    }
}
class Game extends Product{

    public $waktuMain;

    public function __construct( $judul, $penulis, $penerbit, $harga, $waktuMain) 
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduct() {
        $str = "Game : " . parent::getInfoProduct() . " - {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduct {
    public function cetak( Product $product ) {
        $str = "{$product->judul} | {$product->getLable()} (Rp. {$product->harga})";
        return $str;
    }
}

$product1 = new Komik("Negeri di Ujung Tanduk", "Tere Liye", "Gramedia Pustaka Utama", 90000, 100);
$product2 = new Game("Subway Surfes", "Michele Jorg", "Swift", 50000, 50);

echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();
echo "<hr>";

$product1->setDiskon(50);
echo $product1->getHarga();