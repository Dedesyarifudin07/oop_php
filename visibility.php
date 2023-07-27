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

class Game extends Produk
{
    public $wktuMain;


    public function __construct($judul = "bagong burut", $penulis = "macron", $penerbit = "samrun", $harga = "500000000000", $wktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->wktuMain = $wktuMain;
    }

    // public function getHarga()
    // {
    //     return $this->harga;
    // }

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

$produk4 = new Produk("buku", "asep", "anjay", 200000, 12);
$produk5 = new Komik("Komik", "Dede Syarifudin", "mia kalifa", 50000, 14);
$produk6 = new Game("wining Eleven", "Dede syarifudin", "", 2300000, 3443);



echo "</br>";
echo $produk5->getLabel();
echo "</br>";
echo $produk5->getInfoProduk();
echo "</br>";
echo  $produk6->getInfoProduk();
echo "<hr>";
echo $produk5->judul;
echo "</br>";
echo $produk4->getHarga();
echo "</br>";
echo $produk6->getHarga();
$produk5->setDiskon(90);
echo "</br>";
echo $produk5->getHarga();
