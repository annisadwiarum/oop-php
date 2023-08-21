<?php

class Product
{
    public $judul, $penulis, $penerbit, $harga;

    public function __construct( $judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLable() {
        return "$this->penulis, $this->penerbit";
    }
}

$product1 = new Product("Naruto", "Masashi Kishimoto", "Shueisha", 30000);

$product2 = new Product("Negeri di Ujung Tanduk", "Tere Liye", "Gramedia Pustaka Utama", 90000);

echo "Komik : " . $product1->getLable();
echo "<br>";
echo "Novel : " . $product2->getLable();
