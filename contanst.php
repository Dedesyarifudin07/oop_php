<?php

// define("NAMA", "Dede Syarifudin");

// echo NAMA . "<br>";

// const UMUR = 18;
// echo UMUR;


class Coba
{
    const NAMA = "Dede Syarifudin";
    const UMUR = 18;

    public static function getNama()
    {
        return "hallo nama saya " . self::NAMA . " <br> Umur Saya" . self::UMUR . " Tahun";
    }
}

echo Coba::NAMA . "<br>";
echo Coba::getNama();
