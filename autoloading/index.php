<?php
require_once 'App/init.php';

$produk4 = new Produk("buku", "asep", "anjay", 200000, 12);
$produk5 = new Komik("Komik", "Dede Syarifudin", "mia kalifa", 50000, 14);
$produk6 = new Game("wining Eleven", "Dede syarifudin", "", 2300000, 3443);


echo $produk4->getHarga();
