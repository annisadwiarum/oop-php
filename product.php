<?php

class Product
{
    //property
    public $judul, $penulis, $penerbit, $harga;

    public function getLable() {
        return "$this->penulis, $this->penerbit";
    }
}


//membuat object instance dari class Product

$product1 = new Product();
$product1->judul = "Naruto";
$product1->penulis = "Masashi Kishimoto";
$product1->penerbit = "Shueisha";
$product1->harga = 30000;

$product2 = new Product();
$product2->judul = "Negeri di Ujung Tanduk";
$product2->penulis = "Tere Liye";
$product2->penerbit = "Gramedia Pustaka Utama";
$product2->harga = 90000;

// var_dump($produk1);
// echo "Komik : $product1->judul, $product1->penerbit...";
// echo "<br>";

echo "Komik : " . $product1->getLable();
echo "<br>";
echo "Novel : " . $product2->getLable();
