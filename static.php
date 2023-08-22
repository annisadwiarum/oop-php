<?php

class ContohStatic {
    public static $angka = 1;

    public static function halo() {
        return "halo" . self::$angka++ . " kali. <br>";
    }
}

 echo ContohStatic::$angka;
 echo "<br>";
 echo ContohStatic::halo();
 echo '<hr>';
 echo ContohStatic::halo();
 echo ContohStatic::halo();


// nilai static akan selalu tetap meskipun objek di instansiasi berulang kali
// class Contoh {
//     public static $angka = 1;

//     public function halo() {
//         return "halo " . self::$angka++ . "kali. <br>";
//     }
// }

// $obj = new Contoh;
// echo $obj->halo();
// echo $obj->halo();
// echo $obj->halo();

// echo "<hr>";

// $obj2 = new Contoh;
// echo $obj2->halo();
// echo $obj2->halo();
// echo $obj2->halo();
