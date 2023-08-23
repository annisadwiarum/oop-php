<?php

abstract class Product
{
    private $judul, $penulis, $penerbit, $harga;

    protected $diskon;
    
    public function __construct( $judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul( $judul ) {
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis( $penulis ) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit( $penerbit ) {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setHarga( $harga ) {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100);
    }

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function getLable() {
        return "$this->penulis, $this->penerbit";
    }

   //method abstrak
    abstract public function getInfoProduct(); 
   
   public function getInfo(){
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

    public function getInfoProduct() {
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlhalaman} Halaman.";
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
        $str = "Game : " . $this->getInfo() . " - {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduct {
    public $daftarProduct = array();

    public function tambahProduct( Product $product ) {
        $this->daftarProduct[] = $product;
    }

    public function cetak() {
        $str = "DAFTAR PRODUCT : <br>";

        foreach( $this->daftarProduct as $p ) {
            $str .= "- {$p->getInfoProduct()} <br>";
        }
        return $str;
    }
}

$product1 = new Komik("Negeri di Ujung Tanduk", "Tere Liye", "Gramedia Pustaka Utama", 90000, 100);
$product2 = new Game("Subway Surfes", "Michele Jorg", "Swift", 50000, 50);

$cetakProduct = new CetakInfoProduct();
$cetakProduct->tambahProduct( $product1 );
$cetakProduct->tambahProduct( $product2 );
echo $cetakProduct->cetak();

