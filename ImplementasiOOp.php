<?php

//class
interface Kendaraan{
    public function maju();
}
class Mobil implements Kendaraan {
    //Atribut/ properties
    public $namaMobil;
    public $platNomor;

    //Method
    public function __construct($nm, $pn)
    {
        $this->namaMobil = $nm;
        $this->platNomor = $pn;
    }

    public function maju(){
        return $this->namaMobil . " dengan Plat Nomor " . $this->platNomor . " telah Maju";
    }
}
class Motor implements Kendaraan {
    //Atribut/ properties
    public $namaMotor;
    public $platNomor;

    //Method
    public function __construct($nm, $pn)
    {
        $this->namaMotor = $nm;
        $this->platNomor = $pn;
    }

    public function maju(){
        return $this->namaMotor . " dengan Plat Nomor " . $this->platNomor . " telah Maju";
    }
}



//object
$avanza = new Mobil('Avanza', 'AD 1234 BC');
$supra = new Motor('Supra', 'B 1234 BC');

//fungsi
function setMaju(Kendaraan $avanza){
    return $avanza->maju();
}

echo setMaju($supra). "\n";
echo setMaju($avanza). "\n";





