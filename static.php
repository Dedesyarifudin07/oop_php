<?php
// cara 1
// class ContohStatic
// {
//     public static $angka = 1;

//     public static function halo()
//     {
//         return "bacot kau" . self::$angka++ . "kali";
//     }
// }

// echo ContohStatic::$angka . " <br>";
// echo ContohStatic::halo();
// echo ContohStatic::halo();
// echo ContohStatic::halo();

// :: = digunakan untuk mengakses properti dan method yang ada di class


class Contoh
{
    public static  $angka = 1;

    public static function halo()
    {
        return "hallo " . self::$angka++ . "kali";
    }
}

$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo() . "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo() . "<hr>";
