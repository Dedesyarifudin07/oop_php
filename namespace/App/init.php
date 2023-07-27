<?php


spl_autoload_register(function ($class) {
    //App\produk/User = [App,produk,User];
    $class = explode('\\', $class);
    //mengambil element terakhir dari array
    $class = end($class);
    require_once 'produk/' . $class . '.php';
});

spl_autoload_register(function ($class) {
    //App\produk/User = [App,produk,User];
    $class = explode('\\', $class);
    //mengambil element terakhir dari array
    $class = end($class);
    require_once 'services/' . $class . '.php';
});
