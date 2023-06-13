<?php

//visibity/ access modifier
//1. public dapat digunakan di mana saja, bahkan di luar kelas
//2. protected, hanya dapat digunakan di dalam sebuah kelas beserta turunanya
//3. private, hanya dapat digunakan di dalam sebuah kelas tertentu saja
 abstract class Produk{
    private $judul ;
    private $penulis;
    private $penerbit;
    private  $harga;
    private $diskon = 0;




    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }

    public function setJudul($judul){
        $this->judul = $judul;
    }

    public function setPenulis ($penulis){
        $this->penulis = $penulis;
    }

    public function setPenerbit ($penerbit){
        $this->penerbit = $penerbit;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function getPenulis(){
        return $this->penulis;
    }
    public  function getPenerbit(){
        return $this->penerbit;
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon/100);
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
    abstract public function getInfoProduk();

    public function getInfo() {

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
        $str = "Komik : " . $this->getInfo() ." - {$this->jmlHalaman} Halaman.";
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
        $str = "Game : " . $this->getInfo() ." - {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk{
    public $daftarProduk = array();
    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] = $produk;
    }
    public  function cetak(){
        $str = "Daftar produk: <br>";
        foreach ($this->daftarProduk as $p){
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}



$produk1 = new Komik("Naruto", "Masahi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Unharted", "Neil Druckman", "Sony Computer", 250000,50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk2);
$cetakProduk->tambahProduk($produk1);
echo $cetakProduk->cetak();






