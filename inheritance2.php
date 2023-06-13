<?php
class Produk{
    public $judul ;
    public $penulis;
    public $penerbit;
    public  $harga;
    public $jmlHalaman;
    public $waktuMain;


    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain,)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman= $jmlHalaman;
        $this->waktuMain = $waktuMain;

    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
    public function getInfoProduk(){
        //Komik : Naruto | Mashashi Kishimoto, Sonen Jump (Rp. 30000) - 100 Halaman.
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

}

class Komik extends Produk{
    public function getInfoProduk()
    {
        $str = "Komik :{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends  Produk{
    public function getInfoProduk()
    {
        $str = "Game :{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk{
    public  function cetak(Produk $produk){ //di tambahkan Produk di depan parameternya agar hanya yang diinstance di dalam class produk saja yang bisa di terima datanya.
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new Komik("Naruto", "Masahi Kishimoto", "Shonen Jump", 30000, 100, 0 );
$produk2 = new Game("Unharted", "Neil Druckman", "Sony Computer", 250000, 0, 50);

echo $produk1->getInfoProduk() . "<br>";
echo $produk2->getInfoProduk();




