<?php 

class Produk
{
    //property
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit";
    protected   $diskon = 0;

    private $harga = 0;


    public function __construct($judul = "bagong burut", $penulis = "macron", $penerbit = "samrun", $harga = "500000000000")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    //method
    public function getLabel()
    {
        return "$this->penulis,$this->penerbit ,$this->judul,$this->harga";
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getInfoProduk()
    {
        $str = "komik , harga:{$this->harga} judul:{$this->judul} penulis:{$this->penulis} ";
        return $str;
    }
}
