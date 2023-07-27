b<?php
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

        //methoed
        public function getLabel()
        {
            return "$this->penulis,$this->penerbit";
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


    $produk3 = new Produk();
    $produk3->judul = "cars3";
    $produk3->penulis = "Ahmad subardjo";
    $produk3->penerbit = "soekarno";
    $produk3->harga = 100000;

    echo "komik:" . $produk3->judul;
    echo "</br>";
    echo  "penerbit:" . $produk3->penulis;
    echo "</br>";
    echo "harga" . $produk3->harga;
    echo "</br>";
    echo $produk3->getLabel();
    echo "</br>";

    $produk4 = new Produk();
    echo "komik" . $produk4->getLabel();
