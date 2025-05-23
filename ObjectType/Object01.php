<?php

class Produk{
    public $judul,
            $penulis,
            $penerbit,
            $harga;
    
    public function __construct($judul="judul", $penulis="penulis",
    $penerbit="penerbit", $harga=0){

        $this->judul=$judul;
        $this->penulis=$penulis;
        $this->penerbit=$penerbit;
        $this->harga=$harga;
    }

     public function sayHello(){
        return "Hello World!";
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduk{
    public function cetak (Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()}
        (Rp. {$produk->harga})";
        return $str;

    }
}


$produk1 = new Produk("naruto", "Mashasi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
$produk5 = new Produk("Dragon Ball");


echo "Komik : $produk1->penulis, $produk1->penerbit";
echo "<br>";
echo $produk1->sayHello();
echo "<br>";
echo "Komik : " . $produk1->getLabel();

echo "<hr>";
echo "Game : " . $produk2->getLabel();

echo "<hr>";
echo "Default : " . $produk5->getLabel();

echo "<hr>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);




?>