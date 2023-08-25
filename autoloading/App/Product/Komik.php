<?php

class Komik extends Product implements InfoProduct{

    public $jmlhalaman;

    public function __construct( $judul, $penulis, $penerbit, $harga, $jmlhalaman) 
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlhalaman = $jmlhalaman;
    }

    public function getInfoProduct() {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlhalaman} Halaman.";
        return $str;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLable()} (Rp. {$this->harga})";
        return $str;
    }
}