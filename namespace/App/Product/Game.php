<?php

class Game extends Product implements InfoProduct{

    public $waktuMain;

    public function __construct( $judul, $penulis, $penerbit, $harga, $waktuMain) 
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduct() {
        $str = "Game : " . $this->getInfo() . " - {$this->waktuMain} Jam.";
        return $str;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLable()} (Rp. {$this->harga})";
        return $str;
    }
}