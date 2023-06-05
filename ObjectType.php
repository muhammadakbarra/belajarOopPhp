<?php
//jualan produk
//komik
//game
class Produk{
    public $judul ;
    public $penulis;
    public $penerbit;
    public  $harga;

    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }

}

class CetakInfoProduk{
    public  function cetak(Produk $produk){ //di tambahkan Produk di depan parameternya agar hanya yang diinstance di dalam class produk saja yang bisa di terima datanya.
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new Produk("Naruto", "Masahi Kishimoto", "Shonen Jump", 30000);




echo "<hr>";
$produk2 = new Produk("Unharted", "Neil Druckman", "Sony Computer", 250000);


echo "Komik : ". $produk1->getLabel();
echo "<br>";
echo "Game : ". $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);