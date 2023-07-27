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
        $str = "komik , harga:{$this->harga} judul:{$this->judul} penulis:{$this->penulis}";
        return $str;
    }
}


class Komik extends Produk
{
    public function getInfoProduk()
    {
        $str = "komik {$this->harga} ";
        return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "komik , harga:{$this->harga} judul:{$this->judul} penulis:{$this->penulis}";
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

// $produk1 = new Produk();
// $produk1->penerbit = "Dede syarifudin";
// var_dump($produk1);


// $produk2 = new Produk();
// $produk2->penulis = "rUKMLA DEWI";
// $produk2->tambahproperti = "dadsasds";
// $produk2->videofaforit = "dadsasds";
// var_dump($produk2);


$produk3 = new Produk("Dedesyarifudin", "samrun", "ahmad", "120000");
echo "komik" . $produk3->getLabel();
$produk4 = new Produk("taiii");
var_dump($produk4);

echo "</br>";
$cetakInfoProduk = new CetakProduk();
echo $cetakInfoProduk->cetak($produk4);


$produk5 = new Komik("Komik", "Dede Syarifudin", "mia kalifa", 24234234234);
echo "</br>";
echo $produk5->getLabel();
echo "</br>";
echo $produk5->getInfoProduk();



$produk6 = new Game("wining Eleven", "Dede syarifudin", "", 2300000);
echo "</br>";
echo  $produk6->getInfoProduk();
