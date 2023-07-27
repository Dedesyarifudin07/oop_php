<?php 

class CetakProduk
{
    public $daftarProduck = [];

    public function tambahProduck(Produk $produk)
    {
        return $this->daftarProduck[] = $produk;
    }

    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} || {$produk->penulis} || {$produk->penerbit}";
        return $str;
    }
}
