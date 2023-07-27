<?php 

class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul = "bagong burut", $penulis = "macron", $penerbit = "samrun", $harga = "500000000000", $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    // public function getHarga()
    // {
    //     return $this->harga;
    // }

    public function getInfoProduk()
    {
        $str = "komik {$this->harga} " . parent::getInfoProduk() . "~ {$this->jmlHalaman} halaman";
        return $str;
    }
}
