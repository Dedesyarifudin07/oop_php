<?php 


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
