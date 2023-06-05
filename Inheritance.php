<?php

//inheritance
/*menciptakan herarki antar kelas (Parent dan child)
 * child class, mawarisi semua properti dan method dari parentnya (yang visible)
 * Child Class, Memperluas (extends)  fungsionalitas dari parent-nya
 *
 *
 * Kenapa butuh Inheritance
 *
 */
//jualan produk
//komik
//game
class Produk{
    public $judul ;
    public $penulis;
    public $penerbit;
    public  $harga;
    public $jmlHalaman;
    public $waktuMain;
    public $tipe;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman= $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel(){
        return "$this->penulis, $this->penerbit";
    }
    public function getInfoLengkap(){
        //Komik : Naruto | Mashashi Kishimoto, Sonen Jump (Rp. 30000) - 100 Halaman.
        $str = "{$this->tipe} :{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ($this->tipe == "Komik"){
            $str .= " - {$this->jmlHalaman} Halaman. ";
        }else if ($this->tipe == "Game"){
            $str .= " ~ {$this->waktuMain} Jam. ";
        }

        return $str;
    }

}

class CetakInfoProduk{
    public  function cetak(Produk $produk){ //di tambahkan Produk di depan parameternya agar hanya yang diinstance di dalam class produk saja yang bisa di terima datanya.
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new Produk("Naruto", "Masahi Kishimoto", "Shonen Jump", 30000, 100, 0 , "Komik");
$produk2 = new Produk("Unharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");

/* saya ingin memunculkan
* Komik : Naruto | Mashashi Kishimoto, Sonen Jump (Rp. 30000) - 100 Halaman.
 * Game : Uncharted | Neil Druckmann, Sony Computer (Rp. 250000) ~ 50 Jam.
*/
echo $produk2->getInfoLengkap();

