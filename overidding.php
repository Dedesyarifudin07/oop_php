<?php
//jualan Produk
//print on demand
//makanan

use Produk as GlobalProduk;

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

    public function getInfoProduk()
    {
        $str = "komik , harga:{$this->harga} judul:{$this->judul} penulis:{$this->penulis} ";
        return $str;
    }
}


class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul = "bagong burut", $penulis = "macron", $penerbit = "samrun", $harga = "500000000000", $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        $str = "komik {$this->harga} " . parent::getInfoProduk() . "~ {$this->jmlHalaman} halaman";
        return $str;
    }
}

class Game extends Produk
{
    public $wktuMain;


    public function __construct($judul = "bagong burut", $penulis = "macron", $penerbit = "samrun", $harga = "500000000000", $wktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->wktuMain = $wktuMain;
    }


    public function getInfoProduk()
    {
        $str = "komik  " . parent::getInfoProduk() . " waktumain:{$this->wktuMain}";
        return $str;
    }
}


class CetakProduk
{

    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} || {$produk->penulis} || {$produk->penerbit}";
        return $str;
    }
}


$produk5 = new Komik("Komik", "Dede Syarifudin", "mia kalifa", 24234234234, 14);
$produk6 = new Game("wining Eleven", "Dede syarifudin", "", 2300000, 3443);



echo "</br>";
echo $produk5->getLabel();
echo "</br>";
echo $produk5->getInfoProduk();
echo "</br>";
echo  $produk6->getInfoProduk();
