<?php

class Product
{
    //property
    public $judul, $penulis, $penerbit, $harga;
}

//membuat object instance dari class Product

$product1 = new Product();
$product1->judul = "Naruto";
$product1->penulis = "Masashi Kishimoto";
$product1->penerbit = "Shueisha";
$product1->harga = 100000;

// var_dump($produk1);
echo "Komik : $product1->judul, $product1->penerbit...";
