<?php
class Produk{
    public $judul ;
    public $penulis;
    public $penerbit;
    public  $harga;
    public $jmlHalaman;



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
    public function getInfoProduk(){
        //Komik : Naruto | Mashashi Kishimoto, Sonen Jump (Rp. 30000) - 100 Halaman.
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }

}

class Komik extends Produk{
    public $jmlHalaman;

    public function __construct($judul, $penulis, $penerbit, $harga,  $jmlHalaman){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;

    }
    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends  Produk{
    public $waktuMain;
    public function __construct($judul, $penulis, $penerbit, $harga,  $waktuMain){
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;

    }


    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() ." - {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk{
    public  function cetak(Produk $produk){ //di tambahkan Produk di depan parameternya agar hanya yang diinstance di dalam class produk saja yang bisa di terima datanya.
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new Komik("Naruto", "Masahi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Unharted", "Neil Druckman", "Sony Computer", 250000,50);

echo $produk1->getInfoProduk() . "<br>";
echo $produk2->getInfoProduk();




