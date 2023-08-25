<?php

// require_once 'Product/InfoProduct.php';
// require_once 'Product/Product.php';
// require_once 'Product/Komik.php';
// require_once 'Product/Game.php';
// require_once 'Product/CetakInfoProduct.php';

spl_autoload_register(function($class) {
    $class = explode('\\', $class); //pemisah elemen di array dengan pemisah tertentu
    $class = end($class); //memanggil elemen terakhir di dalam array $class yaitu User
    require_once __DIR__ . '/Product/' . $class . '.php';
});

spl_autoload_register(function($class) {
    $class = explode('\\', $class); //pemisah elemen di array dengan pemisah tertentu
    $class = end($class); //memanggil elemen terakhir di dalam array $class yaitu User
    require_once __DIR__ . '/Service/' . $class . '.php';
});