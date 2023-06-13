<?php
require_once 'App/init.php';
$produk1 = new Komik("Naruto", "Masahi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Unharted", "Neil Druckman", "Sony Computer", 250000,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk2);
$cetakProduk->tambahProduk($produk1);
echo $cetakProduk->cetak();