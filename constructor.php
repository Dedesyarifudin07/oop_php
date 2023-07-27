<?php
//jualan Produk
//print on demand
//makanan


class Produk
{
    //property
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;


    public function __construct($judul = "bagong burut", $penulis = "macron", $penerbit = "samrun", $harga = "500000000000")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    //method
    public function getLabel()
    {
        return "$this->penulis,$this->penerbit ,$this->judul,$this->harga";
    }
}




$produk3 = new Produk("Dedesyarifudin", "samrun", "ahmad", "120000");
echo "komik" . $produk3->getLabel();
$produk4 = new Produk("taiii");
var_dump($produk4);
