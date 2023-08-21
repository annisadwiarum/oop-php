<?php

class Product
{
    public $judul, $penulis, $penerbit, $harga, $jmlhalaman, $waktuMain;

    public function __construct( $judul, $penulis, $penerbit, $harga, $jmlhalaman, $waktuMain)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlhalaman = $jmlhalaman;
        $this->waktuMain = $waktuMain;
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
    public function getInfoProduct() {
        $str = "Komik : {$this->judul}, | {$this->getLable()}, (Rp. {$this->harga}) - {$this->jmlhalaman} Halaman.";
        return $str;
    }
}
class Game extends Product{
    public function getInfoProduct() {
        $str = "Game : . {$this->judul}, | {$this->getLable()}, (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduct {
    public function cetak( Product $product ) {
        $str = "{$product->judul} | {$product->getLable()} (Rp. {$product->harga})";
        return $str;
    }
}

$product1 = new Komik("Negeri di Ujung Tanduk", "Tere Liye", "Gramedia Pustaka Utama", 90000, 100, 0);
$product2 = new Game("Subway Surfes", "Michele Jorg", "Swift", 50000, 0, 50);

echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();