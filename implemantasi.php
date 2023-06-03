<?php
//jualan produk
//komik
//game
class Produk{
    public $judul ="tere liye";
    public $penulis = "ikhsan";
    public $penerbit;
    public  $harga;

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}
//$produk1 = new Produk();
//
//$produk1->judul = "naruto";
//$produk1->penulis = "akbar";
//var_dump($produk1);
////output nya akbar karna nilai judul dan penulis di timpa
//echo "<br><br>";
//$produk2 = new Produk();
//$produk2->namapengguna = "akbr";
//var_dump($produk2);
////produk2 tetap mengeluarkan nilai properti default karna tidak menimpa nilainya.


$produk3 = new Produk();
$produk3->judul="Naruto";
$produk3->penulis="Masashi Kishimoto";
$produk3->penerbit ="Shonen Jump";
$produk3->harga = 3000;



echo "<hr>";
$produk4 = new Produk();
$produk4->judul = "avatar";
$produk4->penulis = "akbar";
$produk4->penerbit = "Hollywod";
$produk4->harga = 250000;

echo "Komik : ". $produk3->getLabel();
echo "<br>";
echo "Game : ". $produk4->getLabel();