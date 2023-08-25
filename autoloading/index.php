<?php

require_once 'App/init.php';

$product1 = new Komik("Negeri di Ujung Tanduk", "Tere Liye", "Gramedia Pustaka Utama", 90000, 100);
$product2 = new Game("Subway Surfes", "Michele Jorg", "Swift", 50000, 50);

$cetakProduct = new CetakInfoProduct();
$cetakProduct->tambahProduct( $product1 );
$cetakProduct->tambahProduct( $product2 );
echo $cetakProduct->cetak();